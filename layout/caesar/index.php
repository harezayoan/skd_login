<?php  

session_start();
    
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['role']=="" ){
  echo "<script>
          alert('Login dulu. Silahkan coba lagi!'); 
          window.location='../index.php';
        </script>";
}
error_reporting(E_ERROR | E_PARSE);
$kalimat = $_POST["kata"];
$key = $_POST["key"];
for ($i = 0; $i < strlen($kalimat); $i++) {
 $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
 $b[$i] = ($kode[$i] + $key); //proses enkripsi
 $c[$i] = chr($b[$i]); //rubah desimal ke ASCII }
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
                        <h3>Enkripsi Caesar Cipher</h3>
                    </div>           

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label>Isi Teks</label>
                                <input  type="text" name="kata" <?php if(isset($_POST['proses'])){echo "value='".$_POST['kata']."'";} ?> class="form-control" placeholder="Masukan Plain Text" required>            
                            </div>
                            <div class="mb-3">
                                <label>Isi Key</label>
                                <input  type="text" name="key"  <?php if(isset($_POST['proses'])){echo "value='".$_POST['key']."'";} ?>  maxlength="2" class="form-control" placeholder="Masukan Key" required>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-primary" name="proses" value="Enkripsi" >
                                <input type="reset"  class="btn btn-danger" name="reset" value="Reset" > <br>
                                <a href="dekripsiCaesar.php" class="">Dekripsi</a>
                              
                            </div>
                        </form>
                            <h4>Hasil Enkripsi</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                    <input type="text" class="form-control" name="chiper" value="
                                    <?php 
                                        $hsl = '';
                                        for ($i = 0; $i < strlen($kalimat); $i++) {
                                        echo $c[$i];
                                        $hsl = $hsl . $c[$i];
                                        }
                                    ?>" r
                                    eadonly="true">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="2"><a href="../../logout.php" class="btn btn-danger ">Log Out</a></button></td>
                                </tr>
                            </table>
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
