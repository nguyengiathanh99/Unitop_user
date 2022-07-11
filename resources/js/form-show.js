$(document).ready(function () {
  $(".nav-login").click(function () {
    $(".hapo-login").css('display', 'block')
    $(".hapo-reg").css('display', 'none')
  });

  function checkErrorsValidate() {
    if ($('p').hasClass('errors-register')) {
      $('#modal-form').modal('toggle');
      openModalReg();
    } else if ($('p').hasClass('errors-login')) {
      $('#modal-form').modal('toggle');
      openModalLogin();
    } else if ($('#message').hasClass('reg-success')) {
      $('#modal-form').modal('toggle');
      openModalLogin();
    } else if ($('#message_log').hasClass('message_login')) {
      $('#modal-form').modal('toggle');
      openModalLogin();
    } else if ($('#error_log').hasClass('error_login')) {
      $('#modal-form').modal('toggle');
      openModalLogin();
    }
  }

  checkErrorsValidate();

  function openModalReg() {
    $(".hapo-login").css('display', 'none')
    $(".hapo-reg").css('display', 'block')
  }

  $(".header-reg").click(function () {
    openModalReg();
  });

  function openModalLogin() {
    $(".hapo-login").css('display', 'block')
    $(".hapo-reg").css('display', 'none')
  }

  $(".header-login").click(function () {
    openModalLogin();
  });
});
