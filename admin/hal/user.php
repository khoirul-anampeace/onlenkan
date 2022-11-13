<h4>Daftar User</h4>
<hr class="linemepet">
<a href=".?page=tuser" class="tambah">Tambah data</a>
<br>
<br>
<table width="100%" border="1">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Username</td>
			<td>Password</td>
			<td>Level</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		$sql = mysqli_query($konek, "select * from user") or die("Error");
		while ($r = mysqli_fetch_assoc($sql))
		{	
			?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$r['nama']?></td>
				<td><?=$r['username']?></td>
				<td><?=$r['password']?></td>
				<td><?=$r['level']?></td>
				<td class="user">
					<a class="ubah" href=".?page=uuser&id=<?=$r['iduser']?>">Ubah</a>
					<a class="hapus" href=".?page=huser&id=<?=$r['iduser']?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
</table>	