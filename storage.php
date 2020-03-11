<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Layanan</title>
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
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
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
		<div class="container-contact100">
			<div class="container">
			<table class="table table-hover table-dark table-lg table-bordered">
					<thead>
					<tr class="tengah bg-danger">
						<th scope="col">No</th>
						<th scope="col">Jenis Layanan</th>
						<th scope="col">Stock</th>
					</tr>
					</thead>

					<tbody>
						<?php
							$sql = "SELECT * FROM server";
							$query = mysqli_query($db, $sql);
							$no=1;
							while($server = mysqli_fetch_array($query)){
								echo "<tr>";
								
								echo "<th scope='row'>".$no."</td>";
								echo "<td>".$server['kode_produk']."</td>";
								echo "<td>".$server['stock']."GB</td>";
								
								echo "</tr>";
								$no++;
							}		
						?>
					</tbody>
				</table>
				<h3 class="h5 font-weight-normal text-center">Jumlah Layanan : <?php echo mysqli_num_rows($query) ?></h3>
			</div>
		</div>
	</body>
</html>