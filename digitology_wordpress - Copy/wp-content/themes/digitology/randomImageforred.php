<?php
//session_start();

$str="ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
$rand=substr(str_shuffle($str),0,5);
 setcookie("requestQuotered", md5($rand));
	//$_SESSION['register1'] = md5($rand);
//$_SESSION['image_random_value'] = md5($rand);
/*
$image = imagecreate(60, 32);

$bgColor = imagecolorallocate ($image, 254, 251, 241);

$textColor = imagecolorallocate ($image, 155, 18, 11);

imagestring ($image, 5, 8, 8, $rand, $textColor);

imagejpeg($image);

imagedestroy($image);
*/

header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(98, 30);

// Create some colors
$white = imagecolorallocate($im, 254, 251, 241);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 155, 18, 11);
imagefilledrectangle($im, 0, 0, 98, 29, $white);

// Replace path by your own font path
$font = 'GenBasBI.ttf';

// Add some shadow to the text
//imagettftext($im, 20, 0, 12, 21, $grey, $font, $rand);

// Add the text
imagettftext($im, 20, 0, 10, 20, $black, $font, $rand);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>


