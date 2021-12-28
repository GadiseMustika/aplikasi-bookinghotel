<?php require 'input.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container-output">
  <?php // untuk menentukana apakah tombol cetak sudah ditekan atau belum?>
    <?php if(isset($_POST["cetak"])) :?>
      <h2>PENGINAPAN JAYA MAKMUR</h2>  

       <?php 
      //  ambil data dari input.php
       $nama = $_POST["nama"];
       ?>


    <?php endif;?>
</div>

</body>
</html>