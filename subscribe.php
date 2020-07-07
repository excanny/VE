<?php

$subscription = $_POST['email']; 



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

	 use PHPMailer\PHPMailer\PHPMailer;
	 use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
    require 'PHPMailer/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'veritygeosolutions@gmail.com';                     // SMTP username
    $mail->Password   = 'Veritygeo1';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //$email = 'godson.ihemere@gmail.com';
    $email = 'info@veritygeo.com';
    //Recipients
    $mail->setFrom('veritygeosolutions@gmail.com', 'Subscription Form');
    $mail->addAddress($email);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Email Subscription Alert';
    $mail->Body    = "
                    <html>
                    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <title>New Email Subscription Alert</title>
                    </head>
                    <body>
                    
                    <p>New email subscription: $subscription</p>
                    
                    </body>
                    </html>
                    ";


    $mail->send();
    echo 'Message has been sent';
	} 
	catch (Exception $e) 
	{
		//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

?>