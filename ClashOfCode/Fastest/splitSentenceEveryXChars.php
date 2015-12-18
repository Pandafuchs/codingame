<?php
$sentence = stream_get_line(STDIN, 256, "\n");
fscanf(STDIN, "%d",
    $col
);
$sentence = str_replace(' ', '', $sentence);

while(strlen($sentence) > 0)
{
    echo substr($sentence, 0, $col)."\n";
    $sentence = substr($sentence, $col);
}

?>