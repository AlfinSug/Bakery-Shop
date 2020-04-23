<?php include('conn_pelanggan.php'); 

    if (isset($_GET['edit'])) {
        $idpel = $_GET['edit'];
        $edit_state = true;

        $rec = mysqli_query($db, "SELECT * FROM pelanggan WHERE id_pel=$idpel");
        $record = mysqli_fetch_array($rec);
        $name_pel = $record['nama_pel'];
        $alamat = $record['alamat_pel'];
        $notelp = $record['notelp_pel'];
        $idpel = $record['id_pel'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelanggan</title>
    <link rel="stylesheet" href="style-pelanggan.css">
</head>
<body>
    <div class="header">
    <a class="active" href="roti.php">Roti</a>
            <a  href="pegawai.php">Pegawai</a>
            <a class="active" href="pelanggan.php">Pelanggan</a>
    </div>

    <div class="container">
        <div class="form-input">
            
            <form method="post" action="conn_pelanggan.php">
                <input type="hidden" name="id_pel" value="<?php echo $idpel; ?>">
                <div class="input-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pel" value="<?php echo $name_pel; ?>">
                </div>
                <div class="input-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat_pel" value="<?php echo $alamat; ?>">
                </div>
                <div class="input-group">
                    <label>No. Telpon</label>
                    <input type="text" name="notelp_pel" value="<?php echo $notelp; ?>">
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
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No. Telpon</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['nama_pel']; ?></td>
                        <td><?php echo $row['alamat_pel']; ?></td>
                        <td><?php echo $row['notelp_pel']; ?></td>
                        <td><a href="pelanggan.php?edit=<?php echo $row['id_pel']; ?>" class="edit-btn">Edit</a></td>
                        <td><a href="conn_pelanggan.php?del=<?php echo $row['id_pel']; ?>" class="del-btn">Delete</a></td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    
</body>
</html>