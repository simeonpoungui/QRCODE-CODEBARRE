<?php

require('./qrcode/phpqrcode/phpqrcode.php');

QRcode::png('je suis simeon','simeon.png');

?>
<!-- 
afficher l'image qrgeneré -->
<img src="simeon.png" alt="">