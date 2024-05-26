<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;900&family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/style.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" type="text/css" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/frontend/assets/images/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Case Studies</a>
                </li>

                <li class="dropdown-center nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <div class="nav-dropdown-section dropdown-lg">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="row row-left">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/uud.png') }}" alt="Image Description">
                                                </div>
                                                <p>UX/UI DESIGN</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/gd.png') }}" alt="Image Description">
                                                </div>
                                                <p>Games Development</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/mad.png') }}" alt="Image Description">
                                                </div>
                                                <p>Mobile App Development</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/oot.png') }}" alt="Image Description">
                                                </div>
                                                <p>Online/offline training</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/wdd.png') }}" alt="Image Description">
                                                </div>
                                                <p>Web design & Development</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/ts.png') }}" alt="Image Description">
                                                </div>
                                                <p>Technical Support</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row row-right">
                                        <div class="col-12">
                                            <a href="work_process.html" class="btn-workprocess">Our Work Process<span class="material-symbols-outlined">call_made</span></a>
                                        </div>

                                        <div class="col-12">
                                            <div class="btn-capabilites">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                        <path d="M36 8C37.66 8 39 9.34 39 11V37C39 38.66 37.66 40 36 40C34.34 40 33 38.66 33 37V11C33 9.34 34.34 8 36 8ZM12 28C13.66 28 15 29.34 15 31V37C15 38.66 13.66 40 12 40C10.34 40 9 38.66 9 37V31C9 29.34 10.34 28 12 28ZM24 18C25.66 18 27 19.34 27 21V37C27 38.66 25.66 40 24 40C22.34 40 21 38.66 21 37V21C21 19.34 22.34 18 24 18Z" fill="white"/>
                                                    </svg>
                                                </div>

                                                <a href="">
                                                    Our Capabilities
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <div class="nav-dropdown-section dropdown-lg">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="row row-left">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/pe.png') }}" alt="Image Description">
                                                </div>
                                                <p>PROTTAY ERP</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/o11.png') }}" alt="Image Description">
                                                </div>
                                                <p>ORA 11 JON VR</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/lc.png') }}" alt="Image Description">
                                                </div>
                                                <p>LEARNERS CAFE LMS</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/pe.png') }}" alt="Image Description">
                                                </div>
                                                <p>PROTTAY ERP</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/o11.png') }}" alt="Image Description">
                                                </div>
                                                <p>ORA 11 JON VR</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a href="" class="dropdown-property">
                                                <div class="dropdown-image">
                                                    <img src="{{ asset('assets/frontend/assets/images/dropdown/phr.png') }}" alt="Image Description">
                                                </div>
                                                <p>PROTTAY HRMS</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">

                                    <div class="col-12">
                                        <a href="" class="dropdown-property">
                                            <div class="dropdown-image">
                                                <img src="{{ asset('assets/frontend/assets/images/dropdown/phr.png') }}" alt="Image Description">
                                            </div>
                                            <p>PROTTAY HRMS</p>
                                        </a>
                                    </div>

                                    <div class="col-12">
                                        <div class="btn-all-products">
                                            <div class="fonts-product">
                                                <h1>+12</h1>
                                                <a href="">
                                                    See All Products
                                                </a>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <div class="nav-dropdown-section dropdown-md">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="about-menus">
                                        <a href="about.html" class="dropdown-property-about">
                                            ABOUT US
                                        </a>

                                        <a href="#" class="dropdown-property-about">
                                            FAQ's
                                        </a>

                                        <a href="#" class="dropdown-property-about">
                                            blogs
                                        </a>

                                        <a href="#" class="dropdown-property-about">
                                            Help & support
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <a href="" class="btn-teams-nav">
                                        <div class="members-area">
                                            <h2>Our Teams</h2>
                                            <div class="members">
                                                <div class="avaters">
                                                    <img src="{{ asset('assets/frontend') }}/assets/images/members/1.png" alt="">
                                                    <img src="{{ asset('assets/frontend') }}/assets/images/members/2.png" alt="">
                                                    <img src="{{ asset('assets/frontend') }}/assets/images/members/3.png" alt="">
                                                </div>
                                                <div class="total-count">
                                                    <p>+74</p>
                                                </div>

                                                <p class="member">Members</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="btn-events">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                            <path d="M38 8H36V6C36 4.9 35.1 4 34 4C32.9 4 32 4.9 32 6V8H16V6C16 4.9 15.1 4 14 4C12.9 4 12 4.9 12 6V8H10C7.78 8 6.02 9.8 6.02 12L6 40C6 42.2 7.78 44 10 44H38C40.2 44 42 42.2 42 40V12C42 9.8 40.2 8 38 8ZM36 40H12C10.9 40 10 39.1 10 38V18H38V38C38 39.1 37.1 40 36 40ZM16 22H22C23.1 22 24 22.9 24 24V30C24 31.1 23.1 32 22 32H16C14.9 32 14 31.1 14 30V24C14 22.9 14.9 22 16 22Z" fill="white"/>
                                        </svg>

                                        <h1>Events</h1>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="career.html">Careers</a>
                </li>
            </ul>

            <div class="nav-button text-center"> <!-- Separate container for the button -->
                <a class="btn btn-linkPage" href="#">Contact Us <span class="material-symbols-outlined">call_made</span></a>
            </div>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="center-content">
                <h1>Empowering Businesses <br> with Innovative Solutions</h1>
                <p>
                    We specialize in delivering cutting-edge software solutions tailored to meet
                    the unique needs of businesses, customers, and government entities. With a
                    passion for technology and a commitment to quality, we empower
                    organizations to thrive in today'sdigital landscape.
                </p>
            </div>


            <a class="btn btn-explore" href="#"><span class="material-symbols-outlined">
                    rocket_launch
                    </span>Explore Us</a>
            <a class="btn btn-linkPage hero-link-page" href="#">Let's Talk <span class="material-symbols-outlined">call_made</span></a>

        </div>

        <div class="hero-bottom">
            <p>Trusted by more than 2k+ Organization</p>
            <div class="images">
                <img src="{{ asset('assets/frontend/assets/images/ict.png') }}">
                <img src="{{ asset('assets/frontend/assets/images/gp.png') }}">
                <img src="{{ asset('assets/frontend/assets/images/mia.png') }}">
                <img src="{{ asset('assets/frontend/assets/images/tt.png') }}">
                <img src="{{ asset('assets/frontend/assets/images/cisco.png') }}">
                <img src="{{ asset('assets/frontend/assets/images/buet.png') }}">
            </div>
        </div>
    </div>
