<?php 
require __DIR__ .'/models/Movies.php';

$Movie1 = new Movie();
$Movie1->title = "Apocalipse Now";
$Movie1->genre = "Sci-fi";
$Movie1->rating = "4.6/5";
$Movie1->language ="English";

var_dump($Movie1);