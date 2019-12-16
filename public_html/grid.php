<?php
  if(!isset($_SESSION))
    {
        session_start();
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="grid.css">
<script>
	function generateGrid(){
		var node = document.getElementsByClassName("d0")[0];
		var grid = document.getElementById("gridbody");
		var b = document.createElement("br");
		for(i=0;i<11;i++){
			for( j=0;j<16;j++){
				
				var cln=node.cloneNode(true);
				grid.appendChild(cln);	
			}
		}
	}
	function allowDrop(ev) {
	  ev.preventDefault();
	}
	
	function drag(ev) {

	  ev.dataTransfer.setData("text", ev.target.id);
	}
	
	function drop(ev) {
	  ev.preventDefault();
	  var data = ev.dataTransfer.getData("text");
	  var nodeCopy = document.getElementById(data).cloneNode(true);
      nodeCopy.id = "newId"; /* We cannot use the same ID */
      ev.target.appendChild(nodeCopy);
	}
	function remimg(obj){
		const parent = obj;
		while (parent.firstChild) {
    		parent.firstChild.remove();
		}
	}
</script>
</head>
<body  onload="generateGrid()" > 
<div id="garden">
</div>
<a href="index.php"><img id="logo" src="Images/petal_logo1.png"></a>
<h1 align="center">Petal Design</h1>
<?php if(isset($_SESSION['user'])){echo "<span style='float: right; margin-top:-40px;'><a href='phpscripts/logout.php'>Logout</a></span>" ;}else{echo "<span style='float: right; margin-top:-40px;'><a href='loginpage.php' style='padding-right: 20px'>Sign in</a></span>";}   ?>

<hr>
<br>
<div>
    <div id="selection"> 
    <form action="grid.php" method="POST" >
        <select name="choice">
          <option value="any">Any</option>
          <option value="bangalore">Bangalore</option>
          <option value="mangalore">Mangalore</option>
          <option value="mysore">Mysore</option>
          <option value="manipal">Manipal</option>
        </select>
        <input type="submit" value="Submit"/>
    </form>
    </div>
	<div id="gridbody">
		<div class="d0" ondrop="drop(event)" ondragover="allowDrop(event)" onclick="remimg(this)"></div>
		<div class="d0" ondrop="drop(event)" ondragover="allowDrop(event)" onclick="remimg(this)"></div>
		<div class="d0" ondrop="drop(event)" ondragover="allowDrop(event)" onclick="remimg(this)"></div>
		<div class="d0" ondrop="drop(event)" ondragover="allowDrop(event)" onclick="remimg(this)"></div>	
	</div >
	<div class="scrollmenu">
            <?php
                $servername = "localhost";
            	$username = "id11633559_petalgarden";
            	$password = "pratheek";
            	$dbname = "id11633559_petal";
                global $choice;
            	$con = mysqli_connect($servername, $username, $password, $dbname);
                $choice="any";
                if(isset($_POST['choice']))
            	    $choice = $_POST['choice'];
            	if($choice=="any")
                    $sql="SELECT * FROM plants";
                else
                    $sql="SELECT * FROM plants WHERE location='$choice'";
                $result = mysqli_query($con,$sql);
            
            
                while($row = mysqli_fetch_array($result)) {
                    echo "
                        <div class='d1' ondrop='drop(event)' ondragover='allowDrop(event)'>
            		 			<img src=".$row['src']." draggable='true' ondragstart='drag(event)' id=".$row['id']." width='60' height='70'>
            		 			<div class='plant_name'>".$row['name']."</div>	
            			</div>
                    
                    ";
                }
                
                mysqli_close($con);
            ?>
			
						
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--		<img src="Images/plant2.png" draggable="true" ondragstart="drag(event)" id="drag2" width="50" height="70">-->
		 <!--		<div class="plant_name">Rose</div>-->
			<!--</div>-->
			
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--		<img src="Images/plant3.png" draggable="true" ondragstart="drag(event)" id="drag3" width="50" height="70">-->
			<!--	<div class="plant_name">Lotus</div>-->
			<!--</div>-->
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--			<img src="Images/plant1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="50" height="70">-->
		 <!--			<div class="plant_name">Aloe Vera</div>	-->
			<!--</div>-->
						
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--		<img src="Images/plant2.png" draggable="true" ondragstart="drag(event)" id="drag2" width="50" height="70">-->
		 <!--		<div class="plant_name">Rose</div>-->
			<!--</div>-->
			
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--		<img src="Images/plant3.png" draggable="true" ondragstart="drag(event)" id="drag3" width="50" height="70">-->
			<!--	<div class="plant_name">Lotus</div>-->
			<!--</div>-->
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--			<img src="Images/plant1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="50" height="70">-->
		 <!--			<div class="plant_name">Aloe Vera</div>	-->
			<!--</div>-->
						
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--		<img src="Images/plant2.png" draggable="true" ondragstart="drag(event)" id="drag2" width="50" height="70">-->
		 <!--		<div class="plant_name">Rose</div>-->
			<!--</div>-->
			
			<!--<div class="d1" ondrop="drop(event)" ondragover="allowDrop(event)">-->
		 <!--		<img src="Images/plant3.png" draggable="true" ondragstart="drag(event)" id="drag3" width="50" height="70">-->
			<!--	<div class="plant_name">Lotus</div>-->
			<!--</div>-->
	</div>
	<!--<input type="button" name="Proceed to Store" href="shop.php">-->
</div>
<div id="selection" style="backround-color:green; color:white">
<a href="shop.php"><input type="button" value="Proceed to Store" ></a>
</div>
</body>
</html>
