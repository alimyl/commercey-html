// (function() {

// })();

$(function() {
    // tooltip
    (function() {
        $('[data-toggle="tooltip"]').tooltip();
    })();

    // left menu links expand
    (function() {
        $('.alm_nav-item > .alm_nav-link').click(function(ev) {
            ev.preventDefault()
            const topOffset = $(this).offset().top
            if(!$(this).hasClass("active")) { // if element is active
                $('.app-left-menu > .inner').animate({ // scrolling to element
                    scrollTop: topOffset
                }, 200)
            }
            $(this).toggleClass("active") // active class
            $(this).next().slideToggle(300) // slide
            $(".rt > .icon", this).toggleClass("feather-chevron-right feather-chevron-down") // toggle icon            
        })
    })();

    // left menu expand
    (function() {
        $('.app-left-menu .st-logo .st-round-btn').click(function(ev) {
            ev.preventDefault()        
            $('.app-left-menu').toggleClass("expanded shrunk") // toggle left bar
        })
    })();


});