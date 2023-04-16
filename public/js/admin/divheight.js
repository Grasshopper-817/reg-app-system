
function dashboard_upperHeight() {
    var cal_box_height = document.getElementById('cal-box').offsetHeight;
    var track_box = document.getElementById('track-boxes');
    track_box.style.height = cal_box_height + 'px';
    console.log(cal_box_height);
}

window.addEventListener("resize", function() {
    dashboard_upperHeight();
});

dashboard_upperHeight();