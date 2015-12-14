<?php
fscanf(STDIN, "%s %s",
    $word1,
    $word2
);

$o = 0;
for($i = 0; $i < strlen($word1); $i++)
{
    if(substr($word1,$i,1) != substr($word2,$i,1) )
    {
        $o += 1;
    }
}
echo $o;

?>