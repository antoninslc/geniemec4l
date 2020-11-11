jQuery(function($){

    var launch = new Date(2021, 03, 26, 8, 00, 00)
    var days = $('#nd');
    var ndays = $('#un');
    var hours = $('#nh');
    var nhours = $('#uh');
    var minutes = $('#nm');
    var nminutes = $('#um');
    var seconds = $('#ns');
    var nseconds = $('#us');



    setDate();
    function setDate(){
        var now = new Date();
        var s = ((launch.getTime() - now.getTime())/1000) - now.getTimezoneOffset()*60;
        var d = Math.floor(s/86400);
        days.html('<strong>'+d+'</strong>');
        ndays.html('Jour'+(d>1?'s':''));
        s -= d*86400;

        var h = Math.floor(s/3600);
        hours.html('<strong>'+h+'</strong>') 
        nhours.html('Heure'+(h>1?'s':''));
        s -= h*3600;

        var m = Math.floor(s/60);
        minutes.html('<strong>'+m+'</strong>')
        nminutes.html('Minute'+(m>1?'s':''));
        s -= m*60;

        s = Math.floor(s);
        seconds.html('<strong>'+s+'</strong>')
        nseconds.html('Seconde'+(s>1?'s':''));

        setTimeout(setDate,1000);
        
    }

 });