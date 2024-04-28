<?php

session_start();
if (!isset($_SESSION['user'])) {

header("Location:index.php");
} else {
  include '../includes/functions/functions.php';
  include '../includes/functions/bookFunction.php';
    
}


?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="../Assets/logoBook3.png" />
  <link rel="stylesheet" href="../Styles/bookPage.css" />

  <!-- Icons Liberary -->
  <script src="https://kit.fontawesome.com/bbda8ae88d.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Liberary -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <!-- Jquery Liberary -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>library books</title>
</head>

<body>
  <div class="containerr">
    <nav>
      <img class="logo" src="../Assets/logoBook3.png" alt="Books Library " />
      <span class="name_site">مكتبة الكتب</span>
    </nav>
    <!-- Content Page -->
    <main>
      <div class="main_wrapper">
        <div class="img_side">
          <img class="book_img" src="../Assets/imageUser/" alt="Book" />
        </div>
        <div class="content_side">
          <div class="book_name">
            <strong>اسم الكتاب:</strong> <?php echo $bookAdmin['bookName']?>.
          </div>
          <div class="book_who"><strong>الكاتب:</strong> <?php echo $bookAdmin['author']?> .</div>
          <p class="book_disc">
            <strong>رواية الكتاب:</strong>
            <?php echo $bookAdmin['bookDetails']?>
          </p>
          <div class="book_audio">
            <audio controls="crossorigin"="">
              <source src="../Assets/audioUser/<?php echo $bookAdmin['book_audio']?>" type="audio/mp3" />
            </audio>
          </div>
          <div class="overlay">
            <strong>عدد المشاهدات: </strong>
            <div class="count">
              <?php echo $countBook ?></span>
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script src="../Scripts/bookPage.js"></script>
</body>

</html>