<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
</head>

<body>
    <?php include("data.php") ?>
    <h1>List Produk</h1>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($produk as $barang): ?>
            
            <?php $i++;
        endforeach; ?>
    </table>

</body>

</html>