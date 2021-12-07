<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор 2</title>
  <style>
    input[type='number'] {
      width: 40px;
    }
  </style>
</head>
<body>
  <?php
    $a= isset($_GET['a']) ? (int)($_GET['a']) : 0;
    $b = isset($_GET['b']) ? (int)($_GET['b']) : 0;

    $operation = $_GET['operation'];

    function mathOperation ($a, $b, $operation) {
      switch ($operation) {
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

  <h2 class="calc">Простой калькулятор второй</h2>

  <form method="$_GET">

    <span>Число 1:</span><input name="a" type="number" value="<?= $a ?>">
      <button type="submit" name="operation" value="+"> + </button>
      <button type="submit" name="operation" value="-"> - </button>
      <button type="submit" name="operation" value="*"> * </button>
      <button type="submit" name="operation" value="/"> / </button>
    <span>Число 2:</span><input name="b" type="number" value="<?= $b ?>">    

    <span>Результат:</span> <?php echo mathOperation($a, $b, $operation);?>
  </form>
  
</body>
</html>