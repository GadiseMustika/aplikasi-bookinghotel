<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penginapan Nyenyak</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>


    <div class="container-input">
        <h3>PENGINAPAN "NYENYAK"</h3>
        <div class="form-group">
            <form action="output.php" method="post">

                <div class="nama-tamu">
                    <label for="nama">
                        <span>Nama Tamu</span>
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

        <button type="submit" class="cetak" name="cetak">Cetak</button>

        <button type="reset" class="batal" name="batal">Batal</button>
    </div>
</body>

</html>