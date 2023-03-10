<?php
require "../classes/Image.php";

$image = new Image();
$pathToImages = "../images/vrac";
$pathToDir = "../images/";

$image->createSpecificFolders($pathToImages, $pathToDir);
$image->moveToSpecificFolder($pathToImages, $pathToDir);


?>