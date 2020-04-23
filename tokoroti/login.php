<?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<script>alert('Username dan password salah'); window.location='login.php'</script>";
            }
            else if($_GET['pesan'] == "logout"){
                echo "<script>alert('Anda telah logout'); window.location='login.php'</script>";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "<script>alert('Anda harus login terlebih dahulu'); window.location='login.php'</script>";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bakery Shop - Login Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style> 

    body {
      background-image: url(img/Group\ 116.png);
      height: 50px;
      width: 100%;
    }
      #title {
        margin-top: 5%;
        display: flex;
        align-items: center;
        font-size: 25px;
        font-weight: 500;
        width: 70%;
      }

      #title img {
        margin-right: 4%;
        width: 10%;
        height: 10%;
      }

      .row {
        margin-top: 5%;
      }

      .btn {
        background-color: #F9A826;
        width: 30%;
        height: 50px;
        border-radius: 7px;
        font-size: 15px;
      }

      .btn:hover {
        background-color: #F8CB82;
      }
      
      .bg-img {
        margin-left: 10px;
      }
    
    </style>
</head>
<body>
    <div class="container">
        <span id="title"><img src="img/bakery-shop.png" alt="">Bakery Shop - Login Admin</span>
        <div class="row">
          <form class="col s6" id="myForm" method="POST" action="server-login.php">
            <div class="row">
              <div class="input-field col s12">
              <label for="firstName">Username</label>
              <input
                type="text"
                name="username"
                id="firstName"
                onfocusout="validateFirstName()"
              />
                <span class="helper-text"></span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
              <label for="password">Password</label>
              <input
                type="password"
                name="password"
                id="password"
                onfocusout="validatePassword()"
              />
                <span class="helper-text"></span>
              </div>
    </div>
              <button class="btn waves-effect waves-light" type="submit">
              Masuk
            </button>
          </form>
          <div class="col s6">
            <img class="bg-img"
              src="img/undraw_healthy_options_sdo3.png"
              style="width: 100%; border-radius: 6px; opacity: 0.85;"
            />
          </div>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="script1.js"></script>
</body>
</html>