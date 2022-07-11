$(document).ready(function () {
    $(".ic-heart").on("click", function () {
        var newsid = $(this).attr("data-id");
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var heart = $(this);
        $.ajax({
        url: "{{ route('heart/index') }}",
        type: "get",
        data: {
            _csrf_frontend: csrfToken,
            id: newsid,
            // giatri: giatri,
        },
        error: function (xhr, status, error) {
            console.log(error);
            console.log(xhr.responseText);
        },
        success: function (res) {
            // console.log(res);
            console.log($(this));
            var data = JSON.parse(res);
            if (data.stt == "heart") {
            heart.find("svg").addClass("active");
            heart.find(".count-heart").text(data.heart);
            }
            if (data.stt == "unheart") {
            heart.find("svg").removeClass("active");
            heart.find(".count-heart").text(data.heart);
            }
        },
        });
    });
});
