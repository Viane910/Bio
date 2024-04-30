<?php
// Lokasi gambar
$gambar = "Anjing.jpg";

// Mendapatkan tipe konten gambar
$gambar_info = getimagesize($gambar);
$mime_type = $gambar_info['mime'];

// Set header tipe konten
header("Content-Type: $mime_type");

// Tampilkan gambar
readfile($gambar);
?>
