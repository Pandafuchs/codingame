import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        String message = in.nextLine();

		int counter = 0;
		for (int i = 0; i < message.length(); i++) {
		  if (Character.isLetter(message.charAt(i)))
			counter++;
		}
		System.out.println(counter );

    }
}