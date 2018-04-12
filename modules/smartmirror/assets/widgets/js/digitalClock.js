var timeSecond = 0;
var timestamp = 0;
$(document).ready(function(){
    timestamp = document.getElementById("digitalScript").getAttribute("data-timestamp");
    startTime();
});

function startTime() {
    timeSecond++;
    var today = new Date(timestamp*1000);
    today.setSeconds(today.getSeconds()+timeSecond);
    console.log(today);
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
    document.getElementById('timeDigital').innerHTML =
        h + ":" + m;
    var t = setTimeout(startTime, 10000);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}