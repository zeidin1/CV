<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$messege = $_POST['text'];

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp-mail.outlook.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'copwebil2133@outlook.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Arufir18'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('copwebil2133@outlook.com'); // от кого будет уходить письмо?
$mail->addAddress('zeisin.a21@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Messege from CV site';
$mail->Body    = '' .$name . ' залишив заявку , Пошта цього користувача: ' .$email . 'його повідомлення: ' .$text ; 
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: 2page.html');
}
?>