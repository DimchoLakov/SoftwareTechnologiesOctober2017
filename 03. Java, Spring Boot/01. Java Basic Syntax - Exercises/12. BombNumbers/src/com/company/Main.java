package com.company;

import java.util.ArrayList;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] numsInput = scanner.nextLine().split("\\s+");
        String[] bombNumberAndPower = scanner.nextLine().split("\\s+");

        ArrayList<Integer> numbers = new ArrayList<Integer>();

        for (String numStr : numsInput) {
            numbers.add(Integer.parseInt(numStr));
        }

        int bombNumber = Integer.parseInt(bombNumberAndPower[0]);
        int powerRange = Integer.parseInt(bombNumberAndPower[1]);

        for (int i = 0; i < numbers.size(); i++) {
            if (numbers.get(i) == bombNumber){
                int leftIndex = i - Math.min(powerRange, numbers.size() - (numbers.size() - i));
                int rightIndex = i + Math.min(powerRange, numbers.size() - 1 - i);

                numbers.subList(leftIndex, rightIndex + 1).clear();
                i = 0;
            }
        }
        int sum = 0;
        for (Integer number : numbers) {
            sum += number;
        }
        System.out.println(sum);
    }
}
