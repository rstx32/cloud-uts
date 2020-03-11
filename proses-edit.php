<?php

include("config.php");

if(isset($_POST['simpan'])){
	//ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jenis_layanan = $_POST['jenis_layanan'];
	$extra = $_POST['extra'];
	$lama_sewa = $_POST['lama'];
	$checkout = date('Y-m-d', strtotime('+1 year', strtotime($_POST['checkin'])));
	$qty = $_POST['qty'];
	$diskon = 0;
	$total_biaya = 0;
	$biaya = 0;
	$jml_bayar = 0;

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

	$sql = "UPDATE client SET nama='$nama', email='$email', tgl_berakhir='$checkout', kode_produk='$jenis_layanan', qty='$qty', diskon='$diskon', total_biaya='$jml_bayar' WHERE id=$id";
	$query = mysqli_query($db,$sql);
	
	if( $query ) {
		header('Location: list.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
	
} else {
	die("Akses dilarang...");
}

?>
