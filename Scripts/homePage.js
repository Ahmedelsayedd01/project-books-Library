$(document).ready(function () {
  /* Search about book by name and persone write it */
  $("#search_book").on("keyup", function () {
    var value = $(this).val().toLowerCase();

    $("#Books_list a").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
