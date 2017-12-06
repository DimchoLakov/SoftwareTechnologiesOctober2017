package com.company;

import java.util.LinkedHashMap;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        TreeMap<String, String> phonebook = new TreeMap<String, String>();

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
                case "ListAll":

                    for (Map.Entry<String, String> contact : phonebook.entrySet()) {
                        System.out.println(contact.getKey() + " -> " + contact.getValue());
                    }

                    break;
            }

            input = scanner.nextLine();
        }
    }
}
