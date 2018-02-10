

<?php

require_once("config.php");

//  verifica daca exista date transmise
if ($_POST['email'] != "" && $_POST['parola'] != '') {
    // preia datele din formular
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    // formeaza si executa query-ul de select din baza de date
    $query = "SELECT * FROM `users` WHERE `Email` = '$email' AND `Password` = '$parola'";
    $result = mysql_query($query) or die ( "Error : ". mysql_error() );
    // verifica daca interogarea MySQL a gasit date valide
    if ( mysql_num_rows($result) < 1) {

        // daca nu, afiseaza un mesaj de eroare
        echo "Datele introduse sunt incorecte<br>
            Click <a href='../front-end/autentificare.html'>aici</a> pentru a reveni la pagina de login";
    } else {

        // salveaza username-ul si parola in sesiune
        $_SESSION['email'] = $email;
        $_SESSION['parola'] = $parola;

        // afiseaza un mesaj de succes
        echo "Autentificarea a fost efectuata cu succes.";
    }
}
?>
