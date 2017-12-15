package com.company;

import java.util.ArrayList;
import java.util.Scanner;

public class  Main {
    public static class Student {
        String name;
        ArrayList<Double> grades;

        public String getName() {
            return name;
        }

        public void setName(String name) {
            this.name = name;
        }

        public ArrayList<Double> getGrades() {
            return grades;
        }

        public void setGrades(ArrayList<Double> grades) {
            this.grades = grades;
        }

        public Student(String name, ArrayList<Double> grades) {
            this.name = name;
            this.grades = grades;
        }

    }
    public static Double getAverage(ArrayList<Double> grades) {
        double gradesSum = 0;
        for (Double grade : grades) {
            gradesSum += grade;
        }
        return gradesSum / grades.size();
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<Student> studentList = new ArrayList<Student>();

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < n; i++) {
            String input = scanner.nextLine();

            String[] tokens = input.split("\\s+");
            String studName = tokens[0];
            ArrayList<Double> studGrades = new ArrayList<Double>();

            for (int j = 1; j < tokens.length; j++) {
                studGrades.add(Double.parseDouble(tokens[j]));
            }
            Student newStudent = new Student(studName, studGrades);

            studentList.add(newStudent);
        }

        studentList.removeIf(g -> getAverage(g.grades) < 5);
        studentList.sort((a, b) -> {
            if(a.name.compareTo(b.name) == 0) {
                return Double.compare(getAverage(b.grades), getAverage(a.grades));
            } else {
                return a.name.compareTo(b.name);
            }
        });

        for (Student student : studentList) {
            System.out.printf(student.name + " -> %.2f%n", getAverage(student.grades));
        }
    }
}

