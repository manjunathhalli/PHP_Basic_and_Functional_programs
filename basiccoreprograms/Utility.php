<?php

/**
 * Helper Function containing methods to use in othere php class
 */
class Utility
{
    /**
     * Method to print heads ands and tails by taking input for no of times and percentage
     * @param times the no of times to flip the coin
     */
    public static function flip($times)
    {
        $head = 0;
        $tail = 0;

        for ($is = 0; $is < $times; $is++) {
            if (rand(0, 1) > 0.5) {
                $head++;
            } else {
                $tail++;
            }
        }
        echo "heads is " . $head . " \nTails is" . ($times - $head) . "\n";
        $headpecentage = ($head / $times) * 100;
        echo "head percentage is " . $headpecentage . "\n";
        echo "tail pecentage is " . (100 - $headpecentage) . "\n";
    }
    /**
     * method to find leap year
     * @param year is finding leap year 
     */

    static public function isLeapYear($year)
    {
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }



    /**
     * prints Power of 2
     * @param power the value till to count power of 2
     */
    public static  function powerOf2($power)
    {
        for ($s = 1; $s <= $power; $s++) {
            $pow = 2 ** $s;
            echo "\n" . $pow;
        }
    }

    /**
     * Function to find if no is prime or not
     * @param n the no to check
     * @return true/false if prime or  not
     */
    static function isPrime($n)
    {
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * to get input unless its an integer
     */
    static public function getInt()
    {
        fscanf(STDIN, "%d\n", $val);
        while (!is_numeric($val)) {
            echo "ivalid input try again\n";
            fscanf(STDIN, "%d\n", $val);
        }
        return $val;
    }
}
