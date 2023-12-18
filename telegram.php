<?php

/* https://api.telegram.org/bot6367057381:AAEAyZzm5VYO5h-KwPtIVyvpne3ans85WtM/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6367057381:AAEAyZzm5VYO5h-KwPtIVyvpne3ans85WtM";
$chat_id = "-4046634077";
$arr = array(
  'Имя пользователя или ссылка: ' => $name,
  'Вид накрутки: ' => $name,
  'Количество' => $name
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>