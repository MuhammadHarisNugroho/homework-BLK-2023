<?php

// 1. membaca file data.json
$getJSONFile = file_get_contents("data.json");

// 2. memecah json ke dalam array
$mahasiswa = json_decode($getJSONFile);

?>
