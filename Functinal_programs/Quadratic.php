<?php
require("Utility.php");
class Quadratic{

    /**
     * Function to calculate the roots and print them on screen.
     */
    static function calc(){
        /**
         * getting user input using Utility class
         */
        echo "roots for a*x*x+b*x+c \n";
        echo "enter a ";
        $a = Utility::getInt();
        echo "enter b " ;
        $b = Utility::getInt();
        echo "enter c ";
        $c = Utility::getInt();
        //calculate var delta to use in formula 
        $delta = $b*$b-4*$a*$c;
        $delta = abs($delta);
        $root1 = (-$b + sqrt($delta))/(2*$a);
        $root2 = (-$b - sqrt($delta))/(2*$a);
        //printing roots
        echo "roots are ".$root1." & ".$root2;
    }
}
//callin the runner function
Quadratic::calc();
