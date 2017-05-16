$(document).ready(function ($) {
    var exSlider = $("#experienceSlider");
    exSlider.owlCarousel({
        items: 3,
        slideSpeed: 600,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [900, 3],
        itemsTablet: [800, 2],
        itemsMobile: [500, 1],
        pagination: false
    });
    var exData = exSlider.data('owlCarousel');


    var exTgt = $('.exp-ctrl').find('.go');
    exTgt.on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('go-left')) {
            exData.prev();
        } else {
            exData.next();
        }
    });


    $('.collapse.in').prev('.panel-heading').addClass('active');
    $('#accordion, #bs-collapse')
            .on('show.bs.collapse', function (a) {
                $(a.target).prev('.panel-heading').addClass('active');
            })
            .on('hide.bs.collapse', function (a) {
                $(a.target).prev('.panel-heading').removeClass('active');
            });







    function getPathFromcourse(url) {
        a = '.';
        if (url.indexOf(a) > -1) {
            return url.split(/[?#]/)[0];
        } else
        {
            return url + '.php';
        }
    }
    var pgurl1course = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    pgurl1course = getPathFromcourse(pgurl1course);
    $("#experienceSlider .single-card-box .card a[href='" + pgurl1course + "']").parent().parent().parent().hide();

});