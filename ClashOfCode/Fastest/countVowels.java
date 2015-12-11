import java.util.*;
import java.io.*;
import java.math.*;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        String sentence = in.nextLine();

        boolean first = true;
        for (String word : sentence.split(" +"))
        {
            if(!first) System.out.print(" ");
            System.out.print(word.replaceAll("[^aeiouAEIOU]", "").length());
            
            first = false;
        }

    }
}