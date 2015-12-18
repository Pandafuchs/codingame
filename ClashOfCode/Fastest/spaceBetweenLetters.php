<?php
$L = stream_get_line(STDIN, 30, "\n");
for($i = 0; $i < strlen($L)+1; $i++)
{
    echo substr($L, $i, 1);
    if( ctype_alpha(substr($L, $i+1, 1)) && substr($L, $i, 1) != " " && ctype_alpha(substr($L, $i, 1)) )
    {
        echo ' ';
    }
}
?>