<?php

require("Utility.php");
echo "enter no of times to flip ";
//var n to store no times to flip
$times = Utility::getInt() ;
//passing variable to the method
Utility::flip($times);
?>