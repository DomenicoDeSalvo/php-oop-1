<?php
//CLASSE GENRE
class Genre {
    public $name;
    public $min_age;
    //COSTRUTTORE
    function __construct(string $_name = 'Non specificato', int $_min_age = 3 ){
        $this -> setName($_name);
        $this -> setMinAge($_min_age);   
    }
    //ACQUISIZIONE NOME GENERE
    public function setName(string $new_name) : void{
        $this -> name = $new_name;
    }
    //ACQUISIZIONE ANNO
    public function setMinAge(int $new_min_age) : void{
        if(is_numeric($new_min_age)){
            $this -> min_age = intval($new_min_age);
        }
    }
}
?>