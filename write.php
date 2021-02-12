<?php
$filename = $_GET['filename'];
$myfile = fopen($filename, "a") or die("Unable to open file!");
$data = $_GET['data'];
$txt = $_GET['text'];
fwrite($myfile, $txt);
fclose($myfile);
header("Location: index.html");
?>
