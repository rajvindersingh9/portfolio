<?php 


if(isset($_POST['sendMailSender'])){

    
$name = $_POST['name']; 
$email = $_POST['email']; 
$message = $_POST['contentMail'];

    
}

print_r($_POST);


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load composer's autoloader

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
 
 
try {
    //Server settings
   //	$mail->isSMTP();                                      // Set mailer to use SMTP
   	//$mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    //$mail->SMTPAuth = true;                               // Enable SMTP authentication
    //$mail->Username = '';                 // SMTP username
 //  $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = "ssl";                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 19;                                    // TCP port to connect to

    //Recipients
	
	$mail->From = $email;
$mail->FromName = $name;
	
	
 //  $mail->setFrom('info@app2food.us', 'App2Food');
//    $mail->setFrom('rajvindersingh9@gmail.com', 'App2Food');
    $mail->addAddress('rajvindersingh9@gmail.com','Job Portfolio' );     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($email, $name);
//    $mail->addCC('rajvinder@app2mobile.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Job Portfolio Web Contact Form'; 
	$mail->Body = $message;
	 
    //$mail->Body    = $name.$email.$message;
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
	
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

<script type="text/javascript">
alert('done');
</script>