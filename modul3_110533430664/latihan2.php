<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Inputkan nama pada input text
 3. Tekan tombol OK untuk men-submit form
 4. Maka muncul hasil seperti yang diinputkan dengan  metode POST dan pada input text berisikan inputan sebelumnya
 5. Finish
-->
	<head>
		<title>Prefilling Text Field</title> //judul
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        	<!-- terdapat validasi php pada value input text digunakan untuk prefilling inputan yang telah diinputkan masih tetap tampil pada input text -->
			Nama <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '' ?>"/>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "nama" yang didapat dari method POST
				echo $_POST['nama'];
			}
		?>
	</body>
</html>