<?php
error_reporting(0);
include('lataa_kuva.php');

$path = "funbox/";
$filter = array(".", "..");
$max_images = 1;

############################################################

$files = array();
$dir = opendir($path);
while (($file = readdir($dir)) !== false) {
    if (!in_array($file, $filter)) {
        $files[] = $file;
    }
}

for ($i = 0; $i < $max_images; $i++) {

$rand = rand(0, count($files) -1);

$image = $path .''. $files[$rand];

echo '<a href="'. $image .'"><img ';
if(preg_match('/kuvaton/',$image)) { echo 'class="kuvaton"'; }
if(preg_match('/naurunappula/',$image)) { echo 'class="naurunappula"'; }
if(preg_match('/riemurasia/',$image)) { echo 'class="riemurasia"'; }
if(preg_match('/naamapalmu/',$image)) { echo 'class="naamapalmu"'; }

echo ' src="'. $image .'" alt="Image" /></a>'. "\n";
}


?>
