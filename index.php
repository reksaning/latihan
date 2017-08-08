<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" type="image/jpg" href="img/kotak.jpg"/>
<head>
  <title>Tani Organik Merapi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <link href="css/carousel.css" rel="stylesheet">

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



<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="img/sayur.jpg" alt="Lahan Pertanian Organik" >
        	<div class="carousel-caption">
        		<img src="img/kotak.jpg" class="img-circle" width="204" height="136">
         		<h3>Tani Organik Merapi</h3>
          		<p>Pertanian Organik lebih Sehat, Hemat, dan Murah</p>
        	</div>
      </div>

      <div class="item">
        <img src="img/sayur2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
        	<h3>Berita Tani</h3>
          	<p>Pertanian Organik lebih Hemat dan Murah daripada Metoda Konvensional</p>
         	<p><a href="#news2" class="btn btn-lg btn-primary portfolio-link" data-toggle="modal">see more..</a></p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/sayur3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Wortel</h3>
          <p>Wortel merupakan komoditas ......</p>
          <p><a href="#news2" class="btn btn-lg btn-primary portfolio-link" data-toggle="modal">see more..</a></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<footer class="container-fluid text-center">
  <a href="index.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright &copy; Departemen Teknologi Industri Pertanian, Fakultas Teknologi Pertanian, Universitas Gadjah Mada </p>
</footer>


</body>
</html>