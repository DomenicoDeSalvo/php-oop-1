<?php
require_once __DIR__ . '/production.php';

//CLASSE MOVIE
class Movie extends Production {
    public $profits;
    public $length; 
    //COSTRUTTORE
    function __construct(string $_title, string $_language, int $_rate, Genre $_genre, int $_profits, int $_length){
        parent::__construct( $_title, $_language, $_rate, $_genre);
        $this -> setProfits($_profits);
        $this -> setLength($_length);
    }
    //ACQUISIZIONE PROFITTI
    public function setProfits(int $new_profits) : void{
        if(is_numeric($new_profits)){
            $this-> profits = intval($new_profits);
        }
    }

    //ACQUISIZIONE LUNGHEZZA
    public function setLength(int $new_length) : void {
        if(is_numeric($new_length)){
            $this-> length = intval($new_length);
        }
    }
}
?>