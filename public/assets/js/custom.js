/* ----------------- Start Document ----------------- */
jQuery('body').append('<div id="backtotop"><a href="#"></a></div>');
const accordion = () => {
    const jQueryaccordion = jQuery(".js-accordion");
    const jQueryaccordion_header = jQueryaccordion.find(".js-accordion-header");

    // default settings
    const settings = {
        // animation speed
        speed: 400,

        // close all other accordion items if true
        oneOpen: false,
    };

    return {
        // pass configurable object literal
        init: function (jQuerysettings) {
        jQueryaccordion_header.on("click", function () {
            accordion().toggle(jQuery(this));
        });

        jQuery.extend(settings, jQuerysettings);

        // ensure only one accordion is active if oneOpen is true
        if (settings.oneOpen && jQuery(".js-accordion-item.active").length > 1) {
            jQuery(".js-accordion-item.active:not(:first)").removeClass("active");
        }

        // reveal the active accordion bodies
        jQuery(".js-accordion-item.active").find("> .js-accordion-body").show();
        },
        toggle: function (jQuerythis) {
        if (
            settings.oneOpen &&
            jQuerythis[0] !=
            jQuerythis
                .closest(".js-accordion")
                .find("> .js-accordion-item.active > .js-accordion-header")[0]
        ) {
            jQuerythis
            .closest(".js-accordion")
            .find("> .js-accordion-item")
            .removeClass("active")
            .find(".js-accordion-body")
            .slideUp();
        }

        // show/hide the clicked accordion item
        jQuerythis.closest(".js-accordion-item").toggleClass("active");
        jQuerythis.next().stop().slideToggle(settings.speed);
        },
    };
    };

const photoBox = ()=>{
    jQuery(".photo-box, .photo-section, .video-container").each(function () {
        var photoBox = jQuery(this);
        var photoBoxBG = jQuery(this).attr('data-background-image');

        if (photoBox !== undefined) {
            jQuery(this).css('background-image', 'url(' + photoBoxBG + ')');
        }
    });
}

const Dropdown = ()=>{
    
    /*--------------------------------------------------*/
    /*  Notification Dropdowns
    /*--------------------------------------------------*/
    jQuery(".header-notifications").each(function () {
        var userMenu = jQuery(this);
        var userMenuTrigger = jQuery(this).find('.header-notifications-trigger a');

        jQuery(userMenuTrigger).on('click', function (event) {
            event.preventDefault();

            if (jQuery(this).closest(".header-notifications").is(".active")) {
                close_user_dropdown();
            } else {
                close_user_dropdown();
                userMenu.addClass('active');
            }
        });
    });

    // Closing function
    function close_user_dropdown() {
        jQuery('.header-notifications').removeClass("active");
    }

    // Closes notification dropdown on click outside the conatainer
    var mouse_is_inside = false;

    jQuery(".header-notifications").on("mouseenter", function () {
        mouse_is_inside = true;
    });
    jQuery(".header-notifications").on("mouseleave", function () {
        mouse_is_inside = false;
    });

    jQuery("body").mouseup(function () {
        if (!mouse_is_inside) close_user_dropdown();
    });

    // Close with ESC
    jQuery(document).keyup(function (e) {
        if (e.keyCode == 27) {
            close_user_dropdown();
        }
    });



}

