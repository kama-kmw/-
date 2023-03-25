<?php

$data = $_POST;
$mail = $data['email'];
$name = $data['name'];
$phone = $data['phone'];
$customer = $data['customer'];
$city = $data['city'];
$plan = $data['plan'];
$transfer = $data['transfer'];
$children = $data['children'];
$children_count = $data['children_count'];
$feedback = $data['feedback'];
// Сообщение
$message = 'Почта - '.$mail.'
Имя - '.$name.'
Телефон - '.$phone.'
Заказчик - '.$customer.'
Город - '.$city.'
План мероприятия - '.$plan.'
Трансфер - '.$transfer.'
Дети - '.$children.'
Количество детей - '.$children_count.'
Пожелания - '.$feedback;

// Отправляем если кнопка нажата
if(isset($data['submit'])) {
  mail('surha_dag@mail.ru', 'Предварительная регистрация с сайта Форум Кавказ.', $message);
  mail('avpp.rd@gmail.com', 'Предварительная регистрация с сайта Форум Кавказ.', $message);
}
header('Location: http://форум-кавказ.рф/registration.html');
?>