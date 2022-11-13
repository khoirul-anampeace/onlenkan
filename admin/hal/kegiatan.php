<h4>Daftar Kegiatan</h4>
<hr class="linemepet">
<a href=".?page=tkegiatan" class="tambah">Tambah Kegiatan</a>
<br>
<br>
<table width="100%" border="1">
	<thead>
		<tr>
			<td>No</td>
			<td>kegiatan</td>
			<td>Tanggal</td>
			<td>Deskripsi</td>
			<td>User</td>
			<td>Gambar</td>
			<td colspan="2" align="center">Aksi</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		$sql = mysqli_query($konek, "select * from kegiatan") or die("Error");
		while ($r = mysqli_fetch_assoc($sql)) {
		?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $r['kegiatan'] ?></td>
				<td><?= $r['tglkegiatan'] ?></td>
				<td><?= $r['deskripsi'] ?></td>
				<td><?= $r['iduser'] ?></td>
				<td>
					<img src="../kegiatan/<?= $r['gambar'] ?>" width="60" height="60">
				</td>
				<td>
					<a class="ubah" href=".?page=ukegiatan&id=<?= $r['idkegiatan'] ?>">Ubah</a>
				</td>
				<td>
					<a class="hapus" href=".?page=hkegiatan&id=<?= $r['idkegiatan'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>

				</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>