</section>

<section class="about" id="aboutSection">
    <div class="container">
        <div class="status">
            <div class="row status-content">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="status-item">
                        <h2>10+</h2>
                        <p>Years<br>of Experience</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="status-item">
                        <h2>70+</h2>
                        <p>IT<br>Professionals</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="status-item margin-top">
                        <h2>1M+</h2>
                        <p>Users<br>Worldwide</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="status-item margin-top">
                        <h2>10+</h2>
                        <p>Tech<br>Partners</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="status-item margin-top">
                        <h2>15+</h2>
                        <p>Tech<br>Products</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="status-item margin-top">
                        <h2>1.5K+</h2>
                        <p>Projects<br>Completed</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="info">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-12 col-sm-12 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="leftContent">
                        <p>
                            Babylon Resources Ltd. (BRL), established in 2014, is a
                            leading Bangladeshi software development firm passionate about
                            empowering businesses and individuals through innovative technology
                            solutions. We are driven by a commitment to excellence, unwavering
                            integrity, and a desire to create positive social impact.
                        </p>
                        <br>
                        <p>
                            As part of the esteemed Babylon Group,
                            founded in 1986, we share their entrepreneurial
                            spirit and dedication to continuous growth.
                            We are proud to be a Bangladeshi company making
                            a global impact and look forward to continuing to
                            transform businesses, lives, and the world around us.
                        </p>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="aboutImageLeft">
                                    <img src="{{ asset('assets/frontend') }}/assets/images/about/1.png" alt="Your Image" height="200px" width="360px">
                                    <div class="text-overlay">
                                        <h2>Business to Business(B2B)</h2>
                                        <p>Creating user-centric experiences: Designing engaging and feature-rich mobile applications for B2C clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="aboutImageLeft">
                                    <img src="{{ asset('assets/frontend/assets/images/about/2.png') }}" alt="Your Image" height="200px" width="360px">
                                    <div class="text-overlay">
                                        <h2>Business to Consumer(B2C)</h2>
                                        <p>Creating user-centric experiences: Designing engaging and feature-rich mobile applications for B2C clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="aboutImageLeft">
                                    <img src="{{ asset('assets/frontend/assets/images/about/3.png') }}" alt="Your Image" height="200px" width="360px">
                                    <div class="text-overlay">
                                        <h2>Business to Government(B2G)</h2>
                                        <p>Creating user-centric experiences: Designing engaging and feature-rich mobile applications for B2C clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="aboutImageLeft">
                                    <img src="{{ asset('assets/frontend/assets/images/about/4.png') }}" alt="Your Image" height="200px" width="360px">
                                    <div class="text-overlay">
                                        <h2>ONLINE/OFFLINE TRAINING</h2>
                                        <p>Creating user-centric experiences: Designing engaging and feature-rich mobile applications for B2C clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="aboutMore">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <a class="btn btn-companyDeskDownload" href="#">
                                            <span class="material-symbols-outlined companyDownloadIcon">
                                                file_download
                                            </span>

                                        <span>
                                                <h5>Download Company Deck</h5>
                                                <p>PDF, 3.5MB</p>
                                            </span>
                                    </a>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <a class="btn btn-moreInfo" href="#">
                                            <span class="material-symbols-outlined moreInfoIcon">
                                                north_east
                                            </span>
                                        <span>
                                                <h5> More About Us</h5>
                                                <p>Tems,Life At BRL, Events</p>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <p>
                            We are relentless in our pursuit of innovation.
                            We continuously strive to develop and launch new
                            products and services that address your evolving needs,
                            regardless of your sector. Our commitment goes beyond just
                            technology – we are dedicated to delivering exceptional service.
                            Our goal is zero customer service complaints, ensuring your
                            satisfaction is paramount.
                        </p>
                        <br>


                        <div class="achievements">
                            <button class="owl-next awardSlideBtn" type="button">
                                <span class="visually-hidden">Next</span>
                                <span class="material-symbols-outlined awardSlideIcon">
                                        keyboard_arrow_right
                                    </span>
                            </button>
                            <div class="owl-carousel owl-theme">
                                <div class="achivementImgContainer">
                                    <img src="{{ asset('assets/frontend/assets/images/award.png') }}" alt="Achievement 1">
                                    <h3>BASIS ICT AWARD 2021</h3>
                                </div>
                                <div class="achivementImgContainer">
                                    <img src="{{ asset('assets/frontend/assets/images/award.png') }}" alt="Achievement 2">
                                    <h3>BASIS ICT AWARD 2022</h3>
                                </div>
                                <div class="achivementImgContainer">
                                    <img src="{{ asset('assets/frontend/assets/images/award.png') }}" alt="Achievement 3">
                                    <h3>BASIS ICT AWARD 2023</h3>
                                </div>
                                <div class="achivementImgContainer">
                                    <img src="{{ asset('assets/frontend/assets/images/award.png') }}" alt="Achievement 4">
                                    <h3>BASIS ICT AWARD 2024</h3>
                                </div>
                            </div>

                        </div>



                        <p>
                            We are relentless in our pursuit of innovation.
                            We continuously strive to develop and launch new products
                            and services that address your evolving needs, regardless of your sector.
                        </p>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="rightContent">
                        <h1>
                            Founded on Innovation, Driven by Impact
                        </h1>
                        <div class="allEmpImgContainer">
                            <img class="all-emp-img" src="{{ asset('assets/frontend/assets/images/allEmp.jpeg') }}" alt="All Employees">
                            <div class="overlay">
                                <a href="https://www.youtube.com/watch?v=NQDom2gxiVc" class="play-link video-popup">
                                        <span class="play-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                                <path d="M27.9998 4.66663C15.1198 4.66663 4.6665 15.12 4.6665 28C4.6665 40.88 15.1198 51.3333 27.9998 51.3333C40.8798 51.3333 51.3332 40.88 51.3332 28C51.3332 15.12 40.8798 4.66663 27.9998 4.66663ZM23.3332 36.1666V19.8333C23.3332 18.8766 24.4298 18.3166 25.1998 18.9L36.0965 27.0666C36.7265 27.5333 36.7265 28.4666 36.0965 28.9333L25.1998 37.1C24.4298 37.6833 23.3332 37.1233 23.3332 36.1666Z" fill="white"/>
                                            </svg>
                                        </span>
                                    <span class="play-text">Play Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="product-section">
    <div class="container">
        <h1 class="section-heding">Featured Products</h1>

        <div class="row g-4">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="" class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/Layer_1.png') }}">
                    </div>

                    <h3>Prottay ERP</h3>
                    <p>Complete ERP solution for RMG sector </p>

                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="" class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/Layer_1 (1).png') }}">
                    </div>

                    <h3>Ora 11 Jon VR</h3>
                    <p>An epic war game based on some true stories</p>

                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href=""  class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/Layer_1 (2).png') }}">
                    </div>

                    <h3>LearnersCafe LMS</h3>
                    <p>An upgraded e-learning management system. </p>

                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href=""  class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/hrms.png') }}">
                    </div>

                    <h3>Prottay HRMS</h3>
                    <p>A HRMS solution to manage mass number of workers. </p>

                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href=""  class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/Layer_1 (2).png') }}">
                    </div>

                    <h3>LearnersCafe LMS</h3>
                    <p>An upgraded e-learning management system.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href=""  class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/hrms.png') }}">
                    </div>

                    <h3>Prottay HRMS</h3>
                    <p>A HRMS solution to manage mass number of workers.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href=""  class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/Layer_1 (1).png') }}">
                    </div>

                    <h3>Ora 11 Jon VR</h3>
                    <p>An epic war game based on some true stories</p>

                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href=""  class="productCard">
                    <div class="productImage">
                        <img src="{{ asset('assets/frontend/assets/images/product/Layer_1.png') }}">
                    </div>

                    <h3>prottay eRP</h3>
                    <p>Complete ERP Solution for RMG sector</p>

                </a>
            </div>

        </div>

        <div class="text-center" style="margin-top: 30px;@media (min-width:768px) and (max-width: 992px) {margin-bottom: 48px;}">
            <a class="btn btn-linkPage" href="#">See More <span class="material-symbols-outlined">call_made</span></a></a>
        </div>

    </div>
