<?php
/** 
 * running time. Read in N integers and counts the   number of triples that sum to exactly 0
 */
require("Utility2.php");
class SumOfInt{

    static function sum(){
        $arr = Utility::getIntArr();
        // 3 loops to take 3 integer in an array 
        for($i = 0 ; $i < count($arr); $i++){
            for($j = 0 ; $j < count($arr); $j++){
                for($k = 0 ; $k < count($arr); $k++){
                    //checks if three no are not same 
                    if($i!=$j&&$i!=$k){
                        //checks if sum is zero and print
                        if($arr[$i]+$arr[$j]+$arr[$k]==0){
                        echo " \n".$arr[$i]." ".$arr[$j]." ".$arr[$k];
                    }
                    }
                }   

            }
        }
    }
}
//call the function
SumOfInt::sum();
