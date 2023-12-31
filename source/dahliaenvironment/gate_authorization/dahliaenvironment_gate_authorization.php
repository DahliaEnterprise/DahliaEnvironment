<?php
class dahliaenvironment_gate_authorization
{

    function authorize_for_stream($database_name, $database_username, $database_password, $database_host, $database_table_name, $phone_number, $password)
    {
        $output = [];
        $output["client_found"] = -1;
        $output["id"] = -1;

        //hash password
        $password_as_hash = hash("sha256", $password);
        $database_connection_handle = new PDO("mysql:host=".$database_host.";dbname=".$database_name.";", $database_username, $database_password);
        $query_as_string_find_phonenumber_pair_match = "SELECT `id` FROM ".$database_table_name." WHERE `phonenumber` = ? AND `password` = ? LIMIT 0,1";
        $stmt = $database_connection_handle->prepare($query_as_string_find_phonenumber_pair_match);
        $stmt->bindParam(1, $phone_number, PDO::PARAM_STR);
        $stmt->bindParam(2, $password_as_hash, PDO::PARAM_STR);
        $stmt->execute();

        $fetched_row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($fetched_row != false)
        {
            //define output information
            $output["client_found"] = 1;
            $output["id"] = (int)$fetched_row["id"];

            //create a transaction to allow tracking the status and continue with authentication progress
                //Create random string
                $random_string_as_random_integer = random_int(1000, PHP_INT_MAX);
                $random_string_as_random_integer_with_timestamp = $random_string_as_random_integer.time();
                $random_string_as_random_integer_with_timestamp_with_client_id = $random_string_as_random_integer_with_timestamp.$fetched_row["id"];
                $random_string_as_random_integer_with_timestamp_as_hash = hash("sha256", $random_string_as_random_integer_with_timestamp_with_client_id);

                $random_string_as_random_integer_second = random_int(1000, PHP_INT_MAX);
                $random_string_as_random_integer_with_timestamp_second = $random_string_as_random_integer_second.time();
                $random_string_as_random_integer_with_timestamp_with_client_id_second = $random_string_as_random_integer_with_timestamp_second.$fetched_row["id"];
                $random_string_as_random_integer_with_timestamp_as_hash_second = hash("sha256", $random_string_as_random_integer_with_timestamp_with_client_id_second);

                //Prepare results as variables to clear input as passed-as-parameter
                $timestamp = time();
                $temporary_constant_sms_code = 123456;
                $sms_code_as_hash = hash("sha256", $timestamp.$temporary_constant_sms_code);


            $query_as_string_create_transaction_for_tracking_status = "INSERT INTO `transactions_of_session_authorization_regarding_create_session` (`client_credentials_id`, `sha256_regarding_session_authorization_code_to_create_session`, `sha256_session_identification`, `sha256_session_identification_second`, `timestamp`) VALUES(?, ?, ?, ?, ?);";
            $stmt2 = $database_connection_handle->prepare($query_as_string_create_transaction_for_tracking_status);
            $stmt2->bindParam(1, $output["id"], PDO::PARAM_INT);
            $stmt2->bindParam(2, $sms_code_as_hash, PDO::PARAM_STR);
            $stmt2->bindParam(3, $random_string_as_random_integer_with_timestamp_as_hash, PDO::PARAM_STR);
            $stmt2->bindParam(4, $random_string_as_random_integer_with_timestamp_as_hash_second, PDO::PARAM_STR);
            $stmt2->bindParam(5, $timestamp, PDO::PARAM_INT);
            $stmt2->execute();

            $output["session_token"] = $random_string_as_random_integer_with_timestamp_as_hash;
            $output["session_token_second"] = $random_string_as_random_integer_with_timestamp_as_hash_second;

        }

        return $output;
    }

    function finalize_gate_authorization($database_name, $database_username, $database_password, $database_host, $database_table_name, $smscode_hashed_by_client, $sha256_session_identification, $sha256_session_identification_second)
    {

        //TEMPORARILY hashed by server
        $smscode_hashed_by_client = hash("sha256", $smscode_hashed_by_client);

        $database_connection_handle = new PDO("mysql:host=".$database_host.";dbname=".$database_name.";", $database_username, $database_password);

        $query_as_string_match_identification = "SELECT `id`, `sha256_regarding_session_authorization_code_to_create_session`, `timestamp` FROM `transactions_of_session_authorization_regarding_create_session` WHERE `sha256_session_identification` = ? AND `sha256_session_identification_second` = ? LIMIT 0,1";
        $stmt = $database_connection_handle->prepare($query_as_string_match_identification);
        $stmt->bindParam(1, $sha256_session_identification, PDO::PARAM_STR);
        $stmt->bindParam(2, $sha256_session_identification_second, PDO::PARAM_STR);
        $stmt->execute();

        $fetched_row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($fetched_row != false)
        {
            $sha256_of_hashed_smscode = $fetched_row["sha256_regarding_session_authorization_code_to_create_session"];
            $user_input_sha256_hashed_smscode = hash("sha256", $fetched_row["timestamp"].intval($smscode_hashed_by_client));
            if(hash_equals($sha256_of_hashed_smscode, $user_input_sha256_hashed_smscode) == true)
            {
                return $fetched_row["id"];
            }else{
                return -1;
            }


        }else{
            //return nothing found
            return -1;
        }
    }
}
?>
