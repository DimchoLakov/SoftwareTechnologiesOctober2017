package com.company;

import java.util.Random;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] phrases = new String[]{"Excellent product.", "Such a great product.",
                "I always use that product.", "Best product of its category.",
                "Exceptional product.", "I can't live without this product."};

        String[] events = new String[]{"Now I feel good.", "I have succeeded with this product.",
                "Makes miracles. I am happy of the results!",
                "I cannot believe but now I feel awesome.", "Try it yourself, I am very satisfied.",
                "I feel great!"};

        String[] authors = new String[]{"Diana", "Petya", "Stella", "Elena",
                "Katya", "Iva", "Annie", "Eva"};

        String[] cities = new String[]{"Burgas", "Sofia", "Plovdiv", "Varna", "Ruse"};

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < n; i++) {
            Random r = new Random();
            int phraseIndex = r.nextInt(phrases.length);
            int eventsIndex = r.nextInt(events.length);
            int authorsIndex = r.nextInt(authors.length);
            int citiesIndex = r.nextInt(cities.length);

            System.out.println(phrases[phraseIndex] + events[eventsIndex] + authors[authorsIndex] + cities[citiesIndex]);
        }
    }
}
