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

$('.contact-form input, .contact-form textarea').keyup(function() {
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

});


