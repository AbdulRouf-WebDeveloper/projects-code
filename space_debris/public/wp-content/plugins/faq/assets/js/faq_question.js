/*

FAQ Question JS

*/

jQuery(document).ready(function ($) {
  $(".top").click(function (e) {
    var answer = $(this).next(".bottom");

    if (!$(answer).is(":visible")) {
      $(this).parent().addClass("open");
    } else {
      $(this).parent().removeClass("open");
    }
    $(answer).slideToggle("slow");
  });
});
