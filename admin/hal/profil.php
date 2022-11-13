<?php 
$cari = mysqli_query($konek, "select * from perusahaan");
$hitung = mysqli_num_rows($cari);
if ($hitung >0) {
	$r = mysqli_fetch_assoc($cari);
	$nama1 = $r['namaperusahaan'];
	$email1 = $r['email'];
	$alamat1 = $r['alamat'];
	$telp1 = $r['telp'];
}else{
	$nama1 = "";
	$email1 = "";
	$alamat1 = "";
	$telp = "";
}
?>
<h4>Form Profil</h4>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table width="100%" cellpadding="5" cellspacing="2">
		<tr>
			<td width="10%">Nama Perusahaan</td>
			<td width="1%">:</td>
			<td><input type="text" name="txtnama" placeholder="Masukkan nama" required value="<?=$nama1?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="txtemail" placeholder="Masukkan email" value="<?=$email1?>"></td>
		</tr>
		<tr>
			<td>Telephone</td>
			<td>:</td>
			<td><input type="text" name="txttelp" placeholder="Masukkan telephone" value="<?=$telp1?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="txtalamat" cols="30" rows="10" placeholder="Masukkan alamat"><?=$alamat1?></textarea></td>
		</tr>
		<tr>
			<td colspan="1">
				<input type="submit" name="simpanprofil" value="simpan">
			</td>
		</tr>
	</table>
	<?php 
	if ($_POST['simpanprofil']){
		$nama = $_POST['txtnama'];
		$alamat = $_POST['txtalamat'];
		$email = $_POST['txtemail'];
		$telp = $_POST['txttelp'];
 			// mencari data
		$cari = mysqli_query($konek, "select * from perusahaan");
		$hitung = mysqli_num_rows($cari);
		if($hitung > 0) {
			mysqli_query($konek, "update perusahaan set namaperusahaan='$nama', alamat='$alamat', email='$email', telp='$telp'")or die("Gagal simpan");
	}else{
		mysqli_query($konek, "insert into perusahaan(namaperusahaan,alamat,email,telp)values('$nama','$alamat','$email','$telp')")or die("Gagal simpan");	
	}
	// ini pesan berhsail dan mengembalikan pada halaman user
	echo "<script>alert('Data berhasil disimpan!');location-'.?page=profil'</script>";
}
?>
</form>