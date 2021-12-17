<!DOCTYPE html>
<html lang="en">

<?php include_once "../modules/static/head.php" ?>

<body>

<?php include_once "../modules/static/header.php" ?>

    <main>

    <?php include_once "../modules/subheader.php" ?>
    <?php 

        $sqlgoods = "SELECT * FROM goods";
        $table = mysqli_query($connect, $sqlgoods);
        
        $categoryName = $_GET['category'];
        $sqlCategoryName1 = "SELECT * FROM category WHERE title='$categoryName'";

        $name = mysqli_fetch_assoc(mysqli_query($connect, $sqlCategoryName1));
    ?>

    <section class="goods">
        <div class="container">
        <h2 class="goods__title"><?php echo $name['name']; ?></h2>
            <ul class="goods__list">
            <?php while ($data = mysqli_fetch_assoc($table)) { 
                
                if ($data['id_category'] == $name['id']) { ?>

                <li class="goods__item">
                    <article class="good">
                        <a class="good__link-img" href="card-good.php?id=<?php echo $data['id']; ?>">
                            <img class="good__img" src="goods-image/<?php echo $data['preview']; ?>" alt="">
                        </a>
                        <div class="good__description">
                            <p class="good__price"><?php echo $data['cost']; ?> &#8381;</p>
                            <h3 class="good__title"><?php echo $data['brand']; ?> <span class="good__title__grey">/ <?php echo $data['name'];?></span></h3>
                            <!-- <p class="good__sizes">Размеры (RUS): <span class="good__sizes-list"><?php echo $data['sizes']; ?></span> -->
                            </p>
                            <a class="good__link" href="card-good.php?id=<?php echo $data['id']; ?>">Подробнее</a>
                        </div>
                    </article>
                </li>
              <?php  } } ?>
            </ul>
        </div>
    </section>

    </main>

    <?php 
        include_once "../modules/static/footer.php"; 
        include_once "../modules/basket.php";
    ?>

<script src="scripts/main.js"></script>
</body>
</html>