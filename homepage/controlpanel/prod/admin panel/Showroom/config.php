<?php
    $conn= new mysqli("localhost", "root", "", "db_showroom");

    if($conn->connect_error){
        die("Could not connect to the database!".$conn->connect_error);
    }
?>