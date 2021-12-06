<?php
const DIR_SMALL = 'img_small/';
const DIR_BIG = 'img/';

$images = array_slice(scandir("img"),2);
$message = '';
