<?php 
    include_once '../engine/config.php';
    $sqlCategory = "SELECT * FROM category";
    $categoryTable = mysqli_query($connect, $sqlCategory);
?>

<section class="subheader">
    <div class="container">
        <div class="subheader__wrapper">
            <nav class="subheader__navigation navigation">
                <ul class="navigation__list">
                <?php  
                while($categoryName = mysqli_fetch_assoc($categoryTable)) {?>
                    <li class="navigation__item">
                        <a class="navigation__link" href="goods.php?category=<?php echo $categoryName['title'] ?>">
                            <?php echo $categoryName['name'] ?>
                        </a>
                    </li>
                <?php } ?>
                </ul>
            </nav>
            <a class="subheader__logo" href="index.php"><img src="image/logo.svg" alt="Компания Lomoda"></a>
            <button class="subheader__cart">Корзина</button>
        </div>
    </div>
</section>