<?
fscanf(STDIN, "%s", $d);
$a = explode(':', $d);
echo $a[0] * 60 + $a[1];