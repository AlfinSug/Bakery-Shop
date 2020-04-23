<?php


    $idpgw = 0;
    $name_pgw = "";
    $alamatPgw = "";  
    $notelpPgw = "";
    $edit_state = false;

    $db = mysqli_connect('localhost', 'root', 'alfin99', 'tokoroti_db') or die ($db);

    if (isset($_POST['simpan'])) {
        $name_pgw = $_POST['nama_pgw'];
        $alamatPgw = $_POST['alamat_pgw'];
        $notelpPgw = $_POST['notelp_pgw'];

        $query_insert = "INSERT INTO pegawai (nama_pgw, alamat_pgw, notelp_pgw) VALUES ('$name_pgw', '$alamatPgw', '$notelpPgw')";
        mysqli_query($db, $query_insert);
        header('location: pegawai.php');
    }
    
    elseif (isset($_POST['ubah'])) {
        $name_pgw = $_POST['nama_pgw'];
        $alamatPgw = $_POST['alamat_pgw'];
        $notelpPgw = $_POST['notelp_pgw'];
        $idpgw = $_POST['id_pgw'];

        $query_update = "UPDATE pegawai SET nama_pgw='$name_pgw', alamat_pgw='$alamatPgw', notelp_pgw='$notelpPgw' WHERE id_pgw=$idpgw";
        mysqli_query($db, $query_update);
        header('location: pegawai.php');
    }

    elseif (isset($_GET['del'])) {
        $idpgw = $_GET['del'];
        mysqli_query($db, "DELETE FROM pegawai WHERE id_pgw=$idpgw");
        header('location: pegawai.php');
    }

    $results = mysqli_query($db, "SELECT * FROM pegawai");

?>