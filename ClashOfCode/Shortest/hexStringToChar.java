import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int valueCount = in.nextInt();
        for (int i = 0; i < valueCount; i++) {
            String hex = in.next();
            
        StringBuilder output = new StringBuilder();
        for (int j = 0; j < hex.length(); j+=2) {
            String str = hex.substring(j, j+2);
            output.append((char)Integer.parseInt(str, 16));
        }
        System.out.print(output);
        }

    }
}