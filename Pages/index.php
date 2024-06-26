<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="../Assets/logoBook3.png" />
    <link rel="stylesheet" href="../Styles/index.css" />

    <!-- Icons Liberary -->
    <script src="https://kit.fontawesome.com/bbda8ae88d.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Liberary -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Jquery Liberary -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>library books</title>
</head>

<body>
    <div class="containerr">
        <!-- Content Page -->
        <main class="d-flex">
            <div class="content_side">
                <div class="wrapper_contentSide">
                    <!-- SignUP Form -->
                    <form action="..\includes\functions\regestration.php" enctype="multipart/form-data" id="signFace_form" method="POST">
                        <div class="signFace">
                            <!-- User First Name && Last Name -->
                            <div class="userName">
                                <div class="FirstName">
                                    <input type="text" name="first_name" class="input" id="first_name" placeholder="الاسم الاول" />
                                    <span class="d-none" id="fn_vaild">ادخل الاسم الاول</span>
                                </div>
                                <div class="LastName">
                                    <input type="text" name="last_name" class="input" id="last_name" placeholder="اسم العائلة" />
                                    <span class="d-none" id="ln_vaild">ادخل اسم العائلة</span>
                                </div>
                            </div>

                            <!-- User Email -->
                            <div class="userEmail">
                                <input type="email" name="user_email" class="input" id="user_email" placeholder="عنوان البريد الالكترونى" />
                                <span class="d-none" id="email_vaild">ادخل علامة "@" بعد اسم البريد الالكترونى</span>
                            </div>

                            <!-- User Phone -->
                            <div class="userPhone">
                                <input type="text" name="user_phone" class="input" id="user_phone" maxlength="12" oninvalid="this.setCustomValidity('ادخل رقم الهاتف')" placeholder="رقم الهاتف" />
                                <span class="d-none" id="num_vaild">ادخل رقم الهاتف</span>
                            </div>

                            <!-- User Password -->
                            <div class="userPassword">
                                <input type="password" name="user_password" class="input" id="user_password" placeholder="كلمة السر" />
                                <span class="d-none" id="pass_vaild">ادخل كلمة السر التى تتكون من اكتر من 8 ارقام</span>
                                <!-- Icon To Show Password -->
                                <i class="fa-regular fa-eye" id="show_pass_sign" aria-hidden="true"></i>
                                <i class="fa-regular fa-eye-slash d-none" id="hide_pass_sign" aria-hidden="true"></i>
                                <!-- ////Icon To Show Password -->
                            </div>
                            <!-- Footer SignUp Form -->
                            <div class="footer_singUP">
                                <button type="submit" id="signUP_btn">انشاء الحساب</button>
                                <span>هل لديك حساب بالفعل ؟
                                    <span id="login_txBtn">تسجيل الدخول</span></span>
                            </div>
                        </div>
                    </form>
                    <!-- Login Form -->
                    <form action="..\includes\functions\login.php" class="d-none" id="loginFace_form" method="POST">
                        <div class="loginFace">
                            <!-- User Email -->
                            <div class="userEmailLogin">
                                <input type="email" name="user_email_login" class="input" id="user_email_login" placeholder="عنوان البريد الالكترونى" />
                                <span class="d-none" id="email_vaild_login">ادخل علامة "@" بعد اسم البريد
                                    الالكترونى</span>
                                <span id="email_vaild_login"><?php if (isset($error['faild'])) {
                                                                    echo $error['faild'];
                                                                } ?>
                                </span>
                            </div>
                            <!-- User Password -->
                            <div class="userPasswordLogin">
                                <input type="password" name="password" class="input" id="user_password_login" minlength="8" placeholder="كلمة السر" />
                                <span class="d-none" id="pass_vaild_login">ادخل كلمة السر التى تتكون من اكتر من 8
                                    ارقام</span>
                                <!-- Icon To Show Password -->
                                <i class="fa-regular fa-eye" id="show_pass_login" aria-hidden="true"></i>
                                <i class="fa-regular fa-eye-slash d-none" id="hide_pass_login" aria-hidden="true"></i>
                                <!-- ////Icon To Show Password -->
                            </div>
                            <!-- Footer Login Form -->
                            <div class="footer_login">
                                <button type="submit" id="login_btn">تسجيل الدخول</button>
                                <span type='submit'>انشاء حساب جديد الان .<span id="signUp_txBtn">
                                        سجل الان</span></span>
                            </div>
                        </div>
                    </form>
                    <!-- Footer Form -->
                    <button></button>
                    <!-- //////Footer Form -->
                </div>
            </div>
            <div class="image_side"></div>
        </main>
    </div>
    <script src="../Scripts/app.js"></script>
</body>

</html>