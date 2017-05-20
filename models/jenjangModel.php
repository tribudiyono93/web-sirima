<?php
	function get_jenjang($connection) {
		$sql = "select * from jenjang";

		$result = pg_query($connection, $sql);

		return $result;
	}
?>