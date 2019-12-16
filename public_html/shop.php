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
   
  transition: transform .2s;
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
  background-image: url('');
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

/* Add animation to "page content" */
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
h4{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
body{
 				background: rgba(255,255,2,0.5);
 				background-image: url('Images/bg_shop.jpg');
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
    </style>
  <title >Petal Marketplace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body onload="myFunction()" onbeforeunload="return gone()">
  <script>
    function gone() {
  return ("Your cart will be reset! Are you sure?");
}
  </script>
    <div id="loader"></div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
              <ul class="nav navbar-nav "><a href="index.php">
                  <img src="Images/petal_logo1.png" alt="logo" style="width:80px;"></a>
                </ul>
          </div>
          <ul class="nav navbar-nav">
            <li class="nav navbar-nav"><a href="grid.php">Design</a></li>
            <li class="nav navbar-nav"><a href="index.php">About </a></li>
            <!--<li class="nav navbar-nav"><a href="blogpage.php">Forums </a></li>
            <li class="nav navbar-nav"><a href="cart.html">Shop </a></li>-->
            <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More
                <span class="caret"></span></a>
                <ul class="dropdown-menu" style="background:black;">
                <div class="dropdown-content">
                  <li><a href="blogpage.php" style="color:white; ">Blogs</a></li>
                  <li><a href="shop.php" style="color:white">Shop</a></li>
                  <li><a href="appo.html" style="color:white">Book an Appointment</a></li>
                </div>
                </ul>
            </li>
            <!--<li><a href="#">Page 2</a></li>-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li> 
              <?php if(isset($_SESSION['user'])){echo "<a href='phpscripts/logout.php'><span class='glyphicon glyphicon-user'></span> Logout</a>" ;}else{echo "<a href='loginpage.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a>";}   ?> </li>
            
          </ul>
        </div>
      </nav>
 <div id="whole" style="display:none;" class="animate-bottom">     
 <div >   
<div id="slides" class="container" style="width: 80%;height:50%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
        <img src="Images/fruit_basket.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Choose from our huge collection</h3>
          <p>Grow the plant you like by buying high quality saplings/seeds from our website</p>
        </div>
      </div>

      <div class="item">
        <img src="Images/nursery.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Buy from a nursery near you</h3>
          <p>Buy from nearby plant nursery and get it delivered at your doorstep</p>
        </div>
      </div>
    
      <div class="item">
        <img src="Images/gardener.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Buy from people around you</h3>
          <p>Connect to people around you and buy plants from them at super affordable rates</p>
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
 <br>

<div class="container" style="color:black;width:100%">
    <br>
    <p ><strong><h3 style="color: rgba(50, 83, 24, 1);">Best deals on Flowers</h3></strong></p>
    <br>
    <div class="row" >
        <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
            <img class="card-img-top" src="Images/shop/sunflower.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Sunflower</h4>
              <p class="card-text" style="color:#3b7c05">Starting from Rs 90/-<br></p>
              <button style="background: #142417; color: white;" id="-" onclick="fnd()">-</button>
              <input type="text" id="cart_val" value="0" style="width:10%;text-align: center;"/>
              <button style="background: #142417;color: white;" id="+" onclick="fni()">+</button>
              
            </div>
          </div>  
          <div class="row" >
            <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                <img class="card-img-top" src="Images/shop/rose.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">Rose</h4>
                  <p class="card-text" style="color:#3b7c05">Starting from Rs 170/-<br></p>
                  <button style="background: #142417; color: white;" id="-" onclick="fnd1()">-</button>
              <input type="text" id="cart_val1" value="0" style="width:10%;text-align: center;"/>
              <button style="background: #142417;color: white;" id="+" onclick="fni1()">+</button>
                </div>
              </div>  
          <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
              <img class="card-img-top" src="Images/shop/hibiscus.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Hibiscus</h4>
                <p class="card-text" style="color:#3b7c05">Starting from Rs 80/-<br></p>
                <button style="background: #142417; color: white;" id="-" onclick="fnd2()">-</button>
                <input type="text" id="cart_val2" value="0" style="width:10%;text-align: center;"/>
                <button style="background: #142417;color: white;" id="+" onclick="fni2()">+</button>
               
              </div>
            </div>  
            <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                <img class="card-img-top" src="Images/shop/jasmine.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Jasmine</h4>
                    <p class="card-text" style="color:#3b7c05">Starting from Rs 150/-<br></p>
                    <button style="background: #142417; color: white;" id="-" onclick="fnd3()">-</button>
                    <input type="text" id="cart_val3" value="0" style="width:10%;text-align: center;"/>
                    <button style="background: #142417;color: white;" id="+" onclick="fni3()">+</button>
                </div>
              </div>  
              <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                  <img class="card-img-top" src="Images/shop/lily.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">Lily</h4>
              <p class="card-text" style="color:#3b7c05">Starting from Rs 190/-<br></p>
              <button style="background: #142417; color: white;" id="-" onclick="fnd4()">-</button>
              <input type="text" id="cart_val4" value="0" style="width:10%;text-align: center;"/>
              <button style="background: #142417;color: white;" id="+" onclick="fni4()">+</button>
                  </div>
                </div>  
    </div>
    <br>
    <p><strong><h3 style="color: rgba(50, 83, 24, 1);">Our Top fruit Picks</h3></strong></p>
    <p style="color: red;">Out of stock!</p>
    <br>
    <div class="row" >
        <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
            <img class="card-img-top" src="Images//shop/fig.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Fig</h4>
                <p class="card-text" style="color:#3b7c05">Starting from Rs 220/-<br></p>
                <button style="background: #142417; color: white;" id="-" onclick="fnd5()">-</button>
                <input type="text" id="cart_val5" value="0" style="width:10%;text-align: center;"/>
                <button style="background: #142417;color: white;" id="+" onclick="fni5()">+</button>
            </div>
          </div>  
          <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
              <img class="card-img-top" src="Images/shop/mango.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Mango</h4>
                <p class="card-text" style="color:#3b7c05">Starting from Rs 210/-<br></p>
                <button style="background: #142417; color: white;" id="-" onclick="fnd6()">-</button>
              <input type="text" id="cart_val6" value="0" style="width:10%;text-align: center;"/>
              <button style="background: #142417;color: white;" id="+" onclick="fni6()">+</button>
              </div>
            </div>  
            <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                <img class="card-img-top" src="Images/shop/chikoo.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Chikoo</h4>
                    <p class="card-text" style="color:#3b7c05">Starting from Rs 90/-<br></p>
                    <button style="background: #142417; color: white;" id="-" onclick="fnd7()">-</button>
                    <input type="text" id="cart_val7" value="0" style="width:10%;text-align: center;"/>
                    <button style="background: #142417;color: white;" id="+" onclick="fni7()">+</button>
                </div>
              </div> 
              <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                <img class="card-img-top" src="Images/shop/banana.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">banana</h4>
                    <p class="card-text" style="color:#3b7c05">Starting from Rs 140/-<br></p>
                    <button style="background: #142417; color: white;" id="-" onclick="fnd8()">-</button>
                    <input type="text" id="cart_val8" value="0" style="width:10%;text-align: center;"/>
                    <button style="background: #142417;color: white;" id="+" onclick="fni8()">+</button>
                </div>
              </div> 
              <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                  <img class="card-img-top" src="Images//shop/guava.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">Guava</h4>
              <p class="card-text" style="color:#3b7c05">Starting from Rs 170/-<br></p>
              <button style="background: #142417; color: white;" id="-" onclick="fnd9()">-</button>
              <input type="text" id="cart_val9" value="0" style="width:10%;text-align: center;"/>
              <button style="background: #142417;color: white;" id="+" onclick="fni9()">+</button>
                  </div>
                </div>  
    </div>
    
    <br>
    <p><strong><h3 style="color: rgba(50, 83, 24, 1);">Top offers on Misc Plants</h3></strong></p>
    <p style="color: red;">Out of stock!</p>
    <br>
    <div class="row" >
        <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
            <img class="card-img-top" src="Images/shop/tulsi.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Tulsi</h4>
                <p class="card-text" style="color:#3b7c05">Starting from Rs 40/-<br></p>
                <button style="background: #142417; color: white;" id="-" onclick="fnd10()">-</button>
                <input type="text" id="cart_val10" value="0" style="width:10%;text-align: center;"/>
                <button style="background: #142417;color: white;" id="+" onclick="fni10()">+</button>
            </div>
          </div>  
          <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
              <img class="card-img-top" src="Images/shop/aloevera.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
              <h4 class="card-title">Aloevera</h4>
              <p class="card-text" style="color:#3b7c05;">Starting from Rs 290/-<br></p>
              <button style="background: #142417; color: white;" id="-" onclick="fnd11()">-</button>
              <input type="text" id="cart_val11" value="0" style="width:10%;text-align: center;"/>
              <button style="background: #142417;color: white;" id="+" onclick="fni11()">+</button>
              </div>
            </div>  
            <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                <img class="card-img-top" src="Images/shop/neem.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Neem</h4>
                    <p class="card-text" style="color:#3b7c05">Starting from Rs 50/-<br></p>
                    <button style="background: #142417; color: white;" id="-" onclick="fnd12()">-</button>
                    <input type="text" id="cart_val12" value="0" style="width:10%;text-align: center;"/>
                    <button style="background: #142417;color: white;" id="+" onclick="fni12()">+</button>
                </div>
              </div>  
              <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                  <img class="card-img-top" src="Images/shop/mint.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">Mint</h4>
              <p class="card-text" style="color:#3b7c05">Starting from Rs 170/-<br></p>
              <button style="background: #142417; color: white;" id="-" onclick="fnd13()">-</button>
              <input type="text" id="cart_val13" value="0" style="width:10%;text-align: center;"/>
              <button style="background: #142417;color: white;" id="+" onclick="fni13()">+</button>
                  </div>
                </div>  
                <div class="col-sm-6" id="card1" class="card" style="width:255px; margin: 22px;">
                    <img class="card-img-top" src="Images/shop/coriander.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h4 class="card-title">Coriander</h4>
                <p class="card-text" style="color:#3b7c05">Starting from Rs 30/-<br></p>
                <button style="background: #142417; color: white;" id="-" onclick="fnd14()">-</button>
                <input type="text" id="cart_val14" value="0" style="width:10%;text-align: center;"/>
                <button style="background: #142417;color: white;" id="+" onclick="fni14()">+</button>
                    </div>
                  </div>  
    </div>
</div>
</div>  
<br>
<br>
<div style="align-content: center;">
  <a href="checkout.php"><button onclick="final()" style="width:30% ;scale: 1.5;box-shadow: 5px 5px 5px rgb(36, 35, 35);;background-color: #3b7c05; color:white;
font-family: Arial, Helvetica, sans-serif;font-size: 20px;">Proceed to checkout</button></a>
<br>
<br>
</div>
<script>//All cart items 
var total=0;
var cart="";
var count=0,count1=0,count2=0,count3=0,count4=0,count5=0,count6=0,count7=0,count8=0,count9=0,count10=0,count11=0,count12=0,count13=0,count14=0;
  function fnd(){
    
    if(parseInt(document.getElementById(("cart_val")).value,10)==0){
      document.getElementById("cart_val").value=0;
    }
    else
    {document.getElementById("cart_val").value=parseInt(document.getElementById("cart_val").value,10)-1;
    total=total-90;
    count=count-1;
    localStorage.setItem("Sunflower",count);
    localStorage.setItem("total",total);}
    if(count==0)
    localStorage.removeItem("Sunflower");
  }
    function fni(){
    document.getElementById("cart_val").value=parseInt(document.getElementById("cart_val").value,10)+1;
    count=count+1
    total=total+90;   
    localStorage.setItem("total",total); 
    localStorage.setItem("Sunflower", count);}
    function fnd1(){
    if(parseInt(document.getElementById(("cart_val1")).value,10)==0){
      document.getElementById("cart_val1").value=0;
    }
    else
    {document.getElementById("cart_val1").value=parseInt(document.getElementById("cart_val1").value,10)-1;
    total=total-170;
    count1=count1-1;
    localStorage.setItem("Rose",count1);
    localStorage.setItem("total",total);}
    if(count1==0)
    localStorage.removeItem("Rose");
    }
    function fni1(){
    document.getElementById("cart_val1").value=parseInt(document.getElementById("cart_val1").value,10)+1;
    count1=count1+1
    total=total+170;    
    localStorage.setItem("total",total);
    localStorage.setItem("Rose", count1);}
    
    function fnd2(){
    
    if(parseInt(document.getElementById(("cart_val2")).value,10)==0){
      document.getElementById("cart_val2").value=0;
    }
    else
    {document.getElementById("cart_val2").value=parseInt(document.getElementById("cart_val2").value,10)-1;
    total=total-80;
    count2=count2-1;
    localStorage.setItem("Hibiscus",count2);
    localStorage.setItem("total",total);}
    if(count==0)
    localStorage.removeItem("Hibiscus");}
    function fni2(){
    document.getElementById("cart_val2").value=parseInt(document.getElementById("cart_val2").value,10)+1;
    count2=count2+1
    total=total+80;    
    localStorage.setItem("Hibiscus", count2);
    localStorage.setItem("total",total);}
    function fnd3(){
    
    if(parseInt(document.getElementById(("cart_val3")).value,10)==0){
      document.getElementById("cart_val3").value=0;
    }
    else
    {document.getElementById("cart_val3").value=parseInt(document.getElementById("cart_val3").value,10)-1;
    total=total-150;
    count3=count3-1;
    localStorage.setItem("Jasmine",count3);
    localStorage.setItem("total",total);}
    if(count3==0)
    localStorage.removeItem("Jasmine");}
    function fni3(){
    document.getElementById("cart_val3").value=parseInt(document.getElementById("cart_val3").value,10)+1;
    count3=count3+1
    total=total+150;    
    localStorage.setItem("Jasmine", count3);
    localStorage.setItem("total",total);}
    function fnd4(){
    
    if(parseInt(document.getElementById(("cart_val4")).value,10)==0){
      document.getElementById("cart_val4").value=0;
    }
    else
    {document.getElementById("cart_val4").value=parseInt(document.getElementById("cart_val4").value,10)-1;
    total=total-190;
    count4=count4-1;
    localStorage.setItem("Lily",count4);
    localStorage.setItem("total",total);}
    if(count4==0)
    localStorage.removeItem("Lily");
    }
    function fni4(){
    document.getElementById("cart_val4").value=parseInt(document.getElementById("cart_val4").value,10)+1;
    count4=count4+1
    total=total+190;    
    localStorage.setItem("Lily", count4);
    localStorage.setItem("total",total);}
    function fnd5(){
    
    if(parseInt(document.getElementById(("cart_val5")).value,10)==0){
      document.getElementById("cart_val5").value=0;
    }
    else
    document.getElementById("cart_val5").value=parseInt(document.getElementById("cart_val5").value,10)-1;}
    function fni5(){
    document.getElementById("cart_val5").value=parseInt(document.getElementById("cart_val5").value,10)+1;}
    function fnd6(){
    
    if(parseInt(document.getElementById(("cart_val6")).value,10)==0){
      document.getElementById("cart_val6").value=0;
    }
    else
    document.getElementById("cart_val6").value=parseInt(document.getElementById("cart_val6").value,10)-1;}
    function fni6(){
    document.getElementById("cart_val6").value=parseInt(document.getElementById("cart_val6").value,10)+1;}
    function fnd7(){
    
    if(parseInt(document.getElementById(("cart_val7")).value,10)==0){
      document.getElementById("cart_val7").value=0;
    }
    else
    document.getElementById("cart_val7").value=parseInt(document.getElementById("cart_val7").value,10)-1;}
    function fni7(){
    document.getElementById("cart_val7").value=parseInt(document.getElementById("cart_val7").value,10)+1;}
    function fnd8(){
    
    if(parseInt(document.getElementById(("cart_val8")).value,10)==0){
      document.getElementById("cart_val8").value=0;
    }
    else
    document.getElementById("cart_val8").value=parseInt(document.getElementById("cart_val8").value,10)-1;}
    function fni8(){
    document.getElementById("cart_val8").value=parseInt(document.getElementById("cart_val8").value,10)+1;}
    function fnd9(){
    
    if(parseInt(document.getElementById(("cart_val9")).value,10)==0){
      document.getElementById("cart_val9").value=0;
    }
    else
    document.getElementById("cart_val9").value=parseInt(document.getElementById("cart_val9").value,10)-1;}
    function fni9(){
    document.getElementById("cart_val9").value=parseInt(document.getElementById("cart_val9").value,10)+1;}
    function fnd10(){
    
    if(parseInt(document.getElementById(("cart_val10")).value,10)==0){
      document.getElementById("cart_val10").value=0;
    }
    else
    document.getElementById("cart_val10").value=parseInt(document.getElementById("cart_val10").value,10)-1;}
    function fni10(){
    document.getElementById("cart_val10").value=parseInt(document.getElementById("cart_val10").value,10)+1;}
    function fnd11(){
    
    if(parseInt(document.getElementById(("cart_val11")).value,10)==0){
      document.getElementById("cart_val11").value=0;
    }
    else
    document.getElementById("cart_val11").value=parseInt(document.getElementById("cart_val11").value,10)-1;}
    function fni11(){
    document.getElementById("cart_val11").value=parseInt(document.getElementById("cart_val11").value,10)+1;}
    function fnd12(){
    
    if(parseInt(document.getElementById(("cart_val12")).value,10)==0){
      document.getElementById("cart_val12").value=0;
    }
    else
    document.getElementById("cart_val12").value=parseInt(document.getElementById("cart_val12").value,10)-1;}
    function fni12(){
    document.getElementById("cart_val12").value=parseInt(document.getElementById("cart_val12").value,10)+1;}
    function fnd13(){
    
    if(parseInt(document.getElementById(("cart_val13")).value,10)==0){
      document.getElementById("cart_val13").value=0;
    }
    else
    document.getElementById("cart_val13").value=parseInt(document.getElementById("cart_val13").value,10)-1;}
    function fni13(){
    document.getElementById("cart_val13").value=parseInt(document.getElementById("cart_val13").value,10)+1;}
    function fnd14(){
    
    if(parseInt(document.getElementById(("cart_val14")).value,10)==0){
      document.getElementById("cart_val14").value=0;
    }
    else
    document.getElementById("cart_val14").value=parseInt(document.getElementById("cart_val14").value,10)-1;}
    function fni14(){
    document.getElementById("cart_val14").value=parseInt(document.getElementById("cart_val14").value,10)+1;}
    function final(){
      window.onbeforeunload = null;
    }
    </script>
      
<script>
    var myVar;
    
    function myFunction() {
      myVar = setTimeout(showPage, 1000);
      localStorage.clear();
    
    }
    
    
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("whole").style.display = "block";
    }
    </script>
</body>
</html>
