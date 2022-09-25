<?php 

if(isset($_COOKIE['user']))
{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="20">
    <?php
	  echo "<div style='color:white; 
                    padding:20px; 
                    font-size:2.5em; 
                    background: #EB1D36;'>
                    <b>Akun Terkunci! </b><br>".$_COOKIE['user']."
          </div>";
  }else{
  ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Form Login</title>
  </head>
  <body>


    <div class="container">
        <div class="card login-form">             
            <div class="card-body">
              <h2 class="card-title">Login</h2>
              <h6 class="card-subtitle text-muted mb-5 fw-bold">Silahkan login terlebih dahulu!</h6>
              <form action="aksi-login.php" method="POST">
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Email*</label>
                  <input type="email" name="email" class="form-control" id="email"  placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Min 8 character">
                </div>
                <div class="d-flex justify-content-end">
                    <div>
                        <a href="#" class="link">Lupa Password ?</a>
                    </div>
                </div>
                <div class="d-grid mt-5">
                    <button class="btn btn-success btn-login" name="submit" >Sign in</button>
                    
                </div>
                <div class="mt-3">
                    <label>belum punya akun ? <a href="sign-up.php" class="link">Buat akun disini!</a></label>
                </div>
              </form>
            </div>
          </div>
    </div>
    <?php
}
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

