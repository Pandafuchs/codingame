<?php

fscanf(STDIN, "%d",
    $N
);

$myNumbers = array();

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $Pi
    );
    
    $myNumbers[] = $Pi;
}

sort($myNumbers);

$minDiff = 10000001;
$counter = count($myNumbers);

foreach($myNumbers as $key1 => $number1)
{
    if($key1+1 < $counter)
    {
        $number2 = $myNumbers[$key1 + 1];
        
        if( abs($number1 - $number2) < $minDiff)
        {
            $minDiff = abs($number1 - $number2);
        }
    }
}

echo $minDiff;

?>