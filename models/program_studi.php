<?php
	function get_program_studi_by_list_kode_and_jenjang($connection, $kode, $jenjang) {
		$result = pg_query($connection, "select * from program_studi where kode in ($kode)  and jenjang = '$jenjang'");

		if (!$result) {
		    echo "An error occurred.\n";
		    exit;
		}
		$program_studi = pg_fetch_all($result);
		
		return $program_studi;
	}
?>