<!-- "DELETE FROM `cart` WHERE `cart`.`id` = 1"
INSERT INTO `cart` (`id`, `id_goods`, `count`) VALUES ('', '1', '2');
-->  

<div class="cart-overlay">
        <!-- cart-overlay-open -->
        <div class="cart">
            <h2 class="cart__title">Корзина</h2>
            <div class="cart__table-wrapper">

                <table class="cart__table">
                    <colgroup class="cart__col">
                        <col class="cart__col-number">
                        <col class="cart__col-name">
                        <col class="cart__col-color">
                        <!-- <col class="cart__col-size"> -->
                        <col class="cart__col-price">
                        <col class="cart__col-delete">
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="cart__title-number">#</th>
                            <th>Наименование</th>
                            <th>Количество</th>
                            <!-- <th>Размер</th> -->
                            <th>Цена</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="cart__list-goods">

                    <?php
                    $sql= "SELECT * FROM cart";
                    $sqlCart = mysqli_query($connect, $sql);
                    
                    while ($cartItem = mysqli_fetch_assoc($sqlCart)) { 
                        $cartItemId = $cartItem['id_goods'];
                        $sqlGoods= "SELECT name, brand, cost FROM goods WHERE id = '$cartItemId'";
                        $goodItem = mysqli_fetch_assoc(mysqli_query($connect, $sqlGoods)); ?> 

                        <tr>
                            <td><?php echo $cartItem['id']; ?></td>
                            <td><?php echo $goodItem['name']; ?> <?php echo $goodItem['brand']; ?></td>
                            <td><?php echo $cartItem['count']; ?></td>
                            <!-- <td>42/44</td> -->
                            <td><?php echo $goodItem['cost']; ?> &#8381;</td>
                            <td><button class="btn-delete">&times;</button></td>
                        </tr>

                        <?php }?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">
                                <div class="cart__wrapper-promo">
                                    <label for="promo">Промо-код:</label>
                                    <input class="cart__promo" id="promo" type="text">
                                </div>

                            </th>
                            <th>Итого:</th>
                            <th class="cart__total-cost" colspan="2">11597 &#8381;</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
            <button class="cart__btn-buy">Оформить</button>
            <button class="cart__btn-close"></button>
        </div>
    </div>