jQuery(document).ready(function(){

    /*--------------------------------------------------*/
    /*  Mobile Menu - mmenu.js
    /*--------------------------------------------------*/


    /*--------------------------------------------------*/
    /*  Sticky Header
    /*--------------------------------------------------*/


    // Sticky Header Init


    /*--------------------------------------------------*/
    /*  Transparent Header Spacer Adjustment
    /*--------------------------------------------------*/
    jQuery(window).on('load resize', function () {
        var transparentHeaderHeight = jQuery('.transparent-header').outerHeight();
        jQuery('.transparent-header-spacer').css({
            height: transparentHeaderHeight,
        });
    });


    /*----------------------------------------------------*/
    /*  Back to Top
    /*----------------------------------------------------*/

    // Button


    // Showing Button
    var pxShow = 600; // height on which the button will show
    var scrollSpeed = 500; // how slow / fast you want the button to scroll to top.

    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() >= pxShow) {
            jQuery("#backtotop").addClass('visible');
        } else {
            jQuery("#backtotop").removeClass('visible');
        }
    });

    jQuery('#backtotop a').on('click', function () {
        jQuery('html, body').animate({
            scrollTop: 0
        }, scrollSpeed);
        return false;
    });


    /*--------------------------------------------------*/
    /*  Ripple Effect
    /*--------------------------------------------------*/
    jQuery('.ripple-effect, .ripple-effect-dark').on('click', function (e) {
        var rippleDiv = jQuery('<span class="ripple-overlay">'),
            rippleOffset = jQuery(this).offset(),
            rippleY = e.pageY - rippleOffset.top,
            rippleX = e.pageX - rippleOffset.left;

        rippleDiv.css({
            top: rippleY - (rippleDiv.height() / 2),
            left: rippleX - (rippleDiv.width() / 2),
            // background: jQuery(this).data("ripple-color");
        }).appendTo(jQuery(this));

        window.setTimeout(function () {
            rippleDiv.remove();
        }, 800);
    });


    /*--------------------------------------------------*/
    /*  Interactive Effects
    /*--------------------------------------------------*/
    jQuery(".switch, .radio").each(function () {
        var intElem = jQuery(this);
        intElem.on('click', function () {
            intElem.addClass('interactive-effect');
            setTimeout(function () {
                intElem.removeClass('interactive-effect');
            }, 400);
        });
    });


    /*--------------------------------------------------*/
    /*  Sliding Button Icon
    /*--------------------------------------------------*/
    jQuery(window).on('load', function () {
        jQuery(".button.button-sliding-icon").not(".task-listing .button.button-sliding-icon").each(function () {
            var buttonWidth = jQuery(this).outerWidth() + 30;
            jQuery(this).css('width', buttonWidth);
        });
    });


    /*--------------------------------------------------*/
    /*  Sliding Button Icon
    /*--------------------------------------------------*/
    jQuery('.bookmark-icon').on('click', function (e) {
        e.preventDefault();
        jQuery(this).toggleClass('bookmarked');
    });

    jQuery('.bookmark-button').on('click', function (e) {
        e.preventDefault();
        jQuery(this).toggleClass('bookmarked');
    });


    /*----------------------------------------------------*/
    /*  Notifications Boxes
    /*----------------------------------------------------*/
    jQuery("a.close").removeAttr("href").on('click', function () {
        function slideFade(elem) {
            var fadeOut = {
                opacity: 0,
                transition: 'opacity 0.5s'
            };
            elem.css(fadeOut).slideUp();
        }
        slideFade(jQuery(this).parent());
    });

    /*--------------------------------------------------*/
    /*  User Status Switch
    /*--------------------------------------------------*/
    if (jQuery('.status-switch label.user-invisible').hasClass('current-status')) {
        jQuery('.status-indicator').addClass('right');
    }

    jQuery('.status-switch label.user-invisible').on('click', function () {
        jQuery('.status-indicator').addClass('right');
        jQuery('.status-switch label').removeClass('current-status');
        jQuery('.user-invisible').addClass('current-status');
    });

    jQuery('.status-switch label.user-online').on('click', function () {
        jQuery('.status-indicator').removeClass('right');
        jQuery('.status-switch label').removeClass('current-status');
        jQuery('.user-online').addClass('current-status');
    });


    /*--------------------------------------------------*/
    /*  Full Screen Page Scripts
    /*--------------------------------------------------*/

    // Wrapper Height (window height - header height)
    function wrapperHeight() {
        var headerHeight = jQuery("#header-container").outerHeight();
        var windowHeight = jQuery(window).outerHeight() - headerHeight;
        jQuery('.full-page-content-container, .dashboard-content-container, .dashboard-sidebar-inner, .dashboard-container, .full-page-container').css({
            height: windowHeight
        });
        jQuery('.dashboard-content-inner').css({
            'min-height': windowHeight
        });
    }

    // Enabling Scrollbar
    function fullPageScrollbar() {
        jQuery(".full-page-sidebar-inner, .dashboard-sidebar-inner").each(function () {

            var headerHeight = jQuery("#header-container").outerHeight();
            var windowHeight = jQuery(window).outerHeight() - headerHeight;
            var sidebarContainerHeight = jQuery(this).find(".sidebar-container, .dashboard-nav-container").outerHeight();

            // Enables scrollbar if sidebar is higher than wrapper
            if (sidebarContainerHeight > windowHeight) {
                jQuery(this).css({
                    height: windowHeight
                });

            } else {
                jQuery(this).find('.simplebar-track').hide();
            }
        });
    }

    // Init
    jQuery(window).on('load resize', function () {
        wrapperHeight();
        fullPageScrollbar();
    });

    // Sliding Sidebar
    jQuery('.enable-filters-button').on('click', function () {
        jQuery('.full-page-sidebar').toggleClass("enabled-sidebar");
        jQuery(this).toggleClass("active");
        jQuery('.filter-button-tooltip').removeClass('tooltip-visible');
    });

    /*  Enable Filters Button Tooltip */
    jQuery(window).on('load', function () {
        jQuery('.filter-button-tooltip').css({
                left: jQuery('.enable-filters-button').outerWidth() + 48
            })
            .addClass('tooltip-visible');
    });

    // Avatar Switcher
    function avatarSwitcher() {
        var readURL = function (input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    jQuery('.profile-pic').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };

        jQuery(".file-upload").on('change', function () {
            readURL(this);
        });

        jQuery(".upload-button").on('click', function () {
            jQuery(".file-upload").click();
        });
    }
    avatarSwitcher();


    /*----------------------------------------------------*/
    /* Dashboard Scripts
    /*----------------------------------------------------*/

    // Dashboard Nav Submenus
    jQuery('.dashboard-nav ul li a').on('click', function (e) {
        if (jQuery(this).closest("li").children("ul").length) {
            if (jQuery(this).closest("li").is(".active-submenu")) {
                jQuery('.dashboard-nav ul li').removeClass('active-submenu');
            } else {
                jQuery('.dashboard-nav ul li').removeClass('active-submenu');
                jQuery(this).parent('li').addClass('active-submenu');
            }
            e.preventDefault();
        }
    });


    // Responsive Dashbaord Nav Trigger
    jQuery('.dashboard-responsive-nav-trigger').on('click', function (e) {
        e.preventDefault();
        jQuery(this).toggleClass('active');

        var dashboardNavContainer = jQuery('body').find(".dashboard-nav");

        if (jQuery(this).hasClass('active')) {
            jQuery(dashboardNavContainer).addClass('active');
        } else {
            jQuery(dashboardNavContainer).removeClass('active');
        }

        jQuery('.dashboard-responsive-nav-trigger .hamburger').toggleClass('is-active');

    });

    // Fun Facts
    function funFacts() {
        /*jslint bitwise: true */
        function hexToRgbA(hex) {
            var c;
            if (/^#([A-Fa-f0-9]{3}){1,2}jQuery/.test(hex)) {
                c = hex.substring(1).split('');
                if (c.length == 3) {
                    c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c = '0x' + c.join('');
                return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',0.07)';
            }
        }

        jQuery(".fun-fact").each(function () {
            var factColor = jQuery(this).attr('data-fun-fact-color');

            if (factColor !== undefined) {
                jQuery(this).find(".fun-fact-icon").css('background-color', hexToRgbA(factColor));
                jQuery(this).find("i").css('color', factColor);
            }
        });

    }
    funFacts();


    // Notes & Messages Scrollbar
    jQuery(window).on('load resize', function () {
        var winwidth = jQuery(window).width();
        if (winwidth > 1199) {

            // Notes
            jQuery('.row').each(function () {
                var mbh = jQuery(this).find('.main-box-in-row').outerHeight();
                var cbh = jQuery(this).find('.child-box-in-row').outerHeight();
                if (mbh < cbh) {
                    var headerBoxHeight = jQuery(this).find('.child-box-in-row .headline').outerHeight();
                    var mainBoxHeight = jQuery(this).find('.main-box-in-row').outerHeight() - headerBoxHeight + 39;

                    jQuery(this).find('.child-box-in-row .content')
                        .wrap('<div class="dashboard-box-scrollbar" style="max-height: ' + mainBoxHeight + 'px" data-simplebar></div>');
                }
            });

            // Messages Sidebar
            // var messagesList = jQuery(".messages-inbox").outerHeight();
            // var messageWrap = jQuery(".message-content").outerHeight();
            // if ( messagesList > messagesWrap) {
            // 	jQuery(messagesList).css({
            // 		'max-height': messageWrap,
            // 	});
            // }
        }
    });

    // Mobile Adjustment for Single Button Icon in Dashboard Box
    jQuery('.buttons-to-right').each(function () {
        var btr = jQuery(this).width();
        if (btr < 36) {
            jQuery(this).addClass('single-right-button');
        }
    });

    // Small Footer Adjustment
    jQuery(window).on('load resize', function () {
        var smallFooterHeight = jQuery('.small-footer').outerHeight();
        jQuery('.dashboard-footer-spacer').css({
            'padding-top': smallFooterHeight + 45
        });
    });


    // Auto Resizing Message Input Field
    /* global jQuery */
    jQuery.each(jQuery('textarea[data-autoresize]'), function () {
        var offset = this.offsetHeight - this.clientHeight;

        var resizeTextarea = function (el) {
            jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
        };
        jQuery(this).on('keyup input', function () {
            resizeTextarea(this);
        }).removeAttr('data-autoresize');
    });


    /*--------------------------------------------------*/
    /*  Star Rating
    /*--------------------------------------------------*/




    /*--------------------------------------------------*/
    /*  Enabling Scrollbar in User Menu
    /*--------------------------------------------------*/
    function userMenuScrollbar() {
        jQuery(".header-notifications-scroll").each(function () {
            var scrollContainerList = jQuery(this).find('ul');
            var itemsCount = scrollContainerList.children("li").length;
            var notificationItems;

            // Determines how many items are displayed based on items height
            /* jshint shadow:true */
            if (scrollContainerList.children("li").outerHeight() > 140) {
                var notificationItems = 2;
            } else {
                var notificationItems = 3;
            }


            // Enables scrollbar if more than 2 items
            if (itemsCount > notificationItems) {

                var listHeight = 0;

                jQuery(scrollContainerList).find('li:lt(' + notificationItems + ')').each(function () {
                    listHeight += jQuery(this).height();
                });

                jQuery(this).css({
                    height: listHeight
                });

            } else {
                jQuery(this).css({
                    height: 'auto'
                });
                jQuery(this).find('.simplebar-track').hide();
            }
        });
    }

    // Init
    userMenuScrollbar();


    /*--------------------------------------------------*/
    /*  Tippy JS
    /*--------------------------------------------------*/
    /* global tippy */
    tippy('[data-tippy-placement]', {
        delay: 100,
        arrow: true,
        arrowType: 'sharp',
        size: 'regular',
        duration: 200,

        // 'shift-toward', 'fade', 'scale', 'perspective'
        animation: 'shift-away',

        animateFill: true,
        theme: 'dark',

        // How far the tooltip is from its reference element in pixels
        distance: 10,

    });


    /*----------------------------------------------------*/
    /*	Accordion @Lewis Briffa
    /*----------------------------------------------------*/


    /*--------------------------------------------------*/
    /*  Tabs
    /*--------------------------------------------------*/
    jQuery(window).on('load resize', function () {
        if (jQuery(".tabs")[0]) {
            jQuery('.tabs').each(function () {

                var thisTab = jQuery(this);

                // Intial Border Position
                var activePos = thisTab.find('.tabs-header .active').position();

                function changePos() {

                    // Update Position
                    activePos = thisTab.find('.tabs-header .active').position();

                    // Change Position & Width
                    thisTab.find('.tab-hover').stop().css({
                        left: activePos.left,
                        width: thisTab.find('.tabs-header .active').width()
                    });
                }

                changePos();

                // Intial Tab Height
                var tabHeight = thisTab.find('.tab.active').outerHeight();

                // Animate Tab Height
                function animateTabHeight() {

                    // Update Tab Height
                    tabHeight = thisTab.find('.tab.active').outerHeight();

                    // Animate Height
                    thisTab.find('.tabs-content').stop().css({
                        height: tabHeight + 'px'
                    });
                }

                animateTabHeight();

                // Change Tab
                function changeTab() {
                    var getTabId = thisTab.find('.tabs-header .active a').attr('data-tab-id');

                    // Remove Active State
                    thisTab.find('.tab').stop().fadeOut(300, function () {
                        // Remove Class
                        jQuery(this).removeClass('active');
                    }).hide();

                    thisTab.find('.tab[data-tab-id=' + getTabId + ']').stop().fadeIn(300, function () {
                        // Add Class
                        jQuery(this).addClass('active');

                        // Animate Height
                        animateTabHeight();
                    });
                }

                // Tabs
                thisTab.find('.tabs-header a').on('click', function (e) {
                    e.preventDefault();

                    // Tab Id
                    var tabId = jQuery(this).attr('data-tab-id');

                    // Remove Active State
                    thisTab.find('.tabs-header a').stop().parent().removeClass('active');

                    // Add Active State
                    jQuery(this).stop().parent().addClass('active');

                    changePos();

                    // Update Current Itm
                    tabCurrentItem = tabItems.filter('.active');

                    // Remove Active State
                    thisTab.find('.tab').stop().fadeOut(300, function () {
                        // Remove Class
                        jQuery(this).removeClass('active');
                    }).hide();

                    // Add Active State
                    thisTab.find('.tab[data-tab-id="' + tabId + '"]').stop().fadeIn(300, function () {
                        // Add Class
                        jQuery(this).addClass('active');

                        // Animate Height
                        animateTabHeight();
                    });
                });

                // Tab Items
                var tabItems = thisTab.find('.tabs-header ul li');

                // Tab Current Item
                var tabCurrentItem = tabItems.filter('.active');

                // Next Button
                thisTab.find('.tab-next').on('click', function (e) {
                    e.preventDefault();

                    var nextItem = tabCurrentItem.next();

                    tabCurrentItem.removeClass('active');

                    if (nextItem.length) {
                        tabCurrentItem = nextItem.addClass('active');
                    } else {
                        tabCurrentItem = tabItems.first().addClass('active');
                    }

                    changePos();
                    changeTab();
                });

                // Prev Button
                thisTab.find('.tab-prev').on('click', function (e) {
                    e.preventDefault();

                    var prevItem = tabCurrentItem.prev();

                    tabCurrentItem.removeClass('active');

                    if (prevItem.length) {
                        tabCurrentItem = prevItem.addClass('active');
                    } else {
                        tabCurrentItem = tabItems.last().addClass('active');
                    }

                    changePos();
                    changeTab();
                });
            });
        }
    });


    /*--------------------------------------------------*/
    /*  Keywords
    /*--------------------------------------------------*/
    jQuery(".keywords-container").each(function () {

        var keywordInput = jQuery(this).find(".keyword-input");
        var keywordsList = jQuery(this).find(".keywords-list");
        var hiddenP = jQuery(this).find("#skills");
        var hiddenValue = (jQuery(this).find("#skills").text()).split(',');

        // adding keyword
        function addKeyword() {
            var jQuerynewKeyword = jQuery("<span class='keyword'><span class='keyword-remove'></span><span class='keyword-text'>" + keywordInput.val() + "</span></span>");
            keywordsList.append(jQuerynewKeyword).trigger('resizeContainer');
            hiddenValue = [...hiddenValue, keywordInput.val()];
            let mystr = hiddenValue.map((skill) => `jQuery{skill}`);

            hiddenP.text(mystr);
            keywordInput.val("");
        }

        // add via enter key
        keywordInput.on('keyup', function (e) {
            if ((e.keyCode == 13) && (keywordInput.val() !== "")) {
                addKeyword();
            }
        });

        // add via button
        jQuery('.keyword-input-button').on('click', function () {
            if ((keywordInput.val() !== "")) {
                addKeyword();
            }
        });

        // removing keyword
        jQuery(document).on("click", ".keyword-remove", function () {
            jQuery(this).parent().addClass('keyword-removed');
            hiddenValue.map((item) => {
                if (item === `jQuery{jQuery(".keyword-removed").text()}`) {
                    const index = hiddenValue.indexOf(item);
                    if (index > -1) {
                        hiddenValue.splice(index, 1);
                    }
                }
            });
            let mystr = hiddenValue.map((skill) => `jQuery{skill}`);
            hiddenP.text(mystr);


            function removeFromMarkup() {
                jQuery(".keyword-removed").remove();
            }
            setTimeout(removeFromMarkup, 500);
            keywordsList.css({
                'height': 'auto'
            }).height();
        });


        // animating container height
        keywordsList.on('resizeContainer', function () {
            var heightnow = jQuery(this).height();
            var heightfull = jQuery(this).css({
                'max-height': 'auto',
                'height': 'auto'
            }).height();

            jQuery(this).css({
                'height': heightnow
            }).animate({
                'height': heightfull
            }, 200);
        });

        jQuery(window).on('resize', function () {
            keywordsList.css({
                'height': 'auto'
            }).height();
        });

        // Auto Height for keywords that are pre-added
        jQuery(window).on('load', function () {
            var keywordCount = jQuery('.keywords-list').children("span").length;

            // Enables scrollbar if more than 3 items
            if (keywordCount > 0) {
                keywordsList.css({
                    'height': 'auto'
                }).height();

            }
        });

    });


    /*--------------------------------------------------*/
    /*  Bootstrap Range Slider
    /*--------------------------------------------------*/

    // Thousand Separator
    function ThousandSeparator(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, 'jQuery1' + ',' + 'jQuery2');
        }
        return x1 + x2;
    }

    // Bidding Slider Average Value
    var avgValue = (parseInt(jQuery('.bidding-slider').attr("data-slider-min")) + parseInt(jQuery('.bidding-slider').attr("data-slider-max"))) / 2;
    if (jQuery('.bidding-slider').data("slider-value") === 'auto') {
        jQuery('.bidding-slider').attr({
            'data-slider-value': avgValue
        });
    }

    // Bidding Slider Init
    jQuery('.bidding-slider').slider();

    jQuery(".bidding-slider").on("slide", function (slideEvt) {
        jQuery("#biddingVal").text(ThousandSeparator(parseInt(slideEvt.value)));
    });
    jQuery("#biddingVal").text(ThousandSeparator(parseInt(jQuery('.bidding-slider').val())));


    // Default Bootstrap Range Slider
    var currencyAttr = jQuery(".range-slider").attr('data-slider-currency');

    jQuery(".range-slider").slider({
        formatter: function (value) {
            return currencyAttr + ThousandSeparator(parseInt(value[0])) + " - " + currencyAttr + ThousandSeparator(parseInt(value[1]));
        }
    });

    jQuery(".range-slider-single").slider();


    /*----------------------------------------------------*/
    /*  Payment Accordion
    /*----------------------------------------------------*/
    var radios = document.querySelectorAll('.payment-tab-trigger > input');

    for (var i = 0; i < radios.length; i++) {
        radios[i].addEventListener('change', expandAccordion);
    }

    function expandAccordion(event) {
        /* jshint validthis: true */
        var tabber = this.closest('.payment');
        var allTabs = tabber.querySelectorAll('.payment-tab');
        for (var i = 0; i < allTabs.length; i++) {
            allTabs[i].classList.remove('payment-tab-active');
        }
        event.target.parentNode.parentNode.classList.add('payment-tab-active');
    }

    jQuery('.billing-cycle-radios').on("click", function () {
        if (jQuery('.billed-yearly-radio input').is(':checked')) {
            jQuery('.pricing-plans-container').addClass('billed-yearly');
        }
        if (jQuery('.billed-monthly-radio input').is(':checked')) {
            jQuery('.pricing-plans-container').removeClass('billed-yearly');
        }
    });


    /*--------------------------------------------------*/
    /*  Quantity Buttons
    /*--------------------------------------------------*/
    function qtySum() {
        var arr = document.getElementsByName('qtyInput');
        var tot = 0;
        for (var i = 0; i < arr.length; i++) {
            if (parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }
    }
    qtySum();

    jQuery(".qtyDec, .qtyInc").on("click", function () {

        var jQuerybutton = jQuery(this);
        var oldValue = jQuerybutton.parent().find("input").val();

        if (jQuerybutton.hasClass('qtyInc')) {
            jQuerybutton.parent().find("input").val(parseFloat(oldValue) + 1);
        } else {
            if (oldValue > 1) {
                jQuerybutton.parent().find("input").val(parseFloat(oldValue) - 1);
            } else {
                jQuerybutton.parent().find("input").val(1);
            }
        }

        qtySum();
        jQuery(".qtyTotal").addClass("rotate-x");

    });


    /*----------------------------------------------------*/
    /*  Inline CSS replacement for backgrounds
    /*----------------------------------------------------*/
    function inlineBG() {

        // Common Inline CSS
        jQuery(".single-page-header, .intro-banner").each(function () {
            var attrImageBG = jQuery(this).attr('data-background-image');

            if (attrImageBG !== undefined) {
                jQuery(this).append('<div class="background-image-container"></div>');
                jQuery('.background-image-container').css('background-image', 'url(' + attrImageBG + ')');
            }
        });

    }
    inlineBG();

    // Fix for intro banner with label
    jQuery(".intro-search-field").each(function () {
        var bannerLabel = jQuery(this).children("label").length;
        if (bannerLabel > 0) {
            jQuery(this).addClass("with-label");
        }
    });

    // Photo Boxes



    /*----------------------------------------------------*/
    /*  Share URL and Buttons
    /*----------------------------------------------------*/
    /* global ClipboardJS */
    jQuery('.copy-url input').val(window.location.href);
    new ClipboardJS('.copy-url-button');

    jQuery(".share-buttons-icons a").each(function () {
        var buttonBG = jQuery(this).attr("data-button-color");
        if (buttonBG !== undefined) {
            jQuery(this).css('background-color', buttonBG);
        }
    });


    /*----------------------------------------------------*/
    /*  Tabs
    /*----------------------------------------------------*/
    var jQuerytabsNav = jQuery('.popup-tabs-nav'),
        jQuerytabsNavLis = jQuerytabsNav.children('li');

    jQuerytabsNav.each(function () {
        var jQuerythis = jQuery(this);

        jQuerythis.next().children('.popup-tab-content').stop(true, true).hide().first().show();
        jQuerythis.children('li').first().addClass('active').stop(true, true).show();
    });

    jQuerytabsNavLis.on('click', function (e) {
        var jQuerythis = jQuery(this);

        jQuerythis.siblings().removeClass('active').end().addClass('active');

        jQuerythis.parent().next().children('.popup-tab-content').stop(true, true).hide()
            .siblings(jQuerythis.find('a').attr('href')).fadeIn();

        e.preventDefault();
    });

    var hash = window.location.hash;
    var anchor = jQuery('.tabs-nav a[href="' + hash + '"]');
    if (anchor.length === 0) {
        jQuery(".popup-tabs-nav li:first").addClass("active").show(); //Activate first tab
        jQuery(".popup-tab-content:first").show(); //Show first tab content
    } else {
        anchor.parent('li').click();
    }

    // Link to Register Tab
    jQuery('.register-tab').on('click', function (event) {
        event.preventDefault();
        jQuery(".popup-tab-content").hide();
        jQuery("#register.popup-tab-content").show();
        jQuery("body").find('.popup-tabs-nav a[href="#register"]').parent("li").click();
    });

    // Disable tabs if there's only one tab
    jQuery('.popup-tabs-nav').each(function () {
        var listCount = jQuery(this).find("li").length;
        if (listCount < 2) {
            jQuery(this).css({
                'pointer-events': 'none'
            });
        }
    });


    /*----------------------------------------------------*/
    /*  Indicator Bar
    /*----------------------------------------------------*/
    jQuery('.indicator-bar').each(function () {
        var indicatorLenght = jQuery(this).attr('data-indicator-percentage');
        jQuery(this).find("span").css({
            width: indicatorLenght + "%"
        });
    });


    /*----------------------------------------------------*/
    /*  Custom Upload Button
    /*----------------------------------------------------*/

    var uploadButton = {
        jQuerybutton: jQuery('.uploadButton-input'),
        jQuerynameField: jQuery('.uploadButton-file-name')
    };

    uploadButton.jQuerybutton.on('change', function () {
        _populateFileField(jQuery(this));
    });

    function _populateFileField(jQuerybutton) {
        var selectedFile = [];
        for (var i = 0; i < jQuerybutton.get(0).files.length; ++i) {
            selectedFile.push(jQuerybutton.get(0).files[i].name + '<br>');
        }
        uploadButton.jQuerynameField.html(selectedFile);
    }


    /*----------------------------------------------------*/
    /*  Slick Carousel
    /*----------------------------------------------------*/

    // jQuery('.default-slick-carousel').slick({
    //     infinite: false,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: true,
    //     adaptiveHeight: true,

    //     responsive: [{
    //             breakpoint: 1292,
    //             settings: {
    //                 dots: true,
    //                 arrows: false
    //             }
    //         },
    //         {
    //             breakpoint: 993,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 2,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         },
    //         {
    //             breakpoint: 769,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         }
    //     ]
    // });


    // jQuery('.testimonial-carousel').slick({
    //     centerMode: true,
    //     centerPadding: '30%',
    //     slidesToShow: 1,
    //     dots: false,
    //     arrows: true,
    //     adaptiveHeight: true,
    //     autoplay: true,
    //     autoplaySpeed: 3000,
    //     responsive: [{
    //             breakpoint: 1600,
    //             settings: {
    //                 centerPadding: '21%',
    //                 slidesToShow: 1,
    //             }
    //         },
    //         {
    //             breakpoint: 993,
    //             settings: {
    //                 centerPadding: '15%',
    //                 slidesToShow: 1,
    //             }
    //         },
    //         {
    //             breakpoint: 769,
    //             settings: {
    //                 centerPadding: '5%',
    //                 dots: true,
    //                 arrows: false
    //             }
    //         }
    //     ]
    // });


    // jQuery('.logo-carousel').slick({
    //     infinite: true,
    //     slidesToShow: 5,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: true,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     responsive: [{
    //             breakpoint: 1365,
    //             settings: {
    //                 slidesToShow: 5,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         },
    //         {
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 3,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 1,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         }
    //     ]
    // });

    // jQuery('.blog-carousel').slick({
    //     infinite: false,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: true,
    //     responsive: [{
    //             breakpoint: 1365,
    //             settings: {
    //                 slidesToShow: 3,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         },
    //         {
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 2,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 1,
    //                 dots: true,
    //                 arrows: false
    //             }
    //         }
    //     ]
    // });

    /*----------------------------------------------------*/
    /*  Magnific Popup
    /*----------------------------------------------------*/
    jQuery('.mfp-gallery-container').each(function () { // the containers for all your galleries

        jQuery(this).magnificPopup({
            type: 'image',
            delegate: 'a.mfp-gallery',

            fixedContentPos: true,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: false,
            preloader: true,

            removalDelay: 0,
            mainClass: 'mfp-fade',

            gallery: {
                enabled: true,
                tCounter: ''
            }
        });
    });

    jQuery('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    jQuery('.mfp-image').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-fade',
        image: {
            verticalFit: true
        }
    });

    jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });



    // ------------------ End Document ------------------ //
});

