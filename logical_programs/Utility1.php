<?php

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
}
