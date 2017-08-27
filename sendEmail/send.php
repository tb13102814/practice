<?php
$rootPath=dirname(__FILE__);
require $rootPath.'/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;          //debug

$mail->isSMTP();                 // Set mailer to use SMTP
$mail->Host = 'smtp.sina.com';    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;          // 是否认证
$mail->CharSet='UTF-8';
$mail->Username = 'sugarbo1@sina.com';       // SMTP username
$mail->Password = '13102814tb';            // SMTP password
//$mail->SMTPSecure = 'tls'; // 加密
//$mail->Port = 25;    // TCP port to connect to
$mail->setFrom('sugarbo1@sina.com', 'tangbo');
$mail->addAddress('sugarbo@163.com', 'liu');  // Add a recipient
//$mail->addAddress('ellen@example.com');   // 多个收件人填写
$mail->addReplyTo('sugarbo1@sina.com', 'tangbo');
//$mail->addCC('cc@example.com');          //加密
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');   // 附件
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);  // Set email format to HTML

$mail->Subject = '测试邮件发送';
$mail->Body    = '<b>新浪发送给网易的邮件!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}