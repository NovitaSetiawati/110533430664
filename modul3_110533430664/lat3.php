<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih jenis kelamin
 3. Tekan tombol OK untuk men-submit form
 4. Maka muncul hasil yaitu jenis kelamin yang anda pilih
 5. Finish
-->
	<head>
		<title>Data Radio Button</title> 
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin <input type="radio" name="sex" value="Pria" />Pria <input type="radio" name="sex" value="Wanita" />Wanita // pilihan jenis kelamin
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['sex'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "sex" yang didapat dari method POST
				echo $_POST['sex'];
			}
		?>
	</body>
</html>