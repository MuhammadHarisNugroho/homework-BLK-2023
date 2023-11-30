<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD JSON | Edit Data</title>
</head>
<body>
<form action="" method="post">
        <label for="nim">NIM: </label>
        <input type="text" name="nim" id="nim" value="<?= $row->nim ?>"> <br>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" value="<?= $row->nama ?>"> <br>
        <label for="fakultas">Fakultas: </label>
        <input type="text" name="fakultas" id="fakultas" value="<?= $row->fakultas ?>"> <br>
        <label for="alamat">Alamat: </label>
        <input type="text" name="alamat" id="alamat" value="<?= $row->alamat ?>"> <br>
        <label for="prodi">Prodi: </label>
        <input type="text" name="prodi" id="prodi" value="<?= $row->prodi ?>"> <br>
        <label for="ipk">IPK: </label>
        <input type="number" step="0.01" name="ipk" id="ipk" value="<?= $row->ipk ?>"> <br>

        <button type="submit" name="submit">Update</button>
        <button type="reset" name="reset">Reset</button>
    </form>

    <a href="index.php">Kembali ke Beranda</a>

</body>
</html>