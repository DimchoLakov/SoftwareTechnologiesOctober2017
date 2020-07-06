package com.company;

import java.util.Arrays;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] nums = Arrays.stream(scanner.nextLine().split("\\s+"))
                .mapToInt(Integer::parseInt).toArray();

        int startIndex = 0;
        int seqLength = 1;

        int bestStartIndex = 0;
        int longestSeq = 0;

        for (int i = 1; i < nums.length; i++)
        {
            if (nums[i - 1] < nums[i])
            {
                seqLength++;
                if (seqLength > longestSeq)
                {
                    longestSeq = seqLength;
                    bestStartIndex = startIndex;
                }
            }
            else
            {
                startIndex = i;
                seqLength = 1;
            }
        }

        for (int i = bestStartIndex; i < longestSeq + bestStartIndex; i++)
        {
            System.out.print(nums[i] + " ");
        }
    }
}
