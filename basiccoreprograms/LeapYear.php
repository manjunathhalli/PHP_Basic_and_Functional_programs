<?php

/**
 * Function to print the given no is leap year or not
 */

require("Utility.php");

class LeapYear
{

    static function leap()
    {
        echo "enter year ";
        $year = Utility::getInt();
        if (strlen((string)$year) == 4) {
            // calling method in Utility to check if its leap year or not
            if (Utility::isLeapYear($year))
                echo  "is leap year";
            else

                echo "is not leap year";
        } else {
            echo "enter valid year ";
        }
    }
}
LeapYear::leap();
