<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url('form/hitung') ?>" method="post">
        <table>
            <tr>
                <td>HARGA BARANG</td>
                <td><input type="text" name="txtHarga" value="<?= isset($harga) ? $harga : '' ?>" id=""></td>
            </tr>
            <tr>
                <td>JUMLAH BARANG</td>
                <td><input type="text" name="txtJumlah" value="<?= isset($jumlah) ? $jumlah : '' ?>" id=""></td>
            </tr>
            <tr>
                <td>TOTAL BARANG</td>
                <td><input type="text" name="txtBayar" value="<?= isset($bayar) ? $bayar : '' ?>" id=""></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="HITUNG"></td>
            </tr>
        </table>
    </form>
    <?php if (isset($totalBayar)) : ?>
        <h2>Total Bayar: <?= $totalBayar ?></h2>
    <?php endif; ?>
</body>

</html>