<?php
session_start();
if(empty($_SESSION)){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
    .navbar-brand>img {
            max-height: auto;
            height: 130%;
            width: auto;
            margin: 0 auto;
        }
		body {
			background-color:#eeeee;
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>
    
    
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="http://www.clker.com/cliparts/N/q/W/R/j/l/blue-baby-whale-md.png" alt="Dispute Bills"></a>
          <a class="navbar-brand" href="#">Karimah Hijab</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Branda</a></li>
              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown">Penjualan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="transaksi.html">Tambah Transaksi</a></li>
                  <li><a data-toggle="modal"  data-target="#myModal" href="#insert">Laporan</a></li> 
                </ul>
              </li>
              <li class=""><a href="coba.php">Transaksi</a></li>
              <li><a data-toggle="modal" href="#insert">Laporan</a></li>
              <li class=""><a href="logout.php" onclick="return confirm('Yakin ingin Logout?')">Logout</a></li>
            </ul>
                <div class="input-group-btn">
                    <i class="glyphicon glyphicon-search"></i>
                </div>
          </div>
      </div>
</nav>

</head>
<body>

	
  <p>hallo world</p>

	<div class="container">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<br><br>


<div class="container">
<div class="panel panel-danger">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>


  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })


  </script>
</html>