<?php

fscanf(STDIN, "%d",
    $N
);
$inputs = fgets(STDIN,32*$N);
$inputs = explode(" ",$inputs);
$out = 0;
for ($i = 0; $i < $N; $i++)
{
    $Xi = intval($inputs[$i]);
    $out += pow($Xi, 2);
}
echo($out);
?>