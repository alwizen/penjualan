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
  .navbar-brand {
    font-family: 'Lobster 1.4', cursive;
  }
    .navbar-brand>img {
            max-height: auto;
            height: 150%;
            width: auto;
            margin: 0 auto;
            padding-bottom: 11px;
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
    .footer{
    height:50px;
    text-align: right;
    line-height:50px;
    background:#333;
    color:#fff;
     position:absolute;
    bottom:0px;
    padding-right: 50px;
 
    width:100%;
}
	</style>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
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