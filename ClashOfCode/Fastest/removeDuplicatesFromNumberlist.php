<?php
fscanf(STDIN, "%d",
    $N
);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $X
    );
    $arr[$X] = "hi";
}
foreach($arr as $key => $value)
{
    echo("$key\n");
}
?>