<?php
include 'functions.php';
// print_r($_POST['first_name']);
if ($_SERVER['REQUEST_METHOD']=='POST') {
    session_start();
                // Start Validate Data
            $firstName = stringCheck($_POST['first_name']);
            $lastName = stringCheck($_POST['last_name']);
            $email = stringCheck($_POST['user_email']);
            $user_phone = stringCheck($_POST['user_phone']);
            $password = md5($_POST['user_password']);

            $requestData = [
                'first_name'=>$firstName,
                'last_name'=>$lastName,
                'email'=>$email,
                'phone'=>$user_phone,
                'password'=>$password,
                'role'=>'user',
            ];

            // Start Check Email Is Exist
            $checkEmail = checkedData('email', 'users', $email); // If Email Is Exists
            
            if($checkEmail){
            echo "This Email Is Exists ";
            die();
            }else{
                $dataInserted= insertQuery('users', $requestData);
                $user_id = $con->lastInsertId(); // Start Get last Id From user Cause Add To session
                        
                            
                // Start Session With User
            
                    $_SESSION['user'] = [
                          'user_id'=>$user_id,
                        $requestData
                    ];
                // Start Session With User

                header('Location:../../pages/userPage.php');
                        }
}else{
    redirectHome('You Dont Register You Can\'t Visit This Page... ! ','',3);
}