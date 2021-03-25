<?php
    include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <link rel="stylesheet" href="css/details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body> 

    <div class="blog-post">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                
                <div class="slide first">
                    <img src="<?= $vfoto; ?>" alt="">
                </div>
                <div class="slide">
                    <img src="<?= $vfoto2; ?>" alt="">
                </div>
                <div class="slide">
                    <img src="<?= $vfoto3; ?>" alt="">
                </div>
                <div class="slide">
                    <img src="<?= $vfoto4; ?>" alt="">
                </div>
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>

        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter > 4){
                    counter = 1;
                }
            }, 5000);
        </script>
        <div class="blog-post__info">
            <h1 class="blog-post__merk"><?= $vmerk; ?></h1>
            <p class="blog-post__naam"><?= $vnaam; ?></p>
            <br>
            <p class="blog-post__prijs">€<?= $vprijs; ?></p>
            <p class="blog-post__kleur">Kleur: <br><?= $vkleur; ?></p>
            <p class="blog-post__kilometerstand">Kilometerstand: <br><?= $vkilometerstand; ?> km</p>
            <p class="blog-post__paardenkracht">Paardenkracht: <br><?= $vpaardenkracht; ?> pk</p>
            <p class="blog-post__bouwjaar">Bouwjaar:<br> <?= $vbouwjaar; ?></p>
            <p class="blog-post__brandstof">Brandstof: <br><?= $vbrandstof; ?></p>
            <a class="btn btn-dark" href="../../../../kantinetest/index.php" role="button">Offerte invullen!</a>
            <a class="btn btn-dark" href="autos.php" role="button">Teruggaan!</a>
        </div>
    </div>
</body>
</html>