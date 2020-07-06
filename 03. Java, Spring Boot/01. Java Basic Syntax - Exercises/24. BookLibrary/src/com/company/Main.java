package com.company;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        List<Book> books = new ArrayList<>();

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < n; i++) {
            String[] line = scanner.nextLine().split("\\s");
            String title = line[0];
            String author = line[1];
            String publisher = line[2];
            String date = line[3];
            String id = line[4];
            double price = Double.parseDouble(line[5]);

            Book book = new Book(title, author, publisher, date, id, price);

            books.add(book);
        }

        List<String> names = books.stream().map(Book::getAuthor).distinct().collect(Collectors.toList());
        List<Sum> sums = new ArrayList<>();
        for (String name : names) {
            double sum = books.stream().filter(a -> a.getAuthor().compareTo(name) == 0).mapToDouble(Book::getPrice).sum();
            Sum s = new Sum(name, sum);
            sums.add(s);
        }

        sums.sort((a, b) -> {
            if(a.getSum().equals(b.getSum())){
                return a.getName().compareTo(b.getName());
            } else {
                return Double.compare(b.getSum(), a.getSum());
            }
        });

        for (Sum sum : sums) {
            System.out.printf("%s -> %.2f%n", sum.getName(), sum.getSum());
        }
    }

    static class Sum{
        public Sum(String name, Double sum) {
            this.name = name;
            this.sum = sum;
        }

        private String name;
        private Double sum;

        public String getName() {
            return name;
        }

        public void setName(String name) {
            this.name = name;
        }

        public Double getSum() {
            return sum;
        }

        public void setSum(Double sum) {
            this.sum = sum;
        }
    }

    static class Book{
        private String title;
        private String author;
        private String publisher;
        private String date;
        private String id;
        private double price;

        public Book(String title, String author, String publisher, String date, String id, double price) {
            this.title = title;
            this.author = author;
            this.publisher = publisher;
            this.date = date;
            this.id = id;
            this.price = price;
        }

        public String getTitle() {
            return title;
        }

        public void setTitle(String title) {
            this.title = title;
        }

        public String getAuthor() {
            return author;
        }

        public void setAuthor(String author) {
            this.author = author;
        }

        public String getPublisher() {
            return publisher;
        }

        public void setPublisher(String publisher) {
            this.publisher = publisher;
        }

        public String getDate() {
            return date;
        }

        public void setDate(String date) {
            this.date = date;
        }

        public String getId() {
            return id;
        }

        public void setId(String id) {
            this.id = id;
        }

        public double getPrice() {
            return price;
        }

        public void setPrice(double price) {
            this.price = price;
        }
    }
}
