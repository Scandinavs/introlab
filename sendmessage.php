<?php
$sendto      = "scandinavs@mail.ru";
$name        = $_POST['name'];
$phone    = $_POST['mail'];

$subject  = "Новый заказ на просчёт стоимости проекта";
$headers  = "From: " . strip_tags($sendto) . "\r\n";
$headers .= "Reply-To: ". strip_tags($sendto) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новый заказ на просчёт стоимости проекта</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "</body></html>";


if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}
?>