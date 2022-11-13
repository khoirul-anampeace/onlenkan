<?php 
	$p = mysqli_query($konek, "select * from struktur");
	$data = mysqli_fetch_assoc($p);
 ?>
<h4>Halaman Struktur</h4>
<hr>
<img src="gambar/<?=$data['gambar']?>" alt="" width="100%" height="600px">