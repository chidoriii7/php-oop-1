<?php

class Movie 
{
    
    public $titolo;
    public $durata;

    public function __construct(string $_titolo, string $_durata)
    {
        $this->titolo = $_titolo;

        $this->durata = $_durata;
        
    }

    public function getTitle(): string {
        return $this->titolo;
    }

    public function setTitle($title): void {
       $this->titolo = $title;
    }
}

$shutter_island = new Movie('Titolo', 'Durata');
$shutter_island->setTitle('Shutter Island');
$shutter_island->durata = '2h 18m';

$fight_club = new Movie('Titolo', 'Durata');
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
    <h1></h1>
</body>
</html>