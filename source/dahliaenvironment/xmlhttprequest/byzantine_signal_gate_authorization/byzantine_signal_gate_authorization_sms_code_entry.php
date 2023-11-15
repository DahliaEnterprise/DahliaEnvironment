<?php

//Include the dahlia environment
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");

//Include database connection information
include("/var/www/html/dahliaenvironment/include_configuration/database/dahliaenvironment_include_configuration_database_newssite.php");

//Major Goal One: Authorize based on information given, expecting code given through sms text messaging
    //Sanatize information given
    $information_given = [];
    $information_given["gate_authorization_transaction_identification_code"] = $_GET["transaction_identification_code"];
    $information_given["sms_code"] = $_GET["smscode"];

    /*
    //create a new gate authorization object
    $gate_authorization = new dahliaenvironment_gate_authorization();

    //Commit: Authorization
    $result = $gate_authorization->authorize_for_stream($dahliaenvironment_database["database_name"], $dahliaenvironment_database["database_username"], $dahliaenvironment_database["database_password"], $dahliaenvironment_database["database_host"], "client_credentials", $information_given["phonenumber"], $information_given["password"]);
    echo json_encode($result);
    */

?>
