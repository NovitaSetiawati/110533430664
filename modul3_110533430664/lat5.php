<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih hobby (bisa lebih dari satu)
 3. Tekan tombol OK untuk men-submit form
 4. Maka muncul hasil macam-macam hobby yang telah pilih
 5. Finish
-->
	<head>
		<title>Data Checkbox</title>
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Hobby 
            <!-- name pada input checkbox diberi array agar dapat diproses karena pilihan bisa dipilih lebih dari satu -->
			<input type="checkbox" name="hobby[]" value="Membaca" /> Membaca
			<input type="checkbox" name="hobby[]" value="Menulis" /> Menulis
			<input type="checkbox" name="hobby[]" value="Olahraga" /> Olahraga
			<input type="checkbox" name="hobby[]" value="Menyanyi" /> Menyanyi
			<input type="checkbox" name="hobby[]" value="Berenang" /> Berenang
			<input type="checkbox" name="hobby[]" value="Travelling" /> travelling
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['hobby'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "hobby" yang didapat dari method POST
				foreach($_POST['hobby'] as $key => $val) //perulangan menggunakan foreach yang melooping "hobby" yang sebelumnya dipilih dan menampilkannya
					echo $key . '->' . $val . '<br />';
				echo $_POST['job'];
			}
		?>
	</body>
</html>