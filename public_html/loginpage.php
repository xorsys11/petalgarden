<!DOCTYPE html>
<html lang="en">
<head>
	<title>Petal: login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<a href="index.php"><img src="Images/petal_logo1.png" id="logo"></a>
	<h1 align="center">Petal: Login</h1>
	<hr>
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<form action="phpscripts/login.php/" method="POST">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="password" pattern=(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,} title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<div class="hr"></div>
						
					</form>
				</div>
				<div class="sign-up-htm" >
					<form action="phpscripts/signup.php/" method="POST" id="form1">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input  id="password" type="password" class="input" data-type="password" name="password"  pattern=(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,} title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Repeat Password</label>
							<input  id="confirm_password" type="password" class="input" data-type="password" name="password2" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Email Address</label>
							<input id="pass" class="input" type="email" name="email" pattern="[a-z0-9._%+-]+@(gmail|yahoo|hotmail|reddif|outlook|pes)+\.(com|in|edu|gov)$" required>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign Up">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
	</script>
</body>
</html>