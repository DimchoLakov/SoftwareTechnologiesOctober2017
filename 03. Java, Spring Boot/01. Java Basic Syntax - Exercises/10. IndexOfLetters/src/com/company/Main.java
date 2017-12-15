package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] word = scanner.nextLine().toCharArray();

        for (int i = 0; i < word.length; i++) {
            System.out.println(word[i] + " -> " + ((int) word[i] - 97));
        }
    }
}
