<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('asset/css/bootstrap.css')?>>
    <title>Biodata Mahasiswa</title>
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
            max-width: 0px;
            margin: 0 auto;
            padding: 0;
            background-color: #CA8787;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #000;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0E46A3;
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
<!-- Biodata -->
    <h1 align="center"> Biodata Mahasiswa</h1>
    <form action="<?php echo base_url('biodata/tampil'); ?>" method="POST">
    <div class="col-md-6">
    <label for="Nama" class="form-label">Nama</label>
    <input type="nama" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="col-md-8">
    <label for="Nim" class="form-label">NIM</label>
    <input type="nim" class="form-control" id="nim" name="nim" required>
  </div>
  <div class="col-12">
    <label for="Universitas" class="form-label">Nama Universitas</label>
    <input type="text" class="form-control" id="univ" name="univ" required>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Kirim</button>
  </div>
    </form>
    </table>
</body>
</html>