<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "6700478795:AAF9_e7Y-6dLEr2LyOhf3ejv0uabK2Eyq7A";
$chat_id = "1451441758";
$arr = array(
  'Как Вас зовут?: ' => $name,
  'Ваш номер телефона: ' => $phone,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

$sendToTelegram = true; // или false в зависимости от вашего условия

if ($sendToTelegram) {
    echo '<script>
            alert("Уведомление: Данные успешно отправлены!");
            window.location.href = "index.html";
          </script>';
} else {
    echo '<script>alert("Ошибка: Не удалось отправить данные!");</script>';
}
?>