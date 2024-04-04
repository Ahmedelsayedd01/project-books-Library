<?php 

if(isset($_SESSION['success'])){
     $message = $_SESSION['success'];
      echo
      "<div class='alert alert-success' role='alert'>
        $message
      </div>";
        unset($_SESSION['success']);
    };