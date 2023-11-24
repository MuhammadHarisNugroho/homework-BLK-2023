<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container"></div>
    <h1>Data Mahasiswa</h1>
    <div class="box">
        <?php
        $mahasiswa = [
            ["22416255201204", "Akbar", "Cikampek", "Informatika", "https://via.placeholder.com/50"],
            ["22416255201138", "Fajar", "Telagasari", "Informatika", "https://via.placeholder.com/50"],
            ["22416255201165", "Bisma", "Isekai", "Informatika", "https://via.placeholder.com/50"],
            ["22416255201152", "Putra", "Klari", "Informatika", "https://via.placeholder.com/50"],
            ["22416255201166", "Atilla", "Klari", "Informatika", "https://via.placeholder.com/50"],
            ["181063150150", "Haris", "Karaba", "Matematika", "https://via.placeholder.com/50"],
            ["10115424", "Alwan", "Karaba", "Teknik Informatika", "https://via.placeholder.com/50"]
        ];
        ?>

        <ul>
            <?php foreach ($mahasiswa as $data): ?>
                <li data-label="NIM: ">
                    <?php echo $data[0]; ?><img src="<?php echo $mahasiswa[0][4]; ?>"
                        alt="Profil <?php echo $mahasiswa[0][1]; ?>" width="50" height="50">
                </li>
                <li data-label="Nama: ">
                    <?php echo $data[1]; ?>
                </li>
                <li data-label="Alamat: ">
                    <?php echo $data[2]; ?>
                </li>
                <li data-label="Prodi: ">
                    <?php echo $data[3]; ?>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>

    </div>
</body>

</html>