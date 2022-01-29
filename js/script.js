$(function () {
    // tooltip initialize
    (function () {
        $('[data-toggle="tooltip"]').tooltip();
    })();

    // left menu expand
    (function () {
        $('.app-left-menu .st-logo .st-round-btn').on("click", function (ev) {
            ev.preventDefault()
            $('.app-left-menu').toggleClass("expanded shrunk") // toggle left bar
        })
    })();

    // left menu links expand
    (function () {
        $('.alm_nav-item.has-sub-menu > .alm_nav-link').on("click", function (ev) {
            ev.preventDefault()
            const topOffset = $(this).offset().top
            if (!$(this).hasClass("active")) { // if element is active
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
    (function () {
        $('.category-left-bar .frac .expand-shrink-icon').on("click", function (ev) {
            ev.preventDefault()
            const parentElem = $(this).closest(".frac")
            $("> .icon", this).toggleClass("feather-plus feather-minus") // toggle menu
            parentElem.toggleClass("expanded") // toggle active class to parent
            parentElem.find(">.multilevel-container").slideToggle(300) // toggle the multilevel menu
        })
    })();

    // PAGE - COUPONS
    (function () {
        // datepicker
        $("#coupons-date-picker").datepicker()
        // select 2
        $('.coupons-category-select').select2();

        $(".coupons-discount-type #discountType").on("change", function () {
            const val = $(this).val()

            if (val === "percent") {
                $(".coupons-discount-type-percent").removeClass("d-none").addClass("d-flex")
                $(".coupons-discount-type-value").removeClass("d-flex").addClass("d-none")
            } else {
                $(".coupons-discount-type-percent").removeClass("d-flex").addClass("d-none")
                $(".coupons-discount-type-value").removeClass("d-none").addClass("d-flex")
            }
        })
    })();

    // COMMON: DROPDOWN MENU
    (function () {
        // openning the click
        $('.app-dropdown-container > .dropdown-link').on("click", function (ev) {
            ev.preventDefault()
            $(".app-dropdown-container > .dropdown-content").hide(100) // hiding other dropdown
            $(this).next(".dropdown-content").fadeToggle(200) // toggle dropdown menu
        })

        // closing on document click
        $(document).on("click", function () {
            if (!$(".app-dropdown-container:hover").length) {
                $(".app-dropdown-container > .dropdown-content").hide(100)
            }
        })
    })();
    // COMMON - active and inactive input
    (function () {
        $('.active-inactive-toggle').each(function () {
            if ($("input", this).is(":checked")) { // if checked
                $(this).find(".text.inactive").hide()
                $(this).find(".text.active").show()
            } else {
                $(this).find(".text.active").hide()
                $(this).find(".text.inactive").show()
            }
        })
        // openning on change
        $('.active-inactive-toggle input').on("change", function () {
            if ($(this).is(":checked")) { // if checked
                $(this).closest("label").find(".text.inactive").hide()
                $(this).closest("label").find(".text.active").show()
            } else {
                $(this).closest("label").find(".text.active").hide()
                $(this).closest("label").find(".text.inactive").show()
            }
        })
    })();
    // COMMON: INITIALIZE QUILL EDITOR
    (function () {
        const elem = document.getElementById("app-editor")
        if (elem) {
            new Quill('#app-editor', {
                theme: 'snow',
            });
        }
    })();
    // COMMON: TABLE COLUMN TOGGLER
    (function () {
        $(".table-column-toggler:not(.toggle-all) input").on("change", function () {
            const thisVal = $(this).val()
            if (thisVal) { // if value exists
                if ($(this).is(":checked")) {
                    $("th[data-st-table-for=" + thisVal + "], td[data-st-table-for=" + thisVal + "]").show() // showing
                } else {
                    $("th[data-st-table-for=" + thisVal + "], td[data-st-table-for=" + thisVal + "]").hide() // hiding
                }
            }
        })
    })();
    // COMMON: inputs with length
    (function () {
        $(".input-container-with-text-length > input, .input-container-with-text-length > textarea").on("keydown keyup keypress", function (ev) {
            const thisValLength = $(this).val().length
            const maxLength = parseInt($(this).attr("maxlength"))

            $(this).next(".text-length").find("p").text(thisValLength + " of " + maxLength + " characters used")
        })
    })();

    // PAGE - SALES ORDER: add note
    (function () {
        // openning the click
        $('.sales-order-add-note-btn').on("click", function (ev) {
            ev.preventDefault()

            $(this).removeClass("d-flex").addClass("d-none") // hiding link
            $(this).next(".form-container").show() // showing form
            $(this).next(".form-container").find('textarea').focus() // focus textarea
        })

        // closing the click
        $('.sales-order-cancel-note-btn').on("click", function (ev) {
            ev.preventDefault()

            $(".sales-order-add-note-btn").removeClass("d-none").addClass("d-flex") // hiding link
            $(this).closest(".form-container").hide() // hiding form
        })
    })();
    // PAGE - SALES ORDER: with tracking number
    (function () {
        // openning on change
        $('.add-tracking-number-form #withTracking').on("change", function () {
            if ($(this).is(":checked")) { // if checked
                $(this).closest("form").find('.tracking-input-container').fadeIn(200)
            }
        })

        // closing on change
        $('.add-tracking-number-form #withoutTracking').on("change", function () {
            if ($(this).is(":checked")) { // if checked
                $(this).closest("form").find('.tracking-input-container').hide()
            }
        })
    })();

    // PAGE - products: select category
    (function () {
        // openning on click
        $('.show-product-categories').on("click", function (ev) {
            ev.preventDefault()

            $(this).parent().hide() // hiding element
            $(this).closest(".page-border-box2").find(".normal-head").hide() // changing heading
            $(this).closest(".page-border-box2").find(".select-head").show() // changing heading
            $(this).closest(".prods-cat-content").find(".prods-cat-content-main").fadeIn(200) // showing menu
        })
        // closing on document click
        $(document).on("click", function () {
            if (!$(".prods-cat-content:hover").length) {
                $(".prods-cat-content .prods-cat-content-main").hide() // hiding menu
                $(".prods-cat-content .btns").show() // showing element
                $(".page-border-box2 .normal-head").show() // changing heading
                $(".page-border-box2 .select-head").hide() // changing heading
            }
        })
        // closing on btn click
        $(".hide-product-categories").on("click", function (ev) {
            ev.preventDefault()

            $(".prods-cat-content .prods-cat-content-main").hide() // hiding menu
            $(".prods-cat-content .btns").show() // showing element
            $(".page-border-box2 .normal-head").show() // changing heading
            $(".page-border-box2 .select-head").hide() // changing heading
        })

        // tabs on page load
        const windowHash = window.location.hash
        if (windowHash) {
            $('.app-products__create-details .st-tabs-links .stl-link[href="' + windowHash + '"]').addClass("active").siblings().removeClass("active") // active
            $('.main-content[data-id="' + windowHash + '"]').show().siblings().hide() // visibility
        }
        // tabs on click
        $('.app-products__create-details .st-tabs-links .stl-link').on("click", function (ev) {
            ev.preventDefault()
            const moveTo = $(this).attr("href")

            if (moveTo) {
                $('.app-products__create-details .st-tabs-links .stl-link[href="' + moveTo + '"]').addClass("active").siblings().removeClass("active") // active
                $('.main-content[data-id="' + moveTo + '"]').show().siblings().hide() // visibility
                window.location.hash = moveTo
            }
        });
    })();
    // PAGE - products: purchasability
    (function () {
        function showingOptions() {  // hidden data visibility
            // closing options by default
            $(".purchasability-wrapper .purchasability-option-can-be-purchased").addClass('d-none')
            $(".purchasability-wrapper .purchasability-option-coming-soon").removeClass('d-flex').addClass("d-none")

            $(".purchasability-message-form").addClass("d-none")

            if ($(".purchasability-wrapper #purchasability-option-1").is(":checked")) { // option 1 checked
            }

            if ($(".purchasability-wrapper #purchasability-option-2").is(":checked")) { // option 2 checked
                $(".purchasability-wrapper .purchasability-option-can-be-purchased").removeClass('d-none')
            }

            if ($(".purchasability-wrapper #purchasability-option-3").is(":checked")) { // option 3 checked
                $(".purchasability-wrapper .purchasability-option-coming-soon").removeClass('d-none').addClass("d-flex")
            }
        }

        function toggleMessageForm() { // message form visibility
            if ($("#purchasability-toggle-message").is(":checked")) {
                $(".purchasability-message-form").removeClass("d-none")
            } else {
                $(".purchasability-message-form").addClass("d-none")
            }
        }

        showingOptions() // on load

        // showing on change
        $('.purchasability-wrapper .st-custom-radio > input').on("change", function () {
            showingOptions()
        })

        showingOptions() // on load
        // showing on change
        $('#purchasability-toggle-message').on("change", function () {
            toggleMessageForm()
        })
    })();
    // PAGE - products: variation options
    (function () {
        // changing on load
        $('.variation-options-view .content-item:first-child, .variation-options-view .vov-links-container > a:first-child').addClass("active")

        // change on click
        $(document).on("click", '.variation-options-view .vov-links-container > a', function (ev) {
            ev.preventDefault()
            const dataId = $(this).attr('data-id')

            // removing class
            $('.variation-options-view .content-item, .variation-options-view .vov-links-container > a').removeClass("active")
            // adding active class
            $(this).addClass('active')
            $('.variation-options-view .content-item[data-id=' + dataId + ']').addClass("active")
        })
    })();
    // PAGE - Products | variations
    (function () {
        function sortableLevel1() {
            $(".variations-sortable-l1").sortable({
                handle: "> .frac-inner > .move-icon",
            });
        }
        function sortableLevel2() {
            $(".variations-sortable-l2").sortable({
                handle: "> .move-icon",
            });
        }
        sortableLevel1() // initialize sortable level 1
        sortableLevel2() // initialize sortable level 2

        // new name field
        var new_nameField = '<div class="st-form mb-2">'
        new_nameField += '<label class="mb-1">Name'
        new_nameField += '<span class="required">*</span>'
        new_nameField += '</label>'
        new_nameField += '<input placeholder="Name" type="text" class="form-control" value="">'
        new_nameField += '</div>'

        // new select box field
        var new_selectboxField = '<div class="st-form mb-2">'
        new_selectboxField += '<label class="mb-1">Option'
        new_selectboxField += '<span class="required">*</span>'
        new_selectboxField += '</label>'
        new_selectboxField += '<select class="form-control">'
        new_selectboxField += '<option disabled="">Select Type</option>'
        new_selectboxField += '<option value="radio_buttons">Radio Buttons</option>'
        new_selectboxField += '<option value="rectangle_list" selected="">Rectangle List</option>'
        new_selectboxField += '<option value="dropdown">Dropdown</option>'
        new_selectboxField += '</select>'
        new_selectboxField += '</div>'

        // new value field
        var new_valueField = '<div class="form-item media-body">'
        new_valueField += '<div class="st-form mb-2">'
        new_valueField += '<label class="mb-1">Value'
        new_valueField += '<span class="required">*</span>'
        new_valueField += '</label>'
        new_valueField += '<input placeholder="Name" type="text" class="form-control" value="">'
        new_valueField += '</div>'
        new_valueField += '<div class="delete-frac-item mb-2">'
        new_valueField += '<a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option-value">'
        new_valueField += '<i class="feather-trash-2 icon me-1"></i>'
        new_valueField += '<span>Delete Value</span>'
        new_valueField += '</a>'
        new_valueField += '</div>'
        new_valueField += '</div>'

        // get new option value
        function getNewOptionValueField(nameForIsDefault) {
            if (nameForIsDefault) {
                // value html
                var new_VALUE_HTML = '<div class="form-item-outer d-flex flex-wrap">'
                new_VALUE_HTML += '<div class="move-icon">'
                new_VALUE_HTML += '<i class="feather-move icon st-fs-20"></i>'
                new_VALUE_HTML += '</div>'
                new_VALUE_HTML += '<div class="form-item media-body">'
                new_VALUE_HTML += new_valueField
                new_VALUE_HTML += '</div>'
                new_VALUE_HTML += '<div class="select-default ps-2">'
                new_VALUE_HTML += '<label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">'
                new_VALUE_HTML += '<input type="radio" class="d-none" name="' + nameForIsDefault + '">'
                new_VALUE_HTML += '<span class="box d-flex align-items-center justify-content-center border">'
                new_VALUE_HTML += '<i class="feather-check icon position-relative"></i>'
                new_VALUE_HTML += '</span>'
                new_VALUE_HTML += '<span class="text text-capitalize st-fs-15 ms-2">default</span>'
                new_VALUE_HTML += '</label>'
                new_VALUE_HTML += '</div>'
                new_VALUE_HTML += '</div>'

                return new_VALUE_HTML
            }
        }

        // get new option
        function getNewOptionFields(nameForIsDefault) {
            if (nameForIsDefault) {
                var new_FIELD_HTML = '<div class="frac">'
                new_FIELD_HTML += '<div class="frac-inner d-flex">'
                new_FIELD_HTML += '<div class="move-icon">'
                new_FIELD_HTML += '<i class="feather-move icon st-fs-20"></i>'
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '<div class="d-flex flex-wrap media-body">'
                new_FIELD_HTML += '<div class="form-item item-name">'
                new_FIELD_HTML += new_nameField
                new_FIELD_HTML += '<div class="delete-frac-item">'
                new_FIELD_HTML += '<a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option">'
                new_FIELD_HTML += '<i class="feather-trash-2 st-fs-13 icon me-1"></i>'
                new_FIELD_HTML += '<span>Delete Option</span>'
                new_FIELD_HTML += '</a>'
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '<div class="form-item item-type">'
                new_FIELD_HTML += new_selectboxField
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '<div class="form-item item-values d-flex flex-wrap">'
                new_FIELD_HTML += '<div class="all-form-fields media-body variations-sortable-l2">'
                new_FIELD_HTML += getNewOptionValueField(nameForIsDefault)
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '<div class="add-field w-100 mt-2">'
                new_FIELD_HTML += '<p class="d-inline-flex align-items-center st-text-primary cursor-pointer add-new-option-value">'
                new_FIELD_HTML += '<i class="feather-plus icon me-1"></i>'
                new_FIELD_HTML += '<span>Add another field</span>'
                new_FIELD_HTML += '</p>'
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '</div>'
                new_FIELD_HTML += '</div>'

                return new_FIELD_HTML
            }
        }

        // add new option
        $(document).on("click", "#add-product-variant-view .add-new-option", function (ev) {
            ev.preventDefault()

            const fracLength = $("#add-product-variant-view .content-inner > .frac").length
            const idVal = "is_default_" + (fracLength + 1)
            console.log("idVal ", idVal);

            $("#add-product-variant-view .content-inner > .frac:last-child").after(getNewOptionFields(idVal)) // adding new field

            sortableLevel2() // initialize sortable level 2 again
        });
        // delete option
        $(document).on("click", "#add-product-variant-view .delete-option", function (ev) {
            ev.preventDefault()

            $(this).closest(".frac").remove()
        });

        // add new option value
        $(document).on("click", "#add-product-variant-view .add-new-option-value", function (ev) {
            ev.preventDefault()

            const id = $(this).closest(".form-item").find(">.all-form-fields .form-item-outer:first-child .select-default input").attr("name")

            $(this).closest(".form-item").find(".all-form-fields").append(getNewOptionValueField(id)) // adding new field value
        });
        // delete option value
        $(document).on("click", "#add-product-variant-view .delete-option-value", function (ev) {
            ev.preventDefault()

            $(this).closest(".form-item-outer").remove()
        });

        // on values change in the option name field
        $(document).on("keyup", "#add-product-variant-view .form-item.item-name .st-form > input", function () {
            const val = $(this).val()
            if (val) {
                $(this).removeClass("error")
            } else {
                $(this).addClass("error")
            }
        })
        // on blur of the option name field
        $(document).on("blur", "#add-product-variant-view .form-item.item-name .st-form > input", function () {
            const val = $(this).val()
            if (!val) {
                $(this).addClass("error")
            }
        })

        // on values change in the option value field
        $(document).on("keyup", "#add-product-variant-view .all-form-fields .st-form > input", function () {
            const val = $(this).val()
            if (val) {
                $(this).removeClass("error")
            } else {
                $(this).addClass("error")
            }
        })
        // on blur of the option value field
        $(document).on("blur", "#add-product-variant-view .all-form-fields .st-form > input", function () {
            const val = $(this).val()
            if (!val) {
                $(this).addClass("error")
            }
        })

        // save option details
        $(document).on("click", ".save-options-details", function (ev) {
            ev.preventDefault()

            // checking for errors in the option name field
            $("#add-product-variant-view .form-item.item-name .st-form > input").each(function (index, item) {
                const itemNameVal = $(item).val()
                if (itemNameVal) { // if all the name values exist
                    $(this).removeClass("error")
                } else {
                    $(this).addClass("error")
                }
            })

            // checking for errors in the option values fields
            $("#add-product-variant-view .all-form-fields .st-form > input").each(function (index, item) {
                const itemNameVal = $(item).val()
                if (itemNameVal) { // if all the name values exist
                    $(this).removeClass("error")
                } else {
                    $(this).addClass("error")
                }
            })


            const nameElems = $("#add-product-variant-view .item-name > .st-form input")
            const typeElems = $("#add-product-variant-view .item-type > .st-form select")
            const nameElemsVals = []
            const typeElemsVals = []

            // getting name values
            nameElems.each(function (index, elem) {
                nameElemsVals.push($(elem).val())
            })

            // getting type values
            typeElems.each(function (index, elem) {
                typeElemsVals.push($(elem).val())
            })

            const allVariationsData = []
            // getting type values
            $("#add-product-variant-view .content-inner > .frac").each(function (index, elem) {
                const nameElems = $(elem).find(".item-name > .st-form input")
                const typeElems = $(elem).find(".item-type > .st-form select")
                const valuesElems = $(elem).find(".all-form-fields .form-item-outer")

                const allOptions = []
                valuesElems.each(function (index, elem) {
                    allOptions.push({
                        is_default: $(elem).find(".select-default input").is(":checked"),
                        option_variation_name: nameElems.val(),
                        value: $(elem).find(".st-form > input").val()
                    })
                })

                const mainData = {
                    display_type: typeElems.val(),
                    options: allOptions,
                    variation_name: nameElems.val()
                }
                allVariationsData.push(mainData)
            })
            console.log("allVariationsData ", allVariationsData);
        });

        // getting variation page options data
        (function () {
            function generateHTMLForOptions(dataArray) {
                if (dataArray && dataArray.length) {
                    // option link
                    function getOptionLink(dataId, text) {
                        if (dataId && text) {
                            var elem = '<a href="/" class="vov-link d-block" data-id="' + dataId + '">' + text + '</a>'
                            return elem
                        }
                    }
                    // options data
                    function getOptionData(name, value) {
                        if (name && value) {
                            var elem = '<div class="frac">'
                            elem += '<p class="head st-fs-12 st-fw-600 st-text-color2 mb-1">' + name + '</p>'
                            elem += '<p class="desc">' + value + '</p>'
                            elem += '</div>'
                            return elem
                        }
                    }

                    // GENERATING HTML
                    var optionsMainData = []
                    for (let i = 0; i < dataArray.length; i++) {
                        const varItem = dataArray[i];
                        var varItemOptions = JSON.parse(dataArray[i].options)
                        var varItemOptionsValues = ""

                        // setting options values
                        varItemOptionsValues += '<div class="frac">'
                        varItemOptionsValues += '<p class="head st-fs-12 st-fw-600 st-text-color2 mb-1">Option Values</p>'
                        for (var j = 0; j < varItemOptions.length; j++) {
                            const varOptionItem = varItemOptions[j];
                            varItemOptionsValues += '<p class="desc">' + varOptionItem.value + '</p>'
                        }
                        varItemOptionsValues += '</div>'

                        // setting overall values
                        optionsMainData.push({
                            links: getOptionLink(("item-" + i), varItem.variation_name),
                            name: getOptionData("Option Name", varItem.variation_name),
                            type: getOptionData("Option Type", varItem.display_type),
                            options: varItemOptionsValues
                        })
                    }
                    // generating main options html
                    var linksHTML = ""
                    var contentHTML = ""
                    for (let i = 0; i < optionsMainData.length; i++) {
                        const dataItem = optionsMainData[i];

                        var ctHTML = '<div class="content-item" data-id="item-' + i + '">'
                        ctHTML += '<div class="inner d-flex flex-wrap">'
                        ctHTML += (dataItem.name + dataItem.type + dataItem.options)
                        ctHTML += '</div>'
                        ctHTML += '</div>'

                        contentHTML += ctHTML
                        linksHTML += dataItem.links
                    }

                    // setting content html
                    $(".variation-options-view .vov-links-container").html(linksHTML)
                    $(".variation-options-view .content-sec").html(contentHTML)

                    // making the first element active for link and content item
                    $('.variation-options-view .content-item:first-child, .variation-options-view .vov-links-container > a:first-child').addClass("active")
                }
            }
            const variationsData = [
                {
                    "variation_id": 299,
                    "variation_name": "COLOR",
                    "product_id": 249664685,
                    "is_shared": 0,
                    "options": "[{\"option_variation_name\":\"COLOR\",\"id\":1679,\"value\":\"Blue\",\"is_default\":\"\"},{\"option_variation_name\":\"COLOR\",\"id\":1680,\"value\":\"UV Orange\",\"is_default\":\"\"},{\"option_variation_name\":\"COLOR\",\"id\":1681,\"value\":\"Shiny Blue\",\"is_default\":\"\"},{\"option_variation_name\":\"COLOR\",\"id\":1682,\"value\":\"UV Slime\",\"is_default\":\"\"},{\"option_variation_name\":\"COLOR\",\"id\":1683,\"value\":\"Shiny Purple\",\"is_default\":\"\"},{\"option_variation_name\":\"COLOR\",\"id\":1684,\"value\":\"Green\",\"is_default\":\"\"},{\"option_variation_name\":\"COLOR\",\"id\":1685,\"value\":\"Purple\",\"is_default\":\"\"},{\"option_variation_name\":\"COLOR\",\"id\":1686,\"value\":\"Red\",\"is_default\":\"\"}]",
                    "is_default": 0,
                    "display_type": "rectangle_list"
                }
            ]
            generateHTMLForOptions(variationsData)

            function generateHTMLForCombinations(dataArray) {
                if (dataArray && dataArray.length) {
                    // get enable td html
                    function getEnableTD() {
                        var td = '<td class="column__Enable text-center">'
                        td += '<label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">'
                        td += '<input type="checkbox" class="d-none all-checkboxes-selector-checkbox" checked="">'
                        td += '<span class="box d-flex align-items-center justify-content-center border" style="height: 22px; width: 22px;">'
                        td += '<i class="feather-check icon st-fs-14"></i>'
                        td += '</span>'
                        td += '</label>'
                        td += '</td>'
                        return td
                    }

                    // get image td html
                    function getImageTD(imgUrl) {
                        if (imgUrl) {
                            var td = '<td class="column__Image no-pad">'
                            td += '<div class="img-container d-flex align-items-center justify-content-center cursor-pointer" title="Change Image">'
                            td += '<img src="' + imgUrl + '" alt="product img" class="img-fluid img-fluid-height">'
                            td += '</div>'
                            td += '</td>'
                            return td
                        } else {
                            var td = '<td class="column__Image no-pad">'
                            td += '<label class="img-container d-flex align-items-center justify-content-center cursor-pointer" title="Add Image">'
                            td += '<input type="file" accept="image/png, image/gif, image/jpeg" hidden="">'
                            td += '<i class="feather-camera icon"></i>'
                            td += '</label>'
                            td += '</td>'
                            return td
                        }
                    }

                    // get variant td html
                    function getVariantTD(content, dataTitle) {
                        var td = '<td class="column__Variant text-capitalize" title="' + dataTitle + '">'
                        td += content
                        td += '</td>'
                        return td
                    }

                    // get sku td html
                    function getSkuTD(placeholder, value) {
                        var td = '<td class="column__Sku no-pad has-input">'
                        td += '<input type="text" placeholder="' + placeholder + '" value="' + value + '">'
                        td += '</td>'
                        return td
                    }

                    // get weight td html
                    function getWeightTD(placeholder, value) {
                        var td = '<td class="column__Weight no-pad has-input">'
                        td += '<input type="number" min="0" placeholder="' + placeholder + '" value="' + value + '">'
                        td += '</td>'
                        return td
                    }

                    // get cost td html
                    function getCostTD(placeholder, value) {
                        var td = '<td class="column__Cost no-pad has-input">'
                        td += '<input type="number" min="0" placeholder="' + placeholder + '" value="' + value + '">'
                        td += '</td>'
                        return td
                    }

                    // get price td html
                    function getPriceTD(placeholder, value) {
                        var td = '<td class="column__Price no-pad has-input">'
                        td += '<input type="number" min="0" placeholder="' + placeholder + '" value="' + value + '">'
                        td += '</td>'
                        return td
                    }

                    // get stock td html
                    function getStockTD(placeholder, value) {
                        var td = '<td class="column__Stock no-pad has-input">'
                        td += '<input type="number" min="0" placeholder="' + placeholder + '" value="' + value + '">'
                        td += '</td>'

                        return td
                    }

                    // get actions td html
                    function getActionsTD(dataIds) {
                        var td = '<td class="column__actions">'
                        td += '<div class="d-flex">'
                        td += '<button type="button" class="st-round-btn st-btn-secondary st-btn-xs d-flex align-items-center justify-content-center me-2 open-edit-more-details-modal" data-id="' + dataIds + '">'
                        td += '<i class="feather-edit-2 icon"></i>'
                        td += '</button>'
                        td += '<button type="button" class="st-round-btn st-btn-secondary st-btn-xs d-flex align-items-center justify-content-center manage-single-variant-visibility me-2">'
                        td += '<i class="feather-eye-off icon"></i>'
                        td += '</button>'
                        td += '</div>'
                        td += '</td>'
                        return td
                    }

                    var finalHTML = ""
                    for (let i = 0; i < dataArray.length; i++) {
                        const combiItem = dataArray[i];
                        const variations = JSON.parse(combiItem.variation_combination)
                        var combiHtml = ""
                        var variationOptionsHtml = ""

                        // generating content for variants
                        for (let j = 0; j < variations.length; j++) {
                            const variItem = variations[j];
                            const data = variItem.option_variation_name + ": " + variItem.value
                            variationOptionsHtml += '<p>' + data + '</p>'
                        }
                        // console.log("combiItem ", combiItem);

                        combiHtml += '<tr>'
                        combiHtml += getEnableTD()
                        combiHtml += getImageTD(combiItem.variation_image)
                        combiHtml += getVariantTD(variationOptionsHtml, combiItem.variant)
                        combiHtml += getSkuTD("", combiItem.sku)
                        combiHtml += getWeightTD("", combiItem.weight)
                        combiHtml += getCostTD("", combiItem.cost_price ? combiItem.cost_price : "")
                        combiHtml += getPriceTD("", combiItem.price)
                        combiHtml += getStockTD("", combiItem.stock ? combiItem.stock : "")
                        combiHtml += getActionsTD(combiItem.product_variation_id)
                        combiHtml += '</tr>'

                        finalHTML += combiHtml
                    }

                    // appending html
                    $("#nav-variations .btns span").text(" (" + dataArray.length + "combinations)")
                    $("#nav-variations .products-variants-table tbody").html(finalHTML)
                }
            }
            // combination data
            const combinationsData = [
                {
                    "product_variation_id": 1757,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1686,\"value\":\"Red\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 6,
                    "is_default": 0,
                    "sku": "HK 147 Red",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-red354589760377.jpg",
                    "variant": "COLOR: Red",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1686",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                },
                {
                    "product_variation_id": 1758,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1685,\"value\":\"Purple\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 5,
                    "is_default": 0,
                    "sku": "HK 147 Purple",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-purple818262577577.jpg",
                    "variant": "COLOR: Purple",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1685",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                },
                {
                    "product_variation_id": 1759,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1684,\"value\":\"Green\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 6,
                    "is_default": 0,
                    "sku": "HK 147 Green",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-green770195943068.jpg",
                    "variant": "COLOR: Green",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1684",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                },
                {
                    "product_variation_id": 1760,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1683,\"value\":\"Shiny Purple\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 3,
                    "is_default": 0,
                    "sku": "HK 147 Shiny Purple",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-shiny-purple506895225701.jpg",
                    "variant": "COLOR: Shiny Purple",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1683",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                },
                {
                    "product_variation_id": 1761,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1682,\"value\":\"UV Slime\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 4,
                    "is_default": 0,
                    "sku": "HK 147 UV Slime",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-uv-slime934859043818.jpg",
                    "variant": "COLOR: UV Slime",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1682",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                },
                {
                    "product_variation_id": 1762,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1681,\"value\":\"Shiny Blue\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 4,
                    "is_default": 0,
                    "sku": "HK 147 Shiny Blue",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-shiny-blue948684072409.jpg",
                    "variant": "COLOR: Shiny Blue",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1681",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                },
                {
                    "product_variation_id": 1763,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1680,\"value\":\"UV Orange\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 4,
                    "is_default": 0,
                    "sku": "HK 147 UV Orange",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-uv-orange320462877249.jpg",
                    "variant": "COLOR: UV Orange",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1680",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                },
                {
                    "product_variation_id": 1764,
                    "product_id": 249664685,
                    "variation_combination": "[{\"option_variation_name\":\"COLOR\",\"id\":1679,\"value\":\"Blue\",\"is_default\":\"\"}]",
                    "price_multiplier": 0,
                    "cost_price": 0,
                    "price": 69.99,
                    "stock": 0,
                    "is_default": 0,
                    "sku": "HK 147 Blue",
                    "weight": "0.53",
                    "dimensions": "",
                    "upc": null,
                    "description": null,
                    "status": 1,
                    "variation_image": "249664685-hk-147-hk-147-blue748967050862.jpg",
                    "variant": "COLOR: Blue",
                    "material": null,
                    "length": null,
                    "width": null,
                    "height": null,
                    "is_deleted": 0,
                    "ids": "1679",
                    "display_cost_price": "$0.00",
                    "display_price": "$69.99"
                }
            ]
            // calling combination generation function
            generateHTMLForCombinations(combinationsData)

            $('.products-variants-table .open-edit-more-details-modal').on("click", function (ev) {
                ev.preventDefault()
                const dataId = $(this).attr("data-id")

                // openning modal
                var myModalEl = document.getElementById('editVariationDetailsModal')
                var myModal = new bootstrap.Modal(myModalEl, {})
                myModal.show()
                myModalEl.addEventListener('shown.bs.modal', function () {
                    setTimeout(() => {
                        // getting single item details
                        for (let i = 0; i < combinationsData.length; i++) {
                            const combiItem = combinationsData[i];
                            if (combiItem.product_variation_id === dataId) {
                                // populating data to the modal fields
                                $('#editVariationDetailsModal [name="length"]')[0].value = (combiItem.length)
                                $('#editVariationDetailsModal [name="width"]')[0].value = (combiItem.width)
                                $('#editVariationDetailsModal [name="height"]')[0].value = (combiItem.height)
                                $('#editVariationDetailsModal [name="upc"]')[0].value = (combiItem.upc)
                                $('#editVariationDetailsModal [name="description"]')[0].value = (combiItem.description)
                            }
                        }
                    }, 200);
                })
            })

            $('.products-variants-table .manage-single-variant-visibility').on("click", function (ev) {
                ev.preventDefault()

                $("i", this).toggleClass("feather-eye-off feather-eye")
                $(this).closest("tr").toggleClass("variant-disabled")

            })
        })();

        // setting dynamic attributes values
        (function () {
            const attributes = [
                {
                    "attribute_id": 1,
                    "attribute_name": "Material",
                    "status": 1
                }
            ]

            // get attribute item
            function getAttrItem(name,) {
                var attrFormItem = '<div class="st-form st-form-with-label-left d-flex flex-wrap ">'
                attrFormItem += '<label>' + name + '</label>'
                attrFormItem += '<div class="media-body st-form-input-container">'
                attrFormItem += '<input type="text" class="form-control" placeholder="' + name + '" name="' + name + '">'
                attrFormItem += '</div>'
                attrFormItem += '</div>'
                return attrFormItem
            }

            var attrsHTML = ""
            for (let i = 0; i < attributes.length; i++) {
                const attrItem = attributes[i];

                attrsHTML += getAttrItem(attrItem.attribute_name)
            }

            // appending attributes html
            $(".products-custom-attributes").html(attrsHTML)
        })();

    })();
    // PAGE - products: add/edit ribbon
    (function () {
        // change on click | add ribbon
        $('.add-new-ribbon').on("click", function (ev) {
            ev.preventDefault()
            $(this).closest(".pbb2-inner").hide().next().fadeIn(200)
        })

        // change on click | remove ribbon
        $('.remove-the-ribbon').on("click", function (ev) {
            ev.preventDefault()
            $(this).closest(".pbb2-inner").hide().prev().fadeIn(200)
        })

        // change on click | more options show
        $('.show-more-ribbon-options-btn').on("click", function (ev) {
            ev.preventDefault()
            if ($(">span", this).text() === "Show More Options") {
                $(">span", this).text("Hide More Options")
                $(this).closest(".btns").next(".show-more-ribbon-options").fadeIn(200)
            } else {
                $(">span", this).text("Show More Options")
                $(this).closest(".btns").next(".show-more-ribbon-options").fadeOut(200)
            }
        })
        // change on click | more options show
        $('#ribbonDisableToCart').on("change", function (ev) {
            if ($(this).is(":checked")) {
                $(".disable-cart-description-view").fadeIn(100)
            } else {
                $(".disable-cart-description-view").fadeOut(100)
            }
        })

        // change on change | ribbon name
        $('.ribbon-name-field > input').on("keyup", function () {
            const val = $(this).val()
            // setting badge text
            if (val) {
                $(".add-ribbon-view .preview-sec .ribbon-stripe").text(val)
            } else {
                $(".add-ribbon-view .preview-sec .ribbon-stripe").text("Your Text")
            }
        })

        // change on click | color click
        $('.add-ribbon-view .ribbon-pre-defined-colors > .color-item:not(.custom-color)').on("click", function (ev) {
            ev.preventDefault()
            const styleBG = $(this).attr("data-bg")
            $(this).addClass("active").siblings().removeClass("active")
            // hiding custom color element
            $(this).closest(".ribbon-color-container").find(".ribbon-color-field-container").hide()

            // setting custom color value
            $(this).closest(".ribbon-color-container").find(".ribbon-color-field-container input").val(styleBG)

            // setting badge bg
            $(".add-ribbon-view .preview-sec .ribbon-stripe").css({
                backgroundColor: styleBG
            })
        })
        // change on click | custom color click
        $('.add-ribbon-view .ribbon-pre-defined-colors > .color-item.custom-color').on("click", function (ev) {
            ev.preventDefault()
            $(this).addClass("active").siblings().removeClass("active")
            // showing element
            $(this).closest(".ribbon-color-container").find(".ribbon-color-field-container").fadeIn(200)
        })
        // change on change | custom color getting
        $('.add-ribbon-view .ribbon-color-field-container input').on("keyup", function (ev) {
            const val = $(this).val()
            // setting badge bg after some time
            if (val) {
                setTimeout(() => {
                    $(".add-ribbon-view .preview-sec .ribbon-stripe").css({
                        backgroundColor: val
                    })
                }, 200);
            }
        })
    })();
    // PAGE - products: related products
    (function () {
        // change on change | show categories section
        $('.related-products-section-main #automaticallyShow').on("change", function () {
            if ($(this).is(":checked")) {
                $(".related-products-section-main .select-related-products-section").hide()
            } else {
                $(".related-products-section-main .select-related-products-section").fadeIn(100)
            }
        })
    })();

    // PAGE - google shipping: category dropdown
    (function () {
        // change on click
        $('.category-listing-main .head input').on("focus", function (ev) {
            $(this).closest(".category-listing-main").find(">.head").addClass("active")
            $(this).closest(".category-listing-main").addClass("active").find(">.dropdown-content").fadeIn(300)
        })

        // closing on document click
        $(document).on("click", function () {
            if (!$(".category-listing-main:hover").length) {
                $(".category-listing-main:not(.related-products-categories-listing) > .head").removeClass("active")
                $(".category-listing-main:not(.related-products-categories-listing)").removeClass("active").find(">.dropdown-content").hide()
            }
        })
    })();
    // PAGE - google shipping: category sub menu toggle
    (function () {
        // change on click
        $('.category-listing-main .dropdown-content .expand-sub-category').on("click", function (ev) {
            ev.preventDefault()
            $(this).toggleClass("active") // active class
            $(".icon", this).toggleClass("feather-chevron-right feather-chevron-down") // icon
            $(this).closest("label").next(".sub-menu").slideToggle(200) // dropdown          
        })
    })();

    // PAGE - shippings
    (function () {
        // change on click | add description, limit availability, shipping region
        $('.shipping-setup-add-description .top-sec .head, .shipping-setup-limit-availability .top-sec .head, .shipping-setup-shipping-region .top-sec .head').on("click", function (ev) {
            ev.preventDefault()

            $("i", this).toggleClass("feather-chevron-right feather-chevron-down") // icon
            $(this).closest(".frac-inner").find('.form-container').slideToggle(200) // form data
        })

        // change on change | estimated delivery date
        $('.shipping-setup-estimated-delivery-date #shouldDeliveryDate').on("change", function (ev) {
            ev.preventDefault()
            if ($(this).is(":checked")) {
                $(this).closest(".frac-inner").find('.form-container').slideDown(200) // form data
            } else {
                $(this).closest(".frac-inner").find('.form-container').slideUp(200) // form data
            }
        })

        // change on change | order preparation time
        $('.shipping-setup-order-preparation-time #order_preparation_time').on("change", function (ev) {
            ev.preventDefault()
            const val = $(this).val()

            if (val === "4") {
                $(this).closest(".form-container").find('.shipping-setup-custom-time').slideDown(200) // form data
            } else {
                $(this).closest(".form-container").find('.shipping-setup-custom-time').slideUp(200) // form data
            }
        })

        // change on change | order packing days
        $('.shipping-setup-order-packing-days #days_when_you_pack_orders_').on("change", function (ev) {
            ev.preventDefault()
            const val = $(this).val()

            if (val === "4") {
                $(this).closest(".form-container").find('.shipping-setup-custom-days').slideDown(200) // form data
            } else {
                $(this).closest(".form-container").find('.shipping-setup-custom-days').slideUp(200) // form data
            }
        })

        // change on change | shipping region
        $('.shipping-setup-shipping-region [name=shipping_region]').on("change", function (ev) {
            ev.preventDefault()

            if ($(this).closest(".shipping-setup-shipping-region").find("#shipping_region_advanced-settings").is(":checked")) {
                $(this).closest(".form-container").find('.shipping-setup-select-country').slideDown(200) // form data
            } else {
                $(this).closest(".form-container").find('.shipping-setup-select-country').slideUp(200) // form data
            }
        })

        // change on change | shipping rates
        $('.shipping-setup-shipping-rates #rate_based_on').on("change", function () {
            const val = $(this).val()
            if (val === "full") {
                $(".shipping-setup-shipping-rates .form-container .other-form-items").show() // showing
            } else {
                $(".shipping-setup-shipping-rates .form-container .other-form-items").hide() // hiding
            }
        })
        // change on change | shipping rates
        $('.shipping-setup-shipping-rates #table_based_on').on("change", function () {
            const val = $(this).val()

            if (val === "weight") {
                $(".shipping-setup-shipping-rates .weight-fields").removeClass("d-none").addClass("d-flex") // showing
                $(".shipping-setup-shipping-rates .subtotal-fields").removeClass("d-flex").addClass("d-none") // showing
            } else {
                $(".shipping-setup-shipping-rates .subtotal-fields").removeClass("d-none").addClass("d-flex") // showing
                $(".shipping-setup-shipping-rates .weight-fields").removeClass("d-flex").addClass("d-none") // showing
            }
        })

        // change on click | shipping rates
        $('.shipping-setup-shipping-rates .and-up').on("click", function (ev) {
            ev.preventDefault()
            $(this).hide().next().show().find("input").focus() // showing and focus
        })

        // change on click | flat shipping rates
        $('.shipping-setup-flat-shipping-rates #amount_type').on("change", function (ev) {
            ev.preventDefault()
            const val = $(this).val()

            if (val === "flat") {
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
                if (count) {
                    $(".add-shipping-method-loading .text .current-step").text(count)
                }
            }
            // add current step
            function setStepText(text) {
                if (text) {
                    $(".add-shipping-method-loading .text .main-text").text(text)
                }
            }
            // add total and current step
            $(".add-shipping-method-loading .text .total-steps").text(totalSteps)
            addCurrentStep("1")

            // change on click | shipping steps | step 1
            $('.add-shipping-method-step1 [data-shipping-name]').on("click", function (ev) {
                ev.preventDefault()
                const dataName = $(this).attr('data-shipping-name')

                if (dataName) {
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
            $('.add-shipping-method-step2 [data-shipping-name]').on("click", function (ev) {
                ev.preventDefault()
                const dataName = $(this).attr('data-shipping-name')

                if (dataName) {
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
                    if (dataName == "Free Shipping") {
                        $('.free-shipping-set-up').fadeIn(100)
                    }
                    if (dataName == "Conditional Free Shipping") {
                        $('.condtional-free-shipping-set-up').fadeIn(100)
                    }
                    if (dataName == "Flat Rate") {
                        $('.flat-shipping-set-up').fadeIn(100)
                    }

                    // scroll to top
                    window.scrollTo(0, 0)
                }
            })

            // change on click | shipping steps | back btn
            $('[data-id="shipping-back-btn"]').on("click", function (ev) {
                ev.preventDefault()

                const goToStep = $(this).attr('data-go-to')

                if (goToStep) {
                    if (goToStep === "step-1") { // step 1
                        // step visibility
                        $('.add-shipping-method-step2').hide(100)
                        $('.add-shipping-method-step1').fadeIn()

                        addCurrentStep("1") // step
                        setStepText("Select shipping method")

                        // scroll to top
                        window.scrollTo(0, 0)
                    }

                    if (goToStep === "step-2") { // step 2
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
    (function () {
        // openning on click
        $('[data-id="create-blog-submit-btn"]').on("click", function (ev) {
            ev.preventDefault()
            $('form#create-blog-form [type="submit"]').trigger('click') // form submission
        })
    })();

    // PAGE - notifications
    (function () {
        // change on click | show add domain section
        $('.show-add-domain-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".pbb2-inner").removeClass("d-flex").addClass("d-none")
                .next(".add-domain-info-main").fadeIn(100)
        })

        // change on click | hide add domain section
        $('.hide-add-domain-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".add-domain-info-main").hide().prev().removeClass("d-none").addClass("d-flex")
        })

        // change on click | show add domain section
        $('.show-dns-settings-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".page-border-box2").hide()
                .next(".domain-settings").fadeIn(100)
        })

        // change on click | hide add domain section
        $('.hide-dns-settings-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".domain-settings").hide()
                .prev().fadeIn(100)
        })

        // change on click | show edit sender info
        $('.show-senders-info-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".page-border-box2").hide()
                .next().fadeIn(100)
        })

        // change on click | hide edit sender info
        $('.hide-senders-info-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".page-border-box2").hide()
                .prev().fadeIn(100)
        })

        // change on click | show admin email address
        $('.show-admin-email-address-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".page-border-box2").hide()
                .next().fadeIn(100)
        })

        // change on click | hide admin email address
        $('.hide-admin-email-address-section').on("click", function (ev) {
            ev.preventDefault()

            $(this).closest(".page-border-box2").hide()
                .prev().fadeIn(100)
        })
    })();

});