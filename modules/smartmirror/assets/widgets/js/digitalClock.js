var timeSecond = 0;
var timestamp = 0;
$(document).ready(function(){
    timestamp = document.getElementById("digitalScript").getAttribute("data-timestamp");
    startTime();
    setDate();
});

function startTime() {
    var today = new Date(timestamp*1000);
    today.setHours((today.getUTCHours()) + 2);
    today.setSeconds(today.getSeconds()+timeSecond);
    timeSecond = timeSecond + 10;

    console.log(today);
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
    document.getElementById('timeDigital').innerHTML =
        h + ":" + m;
    setTimeout(startTime, 10000);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function setDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var day = today.getDay();
    
    var date = getDay(day) + " "  + dd + " " + getMonth(mm);

    console.log(mm);

    document.getElementById('dateDigital').innerHTML =
        date;
}

