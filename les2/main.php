<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $a = 4;
    $b = 5;

    // Задание №1
    if ($a >= 0 && $b >= 0) {
      echo subtract($a, $b);
    } elseif ($a < 0 && $b < 0) {
      echo multiply($a, $b);
    } elseif ($a >= 0 || $a <= 0 && $b >= 0 || $b <= 0) {
      echo sum($a, $b);
    };


    // Задание№2
    $a_two = rand(0,15);

    switch ($a_two) {
      case '0':
        echo '0 <br>';
      case '1':
        echo '1 <br>';
      case '2':
        echo '2 <br>';
      case '3':
        echo '3 <br>';
      case '4':
        echo '4 <br>';
      case '5':
        echo '5 <br>';
      case '6':
        echo '6 <br>';
      case '7':
        echo '7 <br>';
      case '8':
        echo '8 <br>';
      case '9':
        echo '9 <br>';
      case '10':
        echo '10 <br>';
      case '11':
        echo '11 <br>';
      case '12':
        echo '12 <br>';
      case '13':
        echo '13 <br>'; 
      case '14':
        echo '14 <br>';
      default:
        echo '15 <br>';
        break;
    };


    // задание №3
    function sum ($a, $b) {
      return "Сумма чисел $a и $b равна $a+$b<br>";
    };

    function subtract ($a, $b) {
      return "Разность чисел $a и $b равна $a-$b <br>";
    };

    function multiply ($a, $b) {
      return "Произведение чисел $a и $b равно $a*$b <br>";
    };

    function divide ($a, $b) {

      if ($b == 0) {
        return 'Делить на 0 нельзя!';
      }

      return "Деление чисел $a и $b равна $a/$b <br>";
    };

    //задание №4
    mathOperation(10,3,'/');

    function mathOperation($arg1, $arg2, $operation) {
      switch($operation){
        case "+":
            echo sum($arg1, $arg2);
            break;
        case "-":
            echo subtract($arg1, $arg2);
            break;
        case "*":
            echo multiply($arg1, $arg2);
            break;
        case "/":
            echo divide($arg1, $arg2);
            break;
        default:
            echo "Что то нето проверь!";
      };
    };

  ?>
  
</body>
</html>