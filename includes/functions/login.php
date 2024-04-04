<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'functions.php';
    session_start();
    print_r($_POST);

    $email = stringCheck($_POST['user_email_login']);
    $password = md5($_POST['password']);
    $checkAccount = checkedLogin('*', 'users', $email, 'email');


    if ($checkAccount) {
        if ($checkAccount['role'] == 'user') {
            $tableEmail = $checkAccount['email'];
             $tablePassword = $checkAccount['password'];

            if ($password == $tablePassword) {

                print_r($_SESSION['user'] = [$checkAccount]);
                header('Location:../../pages/userPage.php');
            }
        } elseif ($checkAccount['role'] == 'admin') {
              $tableEmail = $checkAccount['email'];
              $tablePassword = $checkAccount['password'];
            if ($password == $tablePassword) {

            print_r($_SESSION['user'] = $checkAccount);
            header('Location:../../pages/adminPage.php');
            }
        }
    } else {
        $error = [];

        $error['faild'] = 'Email or Password Wrong';
        header('Location:../../pages/index.php');
    }
}