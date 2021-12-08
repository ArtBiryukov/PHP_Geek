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

    // if (isset($_POST['a'])) {
    //   $a = (int)($_POST['a']);
    // } else {
    //   $a = 10;S
    // }

    // if (isset($_POST['b'])) {
    //   $b = (int)($_POST['b']);
    // } else {
    //   $b = 15;
    // }

    $a = isset($_POST['a']) ? $a = (int)($_POST['a']) : $a = 0;
    $b = isset($_POST['b']) ? $b = (int)($_POST['b']) : $b = 0;
    $operationSing = $_POST['operation'];

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

  <form method="post">
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