<?php 

if (
    !isset($_GET["index"]) || 
    !is_numeric($_GET["index"])
    ) {
        header("Location: index.php");
    exit();
}

$index = $_GET["index"];

$getJSONfile = file_get_contents("mahasiswa.json");

$mahasiswa = json_decode($getJSONfile, true);

unset($mahasiswa[$index]);

$mahasiswa = array_values($mahasiswa);

$data = json_encode($mahasiswa, JSON_PRETTY_PRINT);

file_put_contents("mahasiswa.json", $data);

header("Location: index.php");
?>
