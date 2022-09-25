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
  
  <div class="container" style="margin-top: 80px" >
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-sm-6">
                <div class="card text-center">     
                    <div class="card-header">
                        <h3>Enkripsi Vigenere Cipher</h3>
                    </div>           
                        <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
                        <label for="basic">Masukkan Plain Text :</label>
                        <input class="form-control" name="plain" id="input-a"></input>
                        <label for="basic">Masukkan Kunci :</label>
                        <input class="form-control" name="kunci" id="input-a"></input><br>
                        <a href="../index.php" class="btn btn-warning">Back</a>
                        <input type="submit" class="btn btn-success" value=" Encrypt">
                        <input type="reset" class="btn btn-primary" value=" Hapus">
                        </form>
                    </div>
            </div>     
        </div>    
    </div>
  </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
