<!-- PHP -->
<?php
//CLASSE
class Production{
    public $title;
    public $language;
    public $rate;
    //COSTRUTTORE
    function __construct($_title, $_language, $_rate ) {
        $this -> setTitle($_title);
        $this -> setLanguage($_language);
        $this -> setRate($_rate);
    }
    //ACQUISIZIONE TITOLO
    public function setTitle(string $new_title) : void{
        $this -> $title = $new_title;
    }

    //ACQUISIZIONE LINGUA
    public function setLanguage(string $new_language) : void{
        $this -> $language = $new_language;
    }

    //ACQUISIZIONE VOTO
    public function setRate(int $new_rate) : void{
        if(is_numeric($new_rate) && $new_rate > 0 && $new_rate <11){
            $this -> $rate = intval($new_rate);
        }
    }
}
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