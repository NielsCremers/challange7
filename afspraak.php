<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/afsoraak.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Afspraak inplannen!</title>
</head>
<body>
<div class="banner">
<img src="https://www.abcautos.nl/fileadmin/_processed_/b/9/csm_autos_wormerveer_c011c346cd.png">
</div>
<center><h1> Hieronder kunt u afspraken plannen! </h1></center>
<center>
<div class="form">
<form action="process.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
<input type="text" name="tb_customer_id" value="" placeholder="Naam Klant" required  /> <br  />
</div>
<div class="mb-3">
<input type="text" name="tb_email" value="" placeholder="Mail klant" required /> <br />
</div>
<div class="mb-3">
<input type="text" name="tb_mobile" value="" placeholder="Telefoonummer klant" required /> <br />
</div>
<div class="mb-3">
<input type="text" name="tb_status" value="" placeholder="werkzaamheden" required /> <br />
</div>
<div class="mb-3">
<input type="text" name="tb_date_start_appointment" value="" placeholder="Datum" required /> <br />
</div>
<div class="mb-3" >
<input type="submit" name="btn_submit" value="verzenden" class="btn btn btn-primary" required />
</div>
</div>
</form>
</center>
</body>
</html>