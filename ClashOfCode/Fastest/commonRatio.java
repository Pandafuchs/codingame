import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int N = in.nextInt();
        int R = in.nextInt();

        for(int i = 0; i < N; i++)
        {
            int num = (int) Math.pow(R,i);
            System.out.print(num );
            if(i != N-1) System.out.print(" ");
        }
    }
}