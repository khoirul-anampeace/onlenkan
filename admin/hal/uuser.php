<?php
	$id = $_GET['id'];
	$sql = mysqli_query($konek,"select * from user where iduser = '$id'");
	$r = mysqli_fetch_assoc($sql);
?>
<h4>Form Ubah User</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellspacing="2">
		<tr>
			<td width="10%">Nama</td>
			<td width="1%">:</td>
			<td><input type="text" name="txtnama" placeholder="Masukkan Nama" required value="<?=$r['nama']?>"></td>
		</tr>
		<tr>
			<td width="10%">Username</td>
			<td>:</td>
			<td><input type="text" name="txtuser" placeholder="Masukkan Username" required value="<?=$r['username']?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="txtpass" placeholder="Masukkan Password" required value="<?=$r['password']?>"></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>:</td>
			<td>
				<select name="txtlevel" required>
					<option value="<?=$r['level']?>"><?=$r['level']?></option>
					<option value="Admin">Admin</option>
					<option value="Petugas">Petugas</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="ubahuser" value="Simpan">
			</td>
		</tr>
	</table>

	<?php
		if ($_POST['ubahuser']) {
			$nama = $_POST['txtnama'];
			$user = $_POST['txtuser'];
			$pass = $_POST['txtpass'];
			$level = $_POST['txtlevel'];
			mysqli_query($konek,"update user set nama='$nama', username='$user', level='$level', password='$pass' where iduser='$id'") or die("Gagal simpan");
			// Ini pesan berhasil dan megembalikan pada halaman user
			echo "<script>alert('Data berhasil disimpan!');location='.?page=user'</script>";
		}
	?>
</form>



