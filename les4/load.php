<?php
  if ($_FILES['photo']['error']) {
    $message = 'Ошибка загрузки файла!';
  } elseif ($_FILES['photo']['size'] > 100000000) {
    $message = 'Файл слишком большой';
  } elseif ($_FILES['photo']['type'] == 'image/jpeg') {
    move_uploaded_file($_FILES['photo']['tmp_name'], DIR_SMALL.($_FILES['photo']['name'])); 
  }

?>