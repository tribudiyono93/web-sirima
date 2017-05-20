<?php
	function get_prodi($connection) {
		$sql = "select * from program_studi";

		$result = pg_query($connection, $sql);

		return $result;
	}

	function get_pelamar_by_prodi($connection, $periode, $prodi){

		$sql = "select PD.id, PL.nama_lengkap, PL.alamat, PL.jenis_kelamin, PL.tanggal_lahir, PL.no_ktp, PL.email
			FROM pendaftaran PD, pelamar PL, pendaftaran_prodi PP
			where
			PD.pelamar = PL.username
			AND
			PD.id = PP.id_pendaftaran
			AND
			PD.id in (select PD1.id_pendaftaran from pendaftaran_prodi PD1 where PD1.status_lulus = TRUE)
			AND
			PP.kode_prodi = ".$prodi."
			AND PD.tahun_periode = '".$periode."';";

		$result = pg_query($connection, $sql);

		return $result;
	}
?>