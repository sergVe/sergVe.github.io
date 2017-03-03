<?php
//Принимаем постовые данные
$username=$_POST['username'];
$whatever=$_POST['whatever'];
$email=$_POST['email'];
//Тут указываем на какой ящик посылать письмо
$to = "notz03@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с моего учебного сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br>
Имя пользователя: ".htmlspecialchars($username)."<br />
e-mail: <a href='email:$email'>".htmlspecialchars($email)."</a><br>
Сообщение: ".htmlspecialchars($user_message);
// Отправляем письмо при помощи функции mail();
$headers = "From: www.fos2000.ru <info@fos2000.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>