<?php  
session_start();
    
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['role']=="" ){
  echo "<script>
          alert('Login dulu. Silahkan coba lagi!'); 
          window.location='../index.php';
        </script>";
}
?>
 
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enkripsi Caesar Cipher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
  <body>
  		<?php
		    include "lib/lib.php";
		    $hasil_ciper = str_replace(" ", "", $_POST['ciper']);
		    $kunci = str_replace(" ", "", $_POST['kunci']);
		    $panjang_kunci = strlen($kunci);
		    $panjang_ciper = strlen($hasil_ciper);
		    $index_x = 0;
		    $index_y = 0;
		    $hasil_konversi = array();
		    $hasil_akhir = "";
		    while ($index_x < $panjang_ciper) {
				$x = substr($hasil_ciper, $index_x, 1);
				$y = substr($kunci, $index_y, 1);
				$konversi_x = huruf_ke_angka($x);
				$konversi_y = huruf_ke_angka($y);
				if ($konversi_x >= $konversi_y) {
					$hasil = $konversi_x - $konversi_y;
				} else {
					$hasil = $konversi_x + (26 - $konversi_y);
				}
					$hasil_konversi[$index_x] = angka_ke_huruf($hasil);
					$index_x++;
					$index_y++;
				if ($index_y == $panjang_kunci) {
					$index_y = 0;
				}
		    }
		    $i = 0;
		    $hasil_akhir = "";
		    while ($i < $index_x) {
				$hasil_akhir .= $hasil_konversi[$i];
				$i++;
		    }
	    ?>

  
  <div class="container" style="margin-top: 80px" >
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-sm-6">
                <div class="card text-center">     
                    <div class="card-header">
                        <h3>Dekripsi Vigenere Cipher</h3>
                    </div>           
                        <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
						    <label for="basic">Plainteks :</label>
						    <input class="form-control" name="plain" id="input" value="<?php echo $hasil_akhir; ?>"></input>
						    <label for="basic">Masukkan Kunci :</label>
						    <input class="form-control" name="kunci"id="input-a" value="<?php echo $kunci; ?>"></input><br>
						    <a href="index.php" class="btn btn-warning">Back</a>
						    <input type="submit" class="btn btn-success" value="Encrypt">
						</form>
                        </div>
                    </div>     
                </div>    
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
