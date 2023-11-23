<?php

// 1. Built in Function -> Fungsi yang udah dibuat oleh sama PHP
// 2. User Defined Function -> Fungsi yang dibuat oleh progammer

// Date, Time, MKtime, Strtotime

// date() -> Tanggal
// echo date('l, d F o, H:i:s');

// $currentDateTime = date('Y-m-d H:i:s');
// echo "Current Date and Time: $currentDateTime\n";

// date_default_timezone_set('Asia/Jakarta');
// echo date('l, Y-m-d H:i:s');
// echo "Current Date and Time (WIB): $currentDateTime\n";

//time
// echo time();
// Detik yang sudah berlalu sejak 1 Januari 1970


// mktime -> Membuat Waktu sendiri
// echo mktime(0, 0, 0, 9, 8, 2001);

// Strtotime -> Mengubah string menjadi tanggal


// date_parse => Memecah tanggal
// print_r(date_parse("2023-11-22"));


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Clock</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      text-align: center;
      margin: 50px;
    }
  </style>
</head>
<body>

<?php
// Set zona waktu ke WIB (Waktu Indonesia Bagian Barat)
date_default_timezone_set('Asia/Jakarta');



?>

</body>
</html>