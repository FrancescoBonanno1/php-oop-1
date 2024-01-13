<?php class Movie 
{
public $title;
public $genre;    
public $rating;
public $language;

public function getMoviedetails(){
    $result = $this-> title . ", " . $this-> genre .", " . $this-> rating . "- ". $this-> language . ".";
    return $result;
}
}