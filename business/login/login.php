<?php

function login()
{
    $currentUser= $_SESSION['login']['role']??'';
    switch ($currentUser) {
        case 'admin':
            header('location: ' . BASE_URL . "admin");
            break;
        case 'staff':
            header('location: ' . BASE_URL . "staff");
            break;
        case 'chef':
            header('location: ' . BASE_URL . "chef");
            break;
        default:
            include_once "./views/login/form-login.php";
            break;
    }
}

function submit_login()
{
    if (isset($_POST['submit'])) {
        $username = $_POST['user_name'];
        $password = $_POST['password'];

        $sql = "select * from user 
        where user_name like '$username' 
        and password like '$password' and activity like '0';
        ";
        $user = pdo_query_one($sql);
        if ($user) {
            $_SESSION['login'] = $user;
            header('location: ' . BASE_URL . "login");
        } else {
            header('location: ' . BASE_URL . "login?err");
        }
    }
}

function submit_logout()
{
    session_destroy();
    header("location: " . BASE_URL . 'login');
    die;
}
