<?php
	function get_periode_penerimaan($connection) {
		$sql = "select * from periode_penerimaan";

		$result = pg_query($connection, $sql);

		return $result;
	}

	function get_rekap_pendaftaran_by_periode_and_jenjang($connection, $jenjang, $periode){
		$sql =  "select nama, jenis_kelas, nama_fakultas, kuota, jumlah_pelamar, jumlah_diterima
				from penerimaan_prodi, program_studi
				where penerimaan_prodi.kode_prodi = program_studi.kode
				AND
				program_studi.jenjang = '".$jenjang."'
				AND
				penerimaan_prodi.tahun_periode = '".$periode."';";

		$result = pg_query($connection, $sql);
				
		return $result;
	}
?>