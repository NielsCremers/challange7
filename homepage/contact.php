<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="./content/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/contact.css">
</head>
<body>
<?php include_once './php/navbar.php';?>
<div class="gegevens">
<?php include_once './php/footer.php' ?>
<div id="cirkelcontainer footer-placement">
        <div id="cirkel">
        </div>
    </div>
<center> 
</center>
<div class="gegevens">
<div class="h3">
 <div class="p">
<h3>Voor vragen</h3>
<p class="font1"> Wij als V!stacars hebben natuurlijk ook
    <br> een contactpagina
    Dit hebben we zodat jullie voor vragen ons een email kunnen sturen 
    <br>
    hiernaast ziet u onze contactgegevens staan met daarnaast
    <br>
     een folder
    waar u zelf een mailtje kan opstellen, wij proberen elke dag onze mail 
    <br>
     te controleren
     <br>
    meestal krijgt u binnen 2 tot 4 werkdagen een berichtje terug.
</p>

















</p>
<center><h4>  
</div>
</center>
<?php include_once './php/footer.php' ?>
<!-- dit is nog niet af -->
</div>
</body>

</div>

<div class="container">
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Contact gegevens</h3>
                    <p class="text">
                    </p>
                    <div class="info">
                        <div class="information">
                            <img src="img/locationicon.webp" class="icon" alt="">
                            <p>Maastricht, Sittard en Heerlen (Binnenkort ook in Roermond en Venlo)</p>
                        </div>
                        <div class="information">
                            <img src="img/mailicon.webp" class="icon" alt="">
                            <p>info@vistacars.nl</p>
                        </div>
                        <div class="information">
                            <img src="img/phoneicon.png" class="icon" alt="">
                            <p>+31 (0)6 00 11 55 11</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="homepage.php">
                        <h3 class="title">Voor contact kunt u hieronder een email sturen.</h3>
                        <div class="input-container">
                            <input type="text" name="name" class="input">
                            <label for="">Volledige naam</label>
                          
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" class="input">
                            <label for="">E-mailadres</label>
                         
                        </div>
                        <div class="input-container">
                            <input type="tel" name="phone" class="input">
                            <label for="">Telefoonnummer</label>
                            
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Bericht</label>
                           
                        </div>
                    
 
                        <input type="submit" value="Versturen" class="submit">
                    </form>
                </div>
            </div>
        </div>
        <script src="./js/formulier.js"></script>
    </body>
</html>
</body>