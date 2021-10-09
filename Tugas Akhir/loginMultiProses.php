<?php  

include "koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
	$result = mysqli_query($connect, $sql);
	$cek = mysqli_num_rows($result);

	if ($cek > 0) {
		session_start();
		$_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        $_SESSION["login"] = true;
		header("location:homeAdmin.php");
	}else{
		header("location:loginform.php?pesan=gagal");
		
	}
?>