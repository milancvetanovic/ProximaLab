/*
* Handle the success flash messages.
* Hide them after defined interval.
 */
function updateTransition() {
    var el = document.querySelector(".flash");

    if (el){
        el.className = "flash flash-success flash-hide"
        return el;
    } else {
        window.clearInterval(interval_01);
    }
}

var interval_01 = window.setInterval(updateTransition, 1000);