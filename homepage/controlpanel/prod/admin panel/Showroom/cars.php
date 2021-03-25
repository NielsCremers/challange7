<?php
  include 'action.php';
  include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/nav.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                $sql = "SELECT * FROM tb_autos";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-3 mt-3">
                <div class="card">
                    <img src="<?php echo $row['foto']?>" alt="card-photo">
                    <div class="card-body">
                      <center>  <h4 class="card-title text-center"><?php echo $row['naam'] ?></h4>  </center>
                      <center>  <h3 class="card-prijs text-center">€ <?php echo $row['prijs'] ?></h3>  </center>
                      <center>  <a href="details.php?details=<?= $row['id']; ?>" class="btn btn-primary">Klik hier voor meer informatie!</a>  </center>
                    </div> 
                </div>
            </div>

            <?php 

            }

            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>