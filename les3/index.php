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
<h2>Задание №1</h2>

<!-- <?php
  $n = 0;
  while($n <= 100) {
    if (!($n%3)) {
      echo "$n <br>";
    }
    $n++;
  }
?>  -->

<hr>

<!-- задание №2 -->
<h2>Задание №2</h2>

<!-- <?php 
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
?> -->

<hr>

<!-- задание №3 -->
<h2>Задание №3</h2>

<!-- <?php 
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
?> -->

<hr>

<!-- задание №4 -->
<h2>Задание №4</h2>
<?php 




?>

<hr>

<!-- задание №5 -->
<h2>Задание №5</h2>

<?php 
  function rebildText ($text) {
    return str_replace(" ", "_", "$text");
  };

  echo rebildText("Просто текст для пробы   три пробела!");
?>

<hr>

<!-- задание №6 -->
<h2>Задание №6</h2>

<?php 




?>
<hr>


<!-- задание №7 -->
<h2>Задание №7</h2>

<?php 
  for ($i = 0; $i <= 9 ; print_r($i++."<br>"));
?>

</body>
</html>