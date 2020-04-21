<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
        <title></title>
    </head>
    <body>
        <header>
            <nav class="navbar">

            </nav>
        </header>
        <main>
            <?php include 'database.php' ?>


            <?php foreach ($albumsajax as $key => $album) { ?>
            <div class="card">
                <div class="immagine"> <img src="<?php echo $album['immagine'] ?>" alt=""></div>
                <h2> <?php echo $album['titolo'] ?></h2>
                <p> <?php echo $album['artista'] ?></p>
                <span> <?php echo $album['data'] ?></span>
            </div>
            <?php } ?>

            <div class="maincard">

            </div>
        </main>





            <script id="card-template" type="text/x-handlebars-template">
                <div class="card">
                    <div class="immagine"> <img src=" {{immagine}}" alt=""></div>
                    <h2>{{titolo}}</h2>
                    <p>{{{artista}}}</p>
                    <span>{{anno}}</span>
                </div>
            </script>

            <script src="dist/js/app.js" charset="utf-8"></script>

    </body>
</html>
