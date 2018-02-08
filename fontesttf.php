<?php
$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 30,30,30);
$gray = imagecolorallocate($image, 100,100,100);
$sp = DIRECTORY_SEPARATOR;

imagettftext($image, 32, 0, 330, 250,$titleColor,"fonts".$sp."Bevan".$sp."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image, 26, 0, 375, 350,$titleColor,"fonts".$sp."Playball".$sp."Playball-Regular.ttf", "Nome do Aluno");
imagestring($image, 2, 375, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
imagejpeg($image);
imagedestroy($image);