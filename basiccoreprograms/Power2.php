<?php
require("Utility.php");
class Power2{

    /**
     * prints table till the given power
     */
    static function Power(){
        echo "enter no to print";
        $pow = Utility::getInt();
        //only prints if power is below 31
        if($pow<31){
            Utility::powerOf2($pow);
        }
        else{
            echo "power should be less than 32";
        }
}
}

Power2::Power();
