<?php
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s", $W);
    if (strrev($W) === $W) {
        echo 'true' . "\n";
    } else {
        echo 'false'. "\n";
    }
}