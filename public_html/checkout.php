<?php
 if(!isset($_SESSION))
    {
        session_start();
    }
?>

<html>
<head>

<style>
body{
 				background: rgba(255,255,2,0.5);
 				background-image: url('Images/back_main_home.jpg');
 				background-repeat: no-repeat;
    			background-attachment: fixed;
    			background-size: cover;
         

 		}
#logo{
  position: absolute;
  height: 100px;
  margin-top: -20px;
 }
* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color:rgba(27, 27, 27, 0.5);
  padding: 5px 20px 15px 20px;

  border-radius: 3px;
  color:azure;
  font-family: arial;
  box-shadow: 3px 3px 5px rgb(54, 54, 54);
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  color:black;
}
input[type=textarea]{
  border: 1px solid #ccc;
  border-radius: 3px;
  color:black;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: rgb(34, 124, 11);
}

hr {
  border: 1px solid lightgrey;
}
.btn {
    
    transition: transform .3s;
    box-shadow: 10px 10px 5px rgb(36, 35, 35);
  }
.btn:hover {

transform: scale(1.01); 
}
#pay {
    
    transition: transform .1s;
    box-shadow: 10px 10px 5px rgb(36, 35, 35);
  }
#pay:hover {

transform: scale(1.08); 
}


span.price {
  float: right;
  color: grey;
}
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body onload="allStorage()" onbeforeunload="return gone()">
    <script>
    function gone() {
  return ("Your cart will be reset! Are you sure?");
}
  </script>
       <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
              <ul class="nav navbar-nav "><a href="index.php">
                  <img src="Images/petal_logo1.png" alt="logo"  style="width:80px;"></a>
                </ul>
          </div>
          <ul class="nav navbar-nav">
            <li class="nav navbar-nav"><a href="grid.php">Design</a></li>
            <li class="nav navbar-nav"><a href="about.html">About </a></li>
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
      
<form >
<div class="row">
  <div class="col-75">
    <div class="container">      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" required>
            <label for="email"><i class="fa fa-envelope"  pattern="[a-z0-9._%+-]+@(gmail|yahoo|hotmail|reddif|outlook|pes)+\.(com|in|edu|gov)$" required></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <textarea style="color:black" id="adr" cols="74" rows="10" name="address" placeholder="Enter address here" required></textarea>
            
            <br> <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" [0-9]{6} required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <table >
              <tr>
                  <img class="pay1" src="Images/visa.png" width="18%" height="9%" style="border: 0px">
                  
              </tr> 
              <tr>
                  &nbsp
              <tr>
                  <img class="pay2" src="Images/mae.png" width="18%" height="9%"style="border: 0px">
              </tr>
              <tr>
                  &nbsp
              </tr> 
              <tr>
                  <img class="pay3" src="Images/mas.png" width="18%" height="9%"style="border: 0px" >
              </tr>
              <tr>
                  &nbsp
              </tr> 
              <tr>
                  <img class="pay4" src="Images/pay.jpg" width="18%" height="9%"style="border: 0px border-color: white" >
              </tr>
              <script>$(function () {
                  $(".pay1").click(function() {
                    $(this).css('border', "solid 3px green");  
                    $('.pay2').removeAttr('border');
                  });
                  $(".pay2").click(function() {
                    $(this).css('border', "solid 3px green");  
                    $('.pay1').removeAttr('border');
                  });
                  $(".pay3").click(function() {
                    $(this).css('border', "solid 3px green");  
                    $('.pay2').removeAttr('border');
                  });
                  $(".pay4").click(function() {
                    $(this).css('border', "solid 3px green");  
                    $('.pay2').removeAttr('border');
                  });
                  

                 
            

                });</script>
              </table>
             
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
            
<!--<button onclick="revert()" class="btn"  style="background: rgba(35, 153, 6, 0.9);color: azure; font-family: arial;font-size:17px ;width: 100%;" >Back to Marketplace</button>
<script> 
    function revert(){
      var a=window.confirm("Your cart will be reset! Are you sure?");
      
       window.location.href="shop.html";
     
     }
     </script>-->
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        
     <button onclick="reload()" class="btn" style="background: rgba(35, 153, 6, 0.9);color: azure; font-family: arial;font-size:17px" > <a href="thanks.html" style="color:black"> Continue to checkout</a></button>
        
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4><b>Cart</b> <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <p id="1" style="font-family: arial; font-size: 17px;"> </p>
      <hr>
      <p id="2" style="font-family: arial; font-size: 17px;"><b>Total</b> <span class="price" style="color:black"></span></p>
    </div>
  </div>
</div>

<script>
var tot="";
function allStorage() {

  for (var key in localStorage){
    if(key!="length" && key!="key" && key!="getItem" && key!="setItem" && key!="clear" && key!="removeItem" )
  { console.log(key);
  if(key!="total")
    document.getElementById("1").innerHTML=document.getElementById("1").innerHTML+"<br>"+key+":"+"&nbsp"+localStorage.getItem(key);
    else
    document.getElementById("2").innerHTML=document.getElementById("2").innerHTML+"<br><br>Rs "+localStorage.getItem(key);
    console.log(localStorage.getItem(key))
    tot.concat(key,':',localStorage.getItem(key),';');
    }
    }
   
}


  document.body.appendChild(form);
  form.submit();
}
function reload(){
    window.onbeforeunload = null;
     window.location.href="thanks.html";
}
  </script>
</body>
</html>
