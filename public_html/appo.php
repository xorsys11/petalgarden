<?php
 if(!isset($_SESSION))
    {
        session_start();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="appo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Petal-Appointment</title>
</head>
<body>
	<nav>
		<a href="index.php"> <img id = "logo" src="Images/petal_logo1.png"> </a>
		<ul class ="right">
					<li> <a href="blogpage.php">Blog</a> </li>
					<li>  <?php if(isset($_SESSION['user'])){echo "<a class='status' href='phpscripts/logout.php' target='t'>Logout</a>" ;}else{echo "<a class='status' href='loginpage.php'>Login</a>";}   ?> </li>
		</ul>
	</nav>
	<div class="inner-layer">
		<div class="container">
			<div class="row no-margin">
				<div class="col-sm-7">
					<div class="content">
						<h1>Book your appointment with our garden experts now</h1>
						<p>Best hobbies need best guides.We believe in the same and hence we offer one click booking to contact experts and get  best suggestions on how a user can improve his garden design.We have professionals from all over the world to help you design your dream garden.Sit back,relax and just fill up the form and we will contact you within 24 hours.</p>
					</div>
				</div>
				<iframe name="t" style="display:none;"></iframe>
				<div class="col-sm-5">
					<div class="form-data">
						<div class="form-head">
							<h2 align="center">Book an appointment</h2>
						</div>
						
						<div class="form-body" >
							<form action="phpscripts/appo.php/" method="POST" target="t">
							<div class="row form-row">
								<input type="text" placeholder="Enter full name" name="fullname" class="form-control" required>
							</div>
							<div class="row form-row">
								<input type="text" placeholder="Enter mobile number" name="phoneno" class="form-control" pattern=[0-9]{10} required>
							</div>
							<div class="row form-row">
								<input type="email" placeholder="Enter email address" name="email" class="form-control" required>
							</div>
							<div class="row form-row">
								<input type="date" id="dat" placeholder="Enter date" name="date" class="form-control" required>
							</div>
							<h5>Address details</h5>
							<div class="row form-row">
								<div class="col-sm-6">
									<input type="text" placeholder="Enter area" name="area" class="form-control" required>
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Enter city" name="city" class="form-control" required>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-sm-6">
									<input type="text" placeholder="Enter state" name="state" class="form-control" required>
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Enter postal code" name="postcode" class="form-control" pattern=[0-9]{6} required>
								</div>
							</div>
							<div class="row form-row">
								<button type="submit" class="btn btn-success btn-appointment">
									Book Appointment
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>