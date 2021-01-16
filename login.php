<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: indexLogin.php?error=Tên người dùng là bắt buộc");
	    exit();
	}else if(empty($pass)){
        header("Location: indexLogin.php?error=Mật khẩu là bắt buộc");
	    exit();
	}else{
		$sql = "SELECT * FROM taikhoan WHERE tentk='$uname' AND matkhau='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['tentk'] === $uname && $row['matkhau'] === $pass) {
            	$_SESSION['tentk'] = $row['tentk'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index_admin.php");
		        exit();
            }else{
				header("Location: indexLogin.php?error=Tên người dùng hoặc mật khẩu sai");
		        exit();
			}
		}else{
			header("Location: indexLogin.php?error=Tên người dùng hoặc mật khẩu sai");
	        exit();
		}
	}
	
}else{
	header("Location: indexLogin.php");
	exit();
}