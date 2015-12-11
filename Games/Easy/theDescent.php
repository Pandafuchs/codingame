<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/


// game loop
while (TRUE)
{
    $heights = array();
    fscanf(STDIN, "%d %d",
        $spaceX,
        $spaceY
    );
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $mountainH // represents the height of one mountain, from 9 to 0. Mountain heights are provided from left to right.
        );
        $heights[$i] = $mountainH;
        
    }
    asort($heights);

    $nextShoot = -1;
    foreach ($heights as $key => $val) {
        if($val != 0)
        {
            $nextShoot = $key;
        }
    }

    if($spaceX == $nextShoot)
    {
        echo("FIRE\n");
    }
    else
    {
        echo("HOLD\n"); // either:  FIRE (ship is firing its phase cannons) or HOLD (ship is not firing).
    }
}
?>