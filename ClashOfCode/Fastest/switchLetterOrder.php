<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N
);
$word = stream_get_line(STDIN, 256, "\n");


echo(substr($word,$N) . substr($word,0,$N));
?>