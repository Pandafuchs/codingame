<?php
$S = stream_get_line(STDIN, 256, "\n");
$S = strtolower(str_replace(' ', '', $S));
$alpha = range('a', 'z');
foreach ($alpha as $letter) {
    $S = str_replace($letter, '', $S, $nb);
    if ($nb === 0) {
        echo "false";
        exit;
    }
}
echo "true";