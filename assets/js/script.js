var awardCarousel = document.querySelector('#achievementsCarousel');

var nextButton = document.querySelector('.carousel-control-next');


var carouselItems = document.querySelectorAll('.carousel-item');
var numItems = carouselItems.length;
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
    if (numItems > 3) {
        $(awardCarousel).addClass('slide');
    }else{
        nextButton.style.display = 'none';
    }
    
}



$(document).ready(function() {
    alert('dsfdsfd')
    // const sliderTrack = $("#sliderTrack");
    // const sliderContainer = $(".slider-container");

    // // Calculate the width of the slider container
    // const containerWidth = sliderContainer.width();

    // // Set the track's initial left position
    // sliderTrack.css("left", 0);

    // // Function to slide the track
    // function slide() {
    //     // Animate the sliding effect
    //     sliderTrack.animate(
    //         { left: `-=${containerWidth}` },
    //         2000, // Duration of each animation in milliseconds (adjust as needed)
    //         "linear",
    //         function() {
    //             // Once the animation completes, move the first image to the end of the track
    //             const firstImage = $(".slider-item").first();
    //             sliderTrack.append(firstImage);

    //             // Reset the track's left position to continue the loop
    //             sliderTrack.css("left", 0);

    //             // Recursively call the function to continue the sliding
    //             slide();
    //         }
    //     );
    // }

    // // Start the sliding animation
    // slide();
});
