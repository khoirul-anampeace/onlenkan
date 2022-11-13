<?php
	$id = $_GET['id'];
	$sql = mysqli_query($konek, "select * from berita where idberita = '$id'")or die(mysqli_error($konek).mysqli_errno($konek));
	$r = mysqli_fetch_assoc($sql);
 ?>
<h4>Form Ubah Berita</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellsspacing="2">
		<tr>
			<td width="10%">Judul</td>
			<td width="1%">:</td>
			<td><input type="text" name="txtjudul" placeholder="Masukkan judul" required value="<?=$r['judul']?>"></td>
		</tr>
		<tr>
			<td width="10%">Gambar</td>
			<td>:</td>
			<td>
				<input type="file" name="txtgbr">
				<img src="../gambar/<?=$r['gambar']?>" width="60" height="60">
			</td>
		</tr>
		<tr>
			<td width="10%">Isi Berita</td>
			<td width="1%">:</td>
			<td>
				<textarea name="txtisi" cols="30" rows="10" placeholder="Masukkan Berita"><?=$r['isiberita']?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="ubahberita" value="Simpan">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
	<?php
	if ($_POST['ubahberita']) {
		$judul = $_POST['txtjudul'];
		$isi = $_POST['txtisi'];

		// Menambahkan ini untuk membaca gambar
		$tmp = $_FILES['txtgbr']['tmp_name'];
		$nama = $_FILES['txtgbr']['name'];
		// Membaca sesi user
		$iduser = $_SESSION['iduser'];
		// Membuat tanggal sekarang
		$tgl = date("y-m-d");
		if (empty($nama)) {
			mysqli_query($konek, "update berita set judul='$judul', isiberita='$isi' where idberita='$id'")or die("Gagal simpan");
		}else{
			mysqli_query($konek, "update berita set judul='$judul', isiberita='$isi',gambar='$nama' where idberita='$id'")or die("Gagal simpan");
		// Copyfile ke folder kegiatan 
		copy($tmp, "../gambar/$nama");
		}
		
		// Ini pesan berhasil dan mengembalikan pada halaman user
		echo "<script>alert('Data Berhasil Disimpan!');location='.?page=berita' </script>";
	}	
	?>
</form>