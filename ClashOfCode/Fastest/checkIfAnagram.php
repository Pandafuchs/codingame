<?php
fscanf(STDIN, "%s %s",
    $A,
    $B
);
function is_anagram($a, $b) {
	if (count_chars($a, 1)==count_chars($b, 1)) return "1";
	return '0';
}
echo is_anagram($A, $B);