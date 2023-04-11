<?php

mail('surha_dag@mail.ru', 'Предварительная регистрация с сайта Форум Кавказ.', '$message');

$data = $_POST;
$mail = $data['email'];
$name = $data['name'];
$phone = $data['phone'];
$customer = $data['customer'];
$city = $data['city'];
$plan = $data['plan'];
$transfer = $data['transfer'];
$transfer_other = $data['transfer_other'];
$children = $data['children'];
$children_count = $data['children_count'];
$feedback = $data['feedback'];
// Сообщение
$message = 'Почта - '.$mail.'
Имя - '.$name.'
Телефон - '.$phone.'
Заказчик - '.$customer.'
Город - '.$city;
if($plan) {
  for ($i = 0; $i < count($plan); $i++) {
    $message .= '
План мероприятия - '.$plan[$i];
  }
}

$message .= '
Трансфер - '.$transfer.'
Свой трансфер - '.$transfer_other.'
Дети - '.$children.'
Количество детей - '.$children_count.'
Пожелания - '.$feedback;

// Отправляем если кнопка нажата
if(isset($data['submit'])) {
  mail('surha_dag@mail.ru', 'Предварительная регистрация с сайта Форум Кавказ.', $message);
  // echo $message;
  mail('avpp.rd@gmail.com', 'Предварительная регистрация с сайта Форум Кавказ.', $message);
}
header('Location: http://форум-кавказ.рф/registration.php');
?>