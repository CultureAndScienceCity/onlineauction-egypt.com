//angle_up scroll
$(window).scroll(function () {
    let windowScroll = $(window).scrollTop();
    if (windowScroll > 400) {
        $("#angle").fadeIn(500);
    }
    else {
        $("#angle").fadeOut(500);
    }
});
$(".angle-up").click(function () {
    $("html,body").animate({ scrollTop: 0 }, 1000);
});


//navbar links
$(".navbar a[href^= '#']").click(function () {
    a = $(this).attr("href");
    offset = $(a).offset().top;
    $("html,body").animate({ scrollTop: offset }, 1000);
});

