<?php
header("Content-type: image/png");

$image = imagecreate(256,256);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0); // max: 255 | min: 0

imagestring($image,5,10,120, "Marcel Sussai Desenvolvedor", $red);
imagepng($image);
imagedestroy($image);