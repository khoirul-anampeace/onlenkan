<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Onlenkan</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="kepala">
		<table width="100%">
			<tr>
				<td width="60%">
					<span class="logo">ONLENKAN</span>
				</td>
				<td width="40%">
					<ul>

						<a href="."><li>Beranda</li></a>
						<a href=".?page=profil"><li>Profil</li></a>
						<a href=".?page=struktur"><li>Struktur</li></a>
						<a href=".?page=berita"><li>Berita</li></a>
						<a href=".?page=kegiatan"><li>Kegiatan</li></a>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	<div class="banner">
		<div class="kata"><span class="bekerja">Bergerak di Bidang IT dalam bentuk jasa dan pelatihan</div>
		<div class="kata2">Ayo bergabung bersama kami!</div>
	</div>
	<div class="konten">
		<?php
			include 'config/koneksi.php';
			$page = @$_GET['page'];
			$hal = "halaman/$page.php";
			$beranda = "halaman/beranda.php";
			if (!empty($page) && file_exists($hal)){
				include "$hal";
			}else{
				include "$beranda";
			}
		 ?>
	</div>
	<div class="kaki">
		&copy; Copyright 2020 Khoirul Anam
	</div>
</body>
</html>