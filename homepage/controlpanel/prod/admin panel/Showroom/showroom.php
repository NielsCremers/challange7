<?php
  include 'action.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/showroom.css">
    <title>Control Panel!</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-10">
         <center> <h3 style="color: purple">Auto toevoegen</h3> </center>
          <hr>
          <?php if (isset($_SESSION['response'])){ ?>
          <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
            <b><?= $_SESSION['response']; ?><b>
          </div>
          <?php } unset($_SESSION['response']); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
         <center> <h3 style="color: purple">Voeg een auto toe!</h3> </center>
          <form action="action.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="form-group">
              <input type="text" name="merk" value="<?= $merk; ?>" class="form-control" placeholder="Auto merk" required>
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="naam" value="<?= $naam; ?>" class="form-control" placeholder="Auto naam" required>
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="prijs" value="<?= $prijs; ?>" class="form-control" placeholder="Auto prijs" required>
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="kleur" value="<?= $kleur; ?>" class="form-control" placeholder="Auto kleur" required>
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="kilometerstand" value="<?= $kilometerstand; ?>" class="form-control" placeholder="Kilometerstand" required>
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="paardenkracht" value="<?= $paardenkracht; ?>" class="form-control" placeholder="Paardenkracht" required>
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="bouwjaar" value="<?= $bouwjaar; ?>" class="form-control" placeholder="Bouwjaar" required>
            </div>
            <br>
            <div class="form-group">
              <input type="text" name="brandstof" value="<?= $brandstof; ?>" class="form-control" placeholder="Brandstof" required>
            </div>
            <br>
            
            <br>
            <div class="form-group">
              <input type="hidden" name="oldimage" value="<?= $foto; ?>">
              <input type="hidden" name="oldimage2" value="<?= $foto2; ?>">
              <input type="hidden" name="oldimage3" value="<?= $foto3; ?>">
              <input type="hidden" name="oldimage4" value="<?= $foto4; ?>">
              <h6>Foto 1:</h6>
              <input type="file" name="foto" class="custom-file">
              <img src="<?= $foto; ?>" width="120" class="img-thumbnail">
              <h6>Foto 2:</h6>
              <input type="file" name="foto2" class="custom-file">
              <img src="<?= $foto2; ?>" width="120" class="img-thumbnail2">
              <h6>Foto 3:</h6>
              <input type="file" name="foto3" class="custom-file">
              <img src="<?= $foto3; ?>" width="120" class="img-thumbnail3">
              <h6>Foto 4:</h6>
              <input type="file" name="foto4" class="custom-file">
              <img src="<?= $foto4; ?>" width="120" class="img-thumbnail4">
            </div>
            <br>
            <div class="form-group">
              <?php if($update==true){ ?>
                <input type="submit" name="update" class="btn btn-secondarybtn-block" value="Auto bijwerken!">
              <?php } else { ?>
                <input type="submit" name="add" class="btn btn-secondary btn-block" value="Auto te koop zetten!">
              <?php } ?>
            </div>
          </form>
        </div>
        <div class="col-md-8">
          <?php
            $query="SELECT * FROM tb_autos";
            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result=$stmt->get_result();
          ?> 
         <center> <h3 style="color: purple">Bestaande Auto's</h3> </center>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>Foto</th>
                <th>Merk</th>
                <th>Naam</th>
                <th>Prijs</th>
                <th>Kleur</th>
                <th>Kilometerstand</th>
                <th>PK</th>
                <th>Bouwjaar</th>
                <th>Brandstof</th>
              </tr>
            </thead>
            <tbody>
            <?php while($row=$result->fetch_assoc()) { ?>
              <tr>
                <td><?= $row['id']; ?></td>
                <td><img src="<?= $row['foto']; ?> "width="30"><img src="<?= $row['foto2']; ?> "width="30"><img src="<?= $row['foto3']; ?> "width="30"><img src="<?= $row['foto4']; ?> "width="30"></td>
                <td><?= $row['merk']; ?></td>
                <td><?= $row['naam']; ?></td>
                <td><?= $row['prijs']; ?></td>
                <td><?= $row['kleur']; ?></td>
                <td><?= $row['kilometerstand']; ?></td>
                <td><?= $row['paardenkracht']; ?></td>
                <td><?= $row['bouwjaar']; ?></td>
                <td><?= $row['brandstof']; ?></td>

                <td>
                <a href="details.php?details=<?= $row['id']; ?>" class="btn btn-secondary ">Informatie!</a> 
                  <a href="showroom.php?edit=<?= $row['id']; ?>" class="btn btn-warning ">Bijwerken!</a> 
                  <a href="action.php?delete=<?= $row['id']; ?>" class="btn btn-danger " onclick="return confirm('Weet je zeker dat je deze auto wilt verwijderen?')">Verwijderen!</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>