<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Biodata</title>
    <style type="text/css">
      *{
        text-decoration : none;
      }
      .navbar{
        background: purple; font-family: Arial; padding-right: 15px;padding-Left: 15px;
      }
      .navdiv{
        display: flex; align-items: center; justify-content: space-between;
      }
      .logo a{
        font-size: 35px; font-weight: 600; color: white;
      }
      li{
        list-style: none; display: inline-block;
      }
      li a{
        color: white; font-size: 18px; font-weight: bold; margin-right: 25px;
      }
    </style>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar">
  <div class="navdiv">
    <div class="logo"><a href="#">DOV</a> </div>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="<?= base_url('biodata/index')?>">Form</a></li>
      <li><a href="<?= base_url('biodata/tampil')?>">Biodata</a></li>
      <li><a href="#">About this sh*t</a></li>
    </ul>
  </div>
</nav>
    <div class="container">
    <h2>Data Mahasiswa</h2>
        <p><strong>Nama :</strong> <?php echo $nama; ?></p>
        <p><strong>NIM :</strong> <?php echo $nim; ?></p>
        <p><strong>Universitas :</strong> <?php echo $univ; ?></p>
    </div>
</body>
</html>