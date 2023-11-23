<?php

// 1. Built in Function -> Fungsi yang udah dibuat oleh sama PHP
// 2. User Defined Function -> Fungsi yang dibuat oleh progammer

// Date, Time, MKtime, Strtotime

// date() -> Tanggal
// echo date('l, d F o, H:i:s');

// $currentDateTime = date('Y-m-d H:i:s');
// echo "Current Date and Time: $currentDateTime\n";

date_default_timezone_set('Asia/Jakarta');
echo date('l, Y-m-d H:i:s');
echo "Current Date and Time (WIB): $currentDateTime\n";




?>
