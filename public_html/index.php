<?php
  if(!isset($_SESSION))
    {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  html{
   
  transition: transform .2s; /* Animation */
    scroll-behavior: smooth;
  }
 
  #card1 {
    
  transition: transform .2s;
  box-shadow: 10px 10px 5px rgb(36, 35, 35);
}
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  background-image: url('/Images/back_main_home.jpg');
  border: 16px solid #142417;
  border-radius: 50%;
  border-top: 16px solid #3b7c05;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 1.25s linear infinite;
  animation: spin 1.25s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#whole {
  display: none;
  text-align: center;
}

body{
 				background: rgba(255,255,2,0.5);
 				background-image: url('Images/back_main_home.jpg');
 				background-repeat: no-repeat;
    			background-attachment: fixed;
    			background-size: cover;
         

 		}
#Team{
  font-family: Arial;
  font-size: 25px;
  text-align: center;
}
     
#card1:hover {

  transform: scale(1.1); 
}
.dropdown-content:hover{
    color:black;
}
    </style>
  <title >Petal Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body onload="myFunction()">
    <div id="loader"></div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
              <ul class="nav navbar-nav "><a href="#">
                  <img src="Images/petal_logo1.png" alt="logo" style="width:80px;"></a>
                </ul>
          </div>
          <ul class="nav navbar-nav">
            <li class="nav navbar-nav"><a href="grid.php">Design</a></li>
            <li class="nav navbar-nav"><a href="#about">About </a></li>
            <!--<li class="nav navbar-nav"><a href="blogpage.php">Forums </a></li>
            <li class="nav navbar-nav"><a href="cart.html">Shop </a></li>-->
            <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More
                <span class="caret"></span></a>
                <ul class="dropdown-menu" style="background:black;">
                <div class="dropdown-content">
                  <li><a href="blogpage.php" style="color:white; ">Blogs</a></li>
                  <li><a href="shop.php" style="color:white">Shop</a></li>
                  <li><a href="appo.php" style="color:white">Book an Appointment</a></li>
                </div>
                </ul>
            </li>
            <!--<li><a href="#">Page 2</a></li>-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li> <?php if(isset($_SESSION['user'])){echo "<a href='phpscripts/logout.php'><span class='glyphicon glyphicon-user'></span> Logout</a>" ;}else{echo "<a href='loginpage.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a>";}   ?> </li>
            
          </ul>
        </div>
      </nav>
 <div id="whole" style="display:none;" class="animate-bottom">     
 <div >   
<div id="slides" class="container" style="width: 70%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
        <img src="Images/cimg1.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Get plant suggestions</h3>
          <p>Our website uses comprehensive AI technology to give you best recommendations on plants that grow best in your area</p>
        </div>
      </div>

      <div class="item">
        <img src="Images/cimg2.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Buy/sell plants</h3>
          <p>Buy and sell plants from/to people near you</p>
        </div>
      </div>
    
      <div class="item">
        <img src="Images/cimg3.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Design your dream garden</h3>
          <p>Use our innovative designer to simply drag and drop plants and design your dream garden</p>
        </div>
      </div>
  
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>  
</div>  
<br>
<div id="about" class="container">
<div id="card1" class="card" style="width:100%; padding: 50px;background-image: url('Images/bg1.jpg') ; background-repeat: no-repeat;
background-position: center; background-size: 100%;text-align: center;  ">
   
    <div  class="card-body"  >

     
        <p style="font-family:arial;font-size:25px"><b >About Us</b></p><br><br>
        <p class="card-text" style="font-family: arial;font-size: 20px;">
       <b> Our goal</b><br>
          We at Petal want to promote the growth of small home gardens more in our city. We want to help you become more self
          sufficient and less dependant on other vendors. You are assured of the quality of vegetables grown in your house and the amount of pesticides being used. We also provide our users with an opportunity to make a little money by giving them an option to sell
          their plants online to people who live close by. This is an effective and modern gardening tool that makes it easier for users to 
          maintain and grow their gardens. There are a wide array of features that help budding gardeners to search for plants and sell 
          their plants, design their garden and communicate with other gardeners through forums using Petal.
          <br><b> Services</b><br>
          
          Petal provides you with a platform to search for plants that grow best in your area and hence, you can be assured 
          of a great yield. You also have the option of opting as a seller and can put up your plants for sale through our 
          website. Users searching for plants will be given the choice to search for merchants or home vendors selling a 
          plant you are looking for near you. Payments can be made through our website securely and with a mode of 
          their preference.</p>
      <a href="#" class="btn btn-primary">Contact Us</a>
    </div>
  </div>  
</div>
 <br>
 <br>
 <br>
<p id="Team"><b>Our Team</b></p>
<div class="container" style="color: aliceblue;">
    <div class="row" >
        <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 15px;">
            <img class="card-img-top" src="Images/img_avatar.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Pratheek SB</h4>
              <p class="card-text">PES University<br>B Tech in CSE (II year)</p>
              
            </div>
          </div>  
          <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 15px;">
              <img class="card-img-top" src="Images/img_avatar.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Neil John</h4>
                <p class="card-text">PES University<br>B Tech in CSE (II year)</p>
               
              </div>
            </div>  
            <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 15px;">
                <img class="card-img-top" src="Images/img_avatar.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">Swarup Gummadi</h4>
                  <p class="card-text">PES University<br>B Tech in CSE (II year)</p>
                  
                </div>
              </div>  
              <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 15px;">
                  <img class="card-img-top" src="Images/img_avatar.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">Zaahir Ahmed</h4>
                    <p class="card-text">PES University<br>B Tech in CSE (II year)</p>
                   
                  </div>
                </div>  
    </div>
</div>
</div>  
<script>
    var myVar;
    
    function myFunction() {
      myVar = setTimeout(showPage, 1000);
    }
    
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("whole").style.display = "block";
    }
    </script>
</body>
</html>
