<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo '<script language="javascript">';
				echo 'alert("Booking Berhasil!")';
				echo '</script>';
			} else {
				echo '<script language="javascript">';
				echo 'alert("Booking Gagal!")';
				echo '</script>';
			}
		?>
	</p>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Selamat Datang</title>
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
	<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
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
	
	<div class="container-contact100">
		<div class="container">
			<h1 class="h1 font-weight-normal text-center">Sewa Cloud Computing Storage</h1>
		</div>
		<table>
			<tr>
				<td>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<a href="form-daftar.php" button class="contact100-form-btn" value="simpan" name="simpan">
								<span>
									Pesan Layanan
								</span>
							</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<a href="list.php" button class="contact100-form-btn" value="simpan" name="simpan">
								<span>
									Daftar Pelanggan
								</span>
							</a>
						</div>
					</div>
				</td>
			</tr>
		</table>
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