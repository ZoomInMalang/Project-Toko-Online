<!DOCTYPE html>
<html>
<head>
	<title>Aniflex - Login</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="proses_login.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>

			<div class="login">
				<form action="proses_signup.php" method="post"> 
					<label for="chk" aria-hidden="true">Sign Up</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<input type="password" name="con-pswd" placeholder="Confirm Password" required="">
					<button>Sign up</button>
				</form>
			</div>
	</div>
</body>
</html>