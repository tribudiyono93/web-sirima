<?php

	function get_max_id_pembayaran($connection) {
		$result = pg_query($connection, "select max(id) as id from pembayaran");
		if (!$result) {
		    echo "An error occurred.\n";
		    exit;
		}
		$max_id = pg_fetch_array($result);
		
		return $max_id;
	}

	function save_pembayaran($connection, $data_pembayaran) {

		$sql = "insert into pembayaran (id, waktu_bayar, jumlah_bayar, id_pendaftaran) values (" . $data_pembayaran['id'] . ",to_date('" . $data_pembayaran['waktu_bayar'] . "','dd/mm/yyyy HH:MI')," . $data_pembayaran['jumlah_bayar'] . ",'" . $data_pembayaran['id_pendaftaran'] . "')";

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