<?php include('conn_pegawai.php'); 

    if (isset($_GET['edit'])) {
        $idpgw = $_GET['edit'];
        $edit_state = true;

        $rec = mysqli_query($db, "SELECT * FROM pegawai WHERE id_pgw=$idpgw");
        $record = mysqli_fetch_array($rec);
        $name_pgw = $record['nama_pgw'];
        $alamatPgw = $record['alamat_pgw'];
        $notelpPgw = $record['notelp_pgw'];
        $idpgw = $record['id_pgw'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>
    <link rel="stylesheet" href="style_pegawai.css">
</head>
<body>
    <div class="header">
            <span><a href="home.php"><img src="img/back.png" alt=""></a></span>
            <span><h2>Data Pegawai</h2></span>
    </div>

    <div class="container">
        <div class="form-input">
            
            <form method="post" action="conn_pegawai.php">
                <input type="hidden" name="id_pgw" value="<?php echo $idpgw; ?>">
                <div class="input-group">
                    <label>Nama Pegawai</label>
                    <input type="text" name="nama_pgw" value="<?php echo $name_pgw; ?>">
                </div>
                <div class="input-group">
                    <label>Alamat Pegawai</label>
                    <input type="text" name="alamat_pgw" value="<?php echo $alamatPgw; ?>">
                </div>
                <div class="input-group">
                    <label>No. Telpon Pegawai</label>
                    <input type="text" name="notelp_pgw" value="<?php echo $notelpPgw; ?>">
                </div>
                <div class="input-group">
                    <?php if ($edit_state == false): ?>
                    <button type="submit" name="simpan" class="btn">Simpan</button>
                    <?php else: ?>
                    <button type="submit" name="ubah" class="btn">Ubah</button>
                    <?php endif ?>
                </div>
            </form>
        </div>
        <div class="table-data">
            <table>
                <thead>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Alamat Pegawai</th>
                        <th>No. Telpon Pegawai</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['nama_pgw']; ?></td>
                        <td><?php echo $row['alamat_pgw']; ?></td>
                        <td><?php echo $row['notelp_pgw']; ?></td>
                        <td><a href="pegawai.php?edit=<?php echo $row['id_pgw']; ?>" class="edit-btn">Edit</a></td>
                        <td><a href="conn_pegawai.php?del=<?php echo $row['id_pgw']; ?>" class="del-btn">Delete</a></td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    
</body>
</html>