package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int input = Integer.parseInt(scanner.nextLine());

        String hexadecimal = Integer.toHexString(input);
        String binary = Integer.toBinaryString(input);

        System.out.println(hexadecimal.toUpperCase());
        System.out.println(binary);
    }
}
