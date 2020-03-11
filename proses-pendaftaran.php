<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	//ambil data dari formulir
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jenis_layanan = $_POST['jenis_layanan'];
	$extra = $_POST['extra'];
	$lama_sewa = $_POST['lama'];
	$checkout = 0;
	$qty = $_POST['qty'];
	$diskon = 0;
	$total_biaya = 0;
	$biaya = 0;
	$jml_bayar = 0;

	if($lama_sewa==1){
		$checkout = date('Y-m-d', strtotime('+1 month', strtotime($_POST['checkin'])));
	}else if($lama_sewa==3){
		$checkout = date('Y-m-d', strtotime('+3 month', strtotime($_POST['checkin'])));
	}else if($lama_sewa==6){
		$checkout = date('Y-m-d', strtotime('+6 month', strtotime($_POST['checkin'])));
	}else if($lama_sewa==12){
		$checkout = date('Y-m-d', strtotime('+1 year', strtotime($_POST['checkin'])));
	}

	if($jenis_layanan=="C01"){
		if($extra=="Ya"){
			$biaya = 50000;
		}else if($extra=="Tidak"){
			$biaya = 40000;
		}
	}else if($jenis_layanan=="C02"){
		if($extra=="Ya"){
			$biaya = 75000;
		}else if($extra=="Tidak"){
			$biaya = 65000;
		}
	}else if($jenis_layanan=="C03"){
		if($extra=="Ya"){
			$biaya = 100000;
		}else if($extra=="Tidak"){
			$biaya = 90000;
		}
	}

	$total_biaya = $biaya * $lama_sewa;

	if($lama_sewa==12){
		$diskon = $total_biaya*0.25;
	}

	$jml_bayar = $total_biaya - $diskon;

	//buat query
	$masuk="INSERT INTO client(nama,email,tgl_berakhir,kode_produk,qty,diskon,total_biaya) VALUE ('$nama','$email','$checkout','$jenis_layanan','$qty','$diskon','$jml_bayar')";
	$query = mysqli_query($db,$masuk);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}	
	
} else {
	die("Akses dilarang...");
}

?>
