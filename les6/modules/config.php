<?php
const DIR_SMALL = '../public/images/img/img_small/';
const DIR_BIG = '../public/images/img/';

/*Server*/
const SERVER = "localhost";
const LOGIN = "root";
const PAS = "";
const DB = "galery";

$connect = mysqli_connect(SERVER,LOGIN,PAS,DB) or die("Ошибка соединения!");
$sql = "SELECT * FROM images";
$table = mysqli_query($connect, $sql);


