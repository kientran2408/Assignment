<!DOCTYPE html>
<html>
<title>ATN Shop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
          <style type="text/css">
            body {
                    background-color: gray;
                    font-family: "Lato", sans-serif
            }
        </style>
</head>
<!--menu -->

    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-large w3-padding w3-hover-black" title="close menu">
      <i class="fa fa-remove"></i>
    </a> 
    <h4 style="text-align: center"><b> </b></h4>
    <p class="w3-text-grey"></p>
  </div>
    <br><br>
          <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <div class="w3-tag w3-large w3-brown w3-left">ATN Shop</div>
                <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOMEPAGE</a> 
                <a href="index-product.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw w3-margin-right"></i>PRODUCT</a> 
                <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
                <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelop fa-fw w3-margin-right"></i>CONTACT</a>
                <a href="admin.php" class="w3-bar-item w3-button w3-right fa fa-male">ADMIN</a>  
              </div>
            </div>   
  </div>
  
<!--End of menu -->

  <!-- Header -->
  <header>
      <div class="w3-container ">  
                <h1 style="text-align: center;color: black;font-family: Bahnschrift">WELCOME TO THE WORLD OF FIGURE
                </h1>
        <div class="w3-content" style="max-width:2000px;margin-top:46px">
          <div class="mySlides w3-display-container w3-center">
            <img src="images/naruto.jpg" style="width:50%">
          </div>
          <div class="mySlides w3-display-container w3-center">
            <img src="images/pikachu.jpg" style="width:50%">
          </div>
          <div class="mySlides w3-display-container w3-center">  
            <img src="images/onepiece.jpg" style="width:60%">
          </div>
        </div>
      </div>
  </header>
  <!--End of Header -->
        


  <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->

    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-large w3-padding w3-hover-red" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
        
    <h4 style="text-align: center"><b> </b></h4>
    <p class="w3-text-grey"></p>
  </div>
    <br><br>
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-arrow-left fa-fw w3-margin-right"></i>HOMEPAGE</a>
                <a href="admin.php" class="w3-bar-item w3-button w3-right fa fa-male w3-hover-red">ADMIN</a>     
            </div>
</nav>
<!--End of Sidebar/menu -->

  <!-- Header -->

  <!--End of Header -->
  
    <div class="container w3-padding-large" id="portfolio">
        <div class="w3-bottombar">
            
            <div class="w3-panel w3-border w3-gray w3-round-large w3-padding-16">        
                <p class="w3-xlarge w3-serif " style="text-decoration: underline " align="middle">__________________________________CATALOGUE__________________________________</p>             

                <?php 
                    include("catalogue.php");
                ?>

                <?php
                echo "<table >";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
                {    
                    echo "<tr>";
                        for($i=1;$i<=7;$i++)
                        {
                            echo "<td width='78px'>";
                                if($row!=false)
                                {
                                    $ID = $row ['cid'];
                                    $link="?direct=show_product&id=".$ID;        
                                    echo "<a href='$link' class='w3-button w3-black w3-border w3-round-large'>" ;
                                    $Name = $row ['cname'];                                               
                                    echo "$Name";
                                }
                                 else 
                                {
                                    echo "&nbsp;";
                                }
                            echo "</td>";

                            if($i!=7)
                            {
                                $row = $stmt->fetch();
                            }
                        }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
    
  <!-- Product container-->  
    <div class="w3-bottombar">
        <?php 
            include("direction.php");
        ?>

       <?php
        echo "<table>";                
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
            {    
                echo "<tr>";
                    for($i=1;$i<=3;$i++)
                    {
                        echo "<td align='center' width='328px' height='228px' >";
                            if($row!=false)
                            {
                                $iId = $row['iid'];
                                $iName = $row['iname'];
                                $iDescription = $row['idescription'];
                                $iPrice = $row['iprice'];
                                $iStatus = $row['istatus'];
                                $iSize = $row['isize'];
                                $iImage = $row['iimage'];
                                $link_image = "./images/item/$iImage";
                                //$link_detail="?direct=product_detail&id=".$iId;

                                echo "<a href='$link_detail'>";
                                echo "<img src='$link_image' width='200px'>";
                                echo "</a>";
                                echo "<br>";  

                                
                                echo $iName;
                                echo "</a>";
                                echo "<br>";  

                                echo "Price: ".$iPrice," $";
                                echo "<br>";
                            }
                             else 
                            {
                                echo "&nbsp;";
                            }
                        echo "</td>";
                        if($i!=3)
                        {
                            $row = $stmt->fetch();
                        }
                    }
                echo "</tr>";
            }
        echo "</table>";
        ?>        
    </div> 
  
  <!-- ABOUT -->
  <div class="w3-gray" id="about">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="about">
      <h2 class="w3-wide w3-center" style="color: black">About</h2>
      <br>
        <div class="w3-col m6 w3-padding-large w3-hide-small">
        <img src="images/Minato.jpg" class="w3-round w3-image w3-opacity-min" alt="minato" width="302" height="218">
        </div>
        <h4 style="color: black"><b>WHAT IS FIGURE?</b></h4>
        <p>Figure is a model, a statue, any 3D product that reproduces a character in a movie, story, game, or drawing.</p>
        <p>Usually figure bears the shape of a human, sometimes a beast, a god, a goblin, a monster or even an alien creature ... any character thought of by the artist, sculpted into 3D called the figure.</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="w3-col m6 w3-padding-large w3-hide-small">
        <img src="images/kiritoasuna.jpg" class="w3-round w3-image w3-opacity-min" alt="coffee beans" width="302" height="218">
        </div>
        <h4 style="color: black"><b>WHAT IS JAPAN FIGURE?</b></h4>
        <p>These are figures created by Japanese artists, illustrating, creating and finishing in Japan.</p>
        <p>Because of being born in Japan, it is obvious that the Japan figure has Japanese culture, from Anime, Manga, Game, Light novel, J-pop to Virtual Singer and so on.</p>
        <p>With Japanese technology and a strictly supervised production process, the figure products are very well-executed, sharp details, vivid colors, precise expressions like the original character have satisfied many fans. fans all over the world.</p>
        <br>    
    </div>
  </div> 
</div>
  <!-- Contact Section -->
  <div class="w3-black" id="contact">
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
                <h2 class="w3-wide w3-center" style="color: white">Contact</h2>
                    <div class="w3-row w3-padding-32">
                    <div class="w3-col m6 w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker" style="width:30px"></i>Ha Noi, Vietnam<br>
                        <i class="fa fa-phone" style="width:30px"></i> Phone: +84751561621<br>
                        <i class="fa fa-envelope" style="width:30px"> </i> Email: atnshop@gmail.com<br>
                    </div>
                    <div class="w3-col m6">
                    <form action="/action_page.php" target="_blank">
                        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                            </div>
                        </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-button w3-white w3-section w3-right" type="submit">SEND</button>
                    </form>
                    </div>
                    </div>
            </div>
      </div>

  <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-hide-small">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <div class="copyright_text copyright_col w3-center">Copyright © 2019 The ATN Shop. All rights reserved.</div><!-- End page content -->

	<script>
		// Script to open and close sidebar
		function w3_open() {
		    document.getElementById("mySidebar").style.display = "block";
		    document.getElementById("myOverlay").style.display = "block";
		}
		 
		function w3_close() {
		    document.getElementById("mySidebar").style.display = "none";
		    document.getElementById("myOverlay").style.display = "none";
		}
	</script>

	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 3000); // Change image every 5 seconds
		}
	</script>
</body>
</html>
