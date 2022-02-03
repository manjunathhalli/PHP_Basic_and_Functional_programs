<?php
require("Utility1.php");
Class CoupanNumber{
    static function coupens(){
         // to generate alpha numeric coupens
         $code = "1 2 3 4 5 6 7 8 9 0 a s d f g h j k l z x c v b n m q w e r t y u i o p";
         //converting to char array
         $arr = explode(" " , $code);
         $arrlen = count($arr); 
         $rand = rand(100000 , 10000000);
         $coupen = "cp";
         /**
          * get unique value from character array and saving it in var $coupen
          */
         while($rand>1){
             $coupen = $coupen.$arr[$rand%$arrlen];
             error_reporting(E_ALL ^ E_DEPRECATED); //deprecated soluction code
            
             $rand /=$arrlen; 
         }
         //printing the coupen
         echo "Coupen is : ".$coupen."\n";
    }



    static function generate(){
        echo "enter no of coupens to generate : ";
        $num = Utility::getInt();
        for ($i=0; $i < $num ; $i++) { 
            self::coupens();
        }
        echo "random used ".$num." times";
    }
}
//calling the method
CoupanNumber::generate();

