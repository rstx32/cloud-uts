<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar client</title>
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
				<table class="table table-hover table-dark table-lg table-bordered">
					<thead>
					<tr class="tengah bg-danger">
						<th scope="col">No</th>
						<th scope="col">Id</th>
						<th scope="col">Nama</th>
						<th scope="col">Email</th>
						<th scope="col">Expire</th>
						<th scope="col">Jenis Layanan</th>
						<th scope="col">Qty</th>
						<th scope="col">Diskon 25%</th>
						<th scope="col">Total Bayar</th>
						<th scope="col">Edit|Hapus</th>
					</tr>
					</thead>

					<tbody>
						<?php
							$sql = "SELECT * FROM client";
							$query = mysqli_query($db, $sql);
							$no=1;
							while($client = mysqli_fetch_array($query)){
								echo "<tr>";
								
								echo "<th scope='row'>".$no."</td>";
								echo "<td>".$client['id']."</td>";
								echo "<td>".$client['nama']."</td>";
								echo "<td>".$client['email']."</td>";
								echo "<td>".$client['tgl_berakhir']."</td>";
								echo "<td>".$client['kode_produk']."</td>";
								echo "<td>".$client['qty']."GB</td>";
								echo "<td> Rp. ".$client['diskon']."</td>";
								echo "<td> Rp. ".$client['total_biaya']."</td>";
								
								echo "<td>";
								echo "<a href='form-edit.php?id=".$client['id']."'>Edit</a> | ";
								echo "<a href='hapus.php?id=".$client['id']."'>Hapus</a>";
								echo "</td>";
								
								echo "</tr>";
								$no++;
							}		
						?>
					</tbody>
				</table>
				<h3 class="h5 font-weight-normal text-center">Jumlah client : <?php echo mysqli_num_rows($query) ?></h3>
			</div>
		</div>

	</body>
</html>