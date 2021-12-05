<?php
function login()
{
    include_once "./views/login/form-login.php";
}

function submit_login()
{
    if (isset($_POST['submit'])) {
        $username = $_POST['user_name'];
        $password = $_POST['password'];

        $sql = "select * from user 
        where user_name like '$username' 
        and password like '$password'
        ";
        $user = pdo_query_one($sql);
        if ($user) {
            $_SESSION['login'] = $user;

            if ($user['role'] == 'admin') {
                header('location: ' . BASE_URL . "admin");
            } elseif ($user['role'] == 'staff') {
                header('location:' . BASE_URL . "staff");
            } else {
                header('location:' . BASE_URL . "chef");
            }
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
