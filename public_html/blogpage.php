<?php
 if(!isset($_SESSION))
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Petal: Blogs</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
		
		
		#ldiv{ 
				margin:10px; 
				padding:10px;
		}
		.fdiv{ 
				background-color:rgba(221,221,221,0.7); 
				color:rgba(18,18,18,1); 
				border:0px;
				position:relative; 
				margin:15px; 
				padding:15px;
				border-radius: 10px;

		}
		.btn{ 
			background-color:silver;
			border-radius:4px; 	
			border:0px;
			margin-right: 10px;
		}
		.btn1{ 
				border: 0px;
				position:relative;
				top:-35px; 
				left:10px;
				color:white; 
				background-color:black; 
				height:25px; 
				width:65px;
				border-radius: 4px;

		}

		.btn:hover{
			color: rgb(221,221,221);
			background-color: rgb(150,150,150);
		}
		.btn1:hover{
			background-color: rgb(221,221,221);
			color: rgb(18,18,18);
		}
		h2 {
				border: 0px solid black;
				border-radius: 4px;
		}
		h4{ 
			border: 0px;
			border-bottom: 2px solid rgba(221,221,221,0.8);
			text-indent:10px; 
			border-radius: 4px;
		}
		h5{
			border: 0px;
			border-bottom: 1px solid rgba(221,221,221,0.8);  
			border-radius: 4px;
			margin-left: 50px;
			margin-top:-30px;
		}
		h2,h2,h5{
			text-align: left;
		}

		.overlay {
		  height: 0%;
		  width: 100%;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: rgba(18,18,18,1);
		  overflow-y: hidden;
		  transition: 0.5s;
		}

		.overlay-content {
		  position: relative;
		  top: 25%;
		  width: 90%;
		  font-size: 30px;
		  margin-left: 50px;
		  text-align: left;
		  margin-top: 30px;
		}

		.overlay a {
		  padding: 8px;
		  text-decoration: none;
		  font-size: 36px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		}

		.overlay a:hover, .overlay a:focus {
		  color: #f1f1f1;
		}

		.overlay .closebtn {
		  position: absolute;
		  top: 20px;
		  right: 45px;
		  font-size: 60px;
		}

		@media screen and (max-height: 450px) {
		  .overlay {overflow-y: auto;}
		  .overlay a {font-size: 20px}
		  .overlay .closebtn {
		  font-size: 40px;
		  top: 15px;
		  right: 35px;
		  }
		}
		#logo{
  			position: absolute;
  			height: 100px;
  			margin-top: -20px;
 		}
 		body{
  			background-image: url('Images/bg1.jpg');		
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: cover;
  			padding-left: 40px;
		}
		nav{
				width: 100%;
				min-height: 75px;
				border-bottom: 2px solid green;
				margin-top: 20px;
			}
		#area{
		        padding-top: 50px;
		        
		}
		ul{
				list-style-type: none;
				display: inline-block;
				margin: 0;
		}
		li{
				display: inline-block;
				padding-right: 30px;
		}
		.right{
				float: right;
				margin-top:-35px;
			}
		h1{
		    text-align: center;
		    
		}
		textarea{
		    background: rgba(255,255,255,0.6);
		    /*margin-left:5px;*/
		    margin-bottom:10px;
		}
        .heading{
            font-family: courier;
            font-weight: 700;
            padding-left: 20px;
            margin-left:40px;
        }
        .content{
            font-family:sans-serif;
            padding-left: 30px;
            margin-left:40px;
        }
        #submit_button{
            /*padding-bottom:-5px;*/
            margin-top:5px;
            float:right;
            margin-right:40px;
            background-color:black;
            border:none;
            color:white;
            font-family:arial;
            font-size:20px;
            border-radius:5px;
            padding:6px;
        }
        .status{
            font-family:sans-serif;
            font-size:20px;
            color:black;
            margin-top:-15px;
        }
        #submit_button:hover{
            padding:10px;
            background-color:#1c3485;
            color:white;
            text-decoration:none;
            transition:ease-in-out 0.2s;
        }
        .blog_div{
            background-color:rgba(173,216,230, 0.25);
            width:1430px;
            height:70px;
            /*margin-bottom:40px;*/
            padding-top:5px;
            /*padding-bottom:10px;*/
            border-radius:5px;
            border-left:solid 2px blue;
        }
		</style>

		<script></script>
	</head>
	
	<body style="background-color:#e6dfdf">
	    
		<nav>
		   	<a href="index.php"> <img id = "logo" src="Images/petal_logo1.png"> </a>

		    <h1 align="center">Petal-Blogs</h1>
		    <ul class ="right">
		        
					<li>   <?php if(isset($_SESSION['user'])){echo "<a class='status' href='phpscripts/logout.php' target='t'>Logout</a>" ;}else{echo "<a class='status' href='loginpage.php'>Login</a>";}   ?></li>
				</ul>
		</nav>
		<div id="area">
		<form action="blogpage.php" method="POST" id="form1">
		    <textarea form="form1" name="content" rows="3" cols="180" required placeholder="Write here...."></textarea>
		    <input id="submit_button" type="submit">
		</form>
		</div>
		<div id="myNav" class="overlay">
 			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  			<div class="overlay-content"></div>
		</div>

		<div id="myNav" class="overlay">
 			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  			<div class="overlay-content"></div>
		</div>
	</body>
</html>
<?php
$servername = "localhost";
	$username = "id11633559_petalgarden";
	$password = "pratheek";
	$dbname = "id11633559_petal";

	$con = mysqli_connect($servername, $username, $password, $dbname);
global $content,$flag;
$flag=0;
$content="";
$user="";
if(isset($_SESSION['user']))
{
    $user=$_SESSION['user'];
    
}
if(isset($_POST['content'])){
    $content = $_POST['content'];
}

if($user!="" && $content!=""){
    
    $sql = "INSERT INTO blogs (username,content) VALUES ('$user', '$content') ";
    if (mysqli_query($con, $sql)) {
        echo "<script>location.href='blogpage.php';</script>";
    }
}
if($user==""){
    echo "<script>alert('Please log in');</script>";
}
	
$sql="SELECT * FROM blogs";
$result = mysqli_query($con,$sql);

echo "<div>";
while($row = mysqli_fetch_array($result)) {
    echo "<div class='blog_div'>
        <h4 class='heading'>".$row["username"]."</h4>
        <p class='content'>".$row["content"]."</p>";
}
echo "<br></div> <br>";
mysqli_close($con);
?>