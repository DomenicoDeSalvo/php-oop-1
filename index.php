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
//I FILM VENGONO CREATI DIRETTAMENTE DENTRO UN ARRAY
$movies = array(
    new Production ('La Febbra','Italiano', 10, new Genre ('Drammatico',2004)),
    new Production ('Avatar 2', 'Inglese', 8, new Genre ('Fantascienza',2022)),
    new Production ('Dunkirk', 'Inglese', 9, new Genre ('Drammatico',2017)),
    new Production ('Il ragazzo e l\'airone', 'Giapponese', 8, new Genre ('Fantastico',2023)),
    new Production ('Good Bye, Lenin!', 'Tedesco', 8, new Genre ('Drammatico',2003)),
    new Production ('Il mio amico Robot', 'Muto', 7, new Genre ('Musical',2023)),
    new Production ('Civil War', 'Inglese', 7, new Genre ('Drammatico',2024)),
    new Production ('Mobbasta veramente però', 'Italiano', 10, new Genre ('Drammatico',2004)),
    new Production ('Grazie Ragazzi', 'Italiano', 7, new Genre ('Commedia',2023)),
);

?>

<!-- HTML -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <!-- HEADER -->
        <?php
            include __DIR__ . '/partials/templates/header.php';
        ?>
        <!-- MAIN -->
        <main class="py-4">
            <div class="container">
                <div class="row row-cols-3">
                    <?php
                    foreach ($movies as $movie) {
                        ?>
                        <div class="col p-2">
                            <div class="card" >
                                <div class="card-body">
                                    <h5 class="text-center card-title"><?php echo $movie->title?></h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <span class="fw-bold">Lingua: </span> 
                                            <?php echo $movie->language?>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Voto: </span> 
                                            <?php echo $movie->rate?>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Genere: </span> 
                                            <?php echo $movie->genre->name?>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Anno: </span> 
                                            <?php echo $movie->genre->year?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    };
                    ?>
                </div>
            </div>
        </main>
        <!-- FOOTER -->
        <?php
            include __DIR__ . '/partials/templates/footer.php';
        ?>
    </body>
</html>