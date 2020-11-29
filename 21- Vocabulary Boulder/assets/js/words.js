$(document).ready(function () {
  $(".menu-item").on("click", function () {
    $(".helement").hide();
    var target = "#" + $(this).data("target");
    $(target).show();
  });
});
