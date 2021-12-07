<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор 1</title>
  <style>
    input[type='number'] {
      width: 40px;
    }
  </style>
</head>
<body>
  <?php
    if (isset($_GET['a'])) {
      $a = (int)($_GET['a']);
    } else {
      $a = 10;
    }

    if (isset($_GET['b'])) {
      $b = (int)($_GET['b']);
    } else {
      $b = 15;
    }

    $operation = intval(!empty($_GET['operation']) ? $_GET['operation'] : 0);
    $operationSing = $_GET['operation'];


    function mathOperation ($a, $b, $operationSing) {
      switch ($operationSing) {
        case '+':
          return $a + $b;
          break;
        
        case '-':
          return $a - $b;
          break;

        case '*':
          return $a * $b;
          break; 

        case '/':
          if($b!=0) {
            return $a / $b;
          } else {
            return 'нельзя делить на ноль!';
          }
          break; 
      } 
    }

  ?>

  <h2 class="calc">Простой калькулятор</h2>

  <form method="$_GET">
    <input name="a" type="number" value="<?=$a?>">

    <select name="operation">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="/">/</option>
      <option value="*">*</option>
    </select>

    <input name="b" type="number" value="<?=$b?>">
    <button type="submit">=</button>
    <span>Результат:</span><?php echo $c = mathOperation($a, $b, $operationSing);?>
  </form>
  
</body>
</html>