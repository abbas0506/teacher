// if window scrolled down, make header light;
window.onscroll = function (ev) {
    if (window.scrollY >= 20) {
        if (!$(".navbar").hasClass("light")) $(".navbar").addClass("light");
    } else {
        $(".navbar").removeClass("light");
    }
};
