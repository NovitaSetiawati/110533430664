<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. start
 2. Inputkan nama pada input text
 3. Tekan tombol OK untuk men-submit form
 4. maka muncul hasil seperti yang diinputkan dengan pengambilan data metode GET
 5. finish
-->
	<head>
		<title>Metode GET</title> //judul
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method GET -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_GET['nama'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "nama" yang didapat dari method GET
				echo 'Hallo '. $_GET['nama'];
			}
		?>
	</body>
</html>