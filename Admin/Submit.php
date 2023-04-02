<?php

    if (isset($_POST["submit"])) {
        include "dbcon.php";
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $pname = $_POST["pname"];
        $mname = $_POST["mname"];
        $dob = $_POST["dob"];
        $gander = $_POST["gander"];
        $matric = $_POST["matric"];
        $mark = $_POST["mark"];
        $h = $_POST["h"];
        $marks = $_POST["marks"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        if ($password == $cpassword) {
            
            $sql = "INSERT INTO `employee_profile`(`First Name`, `Last Name`, `Father Name`, `Mother Name`, `Date of Birth`, `Gander`, `Matric Roll No.`, `Martic Marks`, `Higher Equation`, `Marks`, `Email`, `Password`) 
            VALUES ('$fname','$lname','$pname','$mname','$dob','$gander','$matric','$mark','$h','$marks','$email','$password')";

            $result = mysqli_query($conn,$sql);

            if ($result) {
                echo "Successfuly Registred";
            }
            else {
                echo "Error";
            }
        }
        else {
            echo "Not Same";
        }
    }

?>