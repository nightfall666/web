<?php
$msg = "Номер: ". htmlspecialchars($_GET["room"]) . "\n" . htmlspecialchars($_GET["fio"]) ."\n" . htmlspecialchars($_GET["phone"]) ."\n" . htmlspecialchars($_GET["email"]) ."\n" . htmlspecialchars($_GET["etc"]) ."\n" . "Дата заезда: " . htmlspecialchars($_GET["date1"]) ."\n" . "Дата выезда: " . htmlspecialchars($_GET["date2"]);

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("sochi.olgahotel@mail.ru","Новое бронирование с сайта", $msg);
mail(htmlspecialchars($_GET["email"]), "Бронь в отеле olga-hotel", "Вы успешно забронировали ". htmlspecialchars($_GET["room"]) ." , с вами скоро свяжется администратор");

echo '<script>history.back(); </script>';
?>