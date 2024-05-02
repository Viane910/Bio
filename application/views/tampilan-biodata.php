<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Biodata</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #F8F6E3;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 0;
            background-color: #CA8787;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
    </style>
    <!-- Navbar style -->
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
      <li><a href="<?= base_url('biodata/about')?>">About</a></li>
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