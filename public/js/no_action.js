
$(document).ready(function() {

    $('html').mousemove(function(event) {
        resetGlobal();
    });

    $('body').hover(function() {
        $("h2").text('Dont bang the drum');
    });

});
var global = 10;




function noMovement() {
    if (global == 0) {
        //alert('no movement');  
        $("h2").text('sound the drum');
        resetGlobal();
    } else {
        global--;
    }
}

function resetGlobal() {
    global = 10;
}



setInterval(function() {
    noMovement()
}, 1000);
