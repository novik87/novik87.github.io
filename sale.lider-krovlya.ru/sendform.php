<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
//$email = $_POST['mail']; // Берём данные из input c атрибутом name="mail"

$token = "1539114359:AAFiEGZrE5b2x5QSKrKbqD3o-8oez_p6lmk"; // Тут пишем токен
$chat_id = "-445341414"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "sale.lider-krovlya.ru"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  //'Почта' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."\n";
};

//$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text='.urlencode($txt)","r");

$sendToTelegram = file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&parse_mode=html&text='.urlencode($txt));

?>