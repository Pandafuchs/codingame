import java.util.*;
import java.io.*;
import java.math.*;

class Solution {
    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        String S = in.nextLine();

        int counter = 1;
        for(int i = 0; i < S.length(); i++)
        {
            if(i+1 < S.length() && S.subSequence(i,i+1).equals(S.subSequence(i+1,i+2)) ) {
                counter++;
            }
            else{
                System.out.print( String.valueOf(counter) + S.subSequence(i,i+1) );
                counter = 1;
            }
        }
    }
}