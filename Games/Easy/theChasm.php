<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $road // the length of the road before the gap.
);
fscanf(STDIN, "%d",
    $gap // the length of the gap.
);
fscanf(STDIN, "%d",
    $platform // the length of the landing platform.
);
$jumped = false;
$maxSpeed = $platform-1;
error_log(var_export($maxSpeed, true));

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $speed // the motorbike's speed.
    );
    fscanf(STDIN, "%d",
        $coordX // the position on the road of the motorbike.
    );

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    
    if($jumped)
    {
        echo("SLOW\n");
    }
    else if($coordX == $road-1)
    {
        echo("JUMP\n");
        $jumped = true;
    }
    else if($speed < $maxSpeed)
    {
        echo("SPEED\n");
    }
    else
    {
        echo("WAIT\n");
    }
}
?>