<?php
require_once __DIR__ . '/production.php';

//CLASSE TVSERIE
class TVSerie extends Production {
    public $seasons; 
    //COSTRUTTORE
    function __construct(string $_title, string $_language, int $_rate, Genre $_genre, int $_seasons){
        parent::__construct( $_title, $_language, $_rate, $_genre);
        $this -> setSeasons($_seasons);
    }
    //ACQUISIZIONE NUMERO STAGIONI
    public function setSeasons(int $new_seasons) : void{
        if(is_numeric($new_seasons)){
            $this-> seasons = intval($new_seasons);
        }
    }
}
?>