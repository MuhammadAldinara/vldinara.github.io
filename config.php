<?php
extract($_REQUEST);
$file = fopen("form-save.txt", "a");

fwrite($file, "nama :");
fwrite($file, $nama . "\n");
fwrite($file, "Pesan :");
fwrite($file, $pesan . "\n \n");
fclose($file);
header("location: profile.php");
