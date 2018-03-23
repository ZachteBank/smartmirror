//http://api.openweathermap.org/data/2.5/weather?q=egchel&appid=a08eb18e2263126de2d45502c41e224b&units=metric

$.getJSON('http://api.openweathermap.org/data/2.5/weather?q=egchel&appid=a08eb18e2263126de2d45502c41e224b&units=metric', function(data) {
    console.log(data);
});