<?php 
	include_once('models/akun.php');

	if ( !isset($_GET['authenticate']) ){

		include('views/login.php');
	
	} elseif (isset($_GET['authenticate'])) {
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$username = $_POST['username'];
			$password = $_POST['password'];


			$result = get_akun_by_username_and_password($connection, $username, $password);

			$total_akun = pg_num_rows($result);

			$msg = "";
			$class_stat = 'class="alert alert-info"';

			if ($total_akun < 1) {
				$msg = "username or password is incorrect";
				$class_stat = 'class="alert alert-danger"';

				include('views/login.php');
			} else {
				$akun = pg_fetch_array($result);
				$_SESSION['username']=$akun[0];
				$_SESSION['role']=$akun[1];

				header("Location: index.php?controller=dashboard&index"); 

			}

		}
	}

?>