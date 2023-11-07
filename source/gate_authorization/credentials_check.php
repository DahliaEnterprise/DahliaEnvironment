<?php
//Include the dahlia environment
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");

//Sanatize user inputs
$phonenumber = intval($_GET["phonenumber"]);
$password = hash("sha256", $_GET["password"]);

$newssite_gate_authorization = new dahliaenvironment_gate_authorization();
//$result = $newssite_gate_authorization->authorize_for_stream("newssite", "root", "password", "localhost", "client_credentials", "1234567890", "password");
$result = $newssite_gate_authorization->authorize_for_stream("newssite", "root", "password", "localhost", "client_credentials", $phonenumber, $password);
var_dump($result);
?>
