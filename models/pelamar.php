<?php

	function save_pelamar($connection, $data_pelamar) {

		$sql = "insert into pelamar (username, nama_lengkap, alamat, jenis_kelamin, tanggal_lahir, no_ktp, email) values ('".$data_pelamar['username']."','".$data_pelamar['nama_lengkap']."','".$data_pelamar['alamat']."','".$data_pelamar['jenis_kelamin']."', to_date('".$data_pelamar['tanggal_lahir']."','dd/mm/yyyy'),'".$data_pelamar['no_ktp']."','".$data_pelamar['email']."')";

		$result = pg_query($connection, $sql);
		$is_inserted = FALSE;
		if ($result) {
			$is_inserted = TRUE;
		} else {
			echo pg_last_error($connection);
			$is_inserted = FALSE;
		}

		return $is_inserted;
	}

?>