<?php require 'input.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Pemesanan</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

  <?php // untuk menentukana apakah tombol cetak sudah ditekan atau belum
  ?>
  <?php if (isset($_POST["cetak"])) : ?>
    <div class="container-output">
      <h5>PENGINAPAN JAYA MAKMUR</h5>
      <h5>Jl. Gading I No 7.BSD</h5>

      <div class="invoice">
        <?php
        //  ambil data dari input.php dan buat variabel biaya,jenis,dan harga
        $jenis;
        $harga;
        $biaya;
        $nama = $_POST["nama"];
        $tipe = $_POST["tipe"];
        $waktu = $_POST["waktu"];
        ?>

        <br>
        <p>Nama Tamu : <?= $nama; ?></p>

        <?php
        // menentukan harga yang dipilih
        if ($tipe == "vip") {
          $jenis = "VIP";
          $harga = 200000;
        } elseif ($tipe == "executive") {
          $jenis = "Executive";
          $harga = 250000;
        } elseif ($tipe == "bisnis") {
          $jenis = "Bisnis";
          $harga = 300000;
        }
        ?>

        <!-- mencetak harga sewa dan tipe -->
        <p>Tipe Kamar Yang Dipesan : <?= $jenis; ?></p>
        <p>Biaya Sewa: <?= $harga; ?></p>

        <?php
        // menghitung Biaya Sewa didapat lama inap x harga sewa
        $biaya = $waktu * $harga;
        ?>

        <!-- mencetak lama inap dan biaya sewa -->
        <p>Lama Inap : <?= $waktu; ?></p>
        <p>Biaya Sewa : <?= $biaya; ?></p>
      </div>
    </div>
  <?php endif; ?>
</body>

</html>