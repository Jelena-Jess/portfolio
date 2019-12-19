<!-- Zahtev koji stigne proveriti validnost podataka, ocistiti od mogucih scripti...  

Prilagoditi kod potrebama  -->
<?php
//require_once './vendor/autoload.php';

// Create the Transport
// $transport = (new Swift_SmtpTransport('smtp.example.org', 25))
//   ->setUsername('your username')
//   ->setPassword('your password')
// ;

// Create the Mailer using your created Transport
//$mailer = new Swift_Mailer($transport);

// Create a message
// $message = (new Swift_Message('Wonderful Subject'))
//   ->setFrom(['john@doe.com' => 'John Doe'])
//   ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
//   ->setBody('Here is the message itself')
//   ;

// Send the message
// $result = $mailer->send($message);

// if($result) {
//   return true; 
// } else {
//   //vratiti greske koje su se desile u formi 
// } 

class modelContact {
  public function contact() {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email === false) print "Submitted email address is invalid <br>";
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    if($phone === false) print "Submitted phone number is invalid <br>";
    echo "Name: " . $name . "<br> Email: " . $email. "<br> Phone number: " . $phone . "<br> Message: " . $msg;

  }

}

?>



