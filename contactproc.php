<?php

 $name = $_POST['name']; 
 
 $email2 = $_POST['email']; 
 
 $phone = $_POST['phone']; 
 
 $message = $_POST['message']; 
 


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
    $mail->setFrom('veritygeosolutions@gmail.com', 'Contact Form Verity Geo');
    $mail->addAddress($email);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message From Contact Form Verty Geo';
    $mail->Body    = "
                    <html>
                    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <title>Message From Contact Form</title>
                    </head>
                    <body>
                    
                    <p>Name: $name</p>
                    <p>Email: $email2</p>
                    <p>Phone: $phone</p>
                    <p>Message: $message</p>
                    
                    </body>
                    </html>
                    ";


    $mail->send();
   
	} 
	catch (Exception $e) 
	{
		//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

?>