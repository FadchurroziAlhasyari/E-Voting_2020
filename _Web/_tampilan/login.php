<!DOCTYPE html>
<html>
<head>
	<center><h2>E-Voting 2020</h2></center>
	<title>Menu Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="home.php">
</head>
<body>
	<center>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="from-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="from-control" required>
					</div>
					<button type="submit" class="btn btn-primary"> Masuk </button>
				</form>
			</div>
			<div class="col-md-6 login-right">
				<h2>Register</h2>
				<form action="registrasi.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="from-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="from-control" required>
					</div>
					<button type="submit" class="btn btn-primary"> Daftar </button>
		</div>
	</div>
</div>
</center>
</body>
</html>