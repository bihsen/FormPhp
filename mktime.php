<?php
/* MKTime take as argument :
    -Hour
    -Minutes
    -Seconds 
    -Month
    -Day
    -Year
    */

    //return a timestamp for this date : 2019/04/22 at 19h00m30s
$timeStamp = mktime(19, 00 , 30 , 4 , 22 , 2019);
// display a format date for a specific timestamp
echo date('Y-m-d H:i:s' , $timeStamp);