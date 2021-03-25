<?php
session_start();

if(isset( $_SESSION['user']['isloggedon'] )) {

     if ( $_SESSION['user']['isloggedon'] == false) {
		$_SESSION['user']['isloggedon'] = false;
          header("location: index.php"); die;
     }
} else {
		$_SESSION['user']['isloggedon'] = false;
     header("location: login.php"); die;
}

?>