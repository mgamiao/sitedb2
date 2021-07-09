<?php
    session_start();
    include "perfect_function.php";
    $table_name = "students";
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];
    $program = $_POST['program'];
    $section = $_POST['section'];
    $semester = $_POST['semester'];
    $username = $_POST['username'];
    $password = _hash_string($_POST['password']);

    $user_data = array(
        "firstname" => $firstname,
        "middlename" => $middlename,
        "lastname" => $lastname,
        "department" => $department,
        "program" => $program,
        "section" => $section,
        "semester" => $semester,
        "username" => $username,
        "password" => $password,
    );

    echo insert($user_data, $table_name);



    $_SESSION['alert_msg'] = 1;
    header("Location: registercomplete.php");
