<?php
	
	include_once('models/periode-penerimaanModel.php');
	include_once('models/prodiModel.php');

	if ( isset($_POST['periode']) && isset($_POST['prodi']) ){
		$periode = $_POST['periode'];
		$prodi = $_POST['prodi'];

		$rekap_pelamar_diterima = pg_fetch_all(get_pelamar_by_prodi($connection, $periode, $prodi));
		$result = 0;
		if($rekap_pelamar_diterima){
			$result = 1;
		}
		$html = "";

		if (is_array($rekap_pelamar_diterima) || is_object($rekap_pelamar_diterima)) {
			foreach ($rekap_pelamar_diterima as $row) {
			$html = $html . "<tr><td>".$row['id']."</td><td>".$row['nama_lengkap']."</td><td>".$row['alamat']."</td><td>".$row['jenis_kelamin']."</td><td>".$row['tanggal_lahir']."</td><td>".$row['no_ktp']."</td><td>".$row['email']."</td></tr>";
		}
		}


		header('Content-Type: application/json');
		echo json_encode(['result'=>$result, 'rekap' => $html]);
	}

	else{
		$title = "Rekap Pelamar";
		$periode_penerimaan = pg_fetch_all(get_periode_penerimaan($connection));
		$prodi = pg_fetch_all(get_prodi($connection));
		include('views/lihat_pelamar_diterima_by_prodi.php');		
	}
?>