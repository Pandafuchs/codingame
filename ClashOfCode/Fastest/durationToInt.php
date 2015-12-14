<?php
fscanf(STDIN, "%s", $duration);
$a = explode(':', $duration);
$i = $a[0] * 60 + $a[1];
echo $i;