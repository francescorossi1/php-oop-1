<?php
class Movie
{
    public $title;
    public $synopsis;
    public $year;
    public $genre;

    public function __construct($title,$synopsis,$year,$genre)
    {
        $this->title = $title;
        $this->synopsis = $synopsis;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getAbstract($max_len = 50){
        return substr($this->synopsis, 0, $max_len) . '...';
    }
}


$movie_title_1 = 'Il Silenzio degli Innocenti';
$movie_title_2 = 'V per Vendetta';
$movie_synopsis_1 = 'Uno psicopatico assassino è il terrore di giovani donne formose che aggredisce e scuoia. 
Solo Hannibal Lecter può aiutare a risolvere il caso, ma è detenuto in cella di isolamento in un manicomio criminale, essendo diventato uno psicopatico cannibale. 
Una giovane aspirante agente dell\'FBI, Clarice Starling, prima ancora di completare il suo addestramento viene incaricata da Crawford di contattare lo psichiatra, 
per averne lumi intesi ad individuare e fermare il mostro.';
$movie_synopsis_2 = 'Il mondo è dominato da un governo totalitario, e il misterioso V usa ogni mezzo in suo possesso per combattere il sistema.';

$movie_1 = new Movie($movie_title_1,$movie_synopsis_1,'1991','thriller');
$movie_2 = new Movie($movie_title_2,$movie_synopsis_2,'2005','drama');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movies</title>
</head>
<body>
    <ul>
        <li>
            <h2><?= $movie_1->title ?></h2>
            <p><?= $movie_1->getAbstract(100) ?></p>
            <span><?= $movie_1->year ?>, </span>
            <span><?= $movie_1->genre ?></span>
        </li>
        <li>
            <h2><?= $movie_2->title ?></h2>
            <p><?= $movie_2->getAbstract() ?></p>
            <span><?= $movie_2->year ?>, </span>
            <span><?= $movie_2->genre ?></span>
        </li>
    </ul>
</body>
</html>