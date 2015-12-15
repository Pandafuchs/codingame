<?php
fscanf(STDIN, "%d",
    $X
);
fscanf(STDIN, "%d",
    $N
);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d %s",
        $F,
        $T,
        $category
    );
    
    if($X >= $F && $X <= $T)
    {
        echo $category;
    }
}
?>