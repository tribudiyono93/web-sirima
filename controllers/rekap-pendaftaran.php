<?php
	
	include_once('models/periode-penerimaanModel.php');
	include_once('models/jenjangModel.php');

	if ( isset($_POST['periode']) && isset($_POST['jenjang']) ){
		$jenjang = $_POST['jenjang'];
		$periode = $_POST['periode'];
		$rekap_pendaftaran = pg_fetch_all(get_rekap_pendaftaran_by_periode_and_jenjang($connection, $jenjang, $periode));		
		$result = 0;
		if($rekap_pendaftaran){
			$result = 1;
		}
		$html = "";
		foreach ($rekap_pendaftaran as $row) {
			$html = $html . "<tr><td>".$row['nama']."</td><td>".$row['jenis_kelas']."</td><td>".$row['nama_fakultas']."</td><td>".$row['kuota']."</td><td>".$row['jumlah_pelamar']."</td><td>".$row['jumlah_diterima']."</td></tr>";
		}
		header('Content-Type: application/json');
		echo json_encode(['result'=>$result, 'rekap' => $html]);
	}

	else{
		$title = "Rekap Pendaftaran";
		$periode_penerimaan = pg_fetch_all(get_periode_penerimaan($connection));
		$jenjang = pg_fetch_all(get_jenjang($connection));
		include('views/lihat_rekap_pendaftaran.php');		
	}
?>