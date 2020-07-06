package com.company;

import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays.stream(scanner.nextLine().split("\\s+"))
                .mapToInt(Integer::parseInt).toArray();
        int leftSum = 0;
        int rightSum = 0;

        for (int i = 0; i < numbers.length; i++) {

            if (i == 0) {
                leftSum = 0;
            } else {
                for (int j = 0; j < i - 1; j++) {
                    leftSum += numbers[j];
                }
                leftSum += numbers[i - 1];
            }
            if (i == numbers.length - 1) {
                rightSum = 0;
            } else {
                for (int j = i + 1; j < numbers.length - 1; j++) {
                    rightSum += numbers[j];
                }
                rightSum += numbers[numbers.length - 1];
            }
            if (leftSum == rightSum) {
                System.out.println(i);
                return;
            }
            leftSum = 0;
            rightSum = 0;
        }
        System.out.println("no");
    }
}
