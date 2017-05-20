<?php
	function get_lokasi_ujian_by_nomor_periode_and_tahun_periode_and_jenjang($connection, $nomor, $tahun, $jenjang) {
		$result = pg_query($connection, "select * from lokasi_ujian where nomor_periode = $nomor and tahun_periode = '$tahun' and jenjang = '$jenjang'");

		if (!$result) {
		    echo "An error occurred.\n";
		    exit;
		}
		$lokasi_ujian = pg_fetch_all($result);
		
		return $lokasi_ujian;
	}
?>