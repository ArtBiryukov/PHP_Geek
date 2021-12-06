<?php 

include "config.php"; 
include "load.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>GB php Lesson4</title>

</head>
<body>
  <div class="body-content">
  <?php for($i = 0; $i < count($images); $i++) { ?>
    <a href="full.php?file=<?= DIR_BIG.$images[$i] ?>">
      <img class="small-photo photo" src="<?= DIR_SMALL.$images[$i] ?>" alt="">
    </a><?php } ?>
  </div>
 
  <form action=""  method="POST" enctype="multipart/form-data">
    <p>Добавить файл:</p><input type="file" name="photo"> 
    <button type="submit" name="send">ЗАГРУЗИТЬ</button> <br>
    <span><?= $message?></span>
 </form>

</body>
</html>