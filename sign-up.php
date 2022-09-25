<?php 
 
 include('config.php');
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $role = $_POST['role'];
  
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conf, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (nama, email, password, role)
                    VALUES ('$nama','$email', '$password', '$role')";
            $result = mysqli_query($conf, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Form Sign Up</title>
  </head>
  <body>
    <div class="container">
        <div class="card signup-form">             
            <div class="card-body">
              <h2 class="card-title">Sign Up</h2>
              <h6 class="card-subtitle text-muted mb-5 fw-bold">Silahkan Sign Up terlebih dahulu!</h6>

              <form action="" method="POST">
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap*</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputText" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Email*</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Min 8 character">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Min 8 character" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Role*</label>
                  <select class="form-select" name="role">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                  </select>
                </div>
                <div class="d-grid mt-5">
                    <button type="submit" name="submit" class="btn btn-success btn-login">Sign Up</button>
                </div>
                <div class="mt-3">
                    <label>Sudah punya akun ? <a href="index.php" class="link">Login disini!</a></label>
                </div>
              </form>
            </div>
          </div>
    </div>

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