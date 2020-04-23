<?php

    $idr = 0;
    $name_roti = "";
    $harga_roti = "";  
    $expDate = "";
    $edit_state = false;

    $db = mysqli_connect('localhost', 'root', 'alfin99', 'tokoroti_db') or die ($db);

    if (isset($_POST['simpan'])) {
        $name_roti = $_POST['nama_roti'];
        $harga_roti = $_POST['harga_roti'];
        $expDate = $_POST['exp_date'];

        $query_insert = "INSERT INTO roti (nama_roti, harga_roti, exp_date) VALUES ('$name_roti', '$harga_roti', '$expDate')";
        mysqli_query($db, $query_insert);
        header('location: roti.php');
    }
    
    elseif (isset($_POST['ubah'])) {
        $name_roti = $_POST['nama_roti'];
        $harga_roti = $_POST['harga_roti'];
        $expDate = $_POST['exp_date'];
        $idr = $_POST['id_roti'];

        $query_update = "UPDATE roti SET nama_roti='$name_roti', harga_roti='$harga_roti', exp_date='$expDate' WHERE id_roti=$idr";
        mysqli_query($db, $query_update);
        header('location: roti.php');
    }

    elseif (isset($_GET['del'])) {
        $idr = $_GET['del'];
        mysqli_query($db, "DELETE FROM roti WHERE id_roti=$idr");
        header('location: roti.php');
    }

    $results = mysqli_query($db, "SELECT * FROM roti");


?>