</section>

<section class="projectSection">
    <div class="container">
        <h1 class="section-heding">Featured Projects</h1>

        <div class="row g-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projectCard">
                    <div class="row" style="height: 100%;">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <img class="projectImage" src="{{ asset('assets/frontend/assets/images/project/pr1.png') }}">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="projectDetails">
                                <div class="projectInfo">
                                    <h4>Salescare</h4>
                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                category
                                            </span>
                                        Fintech, E-commerce
                                    </div>

                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                villa
                                            </span>
                                        Babylon Agri science Ltd.
                                    </div>

                                    <div class="projectTags">
                                        <div class="tag">uI/UX Design</div>
                                        <div class="tag">Web App</div>
                                        <div class="tag">Mobile App</div>
                                    </div>
                                </div>

                                <div class="projectFooter">
                                    <a class="case" href="#">Case Study</a>
                                    <a class="live" href="#">View Live</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projectCard">
                    <div class="row" style="height: 100%;">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <img class="projectImage" src="{{ asset('assets/frontend/assets/images/project/pr2.png') }}">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="projectDetails">
                                <div class="projectInfo">
                                    <h4>Prottay HRMS</h4>
                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                category
                                            </span>
                                        Edtech platform
                                    </div>

                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                villa
                                            </span>
                                        Babylon Resources Ltd.
                                    </div>

                                    <div class="projectTags">
                                        <div class="tag">uI/UX Design</div>
                                        <div class="tag">Web App</div>
                                        <div class="tag">Mobile App</div>
                                    </div>
                                </div>
                                <div class="projectFooter">
                                    <a class="case" href="#">Case Study</a>
                                    <a class="live" href="#">View Live</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projectCard">
                    <div class="row" style="height: 100%;">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <img class="projectImage" src="{{ asset('assets/frontend/assets/images/project/pr3.png') }}">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="projectDetails">
                                <div class="projectInfo">
                                    <h4>FoodiPOS</h4>
                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                category
                                            </span>
                                        POS System
                                    </div>

                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                villa
                                            </span>
                                        Babylon Agri science Ltd.
                                    </div>

                                    <div class="projectTags">
                                        <div class="tag">uI/UX Design</div>
                                        <div class="tag">Web App</div>
                                        <div class="tag">Mobile App</div>
                                    </div>


                                </div>

                                <div class="projectFooter">
                                    <a class="case" href="#">Case Study</a>
                                    <a class="live" href="#">View Live</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projectCard">
                    <div class="row" style="height: 100%;">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <img class="projectImage" src="{{ asset('assets/frontend/assets/images/project/pr4.png') }}">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="projectDetails">
                                <div class="projectInfo">
                                    <h4>BRL Training</h4>
                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                category
                                            </span>
                                        Edtech platform
                                    </div>

                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                villa
                                            </span>
                                        Babylon Resources Ltd.
                                    </div>

                                    <div class="projectTags">
                                        <div class="tag">uI/UX Design</div>
                                        <div class="tag">Web App</div>
                                        <div class="tag">Mobile App</div>
                                    </div>
                                </div>

                                <div class="projectFooter">
                                    <a class="case" href="#">Case Study</a>
                                    <a class="live" href="#">View Live</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projectCard">
                    <div class="row" style="height: 100%;">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <img class="projectImage" src="{{ asset('assets/frontend/assets/images/project/pr5.png') }}">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="projectDetails">
                                <div class="projectInfo">
                                    <h4>Content Repository Management System</h4>
                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                category
                                            </span>
                                        Fintech, E-commerce
                                    </div>

                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                villa
                                            </span>
                                        Babylon Agri science Ltd.
                                    </div>

                                    <div class="projectTags">
                                        <div class="tag">uI/UX Design</div>
                                        <div class="tag">Web App</div>
                                        <div class="tag">Mobile App</div>
                                    </div>
                                </div>

                                <div class="projectFooter">
                                    <a class="case" href="#">Case Study</a>
                                    <a class="live" href="#">View Live</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projectCard">
                    <div class="row" style="height: 100%;">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <img class="projectImage" src="{{ asset('assets/frontend/assets/images/project/pr6.png') }}">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="projectDetails">
                                <div class="projectInfo">
                                    <h4>Salescare</h4>
                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                category
                                            </span>
                                        Fintech, E-commerce
                                    </div>

                                    <div class="project">
                                            <span class="material-symbols-outlined projectIcon">
                                                villa
                                            </span>
                                        Babylon Agri science Ltd.
                                    </div>

                                    <div class="projectTags">
                                        <div class="tag">uI/UX Design</div>
                                        <div class="tag">Web App</div>
                                        <div class="tag">Mobile App</div>
                                    </div>
                                </div>

                                <div class="projectFooter">
                                    <a class="case" href="#">Case Study</a>
                                    <a class="live" href="#">View Live</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top: 30px;">
            <a class="btn btn-linkPage" href="#">See More <span class="material-symbols-outlined">call_made</span></a>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h1 class="section-heding">Our Services</h1>

        <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="serviceCard">
                    <div class="service-image">
                        <img src="{{ asset('assets/frontend/assets/images/service/1.png') }}">
                    </div>

                    <div class="serviceContent">
                        <h4>UX/UI DESIGN</h4>
                        <p>
                            Offering appealing and
                            functional UI/UX design
                            services that attract and engage users
                        </p>
                    </div>
                    <a class="btn btn-service" href="#">Learn More <span class="material-symbols-outlined">call_made</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="serviceCard">
                    <div class="service-image">
                        <img src="{{ asset('assets/frontend/assets/images/service/2.png') }}">
                    </div>

                    <div class="serviceContent">
                        <h4>Mobile App Development</h4>
                        <p>
                            Offering appealing and
                            functional UI/UX design
                            services that attract and engage users
                        </p>
                    </div>
                    <a class="btn btn-service" href="#">Learn More <span class="material-symbols-outlined">call_made</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="serviceCard">
                    <div class="service-image">
                        <img src="{{ asset('assets/frontend/assets/images/service/3.png') }}">
                    </div>

                    <div class="serviceContent">
                        <h4>Web design & Development</h4>
                        <p>
                            Offering appealing and
                            functional UI/UX design
                            services that attract and engage users
                        </p>
                    </div>
                    <a class="btn btn-service" href="#">Learn More <span class="material-symbols-outlined">call_made</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="serviceCard">
                    <div class="service-image">
                        <img src="{{ asset('assets/frontend/assets/images/service/4.png') }}">
                    </div>

                    <div class="serviceContent">
                        <h4>Games Development</h4>
                        <p>
                            Offering appealing and
                            functional UI/UX design
                            services that attract and engage users
                        </p>
                    </div>
                    <a class="btn btn-service" href="#">Learn More <span class="material-symbols-outlined">call_made</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="serviceCard">
                    <div class="service-image">
                        <img src="{{ asset('assets/frontend/assets/images/service/5.png') }}">
                    </div>

                    <div class="serviceContent">
                        <h4>Online/offline training</h4>
                        <p>
                            Offering appealing and
                            functional UI/UX design
                            services that attract and engage users
                        </p>
                    </div>
                    <a class="btn btn-service" href="#">Learn More <span class="material-symbols-outlined">call_made</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="serviceCard">
                    <div class="service-image">
                        <img src="{{ asset('assets/frontend/assets/images/service/6.png') }}">
                    </div>

                    <div class="serviceContent">
                        <h4>Technical support</h4>
                        <p>
                            Offering appealing and
                            functional UI/UX design
                            services that attract and engage users
                        </p>
                    </div>
                    <a class="btn btn-service" href="#">Learn More <span class="material-symbols-outlined">call_made</span></a>
                </div>
            </div>
        </div>

        <div class="footerButton">
            <a class="btn btn-explore" href="#"><span class="material-symbols-outlined">signal_cellular_alt</span>Our Capabilities</a>

            <a class="btn btn-linkPage" href="#">Our Work Process<span class="material-symbols-outlined">call_made</span></a>

        </div>
    </div>
