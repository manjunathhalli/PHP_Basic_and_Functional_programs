<?php

class Utility
{

    public static function flip($times){
        $head = 0 ;
        //loop runs till times
        for($is = 0;$is<$times;$is++)
        {
            //checks for head if true heads get incremented
            if(rand(0,10)>0.5){
                $head++;
            }
        }
        echo "heads is ".$head." \nTails is".($times-$head)."\n";
        die;
    }



    static public function isLeapYear($year){
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }

    


    public static  function powerOf2($power){
        for($s= 1 ; $s<=$power ; $s++){
            $pow = 2**$s ;
            echo "\n".$pow;
        }
    }


    static function isPrime($n){
        for ($i = 2; $i <= $n / 2; $i++) {
			if ($n % $i == 0) {
				return false;
			}
        }
        return true ;
    }


    static public function getInt(){
        fscanf(STDIN,"%d\n",$val);
        while(!is_numeric($val)){
            echo "ivalid input try again\n";
            fscanf(STDIN,"%d\n",$val);
        }
        return $val ;
    }
    
}
