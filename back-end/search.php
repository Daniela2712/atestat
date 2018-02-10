<?php
// conecteaza la baza de date
require_once("config.php");


$val =$_GET['search'];           // Variabila ce contine valoarea pt. coloana cautata

// interogare sql SELECT
$sql = "SELECT * FROM `produse`
            WHERE (`nume` LIKE '%".$val."%') OR (`descriere` LIKE '%".$val."%')";
// executa interogarea si retine datele returnate
$result = mysql_query($sql);
// daca $result contine cel putin un rand
if (mysql_num_rows($result)> 0) {
	
	
	while($result = mysql_fetch_array($sql)){             
                echo "<p><h3>".$result['nume']."</h3>".$result['descriere']."</p>";
            }           
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }    
    
?>
	
