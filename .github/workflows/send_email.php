<?php
// 收件人地址
$to_addr = 'receiver@example.com';

// 发件人地址和密码
$from_addr = 'sender@example.com';
$password = 'password';

// SMTP 服务器地址和端口号
$smtp_server = 'smtp.example.com';
$smtp_port = 587;

// 邮件内容
$subject = 'Test Email';
$text = 'This is a test email sent from PHP using GitHub Actions.';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $from_addr" . "\r\n";

// 连接 SMTP 服务器并发送邮件
try {
    $smtp = new \SMTP;
    $smtp->connect($smtp_server, $smtp_port);
    $smtp->startTLS();
    $smtp->login($from_addr, $password);
    $smtp->send($to_addr, $subject, $text, $headers);
    echo "Email sent successfully.";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
