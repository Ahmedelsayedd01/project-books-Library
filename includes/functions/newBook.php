<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
include "functions.php";

     $bookName = stringCheck($_POST['book_name']);
     $auther_book = stringCheck($_POST['book_who']);
     $book_desc = stringCheck($_POST['book_disc']);


 $file = $_FILES['book_audio'];
     $f_name = $file['name'];
     $f_type = $file['type'];
     $f_tmp_name = $file['tmp_name'];
     $f_error = $file['error'];
     $f_size = $file['size'];
     if ($f_name != '') {
          $ext = pathinfo($f_name); // Start Take Extension Image 
          // print_r($ext); Test
          // Start Get Orginal Name About image 
          $original_name = $ext['filename'];
          $original_ext = $ext['extension'];
          $allowed = array("mp3");
          if (in_array($original_ext, $allowed)) {
               if ($f_error === 0) { // If This image Don;t Have any error 
                    if ($f_size < 22250000) {
                         $new_name = uniqid('', true) . "." . $original_ext;
                         $destnation = "../../Assets/audioUser/" . $new_name;
                         move_uploaded_file($f_tmp_name, $destnation);
                         $new_name; // This Is New Name Validate Image
                    } else {
                         $error = 'your File Is to Big ';
                    }
               } else {
                    $error = 'your Have an Error ';
               }
          } else { // if The Image Don't Have Anything In This Array ('png , jpg , jpeg , gif') 
               $error = 'your File  Not Allowed ';
          }
     } else { // If The Name of Image Is Empty 
          $error = 'please Choose Image';
     }



     $file = $_FILES['book_image'];
     $f_name = $file['name'];
     $f_type = $file['type'];
     $f_tmp_name = $file['tmp_name'];
     $f_error = $file['error'];
     $f_size = $file['size'];
     if ($f_name != '') {
          $ext = pathinfo($f_name); // Start Take Extension Image 
          // print_r($ext); Test
          // Start Get Orginal Name About image 
          $original_name = $ext['filename'];
          $original_ext = $ext['extension'];
          $allowed = array("png", "jpg", "jpeg", "gif");
          if (in_array($original_ext, $allowed)) {
               if ($f_error === 0) { // If This image Don;t Have any error 
                    if ($f_size < 22250000) {
                         $image_name = uniqid('', true) . "." . $original_ext;
                         $destnation = "../../Assets/imageUser/" . $image_name;
                         move_uploaded_file($f_tmp_name, $destnation);
                         $image_name; // This Is New Name Validate Image
                    } else {
                         $error = 'your File Is to Big ';
                    }
               } else {
                    $error = 'your Have an Error ';
               }
          } else { // if The Image Don't Have Anything In This Array ('png , jpg , jpeg , gif') 
               $error = 'your File  Not Allowed ';
          }
     } else { // If The Name of Image Is Empty 
          $error = 'please Choose Image';
     }


     $dataArray = [
               'bookName'=>$bookName,
               'bookDetails'=>$book_desc,
               'image_book'=>$image_name,
               'book_audio'=>$new_name,
               'author'=>$auther_book,
     ];
     $bookInsert  = insertQuery('books',$dataArray);
          if($bookInsert){
          session_start();
               sessionFlash('success','book Insert Successfully');
           header('Location:../../pages/adminPage.php');
          }
}