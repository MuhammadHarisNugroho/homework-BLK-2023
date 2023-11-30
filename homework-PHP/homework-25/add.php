<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD JSON | Page Add</title>
    <style>
        body {
            background: linear-gradient(to right, #833ab4, #cb2d3e, #348ac7);
            color: white;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: linear-gradient(to right, #ff6e7f, #bfe9ff);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #833ab4;
        }

        input[type="submit"] {
            background: #833ab4;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #cb2d3e;
        }

        button {
            background: linear-gradient(to right, #cb2d3e, #833ab4);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 16px;
            transition: background 0.3s;
        }

        button:hover {
            background: linear-gradient(to right, #833ab4, #cb2d3e);
        }

        .back-to-home {
            background: #348ac7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            position: absolute;
            top: 20px;
            right: 20px;
            text-decoration: none;
        }

        .back-to-home:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <label for="nim">NIM: </label>
        <input type="text" name="nim" id="nim" required>
        <br>
        <label for="nama">NAMA: </label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="fakultas">FAKULTAS: </label>
        <input type="text" name="fakultas" id="fakultas" required>
        <br>
        <label for="prodi">PRODI: </label>
        <input type="text" name="prodi" id="prodi" required>
        <br>
        <label for="alamat">ALAMAT: </label>
        <input type="text" name="alamat" id="alamat" required>
        <br>
        <label for="ipk">IPK: </label>
        <input type="number" step="0.01" name="ipk" id="ipk" required>

        <button type="submit" name="submit">ADD NOW!</button>
        <button type="reset" name="reset">RESET</button>

        <a href="index.php" class="back-to-home">Back to Home</a>
    </form>

    <?php

// 1. Apakah tombol add sudah di tekan
if (isset($_POST["submit"])) {
    // 2. buka file json
    $getJSONFile = file_get_contents("data.json");
    // 3. Decode / Pecah kedalam array php
    $mahasiswa = json_decode($getJSONFile, true);

    $input = [
        "nim" => $_POST["nim"],
        "nama" => $_POST["nama"],
        "fakultas" => $_POST["fakultas"],
        "prodi" => $_POST["prodi"],
        "alamat" => $_POST["alamat"],
        "ipk" => $_POST["ipk"],
    ];

    // 5. Tambahkan $input kedalam array data
    $mahasiswa[] = $input;

    // 6. Kembalikan lagi data ke JSON
    $data = json_encode($mahasiswa, JSON_PRETTY_PRINT);
    file_put_contents("data.json", $data);

    // 7. Arahkan kembali ke index.php
    header("Location: index.php");
}
    ?>
</body>

</html>