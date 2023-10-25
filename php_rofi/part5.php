<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Bakso dan Es Teh</title>
</head>
<body>
    <center><h1>Selamat datang di Warung Makan</h1>

    <?php
    $bakso = 10000;
    $esteh = 5000;
    $uangawal = 30000;
    $pesan = '';

    if (isset($_POST['beli'])) {
        $jumlah_uang = $_POST['jumlah_uang'];

        echo "Anda memiliki Uang sebanyak Rp. $jumlah_uang<br>";

        if ($jumlah_uang >= $bakso) {
            $jumlah_uang -= $bakso;
            $pesan = "Anda membeli Bakso seharga Rp. $bakso, sisa uang: Rp. $jumlah_uang";
        } elseif ($jumlah_uang < $bakso) {
            $pesan = "Uang anda tidak cukup untuk membeli Bakso";
        }

        echo "<br>";

        if ($jumlah_uang >= $esteh) {
            $jumlah_uang -= $esteh;
            $pesan .= "<br>Anda membeli Es Teh seharga Rp. $esteh, sisa uang: Rp. $jumlah_uang";
        } elseif ($jumlah_uang >= $esteh) {
            $pesan .= "<br>Uang anda tidak cukup untuk membeli Es Teh";
        }
    }
    ?>

    <form method="post">
        <p>Masukkan jumlah uang yang Anda miliki:</p>
        <input type="text" name="jumlah_uang" required>
        <input type="submit" name="beli" value="Beli">
    </form>

    <?php
    if (!empty($pesan)) {
        echo "<p>$pesan</p>";
    }
    ?>
    </center>
</body>
</html>
