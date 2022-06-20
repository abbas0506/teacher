$(document).ready(function() {
    var index = 0;
    var slides = [];
    var dots = [];
    $(".slider .slides .slide").each(function() {
        slides.push($(this)); //make slides array
    });
    $(".slider .dots .dot").each(function() {
        dots.push($(this)); //make dots array
    });

    runslider()

    function runslider() {
        index = index % dots.length

        $.each(slides, function(x, slide) {
            if (index == x)
            // slide.addClass('active forth animate');
                slide.fadeIn(2000)
            else {
                slide.fadeOut(2000);
                // slide.removeClass('active forth animate');

            }

        });
        $.each(dots, function(i, dot) {
            console.log(index + '-' + i)

            if (index == i)
                dot.addClass('dark')
            else
                dot.removeClass('dark')
        });

        // $(".slider .slides img").each(function() {
        //     $(this).animate({ left: '-50%' }, 'slow');
        //     //console.log(0);
        // });

        index++;

        setTimeout(runslider, 8000)
    }


});