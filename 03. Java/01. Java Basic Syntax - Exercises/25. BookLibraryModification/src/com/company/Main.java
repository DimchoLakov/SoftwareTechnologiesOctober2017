package com.company;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.*;
import java.util.stream.Collectors;

public class Main {


    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        List<BookV> books = new ArrayList<>();

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < n; i++) {
            String[] line = scanner.nextLine().split("\\s");
            String title = line[0];
            String author = line[1];
            String publisher = line[2];
            int[] d = Arrays.stream(line[3].split("\\.")).mapToInt(Integer::parseInt).toArray();
            Calendar date = GregorianCalendar.getInstance();
            date.set(d[2], d[1] - 1, d[0]);
            String id = line[4];
            double price = Double.parseDouble(line[5]);

            BookV book = new BookV(title, author, publisher, date, id, price);

            books.add(book);
        }
        int[] controlDate = Arrays.stream(scanner.nextLine().split("\\.")).mapToInt(Integer::parseInt).toArray();
        Calendar control = GregorianCalendar.getInstance();
        control.set(controlDate[2], controlDate[1] - 1, controlDate[0]);

        List<BookV> asd = books.stream().filter(a -> a.getDate().compareTo(control) > 0).sorted((a, b) -> {
            if(a.getDate().compareTo(b.getDate()) == 0){
                return a.getTitle().compareTo(b.getTitle());
            }
            return a.getDate().compareTo(b.getDate());
        }).collect(Collectors.toList());

        DateFormat dateFormat = new SimpleDateFormat("dd.MM.yyyy");
        for (BookV book : asd) {
            String formattedDate = dateFormat.format(book.getDate().getTime());
            System.out.printf("%s -> %s%n", book.getTitle(), formattedDate);
        }

    }

    static class BookV{
        private String title;
        private String author;
        private String publisher;
        private Calendar date;
        private String id;
        private double price;

        public BookV(String title, String author, String publisher, Calendar date, String id, double price) {
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

        public Calendar getDate() {
            return date;
        }

        public void setDate(Calendar date) {
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
