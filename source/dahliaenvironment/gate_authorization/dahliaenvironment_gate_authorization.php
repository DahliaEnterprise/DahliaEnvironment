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
        echo $phone_number."<br/>".$password_as_hash;
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
                $random_string_as_random_integer_with_timestamp = time();
                $random_string_as_random_integer_with_timestamp_as_hash = hash("sha256", $random_string_as_random_integer_with_timestamp);

                //Prepare results as variables to clear input as passed-as-parameter
                $timestamp = time();
                $temporary_constant_sms_code = 123456;
                $sms_code_as_hash = hash("sha256", $timestamp.$temporary_constant_sms_code);


            $query_as_string_create_transaction_for_tracking_status = "INSERT INTO `transactions_of_session_authorization_regarding_create_session` (`client_credentials_id`, `sha256_regarding_session_authorization_code_to_create_session`, `sha256_session_identification`, `timestamp`) VALUES(?, ?, ?, ?);";
            $stmt2 = $database_connection_handle->prepare($query_as_string_create_transaction_for_tracking_status);
            $stmt2->bindParam(1, $output["id"], PDO::PARAM_INT);
            $stmt2->bindParam(2, $sms_code_as_hash, PDO::PARAM_STR);
            $stmt2->bindParam(3, $random_string_as_random_integer_with_timestamp_as_hash, PDO::PARAM_STR);
            $stmt2->bindParam(4, $timestamp, PDO::PARAM_INT);
            $stmt2->execute();

            $output["session_token"] = $random_string_as_random_integer_with_timestamp_as_hash;

        }

        return $output;
    }

}
?>
