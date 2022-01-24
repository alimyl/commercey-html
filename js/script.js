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

        // tabs on page load
        const windowHash = window.location.hash
        if(windowHash) {
            $('.app-products__create-details .st-tabs-links .stl-link[href="' + windowHash + '"]').addClass("active").siblings().removeClass("active") // active
            $('.main-content[data-id="' + windowHash + '"]').show().siblings().hide() // visibility
        }
        // tabs on click
        $('.app-products__create-details .st-tabs-links .stl-link').on("click", function(ev) {
            ev.preventDefault()

            const moveTo = $(this).attr("href")
            if(moveTo) {
                $('.app-products__create-details .st-tabs-links .stl-link[href="' + moveTo + '"]').addClass("active").siblings().removeClass("active") // active
                $('.main-content[data-id="' + moveTo + '"]').show().siblings().hide() // visibility
                window.location.hash = moveTo
            }
        });
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

    // PAGE - shippings
    (function() {
        // change on click | add description, limit availability, shipping region
        $('.shipping-setup-add-description .top-sec .head, .shipping-setup-limit-availability .top-sec .head, .shipping-setup-shipping-region .top-sec .head').on("click", function(ev) {
            ev.preventDefault()

            $("i", this).toggleClass("feather-chevron-right feather-chevron-down") // icon
            $(this).closest(".frac-inner").find('.form-container').slideToggle(200) // form data
        })

        // change on change | estimated delivery date
        $('.shipping-setup-estimated-delivery-date #shouldDeliveryDate').on("change", function(ev) {
            ev.preventDefault()
            if($(this).is(":checked")) {
                $(this).closest(".frac-inner").find('.form-container').slideDown(200) // form data
            } else {
                $(this).closest(".frac-inner").find('.form-container').slideUp(200) // form data
            }
        })

        // change on change | order preparation time
        $('.shipping-setup-order-preparation-time #order_preparation_time').on("change", function(ev) {
            ev.preventDefault()
            const val = $(this).val()

            if(val === "4") {
                $(this).closest(".form-container").find('.shipping-setup-custom-time').slideDown(200) // form data
            } else {
                $(this).closest(".form-container").find('.shipping-setup-custom-time').slideUp(200) // form data
            }
        })

        // change on change | order packing days
        $('.shipping-setup-order-packing-days #days_when_you_pack_orders_').on("change", function(ev) {
            ev.preventDefault()
            const val = $(this).val()

            if(val === "4") {
                $(this).closest(".form-container").find('.shipping-setup-custom-days').slideDown(200) // form data
            } else {
                $(this).closest(".form-container").find('.shipping-setup-custom-days').slideUp(200) // form data
            }
        })

        // change on change | shipping region
        $('.shipping-setup-shipping-region [name=shipping_region]').on("change", function(ev) {
            ev.preventDefault()

            if($(this).closest(".shipping-setup-shipping-region").find("#shipping_region_advanced-settings").is(":checked")) {
                $(this).closest(".form-container").find('.shipping-setup-select-country').slideDown(200) // form data
            } else {
                $(this).closest(".form-container").find('.shipping-setup-select-country').slideUp(200) // form data
            }
        })

        // change on change | shipping rates
        $('.shipping-setup-shipping-rates #rate_based_on').on("change", function() {
            const val = $(this).val()
            if(val === "full") {
                $(".shipping-setup-shipping-rates .form-container .other-form-items").show() // showing
            } else {
                $(".shipping-setup-shipping-rates .form-container .other-form-items").hide() // hiding
            }
        })
        // change on change | shipping rates
        $('.shipping-setup-shipping-rates #table_based_on').on("change", function() {
            const val = $(this).val()

            if(val === "weight") {
                $(".shipping-setup-shipping-rates .weight-fields").removeClass("d-none").addClass("d-flex") // showing
                $(".shipping-setup-shipping-rates .subtotal-fields").removeClass("d-flex").addClass("d-none") // showing
            } else {
                $(".shipping-setup-shipping-rates .subtotal-fields").removeClass("d-none").addClass("d-flex") // showing
                $(".shipping-setup-shipping-rates .weight-fields").removeClass("d-flex").addClass("d-none") // showing
            }
        })

        // change on click | shipping rates
        $('.shipping-setup-shipping-rates .and-up').on("click", function(ev) {
            ev.preventDefault()
            $(this).hide().next().show().find("input").focus() // showing and focus
        })

        // change on click | flat shipping rates
        $('.shipping-setup-flat-shipping-rates #amount_type').on("change", function(ev) {
            ev.preventDefault()
            const val = $(this).val()

            if(val === "flat") {
                $('.shipping-setup-flat-shipping-rates .for-percentages').hide()
                $('.shipping-setup-flat-shipping-rates .for-flat-rate').show()
            } else {
                $('.shipping-setup-flat-shipping-rates .for-flat-rate').hide()
                $('.shipping-setup-flat-shipping-rates .for-percentages').show()
            }
        });


        // shipping steps
        (function () {
            const totalSteps = 3
    
            // add current step
            function addCurrentStep(count) {
                if(count) {
                    $(".add-shipping-method-loading .text .current-step").text(count)
                }
            }
            // add current step
            function setStepText(text) {
                if(text) {
                    $(".add-shipping-method-loading .text .main-text").text(text)
                }
            }
            // add total and current step
            $(".add-shipping-method-loading .text .total-steps").text(totalSteps)
            addCurrentStep("1")
    
            // change on click | shipping steps | step 1
            $('.add-shipping-method-step1 [data-shipping-name]').on("click", function(ev) {
                ev.preventDefault()
                const dataName = $(this).attr('data-shipping-name')
    
                if(dataName) {
                    // back
                    $('[data-id="shipping-back-btn"]').attr("data-go-to", "step-1") // adding class
    
                    // loading
                    $(".add-shipping-method-loading .progress-main").removeClass("step-1 step-3").addClass("step-2") // adding class
                    addCurrentStep("2") // step
                    setStepText("Set up rates for " + dataName)
    
                    // step visibility
                    $('.add-shipping-method-step1').hide()
                    $('.add-shipping-method-step2').fadeIn(100)

                    // scroll to top
                    window.scrollTo(0, 0)
                }
            })
            
            // change on click | shipping steps | step 2
            $('.add-shipping-method-step2 [data-shipping-name]').on("click", function(ev) {
                ev.preventDefault()
                const dataName = $(this).attr('data-shipping-name')
    
                if(dataName) {
                    const innerVal = $(".add-shipping-method-loading .text .main-text").text()
                    // back
                    $('[data-id="shipping-back-btn"]').attr("data-go-to", "step-2") // adding class
                    $('[data-id="shipping-back-btn"]').attr("data-shipping-name", innerVal) // adding shipping name
    
                    // loading
                    $(".add-shipping-method-loading .progress-main").removeClass("step-1 step-2").addClass("step-3") // adding class
                    addCurrentStep("3") // step
                    setStepText("Finialize")
    
                    // step visibility
                    $('.add-shipping-method-step2').hide()
                    if(dataName == "Free Shipping") {
                        $('.free-shipping-set-up').fadeIn(100)
                    }
                    if(dataName == "Conditional Free Shipping") {
                        $('.condtional-free-shipping-set-up').fadeIn(100)
                    }
                    if(dataName == "Flat Rate") {
                        $('.flat-shipping-set-up').fadeIn(100)
                    }

                    // scroll to top
                    window.scrollTo(0, 0)
                }
            })
    
            // change on click | shipping steps | back btn
            $('[data-id="shipping-back-btn"]').on("click", function(ev) {
                ev.preventDefault()

                const goToStep = $(this).attr('data-go-to')

                if(goToStep) {
                    if(goToStep === "step-1") { // step 1
                        // step visibility
                        $('.add-shipping-method-step2').hide(100)
                        $('.add-shipping-method-step1').fadeIn()

                        addCurrentStep("1") // step
                        setStepText("Select shipping method")

                        // scroll to top
                        window.scrollTo(0, 0)
                    }

                    if(goToStep === "step-2") { // step 2
                        const dataName = $(this).attr('data-shipping-name')
                        
                        // step visibility
                        $('.free-shipping-set-up').hide(100)
                        $('.condtional-free-shipping-set-up').hide(100)
                        $('.flat-shipping-set-up').hide(100)
                        $('.add-shipping-method-step2').fadeIn(100)
                        $('[data-id="shipping-back-btn"]').attr("data-go-to", "step-1") // adding class

                        addCurrentStep("2") // step
                        setStepText(dataName)

                        // scroll to top
                        window.scrollTo(0, 0)
                    }
                } else {
                    // step visibility
                    // $('.add-shipping-method-step2').hide(100)   
                    // $('.add-shipping-method-step1').fadeIn()
                }
                
            })            
        }());
    })();

    // PAGE - Blogs
    (function() {
        // openning on click
        $('[data-id="create-blog-submit-btn"]').on("click", function(ev) {
            ev.preventDefault()
            $('form#create-blog-form [type="submit"]').trigger('click') // form submission
        })

        // validation
        $("#create-blog-form").validate({
            // debug: true,


            // on submit
            submitHandler: function(form) {
                console.log("form ", form)
                form.submit();
            }
        })


    })();

});