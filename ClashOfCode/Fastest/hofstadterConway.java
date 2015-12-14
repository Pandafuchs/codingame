import java.util.*;
import java.io.*;
import java.math.*;

class Solution {
    private static int n;

    private static int a(int i)
    {
        if(i > 2)
        {
            return a(a(i - 1)) + a(i - a(i - 1));
        }
        else return 1;
    }
    
    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        Solution.n = in.nextInt();

        for(int i = 1; i < Solution.n+1; i++)
        {
            System.out.print(a(i) );
            if(i != Solution.n)
            {
               System.out.print(" "  ); 
            }
        }
            
        
    }
}