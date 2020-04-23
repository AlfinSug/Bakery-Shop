<?php
include "config.php";
session_start();
session_destroy();
echo"<script>alert('anda berhasil logout'); window.location='login.php' </script>";
?>