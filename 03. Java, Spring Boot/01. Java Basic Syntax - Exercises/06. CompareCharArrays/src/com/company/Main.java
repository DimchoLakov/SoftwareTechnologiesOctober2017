package com.company;

import java.util.Arrays;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] firstInput = scanner.nextLine().split("\\s+");
        String[] secondInput = scanner.nextLine().split("\\s+");

        char[] firstArr = new char[firstInput.length];
        char[] secondArr = new char[secondInput.length];

        int index = 0;

        for (String s : firstInput) {
            firstArr[index] = s.charAt(0);
            index++;
        }
        index = 0;
        for (String s : secondInput) {
            secondArr[index] = s.charAt(0);
            index++;
        }

        if (Arrays.equals(firstArr, secondArr)) {
            System.out.println(firstArr);
            System.out.println(firstArr);
            return;
        }

        int length = Math.min(firstArr.length, secondArr.length);

        for (int i = 0; i < length; i++) {
            if (firstArr[i] < secondArr[i]) {
                System.out.println(firstArr);
                System.out.println(secondArr);
                return;
            } else if (secondArr[i] < firstArr[i]) {
                System.out.println(secondArr);
                System.out.println(firstArr);
                return;
            }
        }

        if (firstArr.length < secondArr.length){
            System.out.println(firstArr);
            System.out.println(secondArr);
        } else if (secondArr.length < firstArr.length){
            System.out.println(secondArr);
            System.out.println(firstArr);
        }
    }
}
