<?
$s = str_replace(' ', '', stream_get_line(STDIN, 255, "\n"));
fscanf(STDIN, "%d",
    $c
);
while(strlen($s) > 0)
{
    echo substr($s, 0, $c)."\n";
    $s = substr($s, $c);
}
?>