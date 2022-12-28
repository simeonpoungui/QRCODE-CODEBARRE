<?php
require('barcode.php');
$text = "123456789";
// This function call can be copied into your project and can be made from anywhere in your code
barcode( $filepath, $text, $size, $orientation, $code_type, $print, $sizefactor );



?>