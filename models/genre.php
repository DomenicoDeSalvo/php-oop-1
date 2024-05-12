<?php
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
?>