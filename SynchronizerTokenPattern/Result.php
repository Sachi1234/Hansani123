<?php
/**
 * Created by PhpStorm.
 * User: DELL 1
 * Date: 10/3/2018
 * Time: 7:11 PM
 */


	$username =  $_POST['username'];
	$password =  $_POST['password'];

	if($username == 'Hansani' && $password == 'Hansani'){
		require_once 'CsrfTokrn.php';
		echo 'inside results';
		token::generateToken();
		header("Location:welcome.html");
	} else {
		header("Location:index.html?fail=1");
	}


