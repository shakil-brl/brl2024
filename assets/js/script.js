$('.owl-carousel').owlCarousel({
    loop: true, 
    autoplay: true, 
    autoplayTimeout: 1000, 
    autoplayHoverPause: true, 
    nav: false, 
    dots: false,
    autoWidth:true,
    margin:10,
    items:4,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
})


$('.owl-carousel-client').owlCarousel({
    loop: true, // Enable looping
    margin: 10, // Margin between items
    nav: false, // Enable navigation (optional)
    dots: true, // Enable dots for navigation (optional)
    vertical: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:true
        },
        600:{
            items:4,
            nav:false
        },
        1000:{
            items:6,
            nav:true,
            loop:false
        }
    }
});

var awardCarousel = document.querySelector('#achievementsCarousel');

var nextButton = document.querySelector('.carousel-control-next');


var carouselItems = document.querySelectorAll('.carousel-item');
var numItems = carouselItems.length;
console.log(numItems);
var minScreenWidth = 767;

if (window.matchMedia(`(max-width:${minScreenWidth}px)`).matches) {
    console.log('dddd')
    if (numItems > 1) {
        var carousel = new bootstrap.Carousel(awardCarousel, {
            interval: 2000,
            wrap: true
        });

        var carouselInner = document.querySelector('.carousel-inner');
        var carouselWidth = carouselInner.scrollWidth;
        var imagWidth = document.querySelector('.carousel-item').offsetWidth;

        var scrollPosition = 0;

        nextButton.addEventListener('click', function() {
            scrollPosition += imagWidth;

            if (scrollPosition >= carouselWidth) {
                scrollPosition = 0;
            }

            $(carouselInner).animate({ scrollLeft: scrollPosition }, 600);
        });
    } else {
        nextButton.style.display = 'none';
        $(awardCarousel).removeClass('carousel');
    }
} else {
    console.log('fff')
    if (numItems > 3) {
        $(awardCarousel).addClass('slide');
    }else{
        nextButton.style.display = 'none';
    }
    
}