<?php

class StopWatch{
   
   static $start ;
   static $stop ;
   static function start(){
       self :: $start = round(microtime(true)*1000);
   }
   static function stop(){
       self::$stop = round(microtime(true)*1000);
   }

   static function elapsed(){
       return "Time : ".((self::$stop-self::$start)/1000)." seconds\n";
   }

    /**
    * Function to Store end clicktime and start click time and print elapsed time
    */
   static function watch(){
       echo"StopWatch\n";
       echo "enter to start ";
       $i = fgets(STDIN);
       //get start time
       self :: $start = round(microtime(true)*1000);
       
       echo"enter 2 to stop ";
       $i = fgets(STDIN);
       //get stop time
       self::$stop = round(microtime(true)*1000);
       //prints elapsed time
       echo self::elapsed();
   }
}

$watch = StopWatch::watch();

?>