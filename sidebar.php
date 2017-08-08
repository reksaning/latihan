<?php include "style.php"; ?>

<div class="col-md-12 ">
  <div class="left_col">
    <div class="navbar nav_title" style="border: 0;">
  </div>
    <div class="clearfix"></div>

    <!-- Quick Profile Information -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="img/kotak.jpg" alt="..." class="img-circle profile_img ">
      </div>
			<div class="profile_info">
				<span>Selamat Datang,</span>
				<h2>
				<?php if($_SESSION['user_login'] == 'admin'){
							echo "Manajer ";
						}?>
				<?php if($_SESSION['user_login'] == '10002'){
							echo "Hello,<br> Admin Produk";
						}?>
				<?php if($_SESSION['user_login'] == '10003'){							
							echo "Hello,<br> Admin Produksi";
						}?>
				</h2>
      </div>
    </div>
    <br />

    <!-- Sidebar Menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="dashboard.php?page=januari"><i class="fa fa-home"></i> Home</a></li>
                    <li><a><i class="fa fa-folder-open"></i> Master Data <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="komoditas.php">Bahan Baku</a></li>
							<li><a href="dashboard.php?module=komoditas">Produk</a></li>
							<li><a href="data_supplier.php">Supplier</a></li>
							<li><a href="data_customer.php">Customer</a></li>
						</ul>
					</li>
		  <li><a><i class="fa fa-bar-chart-o"></i> Report <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="data_transaksi_bahanbaku.php">Transaksi Bahan Baku</a></li>
							<li><a href="data_bbm.php">Laporan Bahan Baku Masuk</a></li>
							<li><a href="data_bahan_pakai.php">Laporan Kegiatan Bahan</a></li>
							<li><a href="data_transaksi_produk.php">Transaksi Produk</a></li>
							<li><a href="data_rekap_penjualan.php?page=rosella">Rekap Penjualan Produk</a></li>
							<li><a href="data_forecast.php">Data Historis Penjualan</a></li>
							<li><a href="data_transaksi_produksi.php">Laporan Kegiatan Produksi</a></li>
							<li><a href="data_hasil_peramalan.php">Hasil Peramalan Produk</a></li>
						</ul>
					</li>
          <li><a><i class="fa fa-edit"></i> Data <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
						<?php if($_SESSION['user_login'] == '10001'){
							echo "<li><a href='input_bahanbaku.php'>Tambah Jenis Bahan Baku</a></li>
							<li><a href='input_gudang_bahanbaku.php'>Input Stok Jenis Bahan Baru</a></li>
              <li><a href='input_supplier.php'>Tambah Supplier</a></li>
              <li><a href='transaksi_bahanbaku.php'>Transaksi Bahan Baku</a></li>
              <li><a href='buktibahanmasuk.php'>Bukti Bahan Masuk</a></li>
			  <li><a href='input_bahan_pakai.php'>Tambah Kegiatan Bahan</a></li>";
						}?>
            <?php if($_SESSION['user_login'] == '10002'){
							echo "<li><a href='input_produk.php'>Tambah Jenis Produk</a></li>
							<li><a href='input_gudang_produk.php'>Input Stok Produk Baru</a></li>
              <li><a href='input_customer.php'>Tambah Customer</a></li>
              <li><a href='transaksi_produk.php'>Transaksi Produk</a></li>";
						}?>
            <?php if($_SESSION['user_login'] == '10003'){							
              echo "<li><a href='transaksi_produksi.php'>Tambah Kegiatan Produksi</a></li>
              <li><a href='forecast_otomatis.php'>Tambah Data untuk Forecast</a></li>";
						}?>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <!-- Sidebar Footer Buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
  </div>
</div>