<!DOCTYPE html>
<html lang="en">

<?php include_once "../modules/static/head.php" ?>

<body>
    <?php include_once "../modules/static/header.php" ?>
    <main>

    <?php include_once "../modules/subheader.php";
    
    $idGood = $_GET['id'];
  
    $sqlGood= "SELECT * FROM goods WHERE id='$idGood'";

        if (mysqli_query($connect, $sqlGood)) {
            $good = mysqli_fetch_assoc(mysqli_query($connect, $sqlGood));
        }
    ?>

        <section class="card-good">
            <div class="container card-good__wrapper">
                <div class="card-good__image-wrapper">
                    <img class="card-good__image" src="goods-image/<?php echo $good['photo']; ?>" alt="">
                </div>
                <div class="card-good__description">
                    <h2 class="card-good__title-wrapper">
                        <p class="card-good__brand"><?php echo $good['brand']; ?></p>
                        <p class="card-good__title"><?php echo $good['name']; ?></p>
                    </h2>
                    <p class="card-good__price"><?php echo $good['cost']; ?> ₽</p>

                    <button class="card-good__buy" <?php echo $good['id']; ?>>Добавить в корзину</button>
                </div>
            </div>


        </section>

    </main>

    <?php 
        include_once "../modules/static/footer.php"; 
        include_once "../modules/basket.php";
    ?>
        <script src="scripts/main.js"></script>
        <script>
            const buyButton = document.querySelector('.card-good__buy');

            buyButton.addEventListener('click', test)
        </script>
        
</body>
</html>