</section>

<section class="testimonial">
    <div class="container">
        <h1 class="section-heding">Testimonials</h1>

        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBody">
                        <p>
                            আমি ক্যারিয়ারকি-র সাইকোমেট্রিক টেস্ট নেওয়ার আগে,
                            আমি আমার ক্যারিয়ারের পথ নিয়ে একটু হতাশ ছিলাম।
                            কিন্তু টেস্টটি নেওয়ার পরে এবং রিপোর্টটি পড়ার পরে,
                            আমার চোখ খুলে গেল! ক্যারিয়ারকি আমাকে  এখন আমি
                            এবং আমার স্বপ্নের ক্যারিয়ারের দিকে আরও আত্মবিশ্বাসী।
                        </p>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBodyImage">
                        <img src="{{ asset('assets/frontend/assets/images/testimonial/1.png') }}" alt="">
                        <a href="https://www.youtube.com/watch?v=NQDom2gxiVc" class="playIcon video-popup">
                            <span class="material-symbols-outlined">play_arrow</span>
                        </a>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBody">
                        <p>
                            আমি ক্যারিয়ারকি-র সাইকোমেট্রিক টেস্ট নেওয়ার আগে,
                            আমি আমার ক্যারিয়ারের পথ নিয়ে একটু হতাশ ছিলাম।
                            কিন্তু টেস্টটি নেওয়ার পরে এবং রিপোর্টটি পড়ার পরে,
                            আমার চোখ খুলে গেল! ক্যারিয়ারকি আমাকে  এখন আমি
                            এবং আমার স্বপ্নের ক্যারিয়ারের দিকে আরও আত্মবিশ্বাসী।
                        </p>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBodyImage">
                        <img src="{{ asset('assets/frontend/assets/images/testimonial/1.png') }}" alt="">
                        <a href="https://www.youtube.com/watch?v=NQDom2gxiVc" class="playIcon video-popup">
                            <span class="material-symbols-outlined">play_arrow</span>
                        </a>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBodyImage">
                        <img src="{{ asset('assets/frontend/assets/images/testimonial/1.png') }}" alt="">
                        <a href="https://www.youtube.com/watch?v=NQDom2gxiVc" class="playIcon video-popup">
                            <span class="material-symbols-outlined">play_arrow</span>
                        </a>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBody">
                        <p>
                            আমি ক্যারিয়ারকি-র সাইকোমেট্রিক টেস্ট নেওয়ার আগে,
                            আমি আমার ক্যারিয়ারের পথ নিয়ে একটু হতাশ ছিলাম।
                            কিন্তু টেস্টটি নেওয়ার পরে এবং রিপোর্টটি পড়ার পরে,
                            আমার চোখ খুলে গেল! ক্যারিয়ারকি আমাকে  এখন আমি
                            এবং আমার স্বপ্নের ক্যারিয়ারের দিকে আরও আত্মবিশ্বাসী।
                        </p>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBodyImage">
                        <img src="{{ asset('assets/frontend/assets/images/testimonial/1.png') }}" alt="">
                        <a href="https://www.youtube.com/watch?v=NQDom2gxiVc" class="playIcon video-popup">
                            <span class="material-symbols-outlined">play_arrow</span>
                        </a>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="testimonialCard">
                    <div class="cardHeader">
                        <div class="personImage">
                            <img src="{{ asset('assets/frontend/assets/images/person.png') }}">

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="6.5" fill="#22C55E" stroke="white" stroke-width="3"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="personInfo">
                            <div class="personName">Bidya Sinha Saha Mim</div>
                            <div class="personDesingnation">Professional UI/UX Designer</div>
                        </div>
                    </div>

                    <div class="cardBody">
                        <p>
                            আমি ক্যারিয়ারকি-র সাইকোমেট্রিক টেস্ট নেওয়ার আগে,
                            আমি আমার ক্যারিয়ারের পথ নিয়ে একটু হতাশ ছিলাম।
                            কিন্তু টেস্টটি নেওয়ার পরে এবং রিপোর্টটি পড়ার পরে,
                            আমার চোখ খুলে গেল! ক্যারিয়ারকি আমাকে  এখন আমি
                            এবং আমার স্বপ্নের ক্যারিয়ারের দিকে আরও আত্মবিশ্বাসী।
                        </p>
                    </div>

                    <div class="cardFooter">
                        <p>
                            5.0

                            <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99984 14.8085L15.1498 17.9168L13.7832 12.0585L18.3332 8.11683L12.3415 7.6085L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502V5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.3332 8.11683L12.3415 7.60016L9.99984 2.0835L7.65817 7.6085L1.6665 8.11683L6.2165 12.0585L4.84984 17.9168L9.99984 14.8085L15.1498 17.9168L13.7915 12.0585L18.3332 8.11683ZM9.99984 13.2502L6.8665 15.1418L7.69984 11.5752L4.93317 9.17516L8.58317 8.8585L9.99984 5.50016L11.4248 8.86683L15.0748 9.1835L12.3082 11.5835L13.1415 15.1502L9.99984 13.2502Z" fill="#EAB308"/>
                                    </svg>
                                </span>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top: 30px;">
            <a class="btn btn-linkPage" href="#">See More <span class="material-symbols-outlined">call_made</span></a>
        </div>
    </div>
