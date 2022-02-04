<?php
/**
 *  program WindChill.php that takes two double command-line arguments t and v and prints the wind chill. 
 */ 
require("Utility2.php");
class Windchill{
    /**
     * computes the wind temperature and returning it by using forumla below
     */
    static function cal(){
        //getting user input
        echo "enter speed ";
        $ws = Utility::getInt();
        echo "enter temperature " ;
        $f = Utility::getInt();
        $w =  35.74 + 0.62158 * $f + (0.4275 * $f - 35.75) * $ws**0.16;
        echo "Wind chill is ".$w."\n";

    }
}
//calling cal function to calculate wind chill and print
Windchill::cal();
