<?php

require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/tvserie.php';

//ARRAY FILM
$movies = array(
    new Movie ('Interstellar','Inglese', 9, new Genre ('Fantascienza',2014), 640000000, 169),
    new Movie ('Avatar 2', 'Inglese', 8, new Genre ('Fantascienza',2022), 2300000000, 192),
    new Movie ('Dunkirk', 'Inglese', 9, new Genre ('Drammatico',2017), 520000000, 106),
    new Movie ('Il ragazzo e l\'airone', 'Giapponese', 8, new Genre ('Fantastico',2023), 294200000, 124),
    new Movie ('Good Bye, Lenin!', 'Tedesco', 8, new Genre ('Drammatico',2003), 79000000, 121),
    new Movie ('Il mio amico Robot', 'Muto', 7, new Genre ('Musical',2023), 3500000, 102),
    new Movie ('Civil War', 'Inglese', 7, new Genre ('Drammatico',2024), 103000000, 109),
    new Movie ('Dune 2', 'Inglese', 8, new Genre ('Drammatico',2024), 708000000, 165),
    new Movie ('Grazie Ragazzi', 'Italiano', 7, new Genre ('Commedia',2023), 2900000, 117),
);

//ARRAY SERIE
$tvseries = array(
    new TVSerie ('Breaking Bad','Inglese', 9, new Genre ('Drammatico',2008), 5),
    new TVSerie ('Better Call Saul', 'Inglese', 9, new Genre ('Drammatico',2015), 6),
    new TVSerie ('The Mandalorian', 'Inglese', 8, new Genre ('Avventura',2019), 3),
    new TVSerie ('BoJack Horsenman ', 'Inglese', 9, new Genre ('Commedia Drammatica',2014), 6),
    new TVSerie ('The Good Place', 'Inglese', 7, new Genre ('Commedia',2016), 4),
    new TVSerie ('Brooklin 99', 'Inglese', 9, new Genre ('Commedia',2013), 8),
    new TVSerie ('L\'attacco dei Giganti', 'Giapponese', 9, new Genre ('Azione',2015), 4),
    new TVSerie ('I Topi', 'Italiano', 7, new Genre ('Commedia',2018), 2),
    new TVSerie ('One Punch Man', 'Giapponese', 9, new Genre ('Azione',2015), 2),
);

?>