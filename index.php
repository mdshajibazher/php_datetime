<?php

//unix epoc time start from jan 1 1970 00:00

echo "current timstamp: ". time() ."\n";
echo "format timestamp ". date('d/M/y',time()) ."\n";

// More precise timestamp
echo "timestamp with precission ". microtime(true). "\n";
echo "timestamp with seperated precission ". microtime(false). "\n";


//Benchmarking using microtime

$startTime = microtime(true);
$factorialResult = factorial(6);
sleep(2);
$endTime = microtime(true);
$executionTime = $endTime-$startTime;
printf("Execution time is  %10.8f and factorial is  %s",$executionTime,$factorialResult);

function factorial($n){
    $result = 1;
    for($i=1;$i<=$n;$i++){
        $result = $result*$i;
    }
    return $result;
}

