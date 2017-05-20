<?php
	function get_penerimaan_prodi_by_tahun_periode($connection, $tahun_periode) {
		$result = pg_query($connection, "select * from penerimaan_prodi where tahun_periode = '$tahun_periode'");

		if (!$result) {
		    echo "An error occurred.\n";
		    exit;
		}
		$penerimaan_prodi = pg_fetch_all($result);
		
		return $penerimaan_prodi;
	}
?>