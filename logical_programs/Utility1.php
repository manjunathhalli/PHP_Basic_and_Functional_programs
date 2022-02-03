<?php

class Utility
{
static public function getInt(){
        fscanf(STDIN,"%d\n",$val);
        while(!is_numeric($val)){
            echo "ivalid input try again\n";
            fscanf(STDIN,"%d\n",$val);
        }
        return $val ;
    }
}