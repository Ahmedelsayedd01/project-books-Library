<?php
session_start();
if(isset($_SESSION['user'])){
  include('functions.php');
  $user_id = $_SESSION['user'];

    $userAdmin = checkedLogin('*','users',$_SESSION['user'][0]['id'],'id');

    if($_SESSION['user'][0]['role'] == 'user'){
    $bookAdmin = 'You Are User Now';
    $usersBooks = selectAllData('*','books');
    }else{
    $usersBooks = Null;
    $bookAdmin = selectData('*','books','user_id',$_SESSION['user'][0]['id']);

    }
  // print_r($bookAdmin);
  $user = json_encode(
    [
      'userAdmin' => $userAdmin, // This Daata Where user Login
      'bookAdmin' => $bookAdmin, // This Daata Where user Login
      'usersBooks' => $usersBooks, // This Daata Where user Login
      
    ],
    200); // Data Send Successflly 

  
 echo  $user;
  http_response_code(200);

}
if(!isset($_SESSION['user'])){
  $user = json_encode(['faild' => 'You Not Authanticated'],401);
  http_response_code(404);

}