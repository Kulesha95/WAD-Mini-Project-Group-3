
$(window).scroll(function() {
    var hT = $('#review-card-container').offset().top,
        hH = $('#review-card-container').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    if (wS > (hT + hH - wH)) {
        var divs = document.querySelectorAll('.card');
        for (var i = 0; i < divs.length; i++) {
            divs[i].classList.add('review-card');
        }
    }
});
