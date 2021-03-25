<!doctype html>
<head>
<title> Welkom! </title>
<link rel="stylesheet" href="../css/welkom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php include_once 'check.php';?>
<center><h1> Welkom op het medewerkers platform! </h1></center>
<div id="mySidenav" class="sidenav">
<h1> V!ST@CARS </h1>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="btn btn-dark" href="./prod/admin panel/Showroom/showroom.php" role="button">Producten Toevoegen!</a>
  <a class="btn btn-dark" href="uitloggen.php" role="button">Uitloggen!</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<h1> Huidige orders:
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Id</th><th>Naam</th><th>E-mail</th><th>Bericht</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kantine";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tb_menuitem");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
