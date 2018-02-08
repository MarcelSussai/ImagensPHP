<?php 
header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 300;
$new_height = 300;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_height, $new_width);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_height, $old_width);
imagejpeg($new_image);
imagedestroy($old_image);
imagedestroy($new_image);
