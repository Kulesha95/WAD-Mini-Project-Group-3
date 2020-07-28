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
    $(document).on('click', function (event) {
        console.log(event.target.classList.contains("has-tree"));
        if ($('#sidebar').hasClass('active') && event.target.id!="sidebarCollapse" && event.target.id!="sidebarCollapseIcon" && (!event.target.classList.contains("has-tree"))) {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');    
        }
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
    var date= new Date();
    const monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    $('#date').html(date.getFullYear()+"-"+monthNames[date.getMonth()]+"-"+date.getDate());
    $('#time').html(date.getHours()+":"+date.getMinutes()+":"+date.getSeconds());
}

jQuery(document).ready(function() {
    var height = ($(window).height())-($("#topnav").height()+30);
    $('#iframeDisplay').css('height', height);
 });
 $(window).on('resize', function(){
   var height = ($(window).height())-($("#topnav").height()+30);
    $('#iframeDisplay').css('height', height); 
 });