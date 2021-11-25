<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lesson 3 php level 1</title>
</head>
<body>
  
<!-- задание № 1 -->

<!-- <?php
$n = 0;
while($n <= 100) {
   if (!($n%3)) {
    echo "$n <br>";
  }
  $n++;
}
?>  -->

<br>
<hr>
<br>

<!-- задание №2 -->
<?php 
  $a = 0;

  do 
  {
    if ($a == 0) {
      echo "$a - ноль<br>";
    } else if ($a % 2) {
      echo "$a - нечетное число<br>";
    } else  {
      echo "$a - четное число<br>";
    }
    $a++;
  }
  while ($a <= 10);
?>

<br>
<hr>
<br>

<!-- задание №3 -->

<?php 
 
$areas = [
  "Московская область" => ["Москва", "Королев", "Кашира"],
  "Ростовская область" => ["Ростов-на-Дону", "Волгодонск", "Миллерово"], 
  "Ленинградская область" => ["Санкт-Петербург","Всеволожск", "Кронштадт"]
];


foreach($areas as $area => $cities)
{
    echo "$area:<br>";
    $n = 0;

    foreach($cities as $city) {

      $num = (count($cities)- 1);
      if ($n == $num) {
        echo "$city";
      } else {
        echo "$city, "; 
      }
      $n++;
    }
    echo "<br>";
}
?>





</body>
</html>