$(window).scroll(function () {
    // Get the location of review cards and window scrolled location
    if ($(".review-card-before").length) {
        let offsetTop = $('#review-card-container').offset().top,
            windowHeight = $(window).height(),
            scrollTop = $(this).scrollTop();
        // If scrolled height is equal to review cards location add special class to animate and display review cards
        if (scrollTop > (offsetTop-windowHeight+100)) {
            var divs = document.querySelectorAll('.review-card-before');
            for (var i = 0; i < divs.length; i++) {
                divs[i].classList.add('review-card');
            }
        }
    }
});


function rate(rating) {
    // Clear all stars
    for (let index = 1; index <= 5; index++) {
        $("#star" + index).removeClass("fas");
        $("#star" + index).addClass("far");
    }
    // Colour selected stars
    for (let index = 1; index <= rating; index++) {
        $("#star" + index).removeClass("far");
        $("#star" + index).addClass("fas");
    }
    // Addrate value to form hidden input
    $("#ratings").val(rating);
}