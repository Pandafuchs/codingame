<?php
fscanf(STDIN, "%s",
    $DNA
);

$DNA = str_replace('A','1', $DNA);
$DNA = str_replace('T','2', $DNA);
$DNA = str_replace('C','3', $DNA);
$DNA = str_replace('G','4', $DNA);

$DNA = str_replace('1','T', $DNA);
$DNA = str_replace('2','A', $DNA);
$DNA = str_replace('3','G', $DNA);
$DNA = str_replace('4','C', $DNA);


echo($DNA);
?>