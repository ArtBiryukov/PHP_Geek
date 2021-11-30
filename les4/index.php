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
  <?php 
    $images = scandir("img");

  for($i = 2; $i < count($images); $i++) { ?>
    <a href="full.php?file=<?= "$images[$i]"?>"><img class="small-photo photo" src="img/<?= "$images[$i]"?>" alt=""></a>
  <?php 
  }?>  

  </div>



 <form action="#" method="get">


 </form>

</body>
</html>