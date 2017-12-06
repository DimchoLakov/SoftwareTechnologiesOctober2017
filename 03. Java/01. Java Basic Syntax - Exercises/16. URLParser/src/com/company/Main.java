package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        String protocol = "";
        String server = "";
        String resources = "";


        int index = input.indexOf("://");

        if (index != -1) {
            String[] tokens = input.split("://");
            protocol = tokens[0];

            String[] serverAndResources = tokens[1].split("/");

            server = serverAndResources[0];
            String[] resTokens = new String[serverAndResources.length - 1];
            int tempIndex = 0;
            for (int i = 1; i < serverAndResources.length; i++) {
                if (serverAndResources[i] != null) {
                    resTokens[tempIndex] = serverAndResources[i];
                    tempIndex++;
                }
            }

            resources = String.join("/", resTokens);
        } else {
            String[] serverAndResources = input.split("/");
            server = serverAndResources[0];
            String[] resTokens = new String[serverAndResources.length - 1];
            int tempIndex = 0;
            for (int i = 1; i < serverAndResources.length; i++) {
                if (serverAndResources[i] != null) {
                    resTokens[tempIndex] = serverAndResources[i];
                    tempIndex++;
                }
            }
            resources = String.join("/", resTokens);
        }

        System.out.printf("[protocol] = \"%s\"\n", protocol);
        System.out.printf("[server] = \"%s\"\n", server);
        System.out.printf("[resource] = \"%s\"\n", resources);

    }
}
