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

<?php
  $n = 0;
  while($n <= 100) {
    if (!($n%3)) {
      echo "$n <br>";
    }
    $n++;
  }
?>  

<hr>

<!-- задание №2 -->
<h2>Задание №2</h2>

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

<hr>

<!-- задание №3 -->
<h2>Задание №3</h2>

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

<hr>
<!-- задание №4 -->
<h2>Задание №4</h2>
<?php 

function translit ($text) {

  $woord = [
    "а" => "a",  "б" => "b",  "в"  => "v", "г"  => "g", "д"  => "d",  "е"  => "e",
    "ё" => "yo", "ж" => "zh", "з"  => "z", "и"  => "i", "й"  => "j",  "к"  => "k",
    "л" => "l",  "м" => "m",  "н"  => "n", "о"  => "o", "п"  => "p",  "р"  => "r",
    "с" => "s",  "т" => "t",  "у"  => "u", "ф"  => "f", "х"  => "x",  "ц"  => "c",
    "ч" => "ch", "ш" => "sh", "щ"  => "sch", "ь"  => "'", "ы"  => "yh", "ъ"  => "'",
    "э" => "eh", "ю" => "yu", "я"  => "ya"
  ];

  return strtr($text, $woord);
}

echo translit('транслит текста!');


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

  $menu = [
    "Главная",
    "Каталог" => ["Одежда", "Обувь", "Акксесуары"],
    "Акции" => ["Вчера", "Позавчера", "Декабре"],
    "О нас" => ["Руководство" => ["Директор", "Продажники" => ["текст"]]]
  ]; 

  echo "<ul>";

  function bildMenu ($item) {
    foreach($item as $keyLink => $valueLink) {
  
      if(!is_array($valueLink)) {

        echo "<li>$item[$keyLink]</li>";

      } else {
        echo "<li>$keyLink</li>";
  
        echo "<ul>";
        
          foreach($valueLink as $key => $value) {
            if (!is_array($value)) {
              echo "<li>$value</li>";
            } else {
              echo "<li>$key</li>";
              echo "<ul>";
              echo bildMenu($value);
              echo "</ul>";
            }
          }
        echo "</ul>";
      }
    }
  }
    
  echo bildMenu ($menu);

  echo "</ul>";
?>

<hr> 
<!-- задание №7 -->
<h2>Задание №7</h2>

<?php 
  for ($i = 0; $i <= 9 ; print_r($i++."<br>"));
?>

</body>
</html>