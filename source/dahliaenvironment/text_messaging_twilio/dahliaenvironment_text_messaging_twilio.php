<?php
class dahliaenvironment_text_messaging_twilio
{
    function send_sms_message($twilio_provided_sid, $twilio_provided_authentication_token, $twilio_provided_phone_number, $recipient_phone_number, $text_message_to_send)
    {

        exec('curl -X POST https://api.twilio.com/2010-04-01/Accounts/'.$twilio_provided_sid.'/Messages.json --data-urlencode "To='.$recipient_phone_number.'" --data-urlencode "From='.$twilio_provided_phone_number.'" --data-urlencode "Body='.$text_message_to_send.'" -u '.$twilio_provided_sid.':'.$twilio_provided_authentication_token.'');

    }
}

?>
