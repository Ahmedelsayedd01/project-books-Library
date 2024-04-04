<?php
@session_start();
if(isset($_SESSION['user'])){
  include('functions.php');
    $user_id = $_SESSION['user']['id'];
    $userAdmin = selectData('*','users','id', $user_id);
    $bookAdmin = selectData('*','books','id', $user_id);
  $user = json_encode(
    [
      'userAdmin' => $userAdmin, // This Daata Where user Login
      
    ],
    200); // Data Send Successflly 

  
  echo $user;

}
if(!isset($_SESSION['user'])){
  $user = json_encode(['faild' => 'You Not Authanticated'],401);

  
  echo $user;

}