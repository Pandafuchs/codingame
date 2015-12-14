import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        String S = in.nextLine();

        String[] parts = S.split(" ");
        for( int i = parts.length-1; i > -1; i--)
        {
            System.out.print(parts[i]);
            if(i != 0) System.out.print(" ");
        }
    }
}