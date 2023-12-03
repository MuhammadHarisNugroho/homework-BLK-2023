<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Barang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        h1 {
            color: #fff;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        li {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        li:last-child {
            border-bottom: none;
        }
    </style>
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
