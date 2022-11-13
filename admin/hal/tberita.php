<h4>Form Tambah Berita</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellsspacing="2">
		<tr>
			<td width="10%">Judul</td>
			<td width="1%">:</td>
			<td><input type="text" name="txtjudul" placeholder="Masukkan judul" required></td>
		</tr>
		<tr>
			<td width="10%">Gambar</td>
			<td>:</td>
			<td><input type="file" name="txtgbr" placeholder="Masukkan gambar" required></td>
		</tr>
		<tr>
			<td width="10%">Isi Berita</td>
			<td width="1%">:</td>
			<td>
				<textarea name="txtisi" col="30" rows="10" placeholder="Masukkan Berita" required></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="simpanberita" value="simpan">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
	<?php
	if ($_POST['simpanberita']) {
		$judul = $_POST['txtjudul'];
		$isi = $_POST['txtisi'];
		// Menambahkan ini untuk membaca gambar
		$tmp = $_FILES['txtgbr']['tmp_name'];
		$nama = $_FILES['txtgbr']['name'];
		// Membaca sesi user
		$iduser = $_SESSION['iduser'];
		// Membuat tanggal sekarang
		$tgl = date("y-m-d");

		mysqli_query($konek, "insert into berita(judul,tglpost,iduser,isiberita,gambar)values('$judul','$tgl','$iduser','$isi','$nama')") or die (mysqli_error($konek).mysqli_errno($konek));
		// Copyfile ke folder kegiatan 
		copy($tmp, "../gambar/$nama");
		// Ini pesan berhasil dan mengembalikan pada halaman user
		echo "<script>alert('Data Berhasil Disimpan!');location='.?page=berita' </script>";
	}	
	?>
</form>