<?php
// Файлы phpmailer
require '../gretskiy/static/phpmailer/phpmailer/PHPMailer.php';
require '../gretskiy/static/phpmailer/phpmailer/SMTP.php';
require '../gretskiy/static/phpmailer/phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$message = $_POST['msg'];
$email = $_POST['email'];


// Формирование самого письма
$title = "Новое обращение - gretskiy.by";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>
<b>Email:</b><br>$email<br>
<b>Комментарий:</b><br>$comment<br>
<b>Список продуктов:</b><br>$message<br>
";


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};


    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'isayev.official@gmail.com'; 
    $mail->Password   = 'isay31052002ev'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('isayev.official@gmail.com', 'Егор Исаев');

    $mail->addAddress('dima346922336@gmail.com');
   

    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
header('Location: index.php');