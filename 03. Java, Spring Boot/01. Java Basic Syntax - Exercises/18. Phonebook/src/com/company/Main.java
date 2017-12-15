package com.company;

import java.util.LinkedHashMap;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        LinkedHashMap<String, String> phonebook = new LinkedHashMap<String, String>();

        while (!input.equals("END")) {
            String[] tokens = input.split("\\s+");

            String command = tokens[0];

            switch (command) {
                case "A":
                    String nameToAdd = tokens[1];
                    String numberToAdd = tokens[2];

                    phonebook.put(nameToAdd, numberToAdd);

                    break;
                case "S":

                    String searchName = tokens[1];

                    if (phonebook.containsKey(searchName)) {
                        String number = phonebook.get(searchName);
                        System.out.println(searchName + " -> " + number);
                    } else {
                        System.out.println("Contact " + searchName + " does not exist.");
                    }

                    break;
            }

            input = scanner.nextLine();
        }
    }
}
