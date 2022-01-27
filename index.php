<!-- CONSEGNA -->
<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    class Movie {

        public $title;

        public $director;

        public $year;

        public $rate;

        public function __construct($_title, $_director) {
            $this->title = $_title;
            $this->director = $_director;
        }

        // ritorna presentazione completa del Film
        public function getFullMovieName() {
            return $this->title . ' diretto da ' . $this->director . ' uscito nell\'anno ' . $this->year . ' con un punteggio di ' . $this->rate;
        }
    }
?>

<!-- elenco film -->
<?php 
    $the_karate_kid = new Movie('The Karate Kid', 'Christopher Cain');
    $the_karate_kid->year = '1984';
    $the_karate_kid->rate = '7.2';

    $the_karate_kid_part_II = new Movie('The Karate Kid part II', 'Christopher Cain');
    $the_karate_kid_part_II->year = '1986';
    $the_karate_kid_part_II->rate = '8.2';
    
    $the_karate_kid_part_III = new Movie('The Karate Kid part III', 'Christopher Cain');
    $the_karate_kid_part_III->year = '1989';
    $the_karate_kid_part_III->rate = '9.2';

    $the_karate_kid_part_IV = new Movie('The Karate Kid part IV', 'Christopher Cain');
    $the_karate_kid_part_IV->year = '1994';
    $the_karate_kid_part_IV->rate = '9.2';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h2>
        <?php echo $the_karate_kid->getFullMovieName() ?>
    </h2>
    <h2>
        <?php echo $the_karate_kid_part_II->getFullMovieName() ?>
    </h2>
    <h2>
        <?php echo $the_karate_kid_part_III->getFullMovieName() ?>
    </h2>
    <h2>
        <?php echo $the_karate_kid_part_IV->getFullMovieName() ?>
    </h2>
</body>
</html>



