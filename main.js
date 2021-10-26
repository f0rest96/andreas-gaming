
// Sat na dnu
window.onload = startInterval;

function startInterval() {
    setInterval("startTime();", 1000);
}

function startTime() {
    var now = new Date();
    document.getElementById('time').innerHTML = '<i class="bi bi-clock"></i> ' + now.getHours() + "h:" + now.getMinutes() + "m:" + now.getSeconds() + 's';
}
// Modal sa strane open/close
var $btn = document.getElementById('show');
var $c_btn = document.getElementById('close');
var $nav = document.getElementById('nav');

$btn.addEventListener('click', function() {
    $nav.classList.toggle('active');
});
$c_btn.addEventListener('click', function() {
    $nav.classList.toggle('active');
});
// Reveal content
$(document).ready(function() {
    $('.has-animation').each(function(index) {
        $(this).delay($(this).data('delay')).queue(function() {
            $(this).addClass('animate-in');
        });
    });
});