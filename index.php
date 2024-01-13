<?php 
require __DIR__ .'/models/Movies.php';

$Movie1 = new Movie();
$Movie1->title = "Apocalipse Now";
$Movie1->genre = "Sci-fi";
$Movie1->rating = "4.6/5";
$Movie1->language ="English";

$Movie2 = new Movie();
$Movie2->title = "Madagascar";
$Movie2->genre = "Cartoon";
$Movie2->rating = "3.5/5";
$Movie2->language ="Afrikaans";


var_dump($Movie1);
echo $Movie1->getMoviedetails();
echo $Movie2->getMoviedetails();