<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Full Image <?= $_GET['file']?></title>

</head>
<body class="big-body">

  <img class="big-photo photo" src="img/<?= $_GET['file']?>" alt=''>
  <br>
  <a class="back-button" href="<?= $_SERVER['HTTP_REFERER']?>">back</a>
</body>
</html>



