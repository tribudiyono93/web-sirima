<?php
	locked();
	include_once('models/pelamar.php');
	if ( isset($_GET['riwayat_pendaftaran']) ){

		$pelamar = get_pelamar_by_username($connection, $_SESSION['username']);
		
		$title = "Lihat riwayat pendaftaran";
		include('views/riwayat_pendaftaran.php');
	}
?>