<?php
header("Content-type: image/jpeg");
$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 30,30,30);
$gray = imagecolorallocate($image, 100,100,100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Nome do Aluno", $titleColor);
imagestring($image, 2, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);
imagedestroy($image);
