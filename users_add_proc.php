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
    $username = $_POST['username'];
    $password = _hash_string($_POST['password']);
    $account_type = $_POST['account_type'];
    $account_status = $_POST['account_status'];

    $user_data = array(
        "firstname" => $firstname,
        "middlename" => $middlename,
        "lastname" => $lastname,
        "department" => $department,
        "program" => $program,
        "section" => $section,
        "username" => $username,
        "password" => $password,
        "account_type" => $account_type,
        "account_status" => $account_status,
    );

    echo insert($user_data, $table_name);



    $_SESSION['alert_msg'] = 1;
    header("Location: users_manage.php");
