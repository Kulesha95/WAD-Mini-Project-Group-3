// jQuery(document).ready(function () {
//     var height = ($(window).height()) - ($("#topnav").height() + 25);
//     $('#iframeDisplay').css('height', height);
// });
// $(window).on('resize', function () {
//     var height = ($(window).height()) - ($("#topnav").height() + 25);
//     $('#iframeDisplay').css('height', height);
// });

$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        if ($('#sidebar').hasClass('active')) {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        } else {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        }
    });

    clockUpdate();
    setInterval(clockUpdate, 1000);
});
$('#iframeDisplay').on('load', function () {
    $('#sidebar').removeClass('active');
    $('.overlay').removeClass('active');
});

function clockUpdate() {
    let o = new Intl.DateTimeFormat("en" , {
        timeStyle: "medium",
        dateStyle: "full"
      });
    var options = { hour12: true, hour: '2-digit', minute: '2-digit'  };
    $('#date').html(o.format(Date.now()));
}
