<?php

if (isset($_GET['controller']) ) {	
	include_once('config/config.php');
	session_start();
	include_once('lib/helper.php');	
	require_once('controllers/'.$_GET['controller'].".php");
	// Close the connection
	pg_close($connection);	
	
}else{
	require_once('controllers/home.php');		
}

?>