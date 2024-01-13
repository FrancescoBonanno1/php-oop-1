<?php 
require __DIR__ .'/models/Movies.php';

$Movie1 = new Movie("Apocalypse-Now", "Sci-Fi", "4.6/5", "English");
$Movie2 = new Movie("Madagascar", "Cartoon", "3.5/5", "Afrikaans");
$Movie3 = new Movie("Cado Dalle Nubi", "Comedy", "5/5", "Italian");



var_dump($Movie1);
echo $Movie1->getMoviedetails();
var_dump($Movie2);
echo $Movie2->getMoviedetails();
echo $Movie3->getMoviedetails();