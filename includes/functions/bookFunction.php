<?php



  if($_GET['id']){
  $user_id = $_SESSION['user'][0]['id'];
  $book_id = $_GET['id'];

  $arrayReview = [
  'user_id' => $user_id,
  'book_id' => $book_id,
  ];
  $checkBook = $con->prepare("SELECT `user_id`,`book_id` FROM `viewer` WHERE `user_id` =$user_id AND `book_id`
  =$book_id");
  $checkBook->execute();
  $viewer = $checkBook->fetchAll();

  if(!$viewer){
  insertQuery('viewer',$arrayReview);

  }
  $bookAdmin = selectOne('*','books','id',$book_id);

    $getCountBook =selectData('*', 'viewer', 'book_id', $book_id);
    $countBook = count($getCountBook);
  }

  $fullName = $_SESSION['user'][0]['first_name'] . ' ' . ' ' . $_SESSION['user'][0]['last_name'];