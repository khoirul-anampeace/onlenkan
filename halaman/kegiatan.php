<h4>Halaman Kegiatan</h4>
<hr>
<?php 
	$b = mysqli_query($konek, "select * from kegiatan b inner join user u on b.iduser=u.iduser order by idkegiatan desc");
	$b = mysqli_query($konek, "select * from kegiatan b inner join user u on b.iduser=u.iduser order by idkegiatan desc");
	while ($r = mysqli_fetch_assoc($b)) {
		
 ?>
 <table width="100%" cellspacing="5" cellpadding="2" style="border-bottom: solid 1px #ccc; margin-bottom: 10px;">
 	<tr>
 		<td colspan="2"><h3><?=$r['kegiatan']?></h3></td>
 	</tr>
 	<tr valign="top">
 		<img src="gambar/<?=$r['gambar']?>" alt="" height="100" width="100">
 		<td valign="top">
 			<?=$r['deskripsi']?>
 		</td>
 	</tr>
 	<tr>
 		<td colspan="2">
 			<small>Di posting tanggal <?=$r['tglkegiatan']?> oleh <?=$r['nama']?> </small>
 		</td>
 	</tr>
 </table>
 <?php } ?>