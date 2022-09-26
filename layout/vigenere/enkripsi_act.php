<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] == "") {
	echo "<script>
          alert('Login dulu. Silahkan coba lagi!'); 
          window.location='../index.php';
        </script>";
}
?>

<!doctype html>
<html lang="en">
;

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enkripsi Caesar Cipher</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
	<?php
	include "lib/lib.php";
	//mengganti karakter dengan karakter lain/menghilangkan spasi
	$kunci = str_replace(" ", "", $_POST['kunci']);
	$plain = str_replace(" ", "", $_POST['plain']);
	//menghitung panjang karakter
	$panjang_plain = strlen($plain);
	$panjang_kunci = strlen($kunci);
	$index_x = 0;
	$index_y = 0;
	$hasil_ciper = array();
	$hasil_akhir = "";
	while ($index_x < $panjang_plain) {
		//membagi string menjadi bagian tertentu
		//(string, start, length)
		$x = substr($plain, $index_x, 1); //mengambil 1 huruf mulai dai index x sebanyak 1 karakter
		$y = substr($kunci, $index_y, 1);
		//array multi dimensi, baris dan kolom
		$hasil_ciper[$index_x] = $tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];
		$index_x++;
		$index_y++;
		if ($index_y == $panjang_kunci) {
			$index_y = 0;
		}
	}
	$i = 0;
	while ($i < $index_x) {
		//concate assignment
		$hasil_akhir .= $hasil_ciper[$i];
		$i++;
	}
	?>

	<div class="container" style="margin-top: 80px">
		<div class="row">
			<div class="d-flex justify-content-center">
				<div class="col-sm-6">
					<div class="card text-center">
						<div class="card-header">
							<h3>Enkripsi Vigenere Cipher</h3>
						</div>
						<form action="dekripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
							<label for="basic">Cipherteks :</label>
							<input type="text" class="form-control" name="ciper" id="innput-a" value="<?php echo $hasil_akhir; ?>">
							<label for="basic">Masukkan Kunci :</label>
							<input type="text" name="kunci" class="form-control" value="<?php echo $kunci; ?>">
							<br>
							<input type="submit" class="btn btn-success" value="Decrypt">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>