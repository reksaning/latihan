<?php include "style.php"; ?>

<?php 
  session_start();
  if(!isset($_SESSION['user_login'])){
    echo " <html>
         <head>
         <link rel='shortcut icon' href='img/kotak.jpg' />
         <title>Please Login First </title>
         </head>
         <body background='../red.jpg'>
           <br><br><br><br><br><br><br><center><img src='../DM.jpg'></center>
         <br><center><b>Anda Belum Login, Silahkan Login <br><a href = 'index.php'>Disini </a></b></center>";
  }else{
?>

<?php  
//isinya dashboard mulai sini
?>
<body class="nav-md">
        <div class="row">
          <div class="col-xs-12">
            <div class="sidebar-content"></div>
                         <?php include 'topnav.php'; ?>
            </div>
          </div>



<div class="main_container">
        <div class="row">
            <div class="col-xs-3">
                <div class="main-content"></div>
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-xs-9">
                <!--Nested rows within a column-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="sidebar-content"></div>
                         <?php include 'komoditas.php'; ?>
                    </div>
                </div>
        <div class="row">
                    <div class="col-xs-12">
                        <div class="sidebar-content"></div>
                        
                    </div>
                </div>
            </div>
        </div>
  </div>
 </body>
</html>
<?php } ?>