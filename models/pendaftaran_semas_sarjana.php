<?php

	function save_pendaftaran_semas_sarjana($connection, $data_pendaftaran_semas_sarjana) {

		$sql = "insert into pendaftaran_semas_sarjana (id_pendaftaran, asal_sekolah, jenis_sma, alamat_sekolah, nisn, tgl_lulus, nilai_uan) values (" . $data_pendaftaran_semas_sarjana['id_pendaftaran'] . ",'" . $data_pendaftaran_semas_sarjana['asal_sekolah'] . "','" . $data_pendaftaran_semas_sarjana['jenis_sma'] . "','" . $data_pendaftaran_semas_sarjana['alamat_sekolah'] . "','" . $data_pendaftaran_semas_sarjana['nisn'] . "',to_date('".$data_pendaftaran_semas_sarjana['tgl_lulus']."','dd/mm/yyyy')," . $data_pendaftaran_semas_sarjana['nilai_uan'] . ")";

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