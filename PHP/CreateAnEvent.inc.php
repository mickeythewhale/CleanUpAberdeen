<?php

if(isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $ename = mysqli_real_escape_string($conn, $_POST['ename']);
    $elocation = mysqli_real_escape_string($conn, $_POST['elocation']);
    $edate = mysqli_real_escape_string($conn, $_POST['edate']);
    $etime = mysqli_real_escape_string($conn, $_POST['etime']);

    //Error handlers
    // Check for empty fields
    if (empty($ename) || empty($elocation) || empty($edate) || empty($etime)) {
        header("Location: ../CreateAnEvent.php?CreateAnEvent=empty");
        exit();
    } else {
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $ename) || !preg_match("/^[a-zA-Z]*$/", $elocation)) {
            header("Location: ../CreateAnEvent.php?=invalid");
            exit();
        }
    }
}