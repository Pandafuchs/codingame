import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        
        String myNumber = "";
        
        int N = in.nextInt();
        for (int i = 0; i < N; i++) {
            int digit = in.nextInt();
            myNumber += String.valueOf(digit);
        }
        
        Integer[] numbers = new Integer[N];
        
        for(int i = 0; i < myNumber.length(); i++)
        {
            numbers[i] = Integer.valueOf(myNumber.substring(i,i+1));
        }
        
        Arrays.sort(numbers, new Comparator<Integer>()
        {
            @Override
            public int compare(Integer x, Integer y)
            {
                return y - x;
            }
        });
        
        if(numbers[0] == 0) 
        {
            System.out.print("0");
        }
        else
        {
            for(int i = 0; i < N; i++)
            {
                System.out.print(numbers[i]);
            }
        }
    }
}