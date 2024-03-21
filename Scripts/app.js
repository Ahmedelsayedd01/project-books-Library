/* Registration Page */
$(document).ready(function () {
  /* check vaild in first name */
  $("#first_name").keyup(() => {
    if ($("#first_name").val() == "") {
      $("#fn_vaild").removeClass("d-none");
    } else {
      $("#fn_vaild").addClass("d-none");
    }
  });

  /* check vaild in last name */
  $("#last_name").keyup(() => {
    if ($("#last_name").val() == "") {
      $("#ln_vaild").removeClass("d-none");
    } else {
      $("#ln_vaild").addClass("d-none");
    }
  });

  /* check vaild in user email */
  $("#user_email").keyup(() => {
    if ($("#user_email").val().includes("@")) {
      $("#email_vaild").addClass("d-none");
    } else {
      $("#email_vaild").removeClass("d-none");
    }
  });

  /* check vaild in user phone */
  $("#user_phone").keyup(() => {
    if ($("#user_phone").val() == "") {
      $("#num_vaild").removeClass("d-none");
    } else {
      $("#num_vaild").addClass("d-none");
    }
  });

  /* check vaild in user password */
  $("#user_password").keyup(() => {
    if ($("#user_password").val().length <= 8) {
      $("#pass_vaild").removeClass("d-none");
    } else {
      $("#pass_vaild").addClass("d-none");
    }
  });

  /* ########### Login Face ########### */
  /* check vaild in user email At LoginFace */
  $("#user_email_login").keyup(() => {
    if ($("#user_email_login").val().includes("@")) {
      $("#email_vaild_login").addClass("d-none");
    } else {
      $("#email_vaild_login").removeClass("d-none");
    }
  });

  /* check vaild in user password At LoginFace*/
  $("#user_password_login").keyup(() => {
    if ($("#user_password_login").val().length <= 8) {
      $("#pass_vaild_login").removeClass("d-none");
    } else {
      $("#pass_vaild_login").addClass("d-none");
    }
  });

  /* Show what's but in password signUp input (text) */
  $("#show_pass_sign").click(() => {
    $("#show_pass_sign").addClass("d-none");
    $("#user_password").attr("type", "text");
    $("#hide_pass_sign").removeClass("d-none");
  });

  /* hide what's but in password signUp input (text) */
  $("#hide_pass_sign").click(() => {
    $("#show_pass_sign").removeClass("d-none");
    $("#user_password").attr("type", "password");
    $("#hide_pass_sign").addClass("d-none");
  });

  /* Show what's but in password login input (text) */
  $("#show_pass_login").click(() => {
    $("#show_pass_login").addClass("d-none");
    $("#user_password_login").attr("type", "text");
    $("#hide_pass_login").removeClass("d-none");
  });

  /* hide what's but in password login input (text) */
  $("#hide_pass_login").click(() => {
    $("#show_pass_login").removeClass("d-none");
    $("#user_password_login").attr("type", "password");
    $("#hide_pass_login").addClass("d-none");
  });

  /* ########### SignUp Face ########### */
  /* Submit user from SignIn */
  $("#signUP_btn").click(function (e) {
    e.preventDefault();
    /* Form SingUp */
    var first_Name = $("#first_name").val();
    var last_Name = $("#last_name").val();
    var userEmail = $("#user_email").val();
    var userPhone = $("#user_phone").val();
    var userPassword = $("#user_password").val();

    /* Firs Name Vaildation*/
    if (first_Name == "") {
      $("#fn_vaild").removeClass("d-none");
    } else {
      $("#fn_vaild").addClass("d-none");
    }
    /* Last Name Vaildation*/
    if (last_Name == "") {
      $("#ln_vaild").removeClass("d-none");
    } else {
      $("#ln_vaild").addClass("d-none");
    }
    /* User Email Vaildation*/
    if ($("#user_email").val().includes("@")) {
      $("#email_vaild").addClass("d-none");
    } else {
      $("#email_vaild").removeClass("d-none");
    }
    /* User Phone Vaildation*/
    if (userPhone == "") {
      $("#num_vaild").removeClass("d-none");
    } else {
      $("#num_vaild").addClass("d-none");
    }
    /* User Password Vaildation*/
    if (userPassword == "" || userPassword.length <= 8) {
      $("#pass_vaild").removeClass("d-none");
    } else {
      $("#pass_vaild").addClass("d-none");
    }
  });

  /* Toggle to Login Face */
  $("#login_txBtn").click(() => {
    $("#signFace_form").addClass("d-none");
    $("#loginFace_form").removeClass("d-none");
  });

  /* Toggle to signUp Face */
  $("#signUp_txBtn").click(() => {
    $("#loginFace_form").addClass("d-none");
    $("#signFace_form").removeClass("d-none");
  });

  /* ########### Login Face ########### */
  /* Submit user from Login */
  $("#login_btn").click((e) => {
    e.preventDefault();
    /* User Email Vaildation in Login*/
    if ($("#user_email_login").val().includes("@")) {
      $("#email_vaild_login").addClass("d-none");
    } else {
      $("#email_vaild_login").removeClass("d-none");
    }
    /* User Password Vaildation in Login*/
    if (
      $("#user_password_login").val() == "" ||
      $("#user_password_login").val().length <= 8
    ) {
      $("#pass_vaild_login").removeClass("d-none");
    } else {
      $("#pass_vaild_login").addClass("d-none");
    }
  });
});
/* ///Registration Page */
