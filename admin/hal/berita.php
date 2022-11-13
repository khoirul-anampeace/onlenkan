<h4>Daftar Berita</h4>
<hr class="linemepet">
<a href=".?page=tberita" class="tambah">Tambah berita</a>
<br>
<br>
<table width="100%" border="1">
	<thead>
		<tr>
			<td>No</td>
			<td>Judul</td>
			<td>Tanggal</td>
			<td>User</td>
			<td>Gambar</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		$sql = mysqli_query($konek, "select * from berita") or die("Error");

		while ($r = mysqli_fetch_assoc($sql)) :
		?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $r['judul'] ?></td>
				<td><?= $r['tglpost'] ?></td>
				<td><?= $r['iduser'] ?></td>
				<td>
					<img src="../gambar/<?= $r['gambar'] ?>" width="60" height="60">
				</td>
				<td>
					<a class="ubah" href=".?page=uberita&id=<?= $r['idberita'] ?>">Ubah</a>
					<a class="hapus" href=".?page=hberita&id=<?= $r['idberita'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
				</td>
			</tr>
		<?php
		endwhile;
		?>
	</tbody>
</table>