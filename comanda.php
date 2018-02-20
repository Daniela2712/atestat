<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylef.css">
</head>

<body>
  <div id="container">
    <div id="header">
      <p>Detalii Comanda</p>
    </div>
    <div id="content">
<form action="p_comanda.php" method="get">
  Nume <input type="text" value="<?php require_once('config.php'); $cerereSQL ='SELECT * FROM `utilizatori`'; $rezultat = mysql_query($cerereSQL); while($rand = mysql_fetch_array($rezultat)){ echo $rand['Nume'];}?>">
  Prenume <input type="text" value="<?php require_once('config.php'); $cerereSQL ='SELECT * FROM `utilizatori`'; $rezultat = mysql_query($cerereSQL); while($rand = mysql_fetch_array($rezultat)){ echo $rand['Prenume'];}?>">
  Persoana: <input type="radio" value="fizica">Fizica
            <input type="radio" value="juridica">Juridica<br><br>
  Adresa <input type="text" value="<?php require_once('config.php'); $cerereSQL ='SELECT * FROM `utilizatori`'; $rezultat = mysql_query($cerereSQL); while($rand = mysql_fetch_array($rezultat)){ echo $rand['Adresa'];}?>">
  Judet <select>
    <option>Buzau</option>
    <option>Braila</option>
    <option>Brasov</option>
    <option>Covasna</option>
    <option>Galati</option>
    <option>Ilfov</option>
      </select>
      <br><br>
Oras<br><input type="text" name="oras" style="width:30%; float:left;">
<span>Cod postal</span><input type="text" name="cod_postal" style="width:30%; float:left; "><br><br><br>
Email<br><input type="text" value="<?php require_once('config.php'); $cerereSQL ='SELECT * FROM `utilizatori`'; $rezultat = mysql_query($cerereSQL); while($rand = mysql_fetch_array($rezultat)){ echo $rand['Email'];}?>">
Telefon <input type="text" value="<?php require_once('config.php'); $cerereSQL ='SELECT * FROM `utilizatori`'; $rezultat = mysql_query($cerereSQL); while($rand = mysql_fetch_array($rezultat)){ echo $rand['Telefon'];}?>">
<button type="submit" class="buton">Comanda</button>

</form>

   </div>
</div>
</body>
</html>
