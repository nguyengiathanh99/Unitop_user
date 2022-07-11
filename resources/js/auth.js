$(document).ready(function () {
  if ($('input').hasClass('form-reg')) {
    $('#modal-form').modal();
    $('.hapo-login').css('display', 'none')
  }
  if ($('input').hasClass('form-login')) {
    $('#modal-form').modal();
    $('.hapo-reg').css('display', 'none')
  }
  if ($('#message').hasClass('alert-success')) {
    $('#modal-form').modal();
    $('.hapo-reg').css('display', 'none')
  }
  if ($('#error').hasClass('login-error')) {
    $('#modal-form').modal();
    $('.hapo-reg').css('display', 'none')
  }
});
