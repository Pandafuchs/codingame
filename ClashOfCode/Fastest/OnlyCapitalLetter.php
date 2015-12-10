<?php
$S=stream_get_line(STDIN, 100, "\n");
$S = preg_replace('#[^A-Z]#', '', $S);
echo $S;