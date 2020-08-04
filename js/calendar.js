var bookedDates;
var nextYear;
var previousYear;
var nextMonth;
var previousMonth;
const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];
$(document).ready(function () {
    let date = new Date();
    generateCalender(date.getFullYear(), date.getMonth() + 1);
});
function nextMonthCalender() {
    generateCalender(nextYear, nextMonth);
}

function previousMonthCalender() {
    generateCalender(previousYear, previousMonth);
}

function generateCalender(year, month) {

    renderData(year,month);
    let roomId = $("#room_id").val();
    $.get("admin/Booking/getBookingDates.php?date=" + year + "-" + ("0" + month).slice(-2) + "&room=" + roomId, function (data) {
        bookedDates=[];
        bookedDates = JSON.parse(data);
        if (bookedDates.length>0) {
            renderData(year,month);            
        }
    });
    
}

function renderData(year,month){
    let date = new Date(year, month - 1, 1);
    $("#dates").html("");
    $("#year").html(year);
    $("#month").html(monthNames[date.getMonth()]);
    let dateNext = new Date(date);
    let datePrevious = new Date(date);
    for (let week = 0; week < 5; week++) {
        let markup = "<tr>";
        for (let day = 0; day < 7; day++) {
            if ((date.getMonth() + 1) != month) {
                break;
            }
            if (day == date.getDay()) {
                markup += "<td class=\"";
                markup += "\"><label class=\"";
                if (date.getDay() == 0) {
                    markup += "date-sunday";
                } else if (date.getDay() == 6) {
                    markup += "date-saturday";
                } else {
                    markup += "date-weekday";
                }
                if (jQuery.inArray($.datepicker.formatDate('yy-mm-dd', date), bookedDates) >= 0) {
                    markup += " bg-booked";
                }
                markup += "\">";
                markup += date.getDate() + "</label></td>";
                date.setDate(date.getDate() + 1);
            } else {
                markup += "<td></td>";
            }
        }
        markup += "</tr>";
        $("#dates").append(markup);
    }
    dateNext.setDate(10);
    datePrevious.setDate(10);

    dateNext.setDate(dateNext.getDate() + 30);
    datePrevious.setDate(datePrevious.getDate() - 30);

    nextYear = dateNext.getFullYear();
    previousYear = datePrevious.getFullYear();
    nextMonth = dateNext.getMonth() + 1;
    previousMonth = datePrevious.getMonth() + 1;
}