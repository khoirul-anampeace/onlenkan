<h4>Form Tambah Kegiatan</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellsspacing="2">
		<tr>
			<td></td>
			<td width="10%">Kegiatan</td>
			<td width="1%">:</td>
			<td><input type="text" name="txtkegiatan" placeholder="Masukkan Nama" required></td>
		</tr>
		<tr>
			<td width="10%">Tanggal</td>
			<td>:</td>
			<td><input type="date" name="txttgl" required></td>
		</tr>
		<tr>
			<td width="10%">Gambar</td>
			<td>:</td>
			<td>
				<input type="file" name="txtgbr" placeholder="Masukkan Username" required>
			</td>
		</tr>
		<tr>
			<td width="10%">Deskripsi</td>
			<td width="1%">:</td>
			<td>
				<textarea type="text" name="txtdeskripsi" col="30" rows="10" placeholder="Masukkan Deskripsi" required>
				</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="simpankegiatan" value="Simpan">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
	<?php
	if ($_POST['simpankegiatan']) {
		$kegiatan = $_POST['txtkegiatan'];
		$desk = $_POST['txtdeskripsi'];
		$tgl = $_POST['txttgl'];
		// Menambahkan ini untuk membaca gambar
		$tmp = $_FILES['txtgbr']['tmp_name'];
		$nama = $_FILES['txtgbr']['name'];
		// Membaca sesi user
		$iduser = $_SESSION['iduser'];

		mysqli_query($konek, "insert into kegiatan(kegiatan, tglkegiatan, iduser, deskripsi, gambar)values('$kegiatan','$tgl','$iduser','$desk','$nama')") or die(mysqli_error($konek) . mysqli_errno($konek));
		// Copyfile ke folder kegiatan 
		copy($tmp, "../kegiatan/$kegiatan");
		// Ini pesan berhasil dan mengembalikan pada halaman user
		echo "<script>alert('Data Berhasil Disimpan!');location='.?page=kegiatan' </script>";
	}
	?>
</form>