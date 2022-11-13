<?php
session_start();
include '../config/koneksi.php';
if (!empty($_SESSION['username'])) {
	echo "<script>location='home.php'</script>";
} else {
	if (@$_POST['login']) {
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$sql = mysqli_query($konek, "select * from user where username='$username'and password='$password' ");
		if (mysqli_num_rows($sql)) {
			$row = mysqli_fetch_assoc($sql);
			$_SESSION['iduser'] = $row['iduser'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			echo "<script>location='index.php'</script>";
		} else {
			echo "<script>alert('Login Salah');location='login.php'</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Halaman Login</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<div class="bungkus">
		<div align="center" class="title">Form Login</div>
		<form method="post" action="">
			<table width="100%" cellpadding="5" cellspacing="2">
				<tr>
					<td>
						<div class="title">
							Username
						</div>
						<br>
						<input class="form" type="text" name="user" placeholder="Masukkan username">
					</td>
				</tr>
				<tr>
					<td>
						<div class="title">
							Password
						</div>
						<br>
						<input class="form" type="password" name="pass" placeholder="Masukkan Password">
					</td>
				</tr>
				<tr>
					<td>
						<input class="button" type="submit" name="login" value="login">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>