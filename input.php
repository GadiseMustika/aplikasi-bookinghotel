<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penginapan Nyenyak</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h4>Penginapan Nyenyak</h4>

    <div class="container">
        <form action="output.php" method="post">

            <div class="nama-pelanggan">
                <label for="nama">
                    <span>Nama</span>
                </label>
                <input type="text" name="nama" id="nama" placeholder="Tuliskan Nama Anda..">
            </div>

            <div class="tipe-kamar">
                <label for="tipe">
                    <span>Tipe Kamar</span>
                </label>

                <select name="tipe" id="tipe">
                    <option value="vip">VIP</option>
                    <option value="executive">Executive</option>
                    <option value="bisnis">Bisnis</option>
                </select>
            </div>

            <div class="waktu-inap">
                <label for="waktu">
                    <span>Lama Inap</span>
                </label>
                <input type="text" name="waktu" id="waktu" placeholder="Mau Nginap Berapa Lama..">
            </div>
        </form>
    </div>
</body>
</html>