<?php 
    session_start();
    include 'config.php';
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $data = mysqli_query($db, "SELECT * FROM adminku WHERE username='$user' AND password='$pass'");
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $user;
        $_SESSION['status'] = "login";
        header("location:home.php");
    }
    else{
        header("location:login.php?pesan=failed");
    }
?>