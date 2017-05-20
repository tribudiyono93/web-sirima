<?php
	function get_lokasi_ruang_ujian_by_kota($connection, $kota) {
		$result = pg_query($connection, "select * from ruang_ujian where kota = '$kota'");

		if (!$result) {
		    echo "An error occurred.\n";
		    exit;
		}
		$ruang_ujian = pg_fetch_all($result);
		
		return $ruang_ujian;
	}
?>