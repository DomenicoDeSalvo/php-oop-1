<!-- PHP -->
<?php
//CLASSE PRODUCTION
class Production{
    public $title;
    public $language;
    public $rate;
    public $genre;
    //COSTRUTTORE
    function __construct(string $_title, string $_language, int $_rate, Genre $_genre) {
        $this -> setTitle($_title);
        $this -> setLanguage($_language);
        $this -> setRate($_rate);
        $this -> genre = $_genre;
    }
    //ACQUISIZIONE TITOLO
    public function setTitle(string $new_title) : void{
        $this -> title = $new_title;
    }

    //ACQUISIZIONE LINGUA
    public function setLanguage(string $new_language) : void{
        $this -> language = $new_language;
    }

    //ACQUISIZIONE VOTO
    public function setRate(int $new_rate) : void{
        if(is_numeric($new_rate) && $new_rate > 0 && $new_rate <11){
            $this -> rate = intval($new_rate);
        }
    }
}

//CLASSE GENRE
class Genre {
    public $name;
    public $year;
    //COSTRUTTORE
    function __construct(string $_name, int $_year){
        $this -> setName($_name);
        $this -> setYear($_year);   
    }
    //ACQUISIZIONE NOME GENERE
    public function setName(string $new_name) : void{
        $this -> name = $new_name;
    }
    //ACQUISIZIONE ANNO
    public function setYear(int $new_year) : void{
        if(is_numeric($new_year)){
            $this -> year = intval($new_year);
        }
    }
}

$movie1 = new Production ('La Febbra','Italiano', 10, new Genre ('Thriller',2004) );
var_dump($movie1);
$movie2 = new Production ('Avatar 2', 'Inglese', 8, new Genre ('Fantascienza',2022));
var_dump($movie2);

?>

<!-- HTML -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP</title>
    </head>
    <body>
    
    </body>
</html>