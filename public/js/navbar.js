// if window scrolled down, make header light;
window.onscroll = function(ev) {
    if ((window.scrollY) >= 20) {
        if (!$('.navbar').hasClass('light'))
            $('.navbar').addClass('light');

    } else {
        $('.navbar').removeClass('light');
    }
};

// show / hide menu
function toggleMenu() {
    $('.nav-links').toggleClass('slide-left');
}

function hidemenu() {
    $('.nav-links').removeClass('slide-left');
}