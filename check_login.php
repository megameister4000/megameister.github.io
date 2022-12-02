<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$captcha = $_POST['captcha'];
		
		if($username == "admin" && $password == "test"){
			if($_SESSION['captcha'] == $captcha){
				$_SESSION['login_user']=$myusername;
				$_SESSION['logged_in'] = 'yes';
				header("location: http://localhost/aq/index.php?pg=home");
			}else{
				echo "<center><label class='text-danger'>Invalid captcha!</label></center>";
			}
		}else{
			echo "<center><label class='text-danger'>Invalid username or password</label></center>";
		}
	}
?>