</section>

<section class="blogs">
    <div class="container">
        <h1 class="section-heding">Our Blogs</h1>

        <div class="row rowBlogs g-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blogsCard">
                    <div class="cardImage">
                        <img src="{{ asset('assets/frontend/assets/images/blogs/1.png') }}" alt="Blog Image">
                        <div class="cardBody">
                            <div class="tagArea">
                                <div class="cardTag">
                                    <a href="#">Branding</a>
                                </div>
                                <div class="cardTag">
                                    <a href="#">UI/UX Design</a>
                                </div>
                            </div>

                            <a href="#"  class="card-title">
                                <h3>Why Should Give Your Design Agency The Freedom To Innovate?</h3>
                            </a>

                            <div class="card-footer">
                                <p>8 Min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blogsCard">
                    <div class="cardImage">
                        <img src="{{ asset('assets/frontend/assets/images/blogs/2.png') }}" alt="Blog Image">
                        <div class="cardBody">
                            <div class="tagArea">
                                <div class="cardTag">
                                    <a href="#">Web App</a>
                                </div>
                            </div>

                            <a href="#"  class="card-title">
                                <h3>Why Should Give Your Design Agency The Freedom To Innovate?</h3>
                            </a>

                            <div class="card-footer">
                                <p>8 Min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blogsCard">
                    <div class="cardImage">
                        <img src="{{ asset('assets/frontend/assets/images/blogs/3.png') }}" alt="Blog Image">
                        <div class="cardBody">
                            <div class="tagArea">
                                <div class="cardTag">
                                    <a href="#">UI/UX Design</a>
                                </div>
                                <div class="cardTag">
                                    <a href="#">Web Development</a>
                                </div>
                            </div>

                            <a href="#" class="card-title">
                                <h3>Why Should Give Your Design Agency The Freedom To Innovate?</h3>
                            </a>

                            <div class="card-footer">
                                <p>8 Min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top: 30px;">
            <a class="btn btn-linkPage" href="#">See More <span class="material-symbols-outlined">call_made</span></a>
        </div>
    </div>
