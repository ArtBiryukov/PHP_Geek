<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- Задание №4 -->

  <?php
  $title = "Просто какой то заголовок";
  $h1 = "<h1>$title<h2>";
  $year = date ('Y');
  ?>

<div class="content">
  <?php
  echo $h1;
  echo $year;
  ?>
</div>

<!-- Задание №3 -->
  <?php
  $a = 5;
  $b = '05';

  var_dump($a); 

  var_dump($a == $b);    
  //Это сравнение по значению, т.е. будет 5 - число и 05 - будет привидено к числу так же
  // и получится 5 = 5, да равно поэтому true
  var_dump((int)'012345'); 
  //Могу предположить что тут приводится к дургой системе исчисления где 0 отбрасывается
  var_dump((float)123.0 === (int)123.0);
  //Это сравнение двух чисел, только в первом случае будет 123.0 - с дробной частью
  //а второе будет целое 123, и при сравнении == будет true, а при сравнении типов будет false
  //они не равны друг другу
  var_dump((int)0 === (int)'hello, world'); 
  //Потому что (int)'hello, world' = 0 так как строку привести к числу то получится 0, а (int)0 = 0 
  //поэтому будет true
  ?>


<!-- Задание №5 -->
<?php
  $a = 1;
  $b = 2;

  echo '<br>'.'a = '.$a;
  echo '<br>'.'b = '.$b;

  //Поменял местами с помощью массива
  [$a,$b]=[$b,$a];

  echo '<br>'.'a = '.$a;
  echo '<br>'.'b = '.$b;
?>


</body>
</html>
