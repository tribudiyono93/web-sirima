<?php
	function save_pendaftaran_prodi($connection, $data_pendaftaran_prodi) {

		$sql = "insert into pendaftaran_prodi (id_pendaftaran, kode_prodi) values (" . $data_pendaftaran_prodi['id_pendaftaran'] . "," . $data_pendaftaran_prodi['kode_prodi'] . ")";

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