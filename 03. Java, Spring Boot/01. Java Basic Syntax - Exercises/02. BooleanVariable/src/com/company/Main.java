package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        boolean isTrue = Boolean.parseBoolean(scanner.nextLine());
        if (isTrue) {
            System.out.println("Yes");
        } else {
            System.out.println("No");
        }
    }
}
