<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
	$servername = "localhost";
	$username = "id11633559_petalgarden";
	$password = "pratheek";
	$dbname = "id11633559_petal";

	global $name,$email,$password1,$password2;
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	if(isset($_POST['username'])){
    	$name = $_POST['username'];
	}	
	
	if(isset($_POST['password'])){
    	$password1 = $_POST['password'];
	}	
	
	if(isset($_POST['password2'])){
    	$password2 = $_POST['password2'];
	}
	
	if(isset($_POST['email'])){
    	$email = $_POST['email'];
	}
    

	$sql = "INSERT INTO users (username,email,password)
	VALUES ('$name', '$email','$password1') ";
	if (mysqli_query($conn, $sql)) {
	   
		include('login.php');
        exit;   	
	}else{
	    echo "<script> alert('Username or Email already exists')</script>";
	   	echo "<script> location.href='../../loginpage.php'; </script>";
	}
	

    mysqli_close($conn);
?>