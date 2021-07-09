<?php
    session_start();
    include "perfect_function.php";
    $table_name = "courses";
    $coursecode = $_POST['coursecode'];
    $coursename = $_POST['coursename'];
    $totalunits = $_POST['totalunits'];
    $lecunits = $_POST['lecunits'];
    $labunits = $_POST['labunits'];
    $instructorname = $_POST['instructorname'];
    $semester = $_POST['semester'];

    $user_data = array(
        "coursecode" => $coursecode,
        "coursename" => $coursename,
        "totalunits" => $totalunits,
        "lecunits" => $lecunits,
        "labunits" => $labunits,
        "instructorname" => $instructorname,
        "semester" => $semester,
    );

    echo insert($user_data, $table_name);



    $_SESSION['alert_msg'] = 1;
    header("Location: course_view.php");
