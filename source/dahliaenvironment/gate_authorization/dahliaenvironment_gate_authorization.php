<?php
class dahliaenvironment_gate_authorization
{

    function authorize_for_stream($database_name, $database_username, $database_password, $database_host, $database_table_name, $phone_number, $password)
    {
        $database_connection_handle = new PDO("mysql:host=localhost;dbname=".$database_name.";", $database_username, $database_password);
        $query_as_string = "SELECT `id` FROM ".$database_table_name." WHERE `phonenumber` = ? AND `password` = ? LIMIT 0,1";
        $stmt = $database_connection_handle->prepare($query_as_string);
        $stmt->bindParam(1, $phone_number, PDO::PARAM_INT);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->execute();
        var_dump($stmt->fetch(PDO::FETCH_ASSOC));

    }
}
?>
