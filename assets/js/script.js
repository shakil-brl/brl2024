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




function activateMenuItem() {
    const headings = document.querySelectorAll('.middle-content h3');
    const menuItems = document.querySelectorAll('.left-content .menus');

    const topOffset = document.querySelector('.navbar').offsetHeight; // Adjust for fixed navbar height
    const scrollPosition = window.scrollY + topOffset; // Calculate scroll position

    headings.forEach((heading, index) => {
        const headingOffset = heading.offsetTop;

        if (scrollPosition >= headingOffset) {
            // Remove 'active' class from all menu items
            menuItems.forEach(item => item.classList.remove('active'));

            // Add 'active' class to the corresponding menu item
            menuItems[index].classList.add('active');
        }
    });
}


function scrollToHeading(event) {
    event.preventDefault();

    const targetElement = event.target.closest('.menus');
    if (!targetElement) {
        console.error('Clicked element is not a menu item');
        return;
    }

    const href = targetElement.getAttribute('href');
    if (!href) {
        console.error('No href attribute found');
        return;
    }

    const targetId = href.substring(1);
    const targetHeading = document.getElementById(targetId);

    if (targetHeading) {
        const topOffset = document.querySelector('.navbar').offsetHeight; // Adjust for fixed navbar height
        const targetOffset = targetHeading.offsetTop - topOffset; // Calculate target offset

        window.scrollTo({
            top: targetOffset,
            behavior: 'smooth'
        });

        // Remove 'active' class from all menu items
        const menuItems = document.querySelectorAll('.left-content .menus');
        menuItems.forEach(item => item.classList.remove('active'));

        // Add 'active' class to the clicked menu item
        targetElement.classList.add('active');
    } else {
        console.error('Target Heading not found:', targetId);
    }
}

const menuItems = document.querySelectorAll('.left-content .menus');
menuItems.forEach(menuItem => {
    menuItem.addEventListener('click', scrollToHeading);
});

window.addEventListener('scroll', activateMenuItem);
