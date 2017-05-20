<?php
	locked();
	include_once('models/penerimaan_prodi.php');
	include_once('models/program_studi.php');
	include_once('models/periode_penerimaan.php');
	include_once('models/lokasi_ujian.php');
	include_once('models/ruang_ujian.php');
	include_once('models/pendaftaran.php');
	include_once('models/pendaftaran_semas.php');
	include_once('models/pendaftaran_semas_sarjana.php');
	include_once('models/pendaftaran_prodi.php');
	include_once('models/pembayaran.php');

	if ( isset($_GET['pendaftaran_semas']) ){
		$title = 'home';
		include('views/pendaftaran_semas_pilih_jenjang.php');
	
	} elseif (isset($_GET['pendaftaran_semas_pilih_jenjang'])) {
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$jenjang = $_POST['jenjang'];
			$current_year = date('Y');
			
			$penerimaan_prodi = get_penerimaan_prodi_by_tahun_periode($connection, $current_year);

			$kode_prodi = "";
			$i = 1;
			foreach ($penerimaan_prodi as $row) {
				if ($i == 1) {
					$kode_prodi .= $row['kode_prodi'];
				} else {
					$kode_prodi .= "," . $row['kode_prodi'];
				}
				$i++;
			}

			$program_studi = get_program_studi_by_list_kode_and_jenjang($connection, $kode_prodi, $jenjang);

			//periode penerimaan
			$periode_penerimaan = get_periode_penerimaan_by_tahun_periode($connection, $current_year);

			$lokasi_ujian = get_lokasi_ujian_by_nomor_periode_and_tahun_periode_and_jenjang($connection, $periode_penerimaan['nomor'], $periode_penerimaan['tahun'], $jenjang);


			$title = "pendaftaran semas sarjana";
			include('views/pendaftaran_semas_sarjana.php');

			//print_r($lokasi_ujian);
		}
	} elseif (isset($_GET['get_lokasi_tempat_ujian_by_kota_ujian'])) {
		$lokasi_ruang_ujian = "";
		$html_lokasi_ruang_ujian = "";
		
		if (isset($_POST['kota'])) {
			$lokasi_ruang_ujian = get_lokasi_ruang_ujian_by_kota($connection, $_POST['kota']);

			$html_lokasi_ruang_ujian .= "<label class='control-label col-md-3 col-sm-3 col-xs-12'>Lokasi Tempat Ujian</label>";
	        $html_lokasi_ruang_ujian .= "<div class='col-md-6 col-sm-6 col-xs-12'>";
	        $html_lokasi_ruang_ujian .= "<select name='lokasi_tempat' class='form-control' tabindex='-1'>";

	        foreach ($lokasi_ruang_ujian as $row) {
	        	$html_lokasi_ruang_ujian .= "<option value='".$row['tempat']."' >".$row['tempat']."</option>";
	        }
	        $html_lokasi_ruang_ujian .= "</select>";
	        $html_lokasi_ruang_ujian .= "</div>";
			
		}
		header('Content-Type:Application/json');
		echo json_encode(['lokasi_ruang_ujian' => $html_lokasi_ruang_ujian]);
	} elseif (isset($_GET['save_pendaftaran_semas_sarjana'])) {
		$max_id = get_max_id_pendaftaran($connection);
		$id = $max_id['id'] + 1;
		
		$pelamar = $_SESSION['username'];
		

		$current_year = date('Y');
		$periode_penerimaan = get_periode_penerimaan_by_tahun_periode($connection, $current_year);

		$nomor_periode = $periode_penerimaan['nomor'];
		$tahun_periode = $periode_penerimaan['tahun'];
		
		$data_pendaftaran['id'] = $id;
		//$data_pendaftaran['status_lulus'] = FALSE;
		//$data_pendaftaran['status_verifikasi'] = 0;
		$data_pendaftaran['pelamar'] = $pelamar;
		$data_pendaftaran['nomor_periode'] = $nomor_periode;
		$data_pendaftaran['tahun_periode'] = $tahun_periode;

		$data_semas['id_pendaftaran'] = $id;
		//$data_semas['status_hadir'] = FALSE;
		//$data_semas['nilai_ujian'] = 0;
		//$data_semas['no_kartu_ujian'] =
		$data_semas['lokasi_kota'] = $_POST['lokasi_kota'];
		$data_semas['lokasi_tempat'] = $_POST['lokasi_tempat'];

		$data_semas_sarjana['id_pendaftaran'] = $id;
		$data_semas_sarjana['asal_sekolah'] = $_POST['asal_sekolah'];
		$data_semas_sarjana['jenis_sma'] = $_POST['jenis_sma'];
		$data_semas_sarjana['alamat_sekolah'] = $_POST['alamat_sekolah'];
		$data_semas_sarjana['nisn'] = $_POST['nisn'];
		$data_semas_sarjana['tgl_lulus'] = date('d/m/Y', strtotime($_POST['tgl_lulus'])); ;
		$data_semas_sarjana['nilai_uan'] = $_POST['nilai_uan'];

		$pendaftaran_prodi1['id_pendaftaran'] = $id;
		$pendaftaran_prodi1['kode_prodi'] = $_POST['prodi1'];

		$pendaftaran_prodi2['id_pendaftaran'] = $id;
		$pendaftaran_prodi2['kode_prodi'] = $_POST['prodi2'];

		$pendaftaran_prodi3['id_pendaftaran'] = $id;
		$pendaftaran_prodi3['kode_prodi'] = $_POST['prodi3'];

		
		$is_pendaftaran_inserted = save_pendaftaran($connection, $data_pendaftaran);

		$is_pendaftaran_semas_inserted = save_pendaftaran_semas($connection, $data_semas);

		$is_pendaftaran_semas_sarjana_inserted = save_pendaftaran_semas_sarjana($connection, $data_semas_sarjana);

		$is_pendaftaran_prodi1_inserted = save_pendaftaran_prodi($connection, $pendaftaran_prodi1);

		$is_pendaftaran_prodi2_inserted = save_pendaftaran_prodi($connection, $pendaftaran_prodi2);

		$is_pendaftaran_prodi3_inserted = save_pendaftaran_prodi($connection, $pendaftaran_prodi3);

		$title = "Form Pembayaran";
		include('views/form_pembayaran.php');
		//validasi prodi pilihan 1,2,3 dan gak boleh sama. kalo sama gagalkan save dan tampilkan pesan error.
	} elseif (isset($_GET['save_pembayaran_pendaftaran_semas_sarjana'])) {


		$where_condition['id_pendaftaran'] = $_POST['id_pendaftaran'];
		$data_semas['no_kartu_ujian'] = date('mdis') . rand(10,99);

		$is_updated = update_pendaftaran_semas($connection,$data_semas,$where_condition);



		$max_id_pembayaran = get_max_id_pembayaran($connection);

		$data_pembayaran['id'] = $max_id_pembayaran['id'] + 1;
		$data_pembayaran['waktu_bayar'] = date('d/m/Y h:i');
		$data_pembayaran['jumlah_bayar'] = $_POST['jumlah_bayar'];
		$data_pembayaran['id_pendaftaran'] = $_POST['id_pendaftaran'];

		$is_pembayaran_inserted = save_pembayaran($connection, $data_pembayaran);


		$id_pembayaran = $data_pembayaran['id'];
		$id_pendaftaran = $data_pembayaran['id_pendaftaran'];
		$nomor_kartu_ujian = $data_semas['no_kartu_ujian'];

		$title = "Pembayaran";
		include('views/pendaftaran_sukses.php');


	}
?>