<?php 
$id = $_GET['id'];
$sql = mysqli_query($konek, "select * from kegiatan	 where idkegiatan = '$id'");
$r = mysqli_fetch_assoc($sql);
?>
<h4>Form Tambah Kegiatan</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellsspacing="2">
		<tr>
			<td width="10%">Kegiatan</td>
			<td width="1%">:</td>
			<td><input type="text" name="txtkegiatan" placeholder="Masukkan Nama" required value="<?=$r['kegiatan']?>"></td>
		</tr>
		<tr>
			<td width="10%">Tanggal</td>
			<td>:</td>
			<td><input type="date" name="txttgl" placeholder="Masukkan Username" required value="<?=$r['tglkegiatan']?>"></td>
		</tr>
		<tr>
			<td width="10%">Gambar</td>
			<td>:</td>
			<td>
				<input type="file" name="txtgbr" >
				<img src="../kegiatan/<?=$r['gambar']?>" width="60" height="60">
			</td>
		</tr>
		<tr>
			<td width="10%">Deskripsi</td>
			<td width="1%">:</td>
			<td>
				<textarea name="txtdeskripsi" cols="30" rows="10" placeholder="Masukkan deskripsi"><?=$r['deskripsi']?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="ubahkegiatan" value="Simpan">
			</td>
		</tr>
	</table>
	<?php
	if ($_POST['ubahkegiatan']) {
		$kegiatan = $_POST['txtkegiatan'];
		$desk = $_POST['txtdeskripsi'];
		$tgl = $_POST['txttgl'];
		// Menambahkan ini untuk membaca gambar
		$tmp = $_FILES['txtgbr']['tmp_name'];
		$nama = $_FILES['txtgbr']['name'];
		// Membaca sesi user
		$iduser = $_SESSION['iduser'];
		if (empty($nama)) {
			mysqli_query($konek, "update kegiatan set kegiatan='$kegiatan', tglkegiatan='$tgl', deskripsi='$desk' where idkegiatan='$id'") or die ("Gagal simpan");
		}else{
			mysqli_query($konek, "update kegiatan set kegiatan='$kegiatan', tglkegiatan='$tgl', deskripsi='$desk', gambar='$nama' where idkegiatan='$id'") or die ("Gagal simpan");
		// Copyfile ke folder kegiatan 
			copy($tmp, "../kegiatan/$nama");
		}
		// Ini pesan berhasil dan mengembalikan pada halaman user
		echo "<script>alert('Data Berhasil Disimpan!');location='.?page=kegiatan' </script>";
	}	
	?>
</form>