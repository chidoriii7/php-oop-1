<?php

class Movie {
    public $titolo;
    public $durata;

    public function getTitle() {
        return $this->titolo;
    }

    public function setTitle($title) {
       $this->titolo = $title;
    }
}

$shutter_island = new Movie();
$shutter_island->setTitle('Shutter Island');
$shutter_island->durata = '2h 18m';

$fight_club = new Movie();
$fight_club->setTitle('Fight Club');
$fight_club->durata = '2h 19m';



var_dump($shutter_island);
var_dump($fight_club);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop v1</title>
</head>
<body>
    
</body>
</html>