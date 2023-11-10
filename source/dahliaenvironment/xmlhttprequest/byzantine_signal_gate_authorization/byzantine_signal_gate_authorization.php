<?php

//Include the dahlia environment
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");

//Include database connection information
include("/var/www/html/dahliaenvironment/include_configuration/database/dahliaenvironment_include_configuration_database_newssite.php");

//Major Goal One: Authorize based on information given
    //Sanatize information given
    $information_given = [];
    $information_given["phonenumber"] = intval($_GET["phonenumber"]);
    $information_given["password"] = hash("sha256", $_GET["password"]);

    //create a new gate authorization object
    $gate_authorization = new dahliaenvironment_gate_authorization();

    //Commit: Authorization
    $result = $gate_authorization->authorize_for_stream("newssite", "root", "password", "localhost", "client_credentials", "1234567890", "password");
    var_dump($result);

?>
