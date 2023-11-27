<?php

//Include the dahlia environment
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");

//Include database connection information
include("/var/www/html/dahliaenvironment/include_configuration/database/dahliaenvironment_include_configuration_text_messaging_twilio_newssite.php");

exec('curl -X POST https://api.twilio.com/2010-04-01/Accounts/Your_Account_SID/Messages.json --data-urlencode "To=+14155552671" --data-urlencode "From=+14155552672" --data-urlencode "Body=Hello, this is a test message from Twilio!" -u Your_Account_SID:Your_Auth_Token');
?>
