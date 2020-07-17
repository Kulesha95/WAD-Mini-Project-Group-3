
$(window).scroll(function () {
    if ($(".review-card-before").length) {
        let offsetTop = $('#review-card-container').offset().top,
            windowHeight = $(window).height(),
            scrollTop = $(this).scrollTop();
        if (scrollTop > (offsetTop-windowHeight+100)) {
            var divs = document.querySelectorAll('.review-card-before');
            for (var i = 0; i < divs.length; i++) {
                divs[i].classList.add('review-card');
            }
        }
    }
});


function rate(rating) {
    for (let index = 1; index <= 5; index++) {
        $("#star" + index).removeClass("fas");
        $("#star" + index).addClass("far");
    }
    for (let index = 1; index <= rating; index++) {
        $("#star" + index).removeClass("far");
        $("#star" + index).addClass("fas");
    }
    $("#ratings").val(rating);
}
