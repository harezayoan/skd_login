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
                        <h3>Enkripsi Caesar Cipher</h3>
                    </div>           
                        <?php     
                        if(isset($_POST['submit1'])){
                                function Cipher($ch, $key)
                                {
                                    if (!ctype_alpha($ch))
                                            return $ch;
                                    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                                    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
                                }

                                function Encipher($input, $key)
                                {
                                    $output = "";
                                    $inputArr = str_split($input);
                                    foreach ($inputArr as $ch)
                                            $output .= Cipher($ch, $key);
                                    return $output;
                                }

                                function Decipher($input, $key)
                                {
                                        return Encipher($input, 26 - $key);
                                }

                            }else if(isset($_POST['submit2'])){
                                function Cipher($ch, $key)
                                {
                                    if (!ctype_alpha($ch))
                                            return $ch;

                                    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                                    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
                                }

                                function Encipher($input, $key)
                                {
                                    $output = "";
                                    $inputArr = str_split($input);
                                    foreach ($inputArr as $ch)
                                            $output .= Cipher($ch, $key);
                                    return $output;
                                }

                                function Decipher($input, $key)
                                {
                                        return Encipher($input, 26 - $key);
                                }
                            }
                            ?>

                        <form name="enkripsi" method="POST">
                            <div class="mb-3">
                                <label>Isi Teks</label>
                                <textarea name="plain" required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" oninput="setCustomValidity('')" type="text" class="form-control" rows="2" placeholder="Isikan teks disini"></textarea>            
                            </div>
                            <div class="mb-3">
                                <label>Isi Key</label>
                                <input title="Pilih Key." required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" oninput="setCustomValidity('')" type="number" class="form-control" name="metode" placeholder="Masukan Key">
                                </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" name="submit1" value="Enkripsi" >
                                <input type="submit"  class="btn btn-primary" name="submit2" value="Dekripsi" >
                                <input type="reset"  class="btn btn-danger" name="reset" value="Reset" >
                            </div>
                        </form>
                            <h4>Hasil Enkripsi</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Plainteks</th>
                                    <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Encipher($_POST['plain'], $_POST['metode']);} 
                                    if (isset($_POST['submit2'])){ echo Decipher($_POST['plain'], $_POST['metode']);}?></b></td>
                                </tr>
                                <tr>
                                <th>Cipher Teks</th>
                                    <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Decipher(Encipher($_POST['plain'], $_POST['metode']),$_POST['metode']);} 
                                    if (isset($_POST['submit2'])){ echo Encipher(Decipher($_POST['plain'], $_POST['metode']),$_POST['metode']);}?></b></td>
                                </tr>
                                <tr>
                                <th>Key</th>
                                    <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo $_POST['metode'];} 
                                    if (isset($_POST['submit2'])){ echo $_POST['metode'];}?></b></td>
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
