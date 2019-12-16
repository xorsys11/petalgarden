<?php
if(!isset($_SESSION))
    {
        session_start();
    }
$servername = "localhost";
	$username = "id11633559_petalgarden";
	$password = "pratheek";
	$dbname = "id11633559_petal";

	$con = mysqli_connect($servername, $username, $password, $dbname);
global $content;
$user=$_SESSION['user'];
if(isset($_POST['content'])){
    $content = $_POST['content'];
}


$sql = "INSERT INTO blogs (username,content) VALUES ('$user', '$content') ";
if (mysqli_query($con, $sql)) {
	echo "success";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
	

$sql="SELECT * FROM blogs";
$result = mysqli_query($con,$sql);

echo "<div>";
while($row = mysqli_fetch_array($result)) {
    echo "<div>
        <h4>".$row["username"]."</h4>
        <p>".$row["content"]."</p>";
}
echo "</div> <br>";
mysqli_close($con);
?>