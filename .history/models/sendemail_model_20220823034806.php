<?php
class Sendemail_Model extends Model{

    public function send_message($fields){
        // Replace this with your own email address
        $mail_to = 'khaimaaaa@gmail.com';
        // See what's inside POST array
        pre_r($_POST);
        // See what's inside POST array
        pre_r($_GET);
        // $_REQUEST has both GET and POST, in addition, it has COOKIE
        pre_r($_REQUEST);
        echo "";
        pre_r($fields);
            
            // Set Message
            //$mailheader = "From:" . $name . "<" . $email . ">\r\n";
            /* $sender_message .= "Email from: " . $sender_full_name . "<" . $sender_email . ">\r\n";
            $sender_message .= "Message: <br />";
            $sender_message .= nl2br($sender_message);
            $sender_message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

            // Set From: header
            $from =  $sender_full_name . " <" . $sender_email . ">";

            // Email Headers
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: ". 'baziz22@gmail.com' . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            //$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";
            echo $headers;

            //ini_set("sendmail_from", $mail_to); // for windows server
            $mail = mail($mail_to, $sender_subject, $sender_message, $headers);

            if ($mail) { echo "OK"; }
            else { echo "Something went wrong. Please try again."; } */

        
    }
}