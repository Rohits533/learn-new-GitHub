import java.util.*;
public class Main{
    public static void main(String[] args){
        string password = "myPassword123";
        System.out.println("enter your password");
        scanner sc = new Scanner(System.in);
        String input = sc.nextLine();
        if(input.equals(password)){
            System.out.println("Access granted");
        }else{
            System.out.println("Access denied");
            sc.close();
    }
}