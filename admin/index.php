<?php
session_start();

include '../config/koneksi.php';
if (empty($_SESSION['username'])) {
	echo "<script>location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Onlenkan</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<div class="kepala">
		<table width="100%">
			<tr>
				<td width="60%">
					<span class="logo">Administrator Onlenkan Website</span>
				</td>
				<td width="40%">
					<ul>

						<a href=".?page=user">
							<li>User</li>
						</a>
						<a href=".?page=berita">
							<li>Berita</li>
						</a>
						<a href=".?page=kegiatan">
							<li>Kegiatan</li>
						</a>
						<a href=".?page=profil">
							<li>Profil</li>
						</a>
						<a href=".?page=struktur">
							<li>Struktur</li>
						</a>
						<a href=".?page=logout">
							<li>keluar</li>
						</a>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	<div class="konten">
		<?php
		// tekhnik penyatuan halaman
		$page = @$_GET['page'];
		$hal = "hal/$page.php";
		$beranda = "hal/beranda.php";
		if (!empty($page) && file_exists($hal)) {
			include "$hal";
		} else {
			include "$beranda";
		}
		?>
	</div>
	<div class="kaki">
		&copy; copyright 2020 Khoirul Anam
	</div>
</body>

</html>