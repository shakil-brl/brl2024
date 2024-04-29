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