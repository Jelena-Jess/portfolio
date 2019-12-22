<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class modelPlan {
  public function plan() {
    require '.\vendor\autoload.php';

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email === false) print "Submitted email address is invalid <br>";
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    if($phone === false) print "Submitted phone number is invalid <br>";
    $company_name = filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $web_address = filter_input(INPUT_POST, 'web_address', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    $achieve = filter_input(INPUT_POST, 'achieve', FILTER_SANITIZE_SPECIAL_CHARS);
    $goals = filter_input(INPUT_POST, 'goals', FILTER_SANITIZE_SPECIAL_CHARS);
    $aims = filter_input(INPUT_POST, 'aims', FILTER_SANITIZE_SPECIAL_CHARS);
    $budget = filter_input(INPUT_POST, 'budget', FILTER_SANITIZE_SPECIAL_CHARS);
    $deadline = filter_input(INPUT_POST, 'deadline', FILTER_SANITIZE_SPECIAL_CHARS);
    $audience = filter_input(INPUT_POST, 'audience', FILTER_SANITIZE_SPECIAL_CHARS);
    $interact = filter_input(INPUT_POST, 'interact', FILTER_SANITIZE_SPECIAL_CHARS);
    $competitiors = filter_input(INPUT_POST, 'competitiors', FILTER_SANITIZE_SPECIAL_CHARS);
    $uniqueness = filter_input(INPUT_POST, 'uniqueness', FILTER_SANITIZE_SPECIAL_CHARS);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
    $brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_SPECIAL_CHARS);
    $look = filter_input(INPUT_POST, 'look', FILTER_SANITIZE_SPECIAL_CHARS);
    $preference = filter_input(INPUT_POST, 'preference', FILTER_SANITIZE_SPECIAL_CHARS);
    $pages = filter_input(INPUT_POST, 'pages', FILTER_SANITIZE_SPECIAL_CHARS);
    $features = filter_input(INPUT_POST, 'features', FILTER_SANITIZE_SPECIAL_CHARS);
    $domain = filter_input(INPUT_POST, 'domain', FILTER_SANITIZE_SPECIAL_CHARS);

    $full_msg = "From: " . $name . "<br>
                Phone number: " . $phone . "<br>
                Company/Product name: " . $company_name . "<br>
                Desired web address: " . $web_address . "<br>
                Description of the company/product: " . $description . "<br>
                What they want to achieve: " . $achieve . "<br>
                The long-term goals: " . $goals . "<br>
                Aims of the project: " . $aims . "<br>
                The budget: " . $budget . "<br>
                The deadline: " . $deadline . "<br>
                The target audience: " . $audience . "<br>
                Interaction with the audience: " . $interact . "<br>
                Main competitors: " . $competitiors . "<br>
                What makes the company/product unique: " . $uniqueness . "<br>
                Content: " . $content . "<br>
                Brand guidelines: " . $brand . "<br>
                The desired look and feel: " . $look . "<br>
                The websites they like: " . $preference . "<br>
                Pages: " . $pages . "<br>
                Features to include: " . $features . "<br>
                Domain and hosting: " . $domain;
                

   

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

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Project Plan';
        $mail->Body    = $full_msg;

        if($mail->send())
          $response = 'Message has been sent';
        else
          $response = "Something went wrong: <br> <br>" . $mail->ErrorInfo;
        exit(json_encode(array("response" => $response)));

      }
    }

}