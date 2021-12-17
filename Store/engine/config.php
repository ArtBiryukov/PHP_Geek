<?php
/*Server*/
const SERVER = "localhost";
const LOGIN = "root";
const PAS = "";
const DB = "storelomoda";

$connect = mysqli_connect(SERVER,LOGIN,PAS,DB) or die("Ошибка соединения!");
