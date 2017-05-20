<?php 
	
	function save_pendaftaran_semas($connection, $data_pendaftaran_semas) {

		$sql = "insert into pendaftaran_semas (id_pendaftaran, lokasi_kota, lokasi_tempat) values (" . $data_pendaftaran_semas['id_pendaftaran'] . ",'" . $data_pendaftaran_semas['lokasi_kota'] . "','" . $data_pendaftaran_semas['lokasi_tempat'] . "')";

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

	
	function update_pendaftaran_semas($conn,$data,$where_condition){
	//$where_condition = array('name'=>'Soeng');
	//$data = array("name" => "Kanel");

	$res = pg_update($conn, 'pendaftaran_semas', $data, $where_condition);
	if ($res) {
	  	//echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 //echo "error in input.. <br />";
		 //echo pg_last_error($conn);
		$is_updated = false;
	}
	return $is_updated;
}

?>