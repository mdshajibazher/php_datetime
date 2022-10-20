<?php

//Set Time Zone
date_default_timezone_set("Asia/Dhaka");
//Get Current TimeZone
echo "Current TimeZone: ".date_default_timezone_get()."\n";

//unix epoc time start from jan 1 1970 00:00

echo "current timstamp: ". time() ."\n";
echo "format timestamp : ". date('d/M/y',time()) ."\n";
echo "another format timestamp : ". date('dS M Y g:i a',time()) ."\n";
echo "Today is ".date('z',time())."  day of 365 \n";
// More precise timestamp
echo "timestamp with precission : ". microtime(true). "\n";
echo "timestamp with seperated precission : ". microtime(false). "\n";


//Benchmarking using microtime

$startTime = microtime(true);
$factorialResult = factorial(6);
$endTime = microtime(true);
$executionTime = $endTime-$startTime;
printf("Execution time is:  %10.8f and factorial is:  %s\n",$executionTime,$factorialResult);

function factorial($n){
    $result = 1;
    for($i=1;$i<=$n;$i++){
        $result = $result*$i;
    }
    return $result;
}


// make timestamp mktime(hour,minute,seconds,month,date,year)
//Make timestamp of 10-20-2022 00:00:00 
echo "timestamp of 10-20-2022 00:00:00 is: ". mktime(0,0,0,10,20,2022)."\n";
//Day Differance 14 oct to 20 oct 2022

echo "Day Differance 14 oct to 20 oct 2022 is : ". (mktime(0,0,0,10,20,2022) - mktime(0,0,0,10,14,2022)) / (24*60*60) ." Day \n";

// String to Time 20 October 2022

echo strtotime("20 October 2022");
echo "current timestamp : ".strtotime("now"). "\n";
echo "After 3 days of current days timestamp: ".strtotime("+3days"). "\n";
echo "After 3 days of current days formatted: ". date('d/m/y g:i:a',strtotime("+3days")). "\n";
echo "After 3 weeks 8 days of current days formatted: ". date('d/m/y g:i:a',strtotime("+3 weeks 8 days")). "\n";
echo "black friday start 2022 ". date('d/m/y g:i:a',strtotime("25 December 2022 00:01:00")). "\n";
echo "Next Thursday : ". date('d/m/y g:i:a',strtotime("Next Thursday")). "\n";
echo "Last Monday : ". date('d/m/y g:i:a',strtotime("Last Monday")). "\n";