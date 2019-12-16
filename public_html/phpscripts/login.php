<?php

 if(!isset($_SESSION))
    {
        session_start();
    }



$con=mysqli_connect('localhost','id11633559_petalgarden','pratheek');


mysqli_select_db($con,'id11633559_petal');


$user=$_POST['username'];
$pass=$_POST['password'];


$s="SELECT * FROM users WHERE username='$user' && password ='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_fetch_array($result,MYSQLI_ASSOC);



if(isset($num)){
	$_SESSION["user"] = $user;
	echo "<script> location.href='../../index.php'; </script>";
	

}else{
    echo "<script> alert('Unregistered User. Please Sign Up to continue.')</script>";
	echo "<script> location.href='../../loginpage.php'; </script>";
	
	

}


?>