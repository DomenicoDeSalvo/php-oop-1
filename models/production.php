<?php
require_once __DIR__ . '/Genre.php';
//CLASSE PRODUCTION
class Production{
    public $title;
    public $language;
    public $rate;
    public $genre;
    //COSTRUTTORE
    function __construct(string $_title, string $_language, int $_rate, Genre $_genre) {
        $this -> setTitle($_title);
        if($_language !== ''){
            $this -> setLanguage($_language);
        } else {
            $this-> language = 'Nessuna lingua';
        }
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
?>