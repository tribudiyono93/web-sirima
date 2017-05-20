<?php
	locked();
	include_once('models/pelamar.php');
	if ( isset($_GET['lihat_kartu_ujian']) ){
		
		$title = "Lihat kartu ujian";
		include('views/lihat_kartu_ujian.php');
	} elseif (isset($_GET['get_kartu_ujian_by_id_pendaftaran'])) {
		
		if (isset($_POST['id_pendaftaran'])) {
			
		}
	}
?>