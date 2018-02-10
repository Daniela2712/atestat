<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylels.css">
</head>
<body>
<h2 style="text-align:center; margin-top:30px;">Inregistrare</h2>

<form action="../back-end/prelucrare.php" method="POST" style="margin-top:60px;">
  <div class="container">

    <label><b>Nume</b></label>
    <input type="text" placeholder="Nume" name="nume" >

    <label><b>Prenume</b></label>
    <input type="text" placeholder="Prenume" name="prenume" >

    <label><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" >

    <label><b>Telefon</b></label>
    <input type="text" placeholder="Telefon" name="telefon" >

    <label><b>Adresa</b></label>
    <input type="text" placeholder="Adresa" name="adresa"  >
	
	<label><b>Parola</b></label>
    <input type="password" placeholder="Parola" name="parola"  >
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


</body>
</html>
