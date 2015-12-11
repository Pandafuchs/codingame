import java.util.*;
import java.io.*;
import java.math.*;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/
class Player {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int lightX = in.nextInt(); // the X position of the light of power
        int lightY = in.nextInt(); // the Y position of the light of power
        int initialTX = in.nextInt(); // Thor's starting X position
        int initialTY = in.nextInt(); // Thor's starting Y position

        int diff1 = initialTX - lightX;
        int diff2 = initialTY - lightY;

        // game loop
        while (true) {
            int remainingTurns = in.nextInt(); // The remaining amount of turns Thor can move. Do not remove this line.
            
            
            String xAxis = "";
            String yAxis = "";
            
            if(diff1 > 0)
            {
                xAxis = "W";
                diff1--;
            }
            else if(diff1 < 0)
            {
                xAxis = "E";
                diff1++;
            }

            if(diff2 > 0)
            {
                yAxis = "N";
                diff2--;
            }
            else if(diff2 < 0)
            {
                yAxis = "S";
                diff2++;
            }
            
            System.out.println(yAxis + xAxis);
        }
    }
}