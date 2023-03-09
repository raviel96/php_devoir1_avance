<?php
require "../classes/Image.php";

$image = new Image();
$pathToImages = "../images/vrac";
$pathToDir = "../images/";

$image->getImageList($pathToImages, $pathToDir);



?>