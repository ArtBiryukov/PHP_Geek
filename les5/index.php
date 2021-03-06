<?php 
include_once "config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>GB php Lesson5</title>

</head>
<body>

  <header class="header">
      <div class="content conent-header">
        <div class="header-left">
          <a href="#" class="header-logo">AutoCar Shop</a> 
        </div>
        <div class="header-right">
          <a href="index.php"><ion-icon name="enter-outline"></ion-icon> Вход в кабинет</a>
        </div>
      </div>
  </header>

  <main class='main content'>
    <h2 class="items-titel">Каталог автомобилей</h2>
    <div class="items-content">

      <?php
      // Array ( [id] => 1 [title] => car1 [url_images] => 1.jpg [pice] => 0 [view] => 0 [description] => Just Car First. )

        while($data = mysqli_fetch_assoc($table)) { ?>
          <div class="item-content">
            <a class="item-link" href="full.php?id=<?= $data['id'] ?>">
              <img class="small-photo photo" src="<?= DIR_SMALL.$data['url_images'] ?>" alt="<?= $data['title'] ?>">
            </a>

            <div class="item-description">
            <h2 class="item-title">Название: 
              <a href="full.php?file=<?= DIR_BIG.$data['url_images'] ?>"><?= $data['title'] ?></a> 
            </h2>
              <div class="item-info">
                <span class="item-view"><ion-icon name="eye-outline"></ion-icon><?= $data['view'] ?></span>
                <span class='item-price'><ion-icon name="pricetag-outline"></ion-icon><?= $data['pice'] ?>$</span>
              </div>

            </div>
          </div> 
        <?php } ?>
    </div>
  </main>

  <footer class='footer'>
      <div class="content">
        <p>Copyright © <?php echo date("Y"); ?> <span>by <a href="https://github.com/ArtBiryukov">Art.Biryukov</a> </span></p>
      </div>
  </footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>