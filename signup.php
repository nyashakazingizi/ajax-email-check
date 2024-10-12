<?php
session_start();
header("Access-Control-Allow-Origin: *");
include '../db.php';
require('connex.php')
var_dump($_POST);
echo "test";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email-address'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $city= $_POST['city-name'];
    $street = $_POST['street-name'];
    $houseno= $_POST['house-num'];


    echo $lname;
    echo "login";

    $sql="SELECT * FROM Customer WHERE email='$email';";
    $result=mysql_query($sql,$conn);

    if(mysql_num_rows($result)>0) {
        echo "This email address has already been used for another account!";
    }

    else {
        $sql="INSERT INTO Customer (FirstName, LastName, PhoneNo, Email, Password, City, Street, HouseNo) VALUES
        ('$fname','$lname','$phone' ,'$email' ,'$password' ,'$city' ,'$street' ,'$phone');";
        mysql_query($sql,$conn);
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }

    


}





?>