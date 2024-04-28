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
  <link rel="stylesheet" href="../Styles/adminPage.css" />

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
    <?php include '../includes/functions/success.php' ?>
    <!-- Content Page -->
    <main>
      <!-- Header Page -->
      <section class="header_main">
        <div class="admin_details">
          <img class="img_admin" src="../Assets/image admin.jpg" alt="admin" />
          <span class="admin_name"><?php echo $fullName ?></span>
        </div>
        <div class="admin_btns">
          <button type="button" id="add_book_btn" data-toggle="modal" data-target="#book_model">
            أضافة كتاب جديد
          </button>
          <a type="button" href="../includes/functions/loguot.php" class="input">تسجيل الخروج</a>
        </div>
        <!-- Model To Add Book From Admin -->
        <!-- Modal -->
        <div class="modal fade" id="book_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header" style="
                    padding: 0 10px !important;
                    align-items: baseline !important;
                  ">
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 1.8rem !important">
                  تفاصيل الكتاب
                </h5>
                <button type="button" class="close" style="background-color: transparent" data-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true" style="font-size: 3rem">&times;</span>
                </button>
              </div>
              <!-- Details Book -->
              <form action="..\includes\functions\newBook.php" method="post" enctype="multipart/form-data">
                <div class="modal-body" style="display: flex; flex-direction: column; row-gap: 15px">
                  <input type="text" class="input_model" name="book_name" id="add_book_name" placeholder="اسم الكتاب"
                    required />
                  <input type="text" class="input_model" name="book_who" id="add_book_who" placeholder="اسم صاحب الكتاب"
                    required />
                  <textarea cols="5" rows="3" type="text" class="input_model" name="book_disc" id="add_book_disc"
                    style="height: auto !important; padding: 10px 30px" placeholder="اضافة نفاصيل عن الكتاب"
                    required></textarea>
                  <div class="add_image">
                    <label for="add_book_image" class="col-md-4">اضف صورة للكتاب :</label>
                    <input type="file" class="input_model col-md-7" name="book_image" id="add_book_image"
                      accept="image/gif, image/jpeg" required />
                  </div>
                  <div class="add_audio">
                    <label for="add_book_audio" class="col-md-4">اضف ملف صوتى للكتاب :</label>
                    <input type="file" class="input_model col-md-7" name="book_audio" id="add_book_audio"
                      accept="audio/mp3,audio/*;capture=microphone" required />
                  </div>
                </div>

                <!-- /////Details Book -->
                <div class="modal-footer" style="
                      justify-content: center;
                      flex-direction: row-reverse;
                      column-gap: 15px;
                    ">
                  <button type="button" class="input col-md-5" data-dismiss="modal">
                    الغاء
                  </button>
                  <button type="submit" class="col-md-5" id="add_book_new">
                    أضافة الكتاب
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- ////Model To Add Book From Admin -->
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
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">مولانا</span>
                <span class="book_who">:by<strong>إبراهيم عيسى</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">5555</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover 2.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">28 حرف</span>
                <span class="book_who">:by<strong>أحمد حلمي</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">21321</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">قصر الكلام</span>
                <span class="book_who">:by<strong>جلال عام</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">35322</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover 2.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">الفيل الأزرق</span>
                <span class="book_who">:by<strong>أحمد مراد</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">32312</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">تراب الماس</span>
                <span class="book_who">:by<strong>أحمد مراد</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">3121</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover 2.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">عزازيل</span>
                <span class="book_who">:by<strong>يوسف زيدان</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">212135</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">انتحار فاشل</span>
                <span class="book_who">:by<strong>أحمد جمال الدين رمضان</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">8795</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover 2.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">رباعيات صلاح جاهين</span>
                <span class="book_who">:by<strong>صلاح جاهين</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">3562</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">أولاد حارتنا</span>
                <span class="book_who">:by<strong>نجيب محفوظ</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">4963</span>
            </div>
          </a>
          <!-- ################# -->
          <a href="./bookPage.html" target="_blank">
            <div class="book">
              <!-- Book Image -->
              <div class="img_book">
                <img class="book_cover" src="../Assets/book cover.jpg" alt="book" />
              </div>
              <!-- Details Content -->
              <div class="content_book">
                <span class="book_name">العصبي</span>
                <span class="book_who">:by<strong>أحمد جمال الدين رمضان</strong></span>
              </div>
            </div>
            <div class="overlay">
              <i class="fa-solid fa-eye"></i>
              <span class="count_view">45465</span>
            </div>
          </a>
          <!-- ################# -->
        </div>
      </section>
    </main>
  </div>
  <script src="../Scripts/homePage.js"></script>
  <script>
    $(document).ready(function () {
      $("#add_book_new").click(function () {
        var BookName = $("#add_book_name").val();
        var BookWho = $("#add_book_who").val();
        var BookDisc = $("#add_book_disc").val();
        var BookImage = $("#add_book_image")[0].files[0];
        var BookAudio = $("#add_book_audio")[0].files[0];

        var NewBook_Obj = {
          book_name: BookName,
          book_who: BookWho,
          book_disc: BookDisc,
          book_image: BookImage,
          book_audio: BookAudio,
        };
        console.log(NewBook_Obj);

        // $.ajaxSetup({
        //   headers: {
        //     // "CSRF-TOKEN": $("#admin_token").val(),
        //   },
        // });


      });
      $.getJSON({
        type: "GET",
        url: "../includes/functions/userApi.php",
        success: function (data) {
          console.log(data);
          var books = data.bookAdmin;
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
    });
  </script>
</body>

</html>