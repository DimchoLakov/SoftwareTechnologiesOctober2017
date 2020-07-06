package com.company;

import java.util.Arrays;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int[] nums = Arrays.stream(scanner.nextLine().split("\\s+"))
                .mapToInt(Integer::parseInt).toArray();
        Arrays.sort(nums);

        int num1 = nums[0];
        int num2 = nums[1];
        int num3 = nums[2];

        if (num1 + num2 == num3) {
            int lesser = Math.min(num1, num2);
            int bigger = Math.max(num1, num2);
            int sum = lesser + bigger;
            System.out.printf("%d + %d = %d", lesser, bigger, sum);
        } else if (num1 + num3 == num2) {
            int lesser = Math.min(num1, num3);
            int bigger = Math.max(num1, num3);
            int sum = lesser + bigger;
            System.out.printf("%d + %d = %d", lesser, bigger, sum);
        } else if (num2 + num3 == num1) {
            int lesser = Math.min(num2, num3);
            int bigger = Math.max(num2, num3);
            int sum = lesser + bigger;
            System.out.printf("%d + %d = %d", lesser, bigger, sum);
        } else {
            System.out.println("No");
        }

    }
}
