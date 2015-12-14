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
        String code = in.next();

		if(code.length() % 3 != 0)
		{
			System.out.println("ERROR");
		}
        else
		{
			for(int i = 0; i < code.length(); i+=3)
			{
				System.out.print(Character.toChars( Integer.valueOf(code.substring(i,i+1) + code.substring(i+1,i+2) + code.substring(i+2,i+3))) );
			}
		}
        
    }
}