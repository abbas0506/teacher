$(document).ready(function () {
    var current_slide_index = 0;
    var slides = $.makeArray($(".slide"));
    var dots = $.makeArray($(".dot"));
    //repeat after each 8 seconds
    setInterval(() => {
        current_slide_index = current_slide_index % 4;
        showslide(current_slide_index);
        current_slide_index++;
    }, 8000);

    function showslide(current) {
        console.log(current);
        //show current slide
        $.each(slides, function (x, slide) {
            if (x == current) {
                slide.classList.add("appear");
            } else {
                if (slide.classList.contains("disappear")) {
                    slide.classList.remove("disappear");
                }
                if (slide.classList.contains("appear")) {
                    slide.classList.replace("appear", "disappear");
                }
            }
        });

        $.each(dots, function (i, dot) {
            if (i == current) {
                dot.classList.add("dark");
            } else {
                if (dot.classList.contains("dark")) {
                    dot.classList.remove("dark");
                }
            }
        });
    }
});
