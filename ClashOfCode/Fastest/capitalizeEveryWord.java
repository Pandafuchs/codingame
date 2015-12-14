import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

	public static String capitalizeString(String string) 
	{
	  char[] chars = string.toLowerCase().toCharArray();
	  boolean found = false;
	  for (int i = 0; i < chars.length; i++) {
		if (!found && Character.isLetter(chars[i])) {
		  chars[i] = Character.toUpperCase(chars[i]);
		  found = true;
		} else if (Character.isWhitespace(chars[i]) || chars[i]=='.' || chars[i]=='\'') { // You can add other chars here
		  found = false;
		}
	  }
	  return String.valueOf(chars);
	}
    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        String S = in.nextLine();
        System.out.println(capitalizeString(S));
    }
}