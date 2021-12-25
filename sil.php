<!DOCTYPE html>
<html>
<head>
  <title>Veritabanı Yönetimi - Sil</title>
  <meta charset="UTF-8">
</head>
<header>
	<?php
		include 'db_conn.php';
	?>
</header>
<body>
	<?php 
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$silSorgusu="DELETE FROM users WHERE ID='$id'";
			if(mysqli_query($conn, $silSorgusu)) {
			    header("Location: listele.php");
			}
		}
	?>
</body>
</html>