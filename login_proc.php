<?php
    session_start();
    include "perfect_function.php";

    $table_name = "students";
    $_SESSION['username'] = $_POST['username'];
    $password = _hash_string($_POST['password']);
    $password2 = _get_pword_from_username($_SESSION['username'], $table_name);

    $user_data = get_where_custom($table_name, 'username', $_SESSION['username']); 
    $user_id = _get_id_from_username($_SESSION['username'], $table_name);
    $account_status = _get_status_from_username($_SESSION['username'], $table_name);
    $account_type = _get_accounttype_from_username($_SESSION['username'], $table_name);


    if ($account_status==0){
        header("Location:login.php");
    }elseif ($account_status==1){
        if ($account_type==1) {
            if ($password==$password2) {
                header("Location:users_manage.php");
                $_SESSION['username'] = $_SESSION['username'];
            }else{
                header("Location: login.php");
                $_SESSION['incorrect_msg'] = 1;
            }

            }elseif ($account_type==0) {
                if ($password==$password2) {
                    header("Location:stud_view_courses.php");
                    $_SESSION['username'] = $_SESSION['username'];
                }else{
                    header("Location: login.php");
                    $_SESSION['incorrect_msg'] = 1;
                }

            }else {
            header("Location: login.php");
            $_SESSION['alert_msg']=2;
            
        }
    }
    
?>
