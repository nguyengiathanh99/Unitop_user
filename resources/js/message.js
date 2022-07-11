$(document).ready(function () {
  $(".logo-message").click(function () {
    $(".content-message").toggle();
  });

  $(".message-close").click(function () {
    $(".content-message").css('display', 'none');
  });
});
