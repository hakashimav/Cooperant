<?php
$server = "localhost";
$db = "cooperant";
$user = "root";
$mdp = "";
$con = mysqli_connect($server, $user, $mdp, $db) or die("Connexion non reussit");
mysqli_select_db($con, $db); 
?>