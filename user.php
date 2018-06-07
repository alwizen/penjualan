<?php
include ('dinamis/header.php');
session_start();
if(empty($_SESSION)){
	header("Location: index.php");
}
?>

	<div class="container">
		<div class="row">
			<h2>Login Berhasil</h2>
			<div class="login">
				<p>Anda berhasil login dengan detail sebagai berikut:</p>
				<p>Username: <?php echo $_SESSION['username']; ?><br>
				Level: <?php echo $_SESSION['level']; ?></p>
				<p><a href="logout.php" class="btn btn-primary" onclick="return confirm('Yakin ingin Logout?')">Log out</a></p>
			</div>
		</div>
	</div>
 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <form action="/action_page.php">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>


          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php 
include ('dinamis/footer.php');
 ?>