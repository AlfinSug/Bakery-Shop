<?php

    $idpel = 0;
    $name_pel = "";
    $alamat = "";  
    $notelp = "";
    $edit_state = false;

    $db = mysqli_connect('localhost', 'root', 'alfin99', 'tokoroti_db') or die ($db);

    if (isset($_POST['simpan'])) {
        $name_pel = $_POST['nama_pel'];
        $alamat = $_POST['alamat_pel'];
        $notelp = $_POST['notelp_pel'];

        $query_insert = "INSERT INTO pelanggan (nama_pel, alamat_pel, notelp_pel) VALUES ('$name_pel', '$alamat', '$notelp')";
        mysqli_query($db, $query_insert);
        header('location: pelanggan.php');
    }
    
    elseif (isset($_POST['ubah'])) {
        $name_pel = $_POST['nama_pel'];
        $alamat = $_POST['alamat_pel'];
        $notelp = $_POST['notelp_pel'];
        $idpel = $_POST['id_pel'];

        $query_update = "UPDATE pelanggan SET nama_pel='$name_pel', alamat_pel='$alamat', notelp_pel='$notelp' WHERE id_pel=$idpel";
        mysqli_query($db, $query_update);
        header('location: pelanggan.php');
    }

    elseif (isset($_GET['del'])) {
        $idpel = $_GET['del'];
        mysqli_query($db, "DELETE FROM pelanggan WHERE id_pel=$idpel");
        header('location: pelanggan.php');
    }

    $results = mysqli_query($db, "SELECT * FROM pelanggan");


?>