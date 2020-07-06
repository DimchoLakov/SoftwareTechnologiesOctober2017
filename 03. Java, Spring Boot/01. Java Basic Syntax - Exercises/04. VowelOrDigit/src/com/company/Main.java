package com.company;

import java.util.ArrayList;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char ch = scanner.nextLine().charAt(0);

        ArrayList<Character> listChars = new ArrayList<Character>() {{
            add('a');
            add('e');
            add('i');
            add('y');
            add('o');
            add('u');
        }};

        if (Character.isDigit(ch)) {
            System.out.println("digit");
        } else if (listChars.contains(ch)) {
            System.out.println("vowel");
        } else {
            System.out.println("other");
        }
    }
}
