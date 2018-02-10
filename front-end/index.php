
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylenotepad.css">
<title>Atestat Informatica</title>
</head>
<body>

<div id="header">
  <img src="titlu.jpg" style="width:25%; height:90%;">
    <img src="pc.png" style="width:5%; height:50%;">
  <div id="right">
    <form action="../back-end/search.php" method="GET">
      <div id="s">
<input type="image" src="search.png" value="submit " alt="" class="search" name="search">
</div>
  <input type="text" name="search" placeholder="Search.." ><br>
    </form>
    <ul class="ul1">
      <div id="cart">
      <li class="li1"><a href="../back-end/cart.php" target="_self"><img src="cart.png"
         style="width:17px; height:15px; padding-bottom:2px;"><cite style="font-size:10.5px;"><br>Cos de cumparaturi</cite></a>
      </li>
</div>
<div id="cont">
      <li class="dropdown">
<a href="javascript:void(0)" class="dropbtn"><img src="client.png" class="dropbtn"
  style="width:17px; height:17px; padding-bottom:2px;padding-top:0.5%;padding-left:13%;"><cite style="font-size:10.5px;padding-bottom:5%;"><br>Cont<br>client</cite></a>
<div class="dropdown-content">
  <a href="autentificare.html" target="_self">Autentificare</a>
  <a href="inregistrare.php" target="_self">Creeaza un cont</a>
</div>
</li>
</div>
    </ul>
  </div>
</div>
<div id="navbar">
  <img src="titlu3.png" style="float:left; width:20%; height:70%; margin-top:0.2%; margin-left:2%; ">

<div class="cart2">
  <a href="../back-end/cart.php" target="_self"><img src="cart.png"
       style="width:35%; height:45%;margin-bottom:5px;"></a>
     </div>
     <div class="cont2">
  <a href="autentificare.html"><img src="client.png"
  style="width:35%; height:60%;"></a>
</div>
</div>


                  <script>
                  // When the user scrolls down 20px from the top of the document, slide down the navbar
                  window.onscroll = function() {scrollFunction()};

                  function scrollFunction() {
                      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                          document.getElementById("navbar").style.top = "0";
                      } else {
                          document.getElementById("navbar").style.top = "-40px";
                      }
                  }
                  </script>
</div>
<div id="content">
  <iframe src="" id="iframe" name="iframe">
  </iframe>

</div>

<div id="menu">

  <div class="vertical-menu">
  <a href="componente.php" target="iframe"><img src="hardware.png" style="width:7%; height:4%; margin-right:3%;">Componente PC</a>
  <a href="periferice.php" target="iframe"><img src="mouse.png" style="width:7%; height:3%; margin-right:3%;">Periferice PC</a>
  <a href="softwere.php" target="iframe"><img src="softwere.png" style="width:7%; height:3%; margin-right:3%;">Softwere</a>
  <a href="printing.php" target="iframe"><img src="print.png" style="width:7%; height:3%; margin-right:3%;">Imprimante</a>
  <a href="scanere.php" target="iframe"><img src="scaner.png" style="width:8%; height:4%; margin-right:3%;">Scanere</a>
  <a href="supraveghere.php" target="iframe"><img src="camera.png" style="width:8%; height:4%; margin-right:3%;">Retelistica si Supraveghere</a>
  <a href="laptopuri.php" target="iframe"><img src="laptop.png" style="width:8%; height:4%; margin-right:3%;">Laptopuri si Accesorii</a>
  <a href="gaming.php" target="iframe"><img src="joystick.png" style="width:8%; height:4%; margin-right:3%;"> PC Gaming</a>
  <a href="agaming.php" target="iframe"><img src="joystick.png" style="width:8%; height:4%;margin-right:3%;">Accesorii PC Gaming</a>
  <a href="playstation.php" target="iframe"><img src="playstation.gif" style="width:8%; height:4%; margin-right:3%;">Playstation</a>

</div>
</div>
<div id="footer">

</div>

</body>
</html>
