<?php

session_start();

if(isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    //error handlers
    //check if inputs are empty

    if (empty($uid) || empty($password)) {
        header("Location: ../index.php?login=empty");
        exit();

    } else {
        $sql = "SELECT * FROM users WHERE user_username = '$uid' OR user_email = '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.php?login=error");
            exit();

        } else {
            if ($row = mysqli_fetch_assoc($result)){
                //de-hashing the password
                $hashedPasswordCheck = password_verify($password, $row['user_password']);
                if ($hashedPasswordCheck == false) {
                    header("Location: ../index.php?login=error");
                    exit();
                } elseif ($hashedPasswordCheck == true) {
                    // login the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_username'] = $row['user_username'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
            }
        }
    }
}else {
        header("Location: ../index.php?login=error");
        exit();
    }

