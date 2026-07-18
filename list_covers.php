<?php
header('Content-Type: application/json');
$files = glob('cover/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);
sort($files);
echo json_encode($files);
?>
