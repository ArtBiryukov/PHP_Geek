<?php 
  include_once "config.php";

  $idImage = $_GET['id'];
  $sqlImg = "SELECT * FROM images WHERE id='$idImage'";

  if (mysqli_query($connect, $sqlImg)) {
    $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));
    $update = "UPDATE images SET view = view +1 WHERE id=$idImage";
    mysqli_query($connect, $update);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Full Image <?= $image['title'] ?></title>

</head>
<body>

  <?php include_once "modules/header.php";?>

  <main class='main content'>
    <h2 class="items-titel">Карточка автомобиля <?= $image['title'] ?></h2>
      <div class="card-content">
        <div class="card-photo">
          <img class="big-photo photo" src="<?= DIR_BIG.$image['url_images']?>" alt='<?= $image['title'] ?>'>
        </div>

        
        <div class="card-offer">
          <div class="card-description">
            <h3 class="description-title">Описание автомобиля:</h3>
            <p class='description'><?= $image['description'] ?></p>
          </div>

          <div class="item-info">
            <span class="item-view"><ion-icon name="eye-outline"></ion-icon> <?= ++$image['view'] ?></span>
            <span class='item-price'><ion-icon name="pricetag-outline"></ion-icon> <?= $image['pice'] ?>$</span>
          </div>
        </div>
      </div>

      <a class="back-button" href="<?= $_SERVER['HTTP_REFERER']?>"><ion-icon name="arrow-back-outline"></ion-icon> Назад</a>
  </main>

<?php 
  include_once "modules/footer.php";
  include_once "modules/scripts.php";
?>

</body>
</html>