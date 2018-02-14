
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <title>Atestat Informatica</title>
</head>
<body>
  <div id="header">
        <img src="resources/titlu.jpg" style="width:25%; height:90%;">
        <img src="resources/pc.png" style="width:5%; height:50%;">
        <div id="right">
                <form action="search.php" method="GET">
                    <div id="s">
                          <input type="image" src="resources/search.png" value="submit " alt="" class="search" name="search">
                    </div>
                          <input type="text" name="search" placeholder="Search.." ><br>
                </form>
              <ul class="ul1">
                    <div id="cart">
                          <li class="li1"><a href="cart.php" target="_self"><img src="resources/cart.png" style="width:17px; height:15px; padding-bottom:2px;"><cite style="font-size:10.5px;"><br>Cos de cumparaturi</cite></a>
                          </li>
                    </div>
                    <div id="cont">
                                <li class="dropdown">
                                  <a href="javascript:void(0)" class="dropbtn"><img src="resources/client.png" class="dropbtn" style="width:17px; height:17px; padding-bottom:2px;padding-top:0.5%;padding-left:13%;"><cite style="font-size:10.5px;padding-bottom:5%;"><br>Cont<br>client</cite></a>
                          <div class="dropdown-content">
                                  <a href="autentificare.php" target="_self">Autentificare</a>
                                  <a href="inregistrare.php" target="_self">Creeaza un cont</a>
                          </div>
                                </li>
                    </div>
              </ul>
          </div>
  </div>
  <div id="navbar">
          <img src="resources/titlu_b.jpg" style="float:left; width:20%; height:70%; margin-top:0.2%; margin-left:2%; ">
          <div class="cart2">
                <a href="cart.php" target="_self"><img src="resources/cart.png" style="width:35%; height:45%;margin-bottom:5px;"></a>
          </div>
          <div class="cont2">
                <a href="autentificare.php"><img src="resources/client.png" style="width:35%; height:60%;"></a>
          </div>
  </div>
  <script>
                    // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function() {scrollFunction()};
              function scrollFunction() {
                  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                      document.getElementById("navbar").style.top = "0";
                } else {
                      document.getElementById("navbar").style.top = "-50px";
                        }
                    }
  </script>
  </div>
  <div id="content">
        <iframe src="" id="iframe" name="iframe">
        </iframe>
  </div>
  <div id="menu">
    <div id="vertical-menu">
  <ul>
      <li><a href="#" ><img src="resources/hardware.png" style="width:7%; height:4%; margin-right:3%;">Componente PC</a></li>
              <ul>
                  <li><a href="#">bla</a></li>
                  <li><a href="#">bla</a></li>
                  <li><a href="#">bla</a></li>
              </ul>
       <li><a href="#" ><img src="resources/mouse.png" style="width:7%; height:3%; margin-right:3%;">Periferice PC</a></li>
       <li><a href="#"><img src="resources/softwere.png" style="width:7%; height:3%; margin-right:3%;">Softwere</a></li>
       <li><a href="#"><img src="resources/print.png" style="width:7%; height:3%; margin-right:3%;">Imprimante</a></li>
       <li><a href="#"><img src="resources/scaner.png" style="width:8%; height:4%; margin-right:3%;">Scanere</a></li>
       <li><a href="#"><img src="resources/camera.png" style="width:8%; height:4%; margin-right:3%;">Retelistica si Supraveghere</a></li>
       <li><a href="#"><img src="resources/laptop.png" style="width:8%; height:4%; margin-right:3%;">Laptopuri si Accesorii</a></li>
       <li><a href="#" ><img src="resources/joystick.png" style="width:8%; height:4%; margin-right:3%;"> PC Gaming</a></li>
       <li><a href="#"><img src="resources/joystick.png" style="width:8%; height:4%;margin-right:3%;">Accesorii PC Gaming</a></li>
       <li><a href="#"><img src="resources/playstation.gif" style="width:8%; height:4%; margin-right:3%;">Playstation</a></li>
  </ul>
</div>









          <!--  <div class="vertical-menu">
      <ul>
            <li><a href="#" ><img src="resources/hardware.png" style="width:7%; height:4%; margin-right:3%;">Componente PC</a></li>
            <ul>
              <li><a href="#">hdgjysd</a></li>
              <li><a href="#">shjhsa</a></li>
              <li><a href="#">jhasjhas</a></li>
            </ul>
            <li><a href="#" ><img src="resources/mouse.png" style="width:7%; height:3%; margin-right:3%;">Periferice PC</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
            <li><a href="#"><img src="resources/softwere.png" style="width:7%; height:3%; margin-right:3%;">Softwere</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
            <li><a href="#"><img src="resources/print.png" style="width:7%; height:3%; margin-right:3%;">Imprimante</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
            <li><a href="#"><img src="resources/scaner.png" style="width:8%; height:4%; margin-right:3%;">Scanere</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
            <li><a href="#"><img src="resources/camera.png" style="width:8%; height:4%; margin-right:3%;">Retelistica si Supraveghere</a></li>
            <ul>
             <li><a href="#"></a></li>
            </ul>
            <li><a href="#"><img src="resources/laptop.png" style="width:8%; height:4%; margin-right:3%;">Laptopuri si Accesorii</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
            <li><a href="#" ><img src="resources/joystick.png" style="width:8%; height:4%; margin-right:3%;"> PC Gaming</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
            <li><a href="#"><img src="resources/joystick.png" style="width:8%; height:4%;margin-right:3%;">Accesorii PC Gaming</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
            <li><a href="#"><img src="resources/playstation.gif" style="width:8%; height:4%; margin-right:3%;">Playstation</a></li>
            <ul>
              <li><a href="#"></a></li>
            </ul>
      </ul>
    </div>-->
  </div>
  <div id="footer">

  </div>

</body>
</html>
