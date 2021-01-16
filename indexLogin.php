<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="indexLogin.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Đăng nhập</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Tên tài khoản</label>
     	<input type="text" name="uname" placeholder="User Name" value=""><br>

     	<label>Mật khẩu</label>
     	<input type="password" name="password" placeholder="Password" ><br>

     	<button type="submit">Đăng nhập</button>
     </form>
</body>
</html>