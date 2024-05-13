<!-- PHP -->
<?php

require_once __DIR__ . '/db.php';


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
            <!-- MOVIES -->
            <div class="container">
                <h2 class="text-center my-2">I FILM</h2>
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
                                            <span class="fw-bold">Lingua originale: </span> 
                                            <span><?php echo $movie->language?></span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Voto: </span> 
                                            <span><?php echo $movie->rate?></span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Genere: </span> 
                                            <span><?php echo $movie->genre->name?></span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Età minima : </span> 
                                            <span><?php echo $movie->genre->min_age?>+</span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Durata: </span> 
                                            <span><?php echo $movie->length?> minuti</span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Incassi: </span> 
                                            <span><?php echo $movie->profits ?>€</span>
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
            <!-- TVSERIES -->
            <div class="container">
                <h2 class="text-center my-4">LE SERIE</h2>
                <div class="row row-cols-3">
                    <?php
                    foreach ($tvseries as $serie) {
                        ?>
                        <div class="col p-2">
                            <div class="card" >
                                <div class="card-body">
                                    <h5 class="text-center card-title"><?php echo $serie->title?></h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <span class="fw-bold">Lingua originale: </span> 
                                            <span><?php echo $serie->language?></span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Voto: </span> 
                                            <span><?php echo $serie->rate?></span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Genere: </span> 
                                            <span><?php echo $serie->genre->name?></span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Età minima : </span> 
                                            <span><?php echo $serie->genre->min_age?>+</span>
                                        </li>
                                        <li>
                                            <span class="fw-bold">Stagioni: </span> 
                                            <span><?php echo $serie->seasons?></span>
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