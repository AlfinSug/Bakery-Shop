<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style-home.css">
    <title>Bakery Shop - Home</title>
</head>
<body>
    <header>
        <div class="container">
            <img class="logo" src="img/Group 113.png">
        </div>
        <nav>
            <ul>
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="#">Data Master</a>
                    <ul>
                        <li><a href="pegawai.php">Data Pegawai</a></li>
                        <li><a href="pelanggan.php">Data Pelanggan</a></li>
                        <li><a href="roti.php">Data Roti</a></li>
                    </ul>
              </li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <section id="main">
        <div class="container">
            <h2>Hi, Admin</h2>
            <p>Wellcome to Bakery Shop Website.</p>
            <div class="spinner-data">
                  <select onchange="onGoto(this.value)" id="data">
                    <option>- Pilih Data Master -</option>
                    <option value="pegawai.php">Data Pegawai</option>
                   <option value="pelanggan.php">Data Pelanggan</option>
                    <option value="roti.php">Data Roti</option>              
                </select>
               
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function onGoto(src) {
            window.location=src;
        }

    </script>

</body>
</html>