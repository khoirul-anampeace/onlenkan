<h4>Form Tambah User</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellsspacing="2">
		<tr>
			<td width="10%">Nama</td>
			<td width="1%">:</td>
			<td><input type="text" name="txtnama" placeholder="Masukkan Nama" required></td>
		</tr>
		<tr>
			<td width="10%">Username</td>
			<td>:</td>
			<td><input type="text" name="txtuser" placeholder="Masukkan Username" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="txtpass" placeholder="Masukkan Password" required></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>:</td>
			<td>
				<select name="txtlevel" required>
					<option>-Pilih Level-</option>
					<option value="Admin">Admin</option>
					<option value="Petugas">Petugas</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="simpanuser" value="Simpan">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
	<?php
	if ($_POST['simpanuser']) {
		$nama = $_POST['txtnama'];
		$user = $_POST['txtuser'];
		$pass = $_POST['txtpass'];
		$level = $_POST['txtlevel'];
		mysqli_query($konek, "insert into user(nama, username, password, level)values('$nama','$user','$pass','$level')") or die("Gagal simpan");
		// ini pesan berhasil dan mengembalikan pada halaman user
		echo "<script>alert('Data Berhasil Disimpan!');location='.?page=user' </script>";
	}
	?>
</form>