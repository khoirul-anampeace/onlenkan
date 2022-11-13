 <?php 
$cari = mysqli_query($konek, "select * from struktur");
$hitung = mysqli_num_rows($cari);
if ($hitung > 0){
	$r = mysqli_fetch_assoc($cari);
	$gbr = $r['gambar'];
}else {
	$gbr = "";
}
?>
<h4>Form Struktur</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellspacing="2">
		<tr>
			<td width="10%">Gambar Struktur</td>
			<td width="1%">:</td>
			<td><input type="file" name="txtgbr"></td>
		</tr>
		<tr>
			<td>Gambar Sebelumnya</td>
			<td>:</td>
			<td><img src="../gambar/<?=$gbr?>" width="200" height="100"></td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="simpanstruktur" value="simpan">
			</td>
		</tr>
	</table>
	<?php 
	if ($_POST['simpanstruktur']){
		$tmp = $_FILES['txtgbr']['tmp_name'];
		$nama = $_FILES['txtgbr']['name'];
		// Mencari data
		if ($hitung > 0) {
			mysqli_query($konek, "update struktur set gambar='$nama'")or die ("Gagal simpan");
			copy($tmp, "../gambar/$nama");
		}else{
			mysqli_query($konek, "insert into struktur(gambar)values('$nama')")or die ("Gagal simpan");
		}
		// ini pesan berhasil dan mengembalikan pada halamnan struktur
		echo "<script>alert('Data berhasil disimpan!');location'.?page=struktur'</script>";
		}
?>
</form>