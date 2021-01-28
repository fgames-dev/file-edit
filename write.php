<?php
$filename = $_GET['filename'];
$myfile = fopen($filename, "w") or die("Unable to open file!");
$data = $_GET['data'];
$txt = $_GET['text'];
$ello = 'ello';
fwrite($myfile, $txt);
fclose($myfile);
header("Location: index.html");
?>