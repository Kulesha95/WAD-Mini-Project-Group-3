
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


function rate(rating){
    for (let index = 1; index <= 5; index++) {
        $("#star"+index).removeClass("fas");        
        $("#star"+index).addClass("far");        
    }
    for (let index = 1; index <= rating; index++) {
        $("#star"+index).removeClass("far");        
        $("#star"+index).addClass("fas");        
    }
    $("#ratings").val(rating);
}
