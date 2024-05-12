<?php

require_once __DIR__ . '/models/production.php';

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