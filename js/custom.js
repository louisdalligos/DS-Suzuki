$(document).ready(function() {
    var owl = $("#suzuki1_car-gallery");
    owl.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [970, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [750, 2], // betweem 900px and 601px
        itemsTablet: [480, 2], //2 items between 600 and 0
        itemsMobile: [320, 1], // 1 item for mobile
        pagination: false,
        addClassActive: true,
        lazyLoad: true
    });
    // Custom Navigation Events
    $(".next").click(function() {
        owl.trigger('owl.next');
    })
    $(".prev").click(function() {
            owl.trigger('owl.prev');
        })
        // Arrow icons on mobile footer
    $(".suzuki1_widget-title").on('shown.bs.collapse', function() {
        console.log('open');
    });
    $(".suzuki1_widget-title").on('hidden.bs.collapse', function() {
        console.log('close');
    });
    // Check resize window
    checkWindowSize();
    adjustCTAbutton();
    $(window).resize(checkWindowSize);
    $(window).resize(adjustCTAbutton);
    // Slider on quicksearch form
    $(function() {
        $('#price-range').slider({
            max: 100,
            min: 1,
            range: true,
            step: 1,
            values: [23, 46],
            slide: function(event, ui) {
                $("#amount-min").val("$" + ui.values[0] + "K");
                $("#amount-max").val("$" + ui.values[1] + "K");
            }
        });
        $("#amount-min").val("$" + $("#price-range").slider("values", 0) + "K");
        $("#amount-max").val("$" + $("#price-range").slider("values", 1) + "K");
        $('#year-range').slider({
            max: 100,
            min: 1,
            range: true,
            step: 1,
            values: [23, 46]
        });
    });
});
// Mobile Footer Menu Function
function checkWindowSize() {
    var pageWidth = $(window).width();
    if (pageWidth <= 767) {
        $('.suzuki1_widget-title').attr("data-toggle", "collapse");
        $('#suzuki1_contact-wrap, #suzuki1_trading-wrap, #suzuki1_owners-wrap, #suzuki1_vehicles-wrap').addClass("collapse");
    } else {
        $('.suzuki1_widget-title').attr("data-toggle", "");
        $('#suzuki1_contact-wrap, #suzuki1_trading-wrap, #suzuki1_owners-wrap, #suzuki1_vehicles-wrap').removeClass("collapse").css("height", "auto");
    }
}

function adjustCTAbutton() {
    var pageWidth = $(window).width();
    if (pageWidth >= 992) {
        // Cta boxes
        $('.cta > a > span').equalHeight();
        var ctaWidth = $('.cta').width();
        var ctaHeight = $('.cta').height();
        var ctaButtonWidth = ctaWidth / 2;
        var ctaButtonHeight = ctaHeight / 2;
        var ctaPlaceholderHeight = (ctaHeight / 2) + 1;
        var ctaPlaceholderWidth = (ctaWidth / 2) + 1;
        $('.suzuki1_cta-btn, .cta_placeholder').css({
            width: ctaButtonWidth + "px",
            height: ctaButtonHeight + "px"
        });
        $('.cta_placeholder').css({
            width: ctaPlaceholderWidth + "px",
            height: ctaPlaceholderHeight + "px"
        });
    } else {
        $('.suzuki1_cta-btn, .cta_placeholder').css({
            width: "auto",
            height: "auto"
        })
    }
}
$(function() {
    $('#suzuki1_dealer-gmap').gmap3({
        marker: {
            address: "Haltern am See, Weseler Str. 151", // Add dealer address here
            options: {
                icon: new google.maps.MarkerImage("http://clients.cheriomedia.com/martin/suzuki/img/suzuki-gmap-pin.png")
            }
        },
        map: {
            options: {
                zoom: 18,
                navigationControl: false,
                streetViewControl: false
            }
        }
    });
});