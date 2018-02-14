<?php
require_once('config.php');
$_SESSION['nume'] = $_POST['nume'];
$_SESSION['prenume'] = $_POST['prenume'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['adresa'] = $_POST['adresa'];
$_SESSION['telefon'] = $_POST['telefon'];
 $_SESSION['parola'] = $_POST['parola'];
if(($_SESSION['nume'] == "") || ($_SESSION['prenume'] == "") || ($_SESSION['email'] == "") ||
(!is_numeric($_SESSION['telefon'])) || ($_SESSION['adresa'] == "") || ($_SESSION['parola'] == "") )
 {
   echo 'Nu ai introdus date in formular sau cele introduse nu sunt corecte. <br>';
      }
     else {
       echo 'Va multumim. <br>        Datele au fost introduse cu succes in baza de date. <br>';
	   
 $cerereSQL = "INSERT INTO `utilizatori` (`Name`, `Last-name`, `Email`,`Telefon`,`Adress`,`Password`)
   VALUES ('".$_SESSION['nume']."', '".$_SESSION['prenume']."', '".$_SESSION['email']."', '".$_SESSION['telefon']."', '".$_SESSION['adresa']."', '".$_SESSION['parola']."');";
    mysql_query($cerereSQL);
  

}

?>
