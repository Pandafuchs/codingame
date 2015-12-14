import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        for (int i = 0; i < n; i++) 
		{
            String t = in.next();
        
            if(Integer.valueOf( t.substring(0,1)) + Integer.valueOf(t.substring(1,2)) + Integer.valueOf(t.substring(2,3)) == Integer.valueOf(t.substring(3,4)) + Integer.valueOf(t.substring(4,5)) + Integer.valueOf(t.substring(5,6)))
            {
                System.out.println("true");
            }
            else
            {
                System.out.println("false");
            }
        }
    }
}