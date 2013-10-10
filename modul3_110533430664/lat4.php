<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih pekerjaan 
 3. Tekan tombol OK untuk men-submit form
 4. Maka muncul hasil pekerjaan
 5. Finish
-->
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Pekerjaan 
			<select name="job"> // tampilan job
				<option value="Pelajar">Pelajar</option> //pilihan job
				<option value="Mahasiswa">Mahasiswa</option>   //pilihan job
				<option value="PNS">PNS</option>  //pilihan job
				<option value="ABRI">ABRI</option>  //pilihan job
				<option value="Swasta">Swasta</option>  //pilihan job
			</select>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['job'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "job" yang didapat dari method POST
				echo $_POST['job'];
			}
		?>
	</body>
</html>