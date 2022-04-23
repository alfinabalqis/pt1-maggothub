<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaggotHub</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">

    <!--Stylesheet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?= time(); ?>">
</head>
<body>

  <div class="register-content">
    <div class="register-form col-md-6">
      <div class="register">
        <div class="title">
          <h2>Daftar</h2>
          <h3>Sebagai Pembeli</h3>
      </div>
      <div class="register mt-5">
          <form>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="names" class="form-control" placeholder="Masukkan Username">
              </div>

              <div class="d-inline-flex">
                <div class="form-group half">
                    <label>No Whatsapp</label>
                    <input type="number" class="form-control" placeholder="Masukkan Email">
                  </div>
    
                  <div class="form-group half">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan Email">
                  </div>
              </div>

              <div class="d-inline-flex">
                <div class="form-group half">
                    <label>Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Masukan Password" id="myInput">
                    <span class="eye" onclick="myFunction()">
                      <i id="hide" class="fa fa-eye" aria-hidden="true"></i>
                      <i  id="hide2" class="fa fa-eye-slash" aria-hidden="true"></i>
                    </span>
                  </div>
    
                  <div class="form-group half">
                    <label>Ulangi Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Masukan Password" id="myInput">
                    <span class="eye" onclick="myFunction()">
                      <i id="hide" class="fa fa-eye" aria-hidden="true"></i>
                      <i  id="hide2" class="fa fa-eye-slash" aria-hidden="true"></i>
                    </span>
                  </div>
              </div>

              <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Masukkan Alamat">
              </div>
          </form>
  
          <div class="btn-register">
              <button type="submit" class="btn btn-login mt-3">Daftar</button>
          </div>

          <div class="akun mt-3">
            <p>Anda udah Memiliki akun? <a href="login-pembeli.php">Masuk</a> disini</p>
          </div>
      </div>
      </div>
    </div>

    <div class="register-ilus">
      <img src="assets/images/register-pembeli.svg" alt="" class="ml-5 animated">
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="assets/script/main.js"></script>
</body>
</html>

