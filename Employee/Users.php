<?php

    session_start();
    
    if(isset($_POST["submit"])){

        include 'dbcon.php';
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM `employee_profile` WHERE Email = '$username' and Password = '$password'";

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_assoc($result);
     
        if ($row['Email'] === $username && $row['Password'] === $password) {
              header("Location: Dashboard.php");
                exit();
          }
          else{
            echo "Invalid username and password";
            header("Location: Login.php");
          }
    }

?>