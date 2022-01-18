$(function() {
    // tooltip initialize
    (function() {
        $('[data-toggle="tooltip"]').tooltip();
    })();

    // left menu expand
    (function() {
        $('.app-left-menu .st-logo .st-round-btn').on("click", function(ev) {
            ev.preventDefault()        
            $('.app-left-menu').toggleClass("expanded shrunk") // toggle left bar
        })
    })();

    // left menu links expand
    (function() {
        $('.alm_nav-item > .alm_nav-link').on("click", function(ev) {
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

    // PAGE - CATEGORIES: expand left menu item's sub-menu
    (function() {
        $('.category-left-bar .frac .expand-shrink-icon').on("click", function(ev) {
            ev.preventDefault()
            const parentElem = $(this).closest(".frac")
            $("> .icon", this).toggleClass("feather-plus feather-minus") // toggle menu
            parentElem.toggleClass("expanded") // toggle active class to parent
            parentElem.find(">.multilevel-container").slideToggle(300) // toggle the multilevel menu
        })
    })();

    // COMMON: DROPDOWN MENU
    (function() {
        // openning the click
        $('.app-dropdown-container > .dropdown-link').on("click", function(ev) {
            ev.preventDefault()
            $(".app-dropdown-container > .dropdown-content").hide(100) // hiding other dropdown
            $(this).next(".dropdown-content").fadeToggle(200) // toggle dropdown menu
        })

        // closing on document click
        $(document).on("click", function() {
            if(!$(".app-dropdown-container:hover").length) {
                $(".app-dropdown-container > .dropdown-content").hide(100)
            }
        })
    })();
    // COMMON - active and inactive input
    (function() {
        $('.active-inactive-toggle').each(function() {
            if($("input", this).is(":checked")) { // if checked
                $(this).find(".text.inactive").hide()
                $(this).find(".text.active").show()
            } else {
                $(this).find(".text.active").hide()
                $(this).find(".text.inactive").show()
            }
        })
        // openning on change
        $('.active-inactive-toggle input').on("change", function() {
            if($(this).is(":checked")) { // if checked
                $(this).closest("label").find(".text.inactive").hide()
                $(this).closest("label").find(".text.active").show()
            } else {
                $(this).closest("label").find(".text.active").hide()
                $(this).closest("label").find(".text.inactive").show()
            }
        })
    })();

    // PAGE - SALES ORDER: add note
    (function() {
        // openning the click
        $('.sales-order-add-note-btn').on("click", function(ev) {
            ev.preventDefault()

            $(this).removeClass("d-flex").addClass("d-none") // hiding link
            $(this).next(".form-container").show() // showing form
            $(this).next(".form-container").find('textarea').focus() // focus textarea
        })

        // closing the click
        $('.sales-order-cancel-note-btn').on("click", function(ev) {
            ev.preventDefault()

            $(".sales-order-add-note-btn").removeClass("d-none").addClass("d-flex") // hiding link
            $(this).closest(".form-container").hide() // hiding form
        })
    })();
    // PAGE - SALES ORDER: with tracking number
    (function() {
        // openning on change
        $('.add-tracking-number-form #withTracking').on("change", function() {
            if($(this).is(":checked")) { // if checked
                $(this).closest("form").find('.tracking-input-container').fadeIn(200) 
            }
        })

        // closing on change
        $('.add-tracking-number-form #withoutTracking').on("change", function() {
            if($(this).is(":checked")) { // if checked
                $(this).closest("form").find('.tracking-input-container').hide() 
            }
        })
    })();

    // PAGE - products: select category
    (function() {
        // openning on click
        $('.show-product-categories').on("click", function(ev) {
            ev.preventDefault()

            $(this).parent().hide() // hiding element
            $(this).closest(".page-border-box2").find(".normal-head").hide() // changing heading
            $(this).closest(".page-border-box2").find(".select-head").show() // changing heading
            $(this).closest(".prods-cat-content").find(".prods-cat-content-main").fadeIn(200) // showing menu
        })
        // closing on document click
        $(document).on("click", function() {
            if(!$(".prods-cat-content:hover").length) {
                $(".prods-cat-content .prods-cat-content-main").hide() // hiding menu
                $(".prods-cat-content .btns").show() // showing element
                $(".page-border-box2 .normal-head").show() // changing heading
                $(".page-border-box2 .select-head").hide() // changing heading
            }
        })
        // closing on btn click
        $(".hide-product-categories").on("click", function(ev) {
            ev.preventDefault()
            
            $(".prods-cat-content .prods-cat-content-main").hide() // hiding menu
            $(".prods-cat-content .btns").show() // showing element
            $(".page-border-box2 .normal-head").show() // changing heading
            $(".page-border-box2 .select-head").hide() // changing heading
        })
    })();
    // PAGE - products: purchasability
    (function() {
        function showingOptions() {  // hidden data visibility
            // closing options by default
            $(".purchasability-wrapper .purchasability-option-can-be-purchased").addClass('d-none')
            $(".purchasability-wrapper .purchasability-option-coming-soon").removeClass('d-flex').addClass("d-none")
            
            $(".purchasability-message-form").addClass("d-none")

            if($(".purchasability-wrapper #purchasability-option-1").is(":checked")) { // option 1 checked
            }

            if($(".purchasability-wrapper #purchasability-option-2").is(":checked")) { // option 2 checked
                $(".purchasability-wrapper .purchasability-option-can-be-purchased").removeClass('d-none')
            }
            
            if($(".purchasability-wrapper #purchasability-option-3").is(":checked")) { // option 3 checked
                $(".purchasability-wrapper .purchasability-option-coming-soon").removeClass('d-none').addClass("d-flex")
            }
        }

        function toggleMessageForm() { // message form visibility
            if($("#purchasability-toggle-message").is(":checked")) {
                $(".purchasability-message-form").removeClass("d-none")
            } else {
                $(".purchasability-message-form").addClass("d-none")
            }
        }

        showingOptions() // on load

        // showing on change
        $('.purchasability-wrapper .st-custom-radio > input').on("change", function() {
            showingOptions()
        })

        showingOptions() // on load
        // showing on change
        $('#purchasability-toggle-message').on("change", function() {
            toggleMessageForm()
        })
    })();
    // PAGE - products: variation options
    (function() {
        // changing on load
        $('.variation-options-view .content-item:first-child, .variation-options-view .vov-links-container > a:first-child').addClass("active")

        // change on click
        $('.variation-options-view .vov-links-container > a').on("click", function(ev) {
            ev.preventDefault()
            const dataId = $(this).attr('data-id')

            // removing class
            $('.variation-options-view .content-item, .variation-options-view .vov-links-container > a').removeClass("active")
            // adding active class
            $(this).addClass('active')
            $('.variation-options-view .content-item[data-id=' + dataId + ']').addClass("active")
        })
    })();

    // PAGE - google shipping: category dropdown
    (function() {
        // change on click
        $('.google-shopping-categories-listing .head input').on("focus", function(ev) {
            $(this).closest(".category-listing-main").find(">.head").addClass("active")
            $(this).closest(".category-listing-main").addClass("active").find(">.dropdown-content").fadeIn(300)
            
        })

        // closing on document click
        $(document).on("click", function() {
            if(!$(".google-shopping-categories-listing:hover").length) {
                $(".google-shopping-categories-listing > .head").removeClass("active")
                $(".google-shopping-categories-listing").removeClass("active").find(">.dropdown-content").hide()
            }
        })
    })();
    // PAGE - google shipping: category sub menu toggle
    (function() {
        // change on click
        $('.google-shopping-categories-listing .dropdown-content .expand-sub-category').on("click", function(ev) {
            ev.preventDefault()
                
            $(".icon", this).toggleClass("feather-chevron-right feather-chevron-down") // icon
            $(this).closest("label").next(".sub-menu").slideToggle(200) // dropdown
            
        })

    })();


});