function ready(){

        // jQuery(window).on('scroll load', function () {

        //     if (jQuery(window).width() < '1099') {
        //         jQuery("#header-container").removeClass("cloned");
        //     }

        //     if (jQuery(window).width() > '1099') {

        //         // CSS adjustment
        //         jQuery("#header-container").css({
        //             position: 'fixed',
        //         });

        //         var headerOffset = jQuery("#header-container").height();

        //         if (jQuery(window).scrollTop() >= headerOffset) {
        //             jQuery("#header-container").addClass('cloned');
        //             jQuery(".wrapper-with-transparent-header #header-container").addClass('cloned').removeClass("transparent-header unsticky");
        //         } else {
        //             jQuery("#header-container").removeClass("cloned");
        //             jQuery(".wrapper-with-transparent-header #header-container").addClass('transparent-header unsticky').removeClass("cloned");
        //         }

        //         // Sticky Logo
        //         var transparentLogo = jQuery('#header-container #logo img').attr('data-transparent-logo');
        //         var stickyLogo = jQuery('#header-container #logo img').attr('data-sticky-logo');

        //         if (jQuery('.wrapper-with-transparent-header #header-container').hasClass('cloned')) {
        //             jQuery("#header-container.cloned #logo img").attr("src", stickyLogo);
        //         }

        //         if (jQuery('.wrapper-with-transparent-header #header-container').hasClass('transparent-header')) {
        //             jQuery("#header-container #logo img").attr("src", transparentLogo);
        //         }

        //         jQuery(window).on('load resize', function () {
        //             var headerOffset = jQuery("#header-container").height();
        //             jQuery("#wrapper").css({
        //                 'padding-top': headerOffset
        //             });
        //         });
        //     }
        // });

        function starRating(ratingElem) {

            jQuery(ratingElem).each(function () {

                var dataRating = jQuery(this).attr('data-rating');

                // Rating Stars Output
                function starsOutput(firstStar, secondStar, thirdStar, fourthStar, fifthStar) {
                    return ('' +
                        '<span class="' + firstStar + '"></span>' +
                        '<span class="' + secondStar + '"></span>' +
                        '<span class="' + thirdStar + '"></span>' +
                        '<span class="' + fourthStar + '"></span>' +
                        '<span class="' + fifthStar + '"></span>');
                }

                var fiveStars = starsOutput('star', 'star', 'star', 'star', 'star');

                var fourHalfStars = starsOutput('star', 'star', 'star', 'star', 'star half');
                var fourStars = starsOutput('star', 'star', 'star', 'star', 'star empty');

                var threeHalfStars = starsOutput('star', 'star', 'star', 'star half', 'star empty');
                var threeStars = starsOutput('star', 'star', 'star', 'star empty', 'star empty');

                var twoHalfStars = starsOutput('star', 'star', 'star half', 'star empty', 'star empty');
                var twoStars = starsOutput('star', 'star', 'star empty', 'star empty', 'star empty');

                var oneHalfStar = starsOutput('star', 'star half', 'star empty', 'star empty', 'star empty');
                var oneStar = starsOutput('star', 'star empty', 'star empty', 'star empty', 'star empty');

                // Rules
                if (dataRating >= 4.75) {
                    jQuery(this).append(fiveStars);
                } else if (dataRating >= 4.25) {
                    jQuery(this).append(fourHalfStars);
                } else if (dataRating >= 3.75) {
                    jQuery(this).append(fourStars);
                } else if (dataRating >= 3.25) {
                    jQuery(this).append(threeHalfStars);
                } else if (dataRating >= 2.75) {
                    jQuery(this).append(threeStars);
                } else if (dataRating >= 2.25) {
                    jQuery(this).append(twoHalfStars);
                } else if (dataRating >= 1.75) {
                    jQuery(this).append(twoStars);
                } else if (dataRating >= 1.25) {
                    jQuery(this).append(oneHalfStar);
                } else if (dataRating < 1.25) {
                    jQuery(this).append(oneStar);
                }

            });

        }
        starRating('.star-rating');


    };

