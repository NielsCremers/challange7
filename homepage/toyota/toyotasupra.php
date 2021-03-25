<!DOCTYPE html>
<htmls lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Offferte aanvragen!</title>
        <link rel="stylesheet" href="toyota.css" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js%22%3E"></script>
    </head>
    <body>
        <!-- Buttons -->
        <div class="button">
            <center><a>Offerte aanvragen!</a></center>
        </div>
        <!-- Nav bar -->
        <input type="checkbox" id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
        <header><i></i>Menu<i></i></header>
        <ul>
            <li><a href="homepage.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="over ons.php"><i class="fas fa-file"></i></i>Over ons</a></li>
            <li><a href="corona.php"><i class="fas fa-hands-wash"></i>Covid 19</a></li>
            <li><a href="showroom.php"><i class="fas fa-car"></i></i>Showroom</a></li>
            <li><a href="contact.php"><i class="far fa-envelope"></i>Contact</a></li>
        </div>
        <!-- Contact Page -->
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
                        <h3 class="title">Stuur een mail voor een offerte</h3>
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
                        <div class="input-container textarea">
                        <h1 style="color:white"> De door u geselecteerde auto: Toyota Corolla. </h1>
                        </div>
 
                        <a class="submit" href="../homepage.php">Versturen</a>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/formulier.js"></script>
    </body>
</html>