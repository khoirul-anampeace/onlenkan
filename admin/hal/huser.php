<?php 
	$id = $_GET["id"];
	mysqli_query($konek, "delete from user where iduser='$id'");
	echo "<script>alert('Data berhasil dihapus!');location='.?page=user'</script>";
	?>