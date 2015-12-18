<?php
fscanf(STDIN, "%d",
    $n
);

for($i = 0; $i < $n; $i++)
{
    for($k = 0; $k != $i; $k++)
    {
        echo "+";
    }
    
    for($k = 1; $k < $n-$i+1; $k++)
    {
        echo $k;
    }  
    echo "\n";
}
?>