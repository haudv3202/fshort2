<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

//Load Composer's autoloader
function send_token($title,$content,$addressEmail){

    try {
        $mail = new PHPMailer(true);
        //Server settings
//        SMTP::DEBUG_SERVER Tắt thông báo thành công
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Serve gửi thư
        $mail->SMTPAuth = true;                                   //Bật xác thực SMTP
        $mail->Username = 'hauff2002@gmail.com';                     //user name của email người gửi
        $mail->Password = 'mczppxvtwbfjvboh';                               // password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //Cổng gửi sẽ có port 587 or 465

        //Recipients
        $mail->setFrom('hauff2002@gmail.com', 'Fshort - Video short Fpoly');
        $mail->addAddress($addressEmail);     //Add a recipient




        //Content
        $mail->isHTML(true);                                  //Cài nội dung
        $mail->Subject = $title;
        $mail->Body = $content;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


//Create an instance; passing `true` enables exceptions

