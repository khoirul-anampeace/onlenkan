<?php 
	$id = $_GET['id'];
	mysqli_query($konek, "delete from berita where idberita='$id'");
	
	echo "<script>alert('Data berhasil dihapus!');location='.?page=berita'</script>";