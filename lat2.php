<?php 

// Mengubah json menjadi array assoc dengan json_decode()
$data = file_get_contents('json/coba.json');
$mhs = json_decode($data, true);
var_dump($mhs);

echo "<br>";
echo "<br>";

echo $mhs[0]['dospem']['pembimbing1'];

?>