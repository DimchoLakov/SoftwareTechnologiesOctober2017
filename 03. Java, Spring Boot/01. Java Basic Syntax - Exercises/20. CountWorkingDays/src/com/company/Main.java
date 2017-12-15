package com.company;

import java.text.ParseException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) throws ParseException {
        Scanner scanner = new Scanner(System.in);

        String firstDate = scanner.nextLine();
        String secondDate = scanner.nextLine();

        DateTimeFormatter inputDateFormat = DateTimeFormatter.ofPattern("d-M-yyyy");
        DateTimeFormatter dateFormat = DateTimeFormatter.ofPattern("dd-MM");

        LocalDate startDate = LocalDate.parse(firstDate, inputDateFormat);
        LocalDate endDate = LocalDate.parse(secondDate, inputDateFormat);
        endDate = endDate.plusDays(1);
        int count = 0;
        for (LocalDate date = startDate; date.isBefore(endDate); date = date.plusDays(1)) {
            if (date.getDayOfMonth() == 1 && date.getMonthValue() == 1) {
                continue;
            } else if (date.getDayOfMonth() == 3 && date.getMonthValue() == 3) {
                continue;
            } else if (date.getDayOfMonth() == 1 && date.getMonthValue() == 5) {
                continue;
            } else if (date.getDayOfMonth() == 6 && date.getMonthValue() == 5) {
                continue;
            } else if (date.getDayOfMonth() == 24 && date.getMonthValue() == 5) {
                continue;
            } else if (date.getDayOfMonth() == 6 && date.getMonthValue() == 9) {
                continue;
            } else if (date.getDayOfMonth() == 22 && date.getMonthValue() == 9) {
                continue;
            } else if (date.getDayOfMonth() == 24 && date.getMonthValue() == 12) {
                continue;
            } else if (date.getDayOfMonth() == 1 && date.getMonthValue() == 11) {
                continue;
            } else if (date.getDayOfMonth() == 25 && date.getMonthValue() == 12) {
                continue;
            } else if (date.getDayOfMonth() == 26 && date.getMonthValue() == 12) {
                continue;
            } else if (date.getDayOfWeek().name().equals("SATURDAY")) {
                continue;
            } else if (date.getDayOfWeek().name().equals("SUNDAY")) {
                continue;
            } else {
                count++;
            }
        }
        System.out.println(count);
    }
}
