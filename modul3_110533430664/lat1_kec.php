<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Inputkan nama pada input text
 3. Tekan tombol OK untuk men-submit form
 4. Akan muncul hasil yaitu jenis metode yang digunakan pada Form
 5. Finish
-->
	<head>
		<title>Identifikasi Metode</title> //judul
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method GET -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_REQUEST['nama'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "nama" yang didapat dari method GET
				echo 'Metode '. $_SERVER['REQUEST_METHOD'];
			}
		?>
	</body>
</html>