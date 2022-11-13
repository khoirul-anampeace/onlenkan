<?php 
	$p = mysqli_query($konek, "select * from perusahaan");
	$data = mysqli_fetch_assoc($p);
 ?>
<h4>Halaman profil</h4>
<hr>
<table width="100%" cellpadding="5" cellspacing="2">
	<tr>
		<td width="10%">Nama</td>
		<td width="1%">:</td>
		<td><?=$data['namaperusahaan']?></td>
	</tr>
	<tr>
		<td>Email / Telp</td>
		<td>:</td>
		<td><?=$data['email']?> / <?=$data['telp']?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?=$data['alamat']?></td>
	</tr>
	<tr>
		<td>Visi</td>
		<td>:</td>
		<td>Ini Visinya</td>
	</tr>
	<tr>
		<td>Misi</td>
		<td>:</td>
		<td>Ini Misinya apa saja</td>
	</tr>
</table>