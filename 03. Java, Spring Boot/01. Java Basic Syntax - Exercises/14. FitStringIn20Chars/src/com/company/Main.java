package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String str = scanner.nextLine();

        if (str.length() < 20) {
            int length = 20 - str.length();
            String result = new String(new char[length]).replace("\0", "*");
            System.out.println(str + result);
        } else if (str.length() > 20) {
            String result = str.substring(0, 20);
            System.out.println(result);
        } else {
            System.out.println(str);
        }
    }
}
