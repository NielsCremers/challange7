<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offerte!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <center> 
<div class="randje">
<h1> Vul hier je offerte in! </h1>
<form action="index.php" encytype="multipart/form-data" method="post">
<div class="col-auto">
<input type="text" class="form-control" name="tb_naam" value="" placeholder="Vul hier de naam in!" /> <br  />
</div>
<div class="col-auto">
<input type="text" class="form-control" name="tb_email" value="" placeholder="Vul hier je email in!" /> <br />
</div>
<div class="col-auto">
<input type="text"  class="form-control" name="tb_bericht" value="" placeholder="Vul hier je bericht in!" /> <br />
</div>
<div class="col-auto">
<input type="hidden" name="FrmGegevens" value="hidden" placeholder="Vul hier de formgegevensin"/> <br  />

<div class="submit">
<input type="submit" class="btn btn-success" name="btn_submit" value="verzenden" />
</div>
</div>
</div>
</form>
 </center>
</body>
</html>