<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Barang</title>
</head>
<body>

    <header>
        <h1>Informasi Barang</h1>
    </header>

    <?php include("data.php") ?>

    <ul>
        <li>Kode Barang: <?= $_GET["kode_barang"]; ?></li>
        <li>Nama Barang: <?= $_GET["nama_barang"]; ?></li>
        <li>Harga: <?= $_GET["harga"]; ?></li>
        <li>Stok: <?= $_GET["stok"]; ?></li>
    </ul>

</body>
</html>
