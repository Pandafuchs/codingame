<?php
fscanf(STDIN,"%d",$N);
$a=[0,1];
$s=null;
for ($i=0; $i<$N; ++$i) {
    $s .= $a[$i] . ' ';
    $a[$i+2]=$a[$i]+$a[$i+1];
}
echo trim($s);