<?php
require("Utility.php");
class Harmonic
{
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

?>