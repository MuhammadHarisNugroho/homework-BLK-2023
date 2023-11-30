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
    
</body>

</html>