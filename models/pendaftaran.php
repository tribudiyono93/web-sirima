<?php
	function get_max_id_pendaftaran($connection) {
		$result = pg_query($connection, "select max(id) as id from pendaftaran");
		if (!$result) {
		    echo "An error occurred.\n";
		    exit;
		}
		$max_id = pg_fetch_array($result);
		
		return $max_id;
	}


	function save_pendaftaran($connection, $data_pendaftaran) {

		$sql = "insert into pendaftaran (id, pelamar, nomor_periode, tahun_periode) values (" . $data_pendaftaran['id'] . ",'" . $data_pendaftaran['pelamar'] . "'," . $data_pendaftaran['nomor_periode'] . ",'" . $data_pendaftaran['tahun_periode'] . "')";

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