</section>


<section class="inquiry">
    <div class="container">
        <h1 class="section-heding">Have a Project Idea?</h1>

        <div class="rowInquiry">
            <div class="row gx-5">
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                    <div class="inqImage">
                        <img src="{{ asset('assets/frontend/assets/images/inq.png') }}" alt="">
                    </div>
                </div>

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <div class="inqForm">
                        <form action="{{ route('project.idea') }}" method="POST">
                            @csrf
                            <div class="formElement">
                                <div class="tagsArea">
                                    <p>I’m interested in...</p>

                                    <div class="tags">
                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="branding" value="Branding"/>
                                            <label for="branding">Branding</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="uiux" value="UI/UX Design"/>
                                            <label for="uiux">UI/UX Design</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="modeling" value="3D Modeling"/>
                                            <label for="modeling">3D Modeling</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="webdesign" value="Web Design"/>
                                            <label for="webdesign">Web Design</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="wordpress" value="WordPress"/>
                                            <label for="wordpress">WordPress</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="webdev" value="Web Development"/>
                                            <label for="webdev">Web Development</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="appdev" value="App Development"/>
                                            <label for="appdev">App Development</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="marketing" value="Marketing"/>
                                            <label for="marketing">Marketing</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="mobiledesign" value="Mobile App Design"/>
                                            <label for="mobiledesign">Mobile App Design</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="gamesdev" value="Games Development"/>
                                            <label for="gamesdev">Games Development</label>
                                        </div>

                                        <div class="tag">
                                            <input type="checkbox" name="project_tags[]" id="enquiry" value="General Enquiry"/>
                                            <label for="enquiry">General Enquiry</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="formItemWide">
                                    <label class="formLabel">
                                        Project Details*<button type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Tell us about your project"><span class="material-symbols-outlined">info</span></button>
                                    </label>

                                    <div class="formInput">
                                        <span class="material-symbols-outlined">description</span>
                                        <div class="inputArea">
                                            <input type="text" name="project_details" value="{{old('project_details')}}" placeholder="Tell us about your project">
                                        </div>
                                    </div>
                                    @error('project_details')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="formItemWide">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="formItem">
                                                <label class="formLabel">
                                                    Full Name <button type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Enter your full name"><span class="material-symbols-outlined">info</span></button>
                                                </label>

                                                <div class="formInput">
                                                    <span class="material-symbols-outlined">person</span>
                                                    <div class="inputArea">
                                                        <input type="text" name="full_name" value="{{old('full_name')}}" placeholder="Write your Name">
                                                    </div>
                                                </div>
                                                @error('full_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="formItem">
                                                <label class="formLabel">
                                                    Company Name<button type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Enter your Comopany name as per licence"><span class="material-symbols-outlined">info</span></button>
                                                </label>

                                                <div class="formInput">
                                                    <span class="material-symbols-outlined">business</span>
                                                    <div class="inputArea">
                                                        <input type="text" name="company_name" value="{{old('company_name')}}" placeholder="Write your company name">
                                                    </div>
                                                </div>
                                                @error('company_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="formItemWide">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="formItem">
                                                <label class="formLabel">
                                                    Email*<button type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Enter your personal email"><span class="material-symbols-outlined">info</span></button>
                                                </label>

                                                <div class="formInput">
                                                    <span class="material-symbols-outlined">email</span>
                                                    <div class="inputArea">
                                                        <input type="email" name="email" value="{{old('email')}}" placeholder="Write your Email">
                                                    </div>
                                                </div>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="formItem">
                                                <label class="formLabel">
                                                    Mobile Number<button type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Enter your phone number with country code select"><span class="material-symbols-outlined">info</span></button>
                                                </label>

                                                <div class="formInput">
                                                    <span class="material-symbols-outlined">phone_iphone</span>
                                                    <div class="mobileNoInputArea">
                                                        <select name="code" id="">
                                                            <option value="+880">+880</option>
                                                            <option value="+99">+99</option>
                                                        </select>
                                                        <input type="text" name="number" value="{{old('number')}}" placeholder="Ex. 01885780820">
                                                    </div>
                                                </div>
                                                @error('number')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="formFooter">
                                <button type="submit" class="btn btn-button" href="#">Send Inquiry <span class="material-symbols-outlined">call_made</span></button>
                                <p>*We keep your data safe & Secure</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footerTop">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="leftContent">
                        <img src="{{ asset('assets/frontend/assets/images/logo_w.png') }}" class="footerLogo" alt="">
                        <p>
                            Babylon Resources Ltd. is a
                            leading IT firm which develops
                            & implements different IT solutions
                            to make your business life easier.
                        </p>

                        <div class="footerContact">
                            <p>
                                <span class="material-symbols-outlined footerIcon">call</span>
                                +880 1707 081 370
                            </p>

                            <p>
                                <span class="material-symbols-outlined footerIcon">mail</span>
                                brlinfo@babylon-bd.com
                            </p>

                            <p>
                                <span class="material-symbols-outlined footerIcon">place</span>
                                Floor – 7A, House 3/1, Block F, Lalmatia, Mohammadpur, Dhaka 1207

                            </p>

                            <div class="contactInfoText">
                                Google Map Direction
                            </div>

                            <p>
                                <span class="material-symbols-outlined footerIcon">access_time_filled</span>
                                Office Hours<br>
                            </p>

                            <div class="contactInfoText">
                                Sunday - Thursday
                            </div>

                            <div class="contactInfoText">
                                9:00 AM to 6:00 PM
                            </div>


                            <p>
                                <span class="material-symbols-outlined footerIcon">mark_email_read</span>
                                To Get Our Newsletter, Subscribe Us !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="row rightContent">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="footerLinks">
                                <h5>Company</h5>
                                <a href="#">About Us</a>
                                <a href="#">Life At BRL</a>
                                <a href="#">Our Teams</a>
                                <a href="#">Careers</a>
                                <a href="#">Blogs</a>
                                <a href="#">Events</a>
                                <a href="#">Capabilities</a>
                                <a href="#">FAQ’s</a>
                                <a href="#">Help And Support</a>
                                <a href="#">Brand Assets</a>
                                <a href="#">Sitemap</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footerLinks">
                                <h5>Services</h5>
                                <a href="#">UX/UI Design</a>
                                <a href="#">Mobile App Development</a>
                                <a href="#">Web Design & Development</a>
                                <a href="#">Games Development</a>
                                <a href="#">Online/Offline Training</a>
                                <a href="#">Technical support</a>
                                <a href="#">Case Studies</a>
                                <a href="#">Our Work Process</a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <div class="footerLinks">
                                <h5>Products</h5>
                                <a href="#">Foodipos</a>
                                <a href="#">Prottay HRMS</a>
                                <a href="#">Unlock</a>
                                <a href="#">Learners Cafe</a>
                                <a href="#">Prottay</a>
                                <a href="#">1 minute Jobs</a>
                                <a href="#">Ora 11 jon</a>
                                <a href="#">Rhythm Run</a>
                                <a href="#">BRL Training</a>
                                <a href="#">Herlancer</a>
                                <a href="#">Skillshoper</a>
                                <a href="#" style="color: #FFF;">See All(11)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subscribe">
                <input type="text" placeholder="Enter your email">
                <button type="submit">Subscribe</button>
            </div>
        </div>

        <div class="footer-banner">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="text-container">
                        <p class="banner-text">Member at</p>
                    </div>

                    <div class="image-container">
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/assets/images/basis.png') }}" alt="">
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/assets/images/ecab.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6"></div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="text-container right-text">
                        <p class="banner-text">Our apps are available on</p>
                    </div>

                    <div class="image-container right-image-container">
                        <div class="img-box right-image">
                            <img src="{{ asset('assets/frontend/assets/images/ms.png') }}" alt="">
                        </div>

                        <div class="img-box right-image">
                            <img src="{{ asset('assets/frontend/assets/images/apple.png') }}" alt="">
                        </div>

                        <div class="img-box right-image">
                            <img src="{{ asset('assets/frontend/assets/images/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>=
        </div>

        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="bottom-content">
                        <p>© 2024 Babylon Resources Ltd.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="bottom-content bottom-page">
                        <a href="">Terms</a>
                        <a href="">Privacy</a>
                        <a href="">Cookie Policy</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">

                    <div class="bottom-content bottom-links">
                        <a href="#">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M12.454 0H14.829L9.6403 5.93026L15.7444 14H10.9649L7.22149 9.10574L2.93814 14H0.561711L6.11152 7.65692L0.255859 0H5.15663L8.54038 4.47354L12.454 0ZM11.6204 12.5785H12.9365L4.44155 1.34687H3.02932L11.6204 12.5785Z" fill="white"/>
                                    </svg>
                                </span>
                        </a>

                        <a href="#">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M15.8333 2.5C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333ZM15.4167 15.4167V11C15.4167 10.2795 15.1304 9.5885 14.621 9.07903C14.1115 8.56955 13.4205 8.28333 12.7 8.28333C11.9917 8.28333 11.1667 8.71667 10.7667 9.36667V8.44167H8.44167V15.4167H10.7667V11.3083C10.7667 10.6667 11.2833 10.1417 11.925 10.1417C12.2344 10.1417 12.5312 10.2646 12.75 10.4834C12.9688 10.7022 13.0917 10.9989 13.0917 11.3083V15.4167H15.4167ZM5.73333 7.13333C6.10464 7.13333 6.46073 6.98583 6.72328 6.72328C6.98583 6.46073 7.13333 6.10464 7.13333 5.73333C7.13333 4.95833 6.50833 4.325 5.73333 4.325C5.35982 4.325 5.0016 4.47338 4.73749 4.73749C4.47338 5.0016 4.325 5.35982 4.325 5.73333C4.325 6.50833 4.95833 7.13333 5.73333 7.13333ZM6.89167 15.4167V8.44167H4.58333V15.4167H6.89167Z" fill="white"/>
                                    </svg>
                                </span>
                        </a>

                        <a href="#">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                    <path d="M5.04745 14V7.62433H7.12061L7.42877 5.12805H5.04745V3.53802C5.04745 2.81769 5.2409 2.3245 6.23736 2.3245H7.5V0.098925C6.88565 0.0306183 6.26814 -0.00236327 5.65028 0.000131594C3.8178 0.000131594 2.55966 1.16076 2.55966 3.29143V5.12338H0.5V7.61966H2.56416V14H5.04745Z" fill="white"/>
                                    </svg>
                                </span>
                        </a>

                        <a href="#">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                                    <path d="M8.00012 0.379883C0.826954 0.379883 0.701416 1.01779 0.701416 5.99988C0.701416 10.982 0.826954 11.6199 8.00012 11.6199C15.1733 11.6199 15.2988 10.982 15.2988 5.99988C15.2988 1.01779 15.1733 0.379883 8.00012 0.379883ZM10.3394 6.24366L7.06223 7.77347C6.77539 7.9063 6.54038 7.75741 6.54038 7.44065V4.55912C6.54038 4.24309 6.77539 4.09346 7.06223 4.2263L10.3394 5.75611C10.6262 5.8904 10.6262 6.10936 10.3394 6.24366Z" fill="white"/>
                                    </svg>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Magnific Popup JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Bootstrap JS Bundle -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/1c44dc43b7.js" crossorigin="anonymous"></script>

<script src="{{ asset('assets/frontend/assets/js/script.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type){
        case 'info' :
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'success' :

            toastr.success("{{ Session::get('message') }}");
            break;

        case 'warning' :
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'error' :
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
</body>
</html>