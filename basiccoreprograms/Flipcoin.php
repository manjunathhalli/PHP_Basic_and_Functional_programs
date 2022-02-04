<?php

/**
 * Program to flip the coin desired times  and show results
 */

require("Utility.php");
echo "enter no of times to flip ";
$times = Utility::getInt();
Utility::flip($times);
