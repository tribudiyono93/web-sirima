<?php
	function get_periode_penerimaan_by_tahun_periode($connection, $tahun_periode) {
		$result = pg_query($connection, "select * from periode_penerimaan where tahun = '$tahun_periode'");
		if (!$result) {
		    echo "An error occurred.\n";
		    exit;
		}
		$periode_penerimaan = pg_fetch_array($result);
		
		return $periode_penerimaan;
	}
?>