<?php
session_start();
if($_SESSION){
	header("Location: user.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Karimah Hijab Login</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	
<div class="container main-section">
	<div class="row">
		<div class="col-md-12 text-center user-login-header">
			<h1>Karimah Hijab Store</h1>
			<p>Made with <span>&hearts; In Pekalongan</span></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-2 login-image-main text-center">
			<div class="row">
				
				<div class="col-md-12 col-sm-12 col-xs-12 user-login-box">

			<?php
				if(isset($_POST['login'])){
					include("koneksi.php");
					
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					$level		= $_POST['level'];
					
					$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
					if(mysqli_num_rows($query) == 0){
						echo '<div class="alert alert-danger">Login gagal.</div>';
					}else{
						$row = mysqli_fetch_assoc($query);
						
						if($row['level'] == 1 && $level == 1){
							$_SESSION['username']=$username;
							$_SESSION['level']='admin';
							header("Location: user.php");
						}else if($row['level'] == 2 && $level == 2){
							$_SESSION['username']=$username;
							$_SESSION['level']='owner';
							header("Location: user.php");
						}else{
							echo '<div class="alert alert-danger">Login gagal.</div>';
						}
					}
				}
				?>
					<form action="" method="POST">
					<div class="form-group">
				  		<input type="text" class="form-control" name="username" placeholder="User Name" id="usr">
					</div>
					<div class="form-group">
				  		<input type="password" name="password" class="form-control" placeholder="Password" id="usr">
					</div>
					<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">Pilih User</option>
							<option value="1">Administrator</option>
							<option value="2">Owner</option>
						</select>
					</div>
					<!-- <a href="#" class="btn btn-defualt">Login</a> -->
					<input type="submit" name="login" class="btn btn-danger btn-block" value="Login" />
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</html>