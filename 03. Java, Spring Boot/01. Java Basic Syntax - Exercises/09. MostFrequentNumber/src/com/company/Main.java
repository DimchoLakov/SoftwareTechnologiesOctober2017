package com.company;

import java.util.*;
import java.util.stream.Collectors;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int[] numbers = Arrays.stream(scanner.nextLine().split("\\s+"))
                .mapToInt(Integer::parseInt).toArray();

        int mostFrequentNumber = 0;
        int maxCounter = 0;

        for (int i = 0; i < numbers.length; i++)
        {
            int currentCnt = 0;
            for (int j = i; j < numbers.length; j++)
            {
                if (numbers[i] == numbers[j])
                {
                    currentCnt++;
                }
            }
            if (currentCnt > maxCounter)
            {
                maxCounter = currentCnt;
                mostFrequentNumber = numbers[i];
            }
        }
        System.out.println(mostFrequentNumber);
    }
}
