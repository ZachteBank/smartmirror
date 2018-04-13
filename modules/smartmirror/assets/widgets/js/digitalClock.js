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

function getDay(number){
    switch (number){
        case 1:
            return "maandag";
        case 2:
            return "dinsdag";
        case 3:
            return "woensdag";
        case 4:
            return "donderdag";
        case 5:
            return "vrijdag";
        case 6:
            return "zaterdag";
        case 7:
            return "zondag";
    }
}

function getMonth(number) {
    switch (number) {
        case 1:
            return "januari";
        case 2:
            return "februari";
        case 3:
            return "maart";
        case 4:
            return "april";
        case 5:
            return "mei";
        case 6:
            return "juni";
        case 7:
            return "juli";
        case 8:
            return "augustus";
        case 9:
            return "september";
        case 10:
            return "oktober";
        case 11:
            return "november";
        case 12:
            return "december";
    }
}