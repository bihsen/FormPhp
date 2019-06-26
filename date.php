<?php

date_default_timezone_set('Europe/Luxembourg');


// most known formats are : Y m d H i s

// Return the day's number

echo date('d').'<br>';

// Return the day's number (without 0 in front)
echo date ('j').'<br>';

// return the month's number 
echo date('m').'<br>';

// returns the month number without 0 infront 
echo date('n').'<br>';

//return the year
echo date('Y').'<br>';

// return the hour
echo date('H').'<br>';

//return the timestamp
echo date('U').'<br>';

echo date('Y-m-d H:i:s');