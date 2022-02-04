<?php
require("Utility.php");
/***
 * To find the harmonic no given by user
 */
class Harmonic
{
    /**
     * function to find and print the harmonic no 
     */
    static function getHarmonic()
    {
        echo "enter the harmonic no to find\n";
        $value = Utility::getInt();
        $har = 1;
        for ($i = 2; $i <= $value; $i++) {
            $har += 1 / $i;
        }
        echo "the " . $value . "th harmonic number is " . $har . "\n";
    }
}
Harmonic::getHarmonic();
