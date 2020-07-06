package com.company;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String text = scanner.nextLine();

        List<String> allMatches = new ArrayList<String>();

        Matcher m = Pattern.compile("<upcase>(.*?)</upcase>")
                .matcher(text);

        while (m.find()) {
            allMatches.add(m.group());
            String result = m.group().substring(8, m.group().length() - 1 - 8);
            result = result.toUpperCase();

            text = text.replace(m.group(), result);
        }

        System.out.println(text);

    }
}
