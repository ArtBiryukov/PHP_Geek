<?php

include_once '../modules/config.php';

$idGood = (int)($_GET['id']);

$sql = "SELECT * from cart WHERE id_goods = $idGood";

$res = mysqli_query($connect,$sql);

if(mysqli_num_rows($res) > 0){
    $s = "UPDATE cart SET count=count+1 WHERE id_goods = $idGood";
    $res = mysqli_query($connect,$s);
   
}

