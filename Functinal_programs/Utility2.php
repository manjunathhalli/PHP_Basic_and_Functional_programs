<?php
/**
 * Helper Function containing methods to use in othere php class
 */
class Utility
{
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

    /**
         * takin input as an array and return it
         * @return array the int array by user input
         */
    static function getIntArr()
    {
        echo "enter array size";
        $size = Utility::getInt();
        $arr = array();
        echo "enter array value ";
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = Utility::getInt();
        }
        return $arr;
    }
}
