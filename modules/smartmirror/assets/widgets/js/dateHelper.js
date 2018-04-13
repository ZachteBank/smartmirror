function dateToDouble(n) {
    if(n < 10){
        n = "0"+n;
    }
    return n;
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