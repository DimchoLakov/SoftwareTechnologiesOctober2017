package com.company;

import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String email = scanner.nextLine();
        String text = scanner.nextLine();

        String[] emailTokens = email.split("@");
        String username = emailTokens[0];
        String domain = emailTokens[1];
        username = new String(new char[username.length()]).replace("\0", "*");
        String result = username + "@" + domain;

        text = text.replaceAll(email, result);
        System.out.println(text);

    }
}
