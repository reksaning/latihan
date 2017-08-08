
<?php 
include"config/conn.php";
	session_start();
	$username="";
	$password="";
	if (isset($_POST['username'])&&isset($_POST['password'])) {
		$un=$_POST['username'];
		$pw=$_POST['password'];
		$query="select * from pemilik where username='$un' and password='$pw'";
		$hasil=mysql_query($query) or die("gagal melakukan query");
			if ($hasil!=false) {
					if (mysql_num_rows($hasil)==1) {
						$username=$_POST['username'];
						$password=$_POST['password'];
						$_SESSION['username']=$_POST['username'];
						$_SESSION['username']=$_POST['password'];
					}
			}
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" type="image/jpg" href="img/kotak.jpg"/>
<head>
  <title>Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">TOM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="profil.php">Profil</a></li>
      <li><a href="">Sejarah</a></li>
      <li><a href="">Galeri</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Contact</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</head>
	</br>
	</br>
	</br>

		<p>
			<?php 
					if (empty($username)) {
						if (isset($_POST['username'])||isset($_POST['password'])) {
							echo "<script type='text/javascript'>alert('Username atau Password salah');</script>";
				
							
						}

			 ?>
			 <div class="container col-md-4 col-md-offset-4">
			<div class="jumbotron">
        		<div class="row">
           			
			 		<form  method="post" action="login.php">
    					<div class="form-group">
     						<label for="username">Username:</label>
      						<input type="username" class="form-control" id="username" placeholder="username" name="username">
    					</div>
    					<div class="form-group">
      						<label for="pwd">Password:</label>
      						<input type="password" class="form-control" id="password" placeholder="password" name="password">
    					</div>
    					<button type="submit" class="btn btn-default" value="login">Login</button>
  					</form>
  					</div>
					</div>
				</div>
		


			 	<?php 
			 		}
			 		else{
			 	 ?>
			 	<<?php 
			 	session_start();
					$_SESSION['user_login']=$un; // Initializing Session
					header('location:dashboard.php?module=home');
			 	}

			 	 ?>
		</p>
 </body>
 </html>