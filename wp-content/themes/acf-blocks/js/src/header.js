/*******************************************
 * Mobile Menu Stuff *
 * We are using sidr to handle our menu JS *
 * https://www.berriart.com/sidr/ *
 *******************************************/
jQuery(document).ready(function($) {
    var sidrName = "sidr-main";

    $(".mobile-navigation .menu").sidr({
        name: sidrName,
        side: "left",
        source: ".main-navigation, .utility-bar_menu",
        renaming: false,
        onOpen: function() {
            $(window).on("click.sidr", function(e) {
                $.sidr("close", sidrName);
            });

            $("#mobile-menu-toggle").addClass("menu-open");
            $('.site-content').prepend('<div class="mobile-menu-overlay"></div>');
            $('body').addClass('lock-scroll');
            $('.sidr').prepend('<button class="close mobile menu" aria-label="Close mobile menu"><i class="far fa-times"></i></button>');
            $('.sidr .close').click(function() {
                $.sidr("close", sidrName);
            })
        },
        onClose: function() {
            $(window).off("click.sidr");
            $("#mobile-menu-toggle").removeClass("menu-open");
            $('.mobile-menu-overlay').remove();
            $('body').removeClass('lock-scroll');
            $('.sidr .close').remove();
        }
    });

    // Don't you dare close me out!
    $("#" + sidrName).on("click.sidr", function(e) {
        e.stopPropagation();
    });

    $(".sidr .menu-item-has-children").append('<i class="fas fa-caret-down"></i>')

    // Mega-menu functionality
    $(".sidr .menu-item-has-children")
        .find(" > i")
        .on("click", function(e) {
            //e.preventDefault();
            var parent = $(this).parent();
            var parentHTML = parent.children("a:first-child").html();
            var parentLink = parent.children("a:first-child").attr("href");
            if (parent.children(".sub-menu").find($(".parent-page")).length < 1) {
                parent
                    .children(".sub-menu")
            }
            if (parent.children(".sub-menu").length > 0) {
                parent.children(".sub-menu").slideToggle();
            }
            //return false;
        });
});