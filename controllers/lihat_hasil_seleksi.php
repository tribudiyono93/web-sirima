<?php
	locked();
	include_once('models/penerimaan_prodi.php');

	if (isset($_GET['lihat_hasil_seleksi'])) {
		$title = "Lihat Hasil Seleksi";
		include('views/lihat_hasil_seleksi.php');
	}
?>