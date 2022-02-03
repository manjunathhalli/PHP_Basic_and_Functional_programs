<?php
class Utility
{

    static public function getInt()
    {
        fscanf(STDIN, "%d\n", $val);
        while (!is_numeric($val)) {
            echo "ivalid input try again\n";
            fscanf(STDIN, "%d\n", $val);
        }
        return $val;
    }


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
