<?php

if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    //Error handlers
    // Check for empty fields
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($password)){
        header("Location: ../signUp.php?signUp=empty");
        exit();
    } else {
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
            header("Location: ../signUp.php?=invalid");
            exit();
        } else {
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signUp.php?=email");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_id='uid'";
                $result= mysqli_query($conn, $sql);
                $resultCheck= mysqli_num_rows($result);

                if($resultCheck > 0) {
                    header("Location: ../signUp.php?=userTaken");
                    exit();
                } else{
                    //hashing the password
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_username, user_password) VALUES ('$first','$last', '$email', '$email','$uid','$hashedPwd');";
                    mysqli_query($conn, $sql);

                    header("Location: ../signUp.php?=success");
                    exit();

                }

            }

        }
    }
} else {
    header("Location: ../signUp.php");
    exit();
}
