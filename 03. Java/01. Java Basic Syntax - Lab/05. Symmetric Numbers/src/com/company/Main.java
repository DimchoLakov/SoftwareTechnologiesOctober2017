package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split(" ");
        int n = Integer.parseInt(input[0]);

        for (int i = 1; i <= n; i++) {
            if (isSymmetric(i)){
                System.out.println(i);
            };
        }
    }

    public static boolean isSymmetric(int num)
    {
        String numToStr = "" + num;

        String reversed = new StringBuilder(numToStr).reverse().toString();

        if (numToStr.equals(reversed)){
            return true;
        }
        return false;
    }
}
