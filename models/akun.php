<?php
	function get_akun_by_username($connection, $username) {
		$sql = "select * from akun where username = '$username'";

		$result = pg_query($connection, $sql);

		return $result;
	}

	function get_akun_by_username_and_password($connection, $username, $password) {
		
		$sql = "select * from akun where username = '$username' and password = '$password'";

		$result = pg_query($connection, $sql);

		return $result;
	}
?>