<?php
	$servername = "localhost";
	$username = "id11633559_petalgarden";
	$password = "pratheek";
	$dbname = "id11633559_petal";

	global $name,$email,$mobileno,$date,$area,$city,$state,$postal,$user;
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!isset($_SESSION))
    {
        session_start();
    }
	$user=$_SESSION['user'];
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	if(isset($_POST['fullname'])){
    	$name = $_POST['fullname'];
	}	
	
	if(isset($_POST['email'])){
    	$email = $_POST['email'];
	}	
	
	if(isset($_POST['phoneno'])){
    	$mobileno = $_POST['phoneno'];
	}
	
	if(isset($_POST['date'])){
    	$date = $_POST['date'];
	}
	
	if(isset($_POST['area'])){
    	$area = $_POST['area'];
	}
	
	if(isset($_POST['city'])){
    	$city = $_POST['city'];
	}
	
	if(isset($_POST['state'])){
    	$state = $_POST['state'];
	}
	
	if(isset($_POST['postcode'])){
    	$postal = $_POST['postcode'];
	}

	$sql = "INSERT INTO appointments (username,fullname,email,phoneno,date,area,city,state,postcode)
	VALUES ('$user','$name', '$email','$mobileno','$date','$area','$city','$state','$postal') ";
	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Your appointment is booked!')</script>";
        exit;   	
	}else{
	   	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	

    mysqli_close($conn);
?>