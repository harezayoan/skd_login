<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caesar Cipher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
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
  <div class="container" style="margin-top: 80px" >

    <div class="row">
    <div class="d-flex justify-content-center">
      <div class="col-sm-6">
          <div class="card text-center">
              <div class="card-header">
                    Halaman Enkripsi 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang <?= $_SESSION['nama']; ?></h5>
                    <p class="card-text">Tekan pilihan Cipher Text!</p>
                    <a href="caesar/" class="btn btn-warning">Caesar Cipher</a>
                    <a href="vigenere/" class="btn btn-warning">Vignere Cipher</a> <br>
                  
                </div>
                <div class="card-footer text-muted">
                <a href="../logout.php" class="btn btn-danger ">Log Out</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
