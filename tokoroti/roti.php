<?php include('conn_roti.php'); 

    if (isset($_GET['edit'])) {
        $idr = $_GET['edit'];
        $edit_state = true;

        $rec = mysqli_query($db, "SELECT * FROM roti WHERE id_roti=$idr");
        $record = mysqli_fetch_array($rec);
        $name_roti = $record['nama_roti'];
        $harga_roti = $record['harga_roti'];
        $expDate = $record['exp_date'];
        $idr = $record['id_roti'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roti</title>
    <link rel="stylesheet" href="style_roti.css">
</head>
<body>
    <div class="header">
            <a class="active" href="roti.php">Roti</a>
            <a  href="pegawai.php">Pegawai</a>
            <a  href="pelanggan.php">Pelanggan</a>
    </div>

    <div class="container">
        <div class="form-input">
            
            <form method="post" action="conn_roti.php">
                <input type="hidden" name="id_roti" value="<?php echo $idr; ?>">
                <div class="input-group">
                    <label>Nama Roti</label>
                    <input type="text" name="nama_roti" value="<?php echo $name_roti; ?>">
                </div>
                <div class="input-group">
                    <label>Harga</label>
                    <input type="number" name="harga_roti" value="<?php echo $harga_roti; ?>">
                </div>
                <div class="input-group">
                    <label>Tanggal Expired</label>
                    <input type="text" name="exp_date" value="<?php echo $expDate; ?>">
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
                        <th>Nama Makanan</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['nama_roti']; ?></td>
                        <td><?php echo $row['harga_roti']; ?></td>
                        <td><?php echo $row['exp_date']; ?></td>
                        <td><a href="roti.php?edit=<?php echo $row['id_roti']; ?>" class="edit-btn">Edit</a></td>
                        <td><a href="conn_roti.php?del=<?php echo $row['id_roti']; ?>" class="del-btn">Delete</a></td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    
</body>
</html>