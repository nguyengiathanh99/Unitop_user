$(document).ready(function () {
    $(".note").click(function () {
        $(".add-note").css('display', 'block');
    });
    $(".btn-note").click(function () {
        $(".add-note").css('display', 'none');
    })
});
