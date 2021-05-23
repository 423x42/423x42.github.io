<?php
include("bd.php");
$query = "TRUNCATE `lessons`.`cards`";
$mysqli->query($query);
header('Location:329fs94Sc984s.php');


$file = 'order/checkout/file.txt';

// установка соединения
$conn_id = ftp_connect($ftp_server);

// вход с именем пользователя и паролем
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// попытка удалить файл
if (ftp_delete($conn_id, $file)) {
 echo "Файл $file удален\n";
} else {
 echo "Не удалось удалить $file\n";
}

// закрытие соединения
ftp_close($conn_id);
?>