<h4>Halaman berita</h4>
<hr>
<?php 
	$b = mysqli_query($konek, "select * from berita b inner join user u on b.iduser=u.iduser order by idberita desc");
	while ($r = mysqli_fetch_assoc($b)) {
		
 ?>
 <table width="100%" cellspacing="5" cellpadding="2" style="border-bottom: solid 1px #ccc; margin-bottom: 16px;">
 	<tr>
 		<td colspan="2"><h3><?=$r['judul']?></h3></td>
 	</tr>
 	<tr valign="top">
 		<img src="gambar/<?=$r['gambar']?>" alt="" height="100" width="100">
 		<td valign="top">
 			<?=$r['isiberita']?>
 		</td>
 	</tr>
 	<tr>
 		<td colspan="2">
 			<small>Di posting tanggal <?=$r['tglpost']?> oleh <?=$r['nama']?> </small>
 		</td>
 	</tr>
 </table>
 <?php } ?>