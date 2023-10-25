<?php
$list_buah = array('Semangka', 'Mangga', 'Pepaya', 'Sirsak', 'Durian', 'Jeruk', 'Leci', 'Anggur');
$list_harga = array(30000, 25000, 27000, 26000, 50000, 20000, 35000, 32000);
$selected_buah = array_fill(0, count($list_buah), 0);
$total_harga = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['buah'])) {
        $selected_buah = $_POST['buah'];

        foreach ($selected_buah as $index => $quantity) {
            if (isset($list_harga[$index])) {
                $quantity = floatval($quantity); // Konversi ke tipe data float
                $total_harga += $list_harga[$index] * $quantity;
            }
        }
    }
}
?>

<h1 align="center">Selamat Datang di Website Penjualan Saya!</h1>
<form method="post">
    <table align="center" border="1" cellpadding="20" cellspacing="0">
        <tr bgcolor="aqua">
            <td colspan="1" align="center"><font size="10">Jenis Buah</font></td>
            <td align="center"><font size="10">Harga</font></td>
            <td align="center"><font size="10">Kuantitas (kg)</font></td>
        </tr>

        <?php
        for ($i = 0; $i < count($list_buah); $i++) {
        ?>
            <tr>
                <td><?php echo $list_buah[$i] ?></td>
                <td><?php echo "Rp " . $list_harga[$i] . " per kg"; ?></td>
                <td>
                    <input type="number" name="buah[<?php echo $i; ?>]" min="0" step="0.1" value="<?php echo isset($selected_buah[$i]) ? $selected_buah[$i] : 0; ?>">
                </td>
            </tr>
        <?php
        }
        ?>

        <tr>
            <td colspan="2" align="right"><b>Total Harga:</b></td>
            <td><b>Rp <?php echo $total_harga; ?></b></td>
        </tr>

        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="hitung" value="Hitung Total Harga">
            </td>
        </tr>
    </table>
</form>