<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "shop";
$conexiune = mysql_connect($server, $username,$password);
if (!$conexiune) {
    die("Connection failed: " . mysqli_connect_error());
}
if($conexiune){
echo "Connected successfully <br>";
mysql_select_db($database,$conexiune)  or die("Nu gasesc baza de date!");
}


//


?>
