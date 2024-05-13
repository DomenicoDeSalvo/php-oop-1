<?php

require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/tvserie.php';

//ARRAY FILM
$movies = array(
    new Movie ('Interstellar','Inglese', 9, new Genre ('Fantascienza',13), 640000000, 169),
    new Movie ('Avatar 2', 'Inglese', 8, new Genre ('Fantascienza',13), 2300000000, 192),
    new Movie ('Dunkirk', 'Inglese', 9, new Genre ('Drammatico',13), 520000000, 106),
    new Movie ('Il ragazzo e l\'airone', 'Giapponese', 8, new Genre ('Fantastico',10), 294200000, 124),
    new Movie ('Good Bye, Lenin!', 'Tedesco', 8, new Genre ('Drammatico',16), 79000000, 121),
    new Movie ('Il mio amico Robot', '', 7, new Genre ('Musical'), 3500000, 102),
    new Movie ('Civil War', 'Inglese', 7, new Genre ('Drammatico',18), 103000000, 109),
    new Movie ('Dune 2', 'Inglese', 8, new Genre ('Drammatico',13), 708000000, 165),
    new Movie ('Grazie Ragazzi', 'Italiano', 7, new Genre ('Commedia',13), 2900000, 117),
);

//ARRAY SERIE
$tvseries = array(
    new TVSerie ('Breaking Bad','Inglese', 9, new Genre ('Drammatico',18), 5),
    new TVSerie ('Better Call Saul', 'Inglese', 9, new Genre ('Drammatico',18), 6),
    new TVSerie ('The Mandalorian', 'Inglese', 8, new Genre ('Avventura'), 3),
    new TVSerie ('BoJack Horsenman ', 'Inglese', 9, new Genre ('Commedia Drammatica',16), 6),
    new TVSerie ('The Good Place', 'Inglese', 7, new Genre ('Commedia'), 4),
    new TVSerie ('Brooklin 99', 'Inglese', 9, new Genre ('Commedia', 12), 8),
    new TVSerie ('L\'attacco dei Giganti', 'Giapponese', 9, new Genre ('Azione', 18), 4),
    new TVSerie ('I Topi', 'Italiano', 7, new Genre ('Commedia',7), 2),
    new TVSerie ('One Punch Man', 'Giapponese', 9, new Genre ('Azione',12), 2),
);

?>