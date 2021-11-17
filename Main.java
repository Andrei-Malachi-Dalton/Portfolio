package edu.cscc;
import java.util.Scanner;
import java.lang.Math;

/*
    Name: Andrei Dalton
    Date: 9/14/2021
    Purpose: Creating a method that calculates a users BMI
 */
public class Main {
    private static Scanner input = new Scanner(System.in);

    public static void main(String[] args) {
	    double lbs, inches, meters, kgs, bmi;
	    String classification;

	   System.out.println("Calculate BMI");

	    System.out.print("Enter weight (lbs): ");
        lbs = input.nextDouble();
	    System.out.print("Enter height (inches): ");
        inches = input.nextDouble();
        kgs = convertToKilograms(lbs);
        meters = convertToMeters(inches);
        bmi = calcBMI(kgs, meters);
        System.out.println("Your BMI is "+bmi);
        classification = bmiClassification(bmi);
        System.out.print("Your BMI classification is "+classification);
    }



    public static double convertToKilograms(double pounds) {
        double big;
        big = pounds / 2.2046;
        return big;
    }

    public static double convertToMeters(double feet) {
        double tall;
        tall = feet / 39.37;
        return tall;
    }



    public static double calcBMI(double weight, double height) {
        double both;
        both = weight / (Math.pow(height, 2));
        return both;
    }

    public static String bmiClassification(double bmi) {

        if (bmi < 18.5)
            return "Underweight";
        else if (bmi >= 18.5 && bmi < 25.0)
            return "Normal";
        else if(bmi >= 25.0 && bmi < 30.0)
            return "Overweight";
        else if(bmi >= 30.0)
            return "Obese";
        else
            return null;
    }
}
