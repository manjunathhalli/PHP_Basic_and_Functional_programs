<?php  
$num = 23456;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10; 
error_reporting(E_ALL ^ E_DEPRECATED); 
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);  
 
}  
echo "Reverse number of 23456 is: $revnum";  

?>  