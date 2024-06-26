<?php
session_start();
if (!isset($_SESSION['user'])) {

  header("Location:index.php");
} else {

  $fullName = $_SESSION['user'][0]['first_name'] . ' ' . ' ' . $_SESSION['user'][0]['last_name'];
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="../Assets/logoBook3.png" />
  <link rel="stylesheet" href="../Styles/userPage.css" />

  <!-- Icons Library  -->
  <script src="https://kit.fontawesome.com/bbda8ae88d.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Library  -->
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
  <!-- Jquery Library  -->
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
      <!-- Header Page -->
      <section class="header_main">
        <div class="user_details">
          <img class="img_user" src="../Assets/image user.jpg" alt="user" />
          <span class="user_name"><?php echo $fullName ?></span>
        </div>
        <div class="user_btns">
          <!-- <button
              type="button"
              id="add_book_btn"
              data-toggle="modal"
              data-target="#book_model" 
            >
              أضافة كتاب جديد
            </button> -->
          <a type="button" href="../includes/functions/loguot.php" class="input">تسجيل الخروج</a>
        </div>
      </section>
      <!-- Content Page -->
      <section class="content_main">
        <!-- Search Section -->
        <div class="search-bar">
          <input type="search" class="" id="search_book" placeholder="بحث عن كتاب" />
          <button type="button">
            <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
          </button>
        </div>
        <!-- Books List Section -->
        <div class="books" id="Books_list">
        </div>
      </section>
    </main>
  </div>
  <script src="../Scripts/homePage.js"></script>
  <script>
    $(document).ready(function () {
      $.getJSON({
        type: "GET",
        url: "../includes/functions/userApi.php",
        success: function (data) {
          console.log(data);
          var books = data.usersBooks;
          $(books).each((val, ele) => {
            console.log("val", val)
            console.log("ele", ele)
            var newBook = `<a href="./bookPage.php?id=${ele.id}" target="_blank">
                            <div class="book">
                              <div class="img_book">
                                <img class="book_cover" src="../Assets/imageUser/${ele.image_book}" alt="book" />
                              </div>
                              <div class="content_book">
                                <span class="book_name">${ele.bookName}</span>
                                <span class="book_who">:by<strong>${ele.author}</strong></span>
                              </div>
                            </div>
                            <div class="overlay">
                              <i class="fa-solid fa-eye"></i>
                              <span class="count_view">5555</span>
                            </div>
                          </a>`;
            $(".books").append(newBook);
          })
        },
        error: function (data) {
          alert("fail" + status.code);
        },
      });
    })
  </script>
</body>

</html>