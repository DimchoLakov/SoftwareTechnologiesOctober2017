package com.company;

import org.omg.CORBA.INTERNAL;

import javax.xml.crypto.dsig.keyinfo.KeyValue;
import java.lang.reflect.Array;
import java.util.*;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int n = Integer.parseInt(scanner.nextLine());

        TreeMap<String, Double> townIncomeInfo = new TreeMap<String, Double>();

        for (int i = 0; i < n; i++) {
            String[] tokens = scanner.nextLine().split("\\|");

            String townName = tokens[0].trim();
            double income = Double.parseDouble(tokens[1].trim());

            if (townIncomeInfo.containsKey(townName)) {
                townIncomeInfo.put(townName, townIncomeInfo.get(townName) + income);
            } else {
                townIncomeInfo.put(townName, income);
            }
        }

        for (String townIncome : townIncomeInfo.keySet()) {
            String town = townIncome;
            Double income = townIncomeInfo.get(town);
            System.out.println(town + " -> " + income);
        }
    }
}
