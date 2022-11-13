<?php 
	$id = $_GET["id"];
	mysqli_query($konek, "delete from kegiatan where idkegiatan='$id'");
	echo "<script>alert('Data berhasil dihapus!');location='.?page=kegiatan'</script>";
	?>