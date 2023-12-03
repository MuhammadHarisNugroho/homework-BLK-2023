<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
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
            <tr>
                <td>
                    <?= $i ?>
                </td>
                <td>
                    <?= $barang["nama_barang"] ?>
                </td>
                <td>
                    <?= $barang["harga"] ?>
                </td>
                <td>
                    <?= $barang["stok"] ?>
                </td>
                <td>
                    <a
                        href="profil.php?kode_barang=<?= $barang["kode_barang"] ?>&nama_barang=<?= $barang["nama_barang"] ?>&harga=<?= $barang["harga"] ?>&stok=<?= $barang["stok"] ?>">Lihat
                        Detail</a>
                </td>
            </tr>
            <?php $i++;
        endforeach; ?>
    </table>

</body>

</html>