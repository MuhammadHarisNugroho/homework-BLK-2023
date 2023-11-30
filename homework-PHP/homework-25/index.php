<?php

// 1. membaca file data.json
$getJSONFile = file_get_contents("data.json");

// 2. memecah json ke dalam array
$mahasiswa = json_decode($getJSONFile);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD JSON</title>
</head>

<body>
    <a href="add.php">Add New Data</a>
    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>FAKULTAS</th>
            <th>PRODI</th>
            <th>ALAMAT</th>
            <th>IPK</th>
            <th>AKSI</th>
        </tr>

        <?php
        // Inisialisasi awal index
        $index = 0;
        //tampilkan data dari JSON dengan foreach
        foreach ($mahasiswa as $mhs): ?>

            <tr>
                <td>
                    <?= $mhs->nim ?>
                </td>
                <td>
                    <?= $mhs->nama ?>
                </td>
                <td>
                    <?= $mhs->fakultas ?>
                </td>
                <td>
                    <?= $mhs->prodi ?>
                </td>
                <td>
                    <?= $mhs->alamat ?>
                </td>
                <td>
                    <?= $mhs->ipk ?>
                </td>
                <td>
                    <a href="edit2.php?index=<?= $index ?>">Edit</a>
                    <a href="delete.php?index=<?= $index ?>"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            
            <?php
            // Increment Index
            $index++;
        endforeach ?>

    </table>
</body>

</html>