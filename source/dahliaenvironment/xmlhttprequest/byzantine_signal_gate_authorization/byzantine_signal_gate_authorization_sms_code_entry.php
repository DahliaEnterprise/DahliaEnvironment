<?php

//Include the dahlia environment
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");

//Include database connection information
include("/var/www/html/dahliaenvironment/include_configuration/database/dahliaenvironment_include_configuration_database_newssite.php");

//Major Goal One: Authorize based on information given, expecting code given through sms text messaging
    //Sanatize information given
    $information_given = [];
    $information_given["gate_authorization_transaction_identification_code"] = $_GET["transaction_identification_code"];
    $information_given["gate_authorization_transaction_identification_code_second"] = $_GET["transaction_identification_code_second"];
    $information_given["sms_code"] = hash("sha256", $_GET["smscode"]);

    //Create a new gate authorization object
    $gate_authorization = new dahliaenvironment_gate_authorization();
    var_dump($gate_authorization->finalize_gate_authorization($dahliaenvironment_database["database_name"], $dahliaenvironment_database["database_username"] , $dahliaenvironment_database["database_password"] , $dahliaenvironment_database["database_host"], "transactions_of_session_authorization_regarding_create_session", $information_given["sms_code"], $information_given["gate_authorization_transaction_identification_code"], $information_given["gate_authorization_transaction_identification_code_second"]));




    //Create a new gate authorization object
    //$gate_authorization = new dahliaenvironment_gate_authorization();

    //Using the transaction_identification_code determine if the sms code is a match
    //$gate_authorization->
    /*
    //create a new gate authorization object
    $gate_authorization = new dahliaenvironment_gate_authorization();

    //Commit: Authorization
    $result = $gate_authorization->authorize_for_stream($dahliaenvironment_database["database_name"], $dahliaenvironment_database["database_username"], $dahliaenvironment_database["database_password"], $dahliaenvironment_database["database_host"], "client_credentials", $information_given["phonenumber"], $information_given["password"]);
    echo json_encode($result);
    */

?>
