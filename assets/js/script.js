$(document).ready(function() {
    var owl = $('.owl-carousel');

    owl.owlCarousel({
        loop: true, 
        nav: false, 
        dots: false, 
        margin: 20,
        responsive: {
            992: {
                items: 3 
            },
            768: {
                items: 2 
            },

            0: {
                items: 1 
            }
        }
    });

    $('.awardSlideBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
});



$('.lab-carousel').owlCarousel({
    loop: true, 
    autoplay: true, 
    autoplayTimeout: 1000, 
    autoplayHoverPause: true, 
    nav: false, 
    dots: false,
    margin:10,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
})


$('.client-carousel').owlCarousel({
    loop: true, 
    autoplay: true, 
    autoplayTimeout: 1000, 
    margin: 10, 
    nav: false, 
    dots: true, 
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        700:{
            items:4
        },
        1000:{
            items:6
        }
    }
});


$(document).ready(function() {
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });
});


document.addEventListener('DOMContentLoaded', function () {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
    })
});

document.getElementById('jobOpeningsButton').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('careerOpeningSection').scrollIntoView({ behavior: 'smooth' });
});