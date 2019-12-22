<!-- Zahtev koji stigne proveriti validnost podataka, ocistiti od mogucih scripti...  

Prilagoditi kod potrebama  -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class modelContact {
  public function contact() {
    require '.\vendor\autoload.php';

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email === false) print "Submitted email address is invalid <br>";
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    if($phone === false) print "Submitted phone number is invalid <br>";
    $msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

   

    $mail = new PHPMailer(true);

    if(isset($_POST['name']) && isset($_POST['email'])) {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'petkovjelena@gmail.com';                     // SMTP username
        $mail->Password   = 'phprules258';                               // SMTP password
        $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Email Settings
        $mail->setFrom($email, $name);
        $mail->addAddress("jelena.petkov17@gmail.com");     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact';
        $mail->Body    = $msg;

        if($mail->send())
          $response = 'Message has been sent';
        else
          $response = "Something went wrong: <br> <br>" . $mail->ErrorInfo;
        exit(json_encode(array("response" => $response)));

      }
    }

}



