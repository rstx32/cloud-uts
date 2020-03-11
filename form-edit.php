<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM client WHERE id=$id";
$query = mysqli_query($db, $sql);
$pelanggan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulir Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
	<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="collapse navbar-collapse justify-content-md-center" id="navvv">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="form-daftar.php">Booking Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="list.php">Daftar Client</a>
		  </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="storage.php">Daftar Layanan</a>
          </li>
        </ul>
      </div>
	</nav>
	<form action="proses-edit.php" method="POST">
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Edit Formulir Client
				</span>
			<input type="hidden" name="id" value="<?php echo $pelanggan['id']; ?>">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nama</span>
					<input class="input100" type="text" name="nama" placeholder="Masukan nama" value="<?php echo $pelanggan['nama']?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Masukan email" value="<?php echo $pelanggan['email']?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Jenis Layanan</span>
					<?php $jl = $pelanggan['kode_produk']; ?>
					<div>
						<select class="selection-2" name="jenis_layanan">
							<option value="C01"<?php echo($jl == 'C01') ? "selected": "" ?>>C01 (Pelajar)</option>
							<option value="C02"<?php echo($jl == 'C02') ? "selected": "" ?>>C02 (Personal)</option>
							<option value="C03"<?php echo($jl == 'C03') ? "selected": "" ?>>C03 (Enterprise)</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Lama Sewa</span>
					<?php $ls = $pelanggan['lama']; ?>
					<div>
						<select class="selection-2" name="lama">
							<option value="1"<?php echo($ls == '1') ? "selected": "" ?>>1 Bulan</option>
							<option value="3"<?php echo($ls == '3') ? "selected": "" ?>>3 Bulan</option>
							<option value="6"<?php echo($ls == '6') ? "selected": "" ?>>6 Bulan</option>
							<option value="12"<?php echo($ls == '12') ? "selected": "" ?>>1 Tahun</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Extra Perlindungan CloudFlare?</span>
					<?php $ex = $pelanggan['extra']; ?>
					<div>
						<select class="selection-2" name="extra">
							<option value="Ya"<?php echo($ex == 'Ya') ? "selected": "" ?>>Ya</option>
							<option value="Tidak"<?php echo($ex == 'Tidak') ? "selected": "" ?>>Tidak</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Tanggal Daftar</span><br>
					<input type="date" name="checkin" />
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Qty (dalam Giga)</span>
					<input class="input100" type="text" name="qty" placeholder="Masukan kuantitas" value="<?php echo $pelanggan['qty']?>">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" value="simpan" name="simpan">
							<span>
								Simpan
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>