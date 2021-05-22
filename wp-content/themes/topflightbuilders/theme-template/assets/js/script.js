$("#contactForm").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'contact.php',
        data: $('#contactForm').serialize() + "&submitContactForm",
        success: function(data) {
            $("#formSuccess").css("display", "none");
            $("#formSuccess").text("");
            $(".formError").css("display", "none");
            $(".formError").text("");

            $(".formShake").css("animation", "none");
            $(".formShake").removeClass("formShake");

            if (data == "success") {
                $("#contactForm")[0].reset();
                $("#formSuccess").css("display", "block");
                $("#formSuccess").text("The form was submitted successfully.");
            } else {
                dataJSON = JSON.parse(data);
                for (i = 0; i < dataJSON.length; i++) {
                    let key = Object.keys(dataJSON[i]);
                    var val = dataJSON[i][key];
                    setTimeout(function() {
                        $("#" + key).prev().addClass("formShake");
                        $("#" + key).prev().css("animation", "shake .5s");
                    }, 10);
                    $("#" + key).text(val);
                    $("#" + key).css("display", "block");
                }
            }
        }
    });
});

$('.js-input').keyup(function() {
    if( $(this).val() ) {
       $(this).addClass('not-empty');
    } else {
       $(this).removeClass('not-empty');
    }
});

$(document).ready(function() {
    $('#reviewsCarousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                }
            }
        ]
    }).on('setPosition', function (event, slick) {
        var stHeight = $('.slick-track').height();
        $('.slick-slide').css('height',stHeight + 'px' );
    });

    //var $animation_elements = $('.up-animation');
    /*var $window = $(window);

    $window.on('scroll resize', function() {
        check_if_in_view('.up-animation', 'do-up-animation');
        check_if_in_view('.grow-animation', 'do-grow-animation');
        check_if_in_view('.slide-left', 'do-slide-left');
    });

    $window.trigger('scroll');

    function check_if_in_view(elementToCheck, animationToAdd) {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        
        var $element = $(elementToCheck);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass(animationToAdd);
        }
    }*/

});

// onMouseEnter={(e) => this.showCardInfo(competition.id)} onMouseLeave={(e) => this.showCardInfo(competition.id)}