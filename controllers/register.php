<?php
	
	include_once('models/akun.php');

	if ( isset($_GET['form_register']) ){

		$title = "Pendaftaran Pelamar";
		include('views/register.php');
	
	} elseif (isset($_GET['register'])) {
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$msg = array();
			$class_stat = "";

			if (!usernameValidator($_POST['username'])) {
				array_push($msg, "username tidak valid, pastikan username hanya mengandung alphanumeric dan titik");
			}

			if (is_username_exist($connection, $_POST['username'])) {
				array_push($msg, "username sudah ada, silahkan ganti dengan username yang lain");
			}

			print_r($msg);
		}
	} elseif (isset($_POST['check_username'])) {
		$message_ok=FALSE;
		$message_error='The system is not available';

		if (isset($_POST['username'])) {
			$username=$_POST['username'];

			if (is_username_exist($connection, $_POST['username'])) {
				$message_ok = TRUE;
			}

		} else {
			$message_error='username not existed.';
		}

		/*$json=array('data' => $message_ok, 'message' =>$message_error);
		echo json_encode($json);*/
		echo $message_ok;

		/*if(isset($_POST['username'],$_POST['password'])):
			if($_POST['username']!=""):
				if($_POST['password']!=""):
					$username=$_POST['username'];
					$password=md5($_POST['password']);
					$res=pg_query($conn,("Select * from user_tbl where username='$username' and password='$password'"));
					if(pg_num_rows($res)>0):
						$message_ok=true;
						$user_list=pg_fetch_array($res);
						$_SESSION['id']=$user_list[0];
						$_SESSION['username']=$user_list[1];
						$message_error='logged now';
					else:
						$message_error='Login falied,please check your login account again';
					endif;
				else:
					$message_error='Wrong password.';
				endif;
			else:
				$message_error='username not existed.';
			endif;
		else:
			$message_error='All fields are required.';
		endif;
		$json=array('data' => $message_ok, 'message' =>$message_error);
		echo json_encode($json);*/
	}

	function usernameValidator($username) {

		$pattern = "/^[a-zA-Z0-9.]*$/";
		$result = FALSE;
		if(!preg_match($pattern, $username)) {
		  	$result = FALSE;
		} else {
			$result = TRUE;
		}

		return $result;
	}  

	function is_username_exist($connection, $username) {
		$result = get_akun_by_username($connection, $username);

		$total_akun = pg_num_rows($result);

		$exist = FALSE;

		if ($total_akun > 0) {
			$exist = TRUE;
		}

		return $exist;
	}
?>