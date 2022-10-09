<?php
session_start();
unset($_SESSION['fname']);
unset($_SESSION['user_id']);
include_once "classes/blogcontr.class.php";
$blog = new BlogContr;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charity Matterz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/info/Website-CM-logo-01.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
    <style>
        .bg-logo-24 {
            width: 120px;
            background: linear-gradient(0deg, rgba(253, 126, 20, 0.5), rgba(253, 126, 20, 0.5)), url('img/banner/home.jpg');
            border-radius: 10%;
        }

        #more1,
        #more2,
        #more3,
        #more4,
        #more5,
        #more6,
        #more7,
        #more8,
        #more9,
        #more10,
        #more11,
        #more12,
        #more13,
        #more14,
        #more15,
        #more16 {
            display: none;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="tel:+1 (949) 433-9405"><i class="fa fa-phone"></i>+1 (949) 433-9405</a></li>
                                    <li><a href="mailto:kristin@charitymatterz.com"><i class="fa fa-envelope"></i>kristin@charitymatterz.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/info/Website-CM-logo-01.png" alt="logo" class="bg-logo-24" srcset="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="About.php">About</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <h3> Welcome to
                                Charity Matterz</h3>
                            <p>We make a living by what we get. <br>
                                We make a life by what we give</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- latest_activites_area_start  -->
    <div class="latest_activites_area">
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center m-3">
            <a class="popup-video" href="https://www.youtube.com/watch?v=MG3jGHnBVQs">
                <i class="flaticon-ui"></i>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="activites_info">
                        <div class="section_title">
                            <h3> <span>Who are We? </span></h3>
                        </div>
                        <p class="para_1">I am so happy you have joined me today.</p class="para_1">
                        <p class="para_1">I see a world full of possibilities when I look at our philanthropic community.
                            People that desire to “Do Good” and to make a difference in the lives of others.
                            Each of us holds a unique piece of the puzzle that fits into the story of hope.</p class="para_1">
                        <p class="para_2">My journey has allowed me the privilege of telling the story.
                            The story of those most vulnerable. Taking the elements of humanity and arranging them into a motivational account to be remembered, tying donors’
                            hearts to the cause and the people it serves, as a unique experience, exposing them to something remarkable.</p>
                        <p class="para_1">This is when Charity Matterz.</p class="para_1">
                        <a href="about.php" class="boxed-btn4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest_activites_area_end  -->


    <!-- Services  -->
    <div class="section_padding">
        <div class="counter_area">
            <div class="container">
                <div class="counter_bg overlay">
                    <div class="card m-3 rounded p-3">
                        <div class="section_title text-center mb-3">
                            <h3><span>Services</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Virtual Auctions</h5>
                                            <p class="small text-muted mb-0 text-justify">We help you set up a virtual auction that brings all elements of an in-person auction to an online
                                                format. Virtual auctions allows<span id="dots1">...</span><span id="more1"> your supporters and nonprofits to meet with you virtually and still
                                                    raise money for an important cause.</span></p>
                                            <button onclick="myFunction(1)" id="myBtn1" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Complete Event Strategic Planning and Execution</h5>
                                            <p class="small text-muted mb-0 text-justify">We help you with step by step of your event planning. We take into all consideration
                                                <span id="dots2">...</span><span id="more2"> the
                                                    event as well as the operating environment. Strategic planning helps to focus energy
                                                    and resources, strengthen operations and ensure that stakeholders, volunteers, and
                                                    employees are working toward common goals.</span>
                                            </p>
                                            <button onclick="myFunction(2)" id="myBtn2" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Executive Leadership Coaching</h5>
                                            <p class="small text-muted mb-0 text-justify">Executive coaching is a learning approach that creates self-awareness, helps drive
                                                transformational change, and<span id="dots3">...</span><span id="more3"> provides critical challenge and support. Our executive coaching
                                                    services build a collaborative relationship between the coach and the leader and are customized
                                                    to fit the needs of busy executives.</span></p>
                                            <button onclick="myFunction(3)" id="myBtn3" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Social ROI – Development</h5>
                                            <p class="small text-muted mb-0 text-justify">Social return on investment (SROI) is a concept to account for social value when evaluating
                                                investments. It goes<span id="dots4">...</span><span id="more4"> beyond traditional economic evaluation tools, by considering value
                                                    produced for multiple stakeholders in all three dimensions of development: economic, social,
                                                    and environmental. We help you do all these at once.</span></p>
                                            <button onclick="myFunction(4)" id="myBtn4" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Storytelling and Social Media Development</h5>
                                            <p class="small text-muted mb-0 text-justify">Social media storytelling has become essential in marketing as a way to<span id="dots5">...</span><span id="more5">
                                                    make content resonate with your audience. Marketers can harness the emotional power of stories within your content,
                                                    and with the help of our social media storytelling tools, you can form strong, long-lasting
                                                    relationships with your audience.</span></p>
                                            <button onclick="myFunction(5)" id="myBtn5" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Data Driven Growth Strategy</h5>
                                            <p class="small text-muted mb-0 text-justify">In a data-driven approach, decisions are made based on data instead of intuition. Following a
                                                data-driven approach<span id="dots6">...</span><span id="more6"> offers measurable advantages. That's because a data-driven strategy
                                                    uses facts and hard information rather than gut instinct. Using a data-driven approach makes it
                                                    easier to be objective about the decisions you should take.</span></p>
                                            <button onclick="myFunction(6)" id="myBtn6" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Board Development and Recruitment</h5>
                                            <p class="small text-muted mb-0 text-justify">Having highly competent and passionate individuals serve on your management board is more
                                                crucial than anything<span id="dots7">...</span><span id="more7"> else for the longevity and health of your organization. But finding the
                                                    appropriate leaders is a challenge for many organizations. We take you through the process
                                                    from laying the foundation to orienting and developing members.</span></p>
                                            <button onclick="myFunction(7)" id="myBtn7" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">The art of “Thank You”</h5>
                                            <p class="small text-muted mb-0 text-justify">Discover with us the "whys," "whens," and "how-tos" of saying "thank you." The Art of Thank
                                                You will encourage your clients<span id="dots8">...</span><span id="more8"> and business partners to work with you again.</span></p>
                                            <button onclick="myFunction(8)" id="myBtn8" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4 mb-4">
                                <div class="card shadow" style="border-left:2px solid #fd7e14;">
                                    <div class="card-body">
                                        <div class="pr-0">
                                            <h5 class=" text-muted mb-0">Special Projects – Program Launch</h5>
                                            <p class="small text-muted mb-0 text-justify">Are you having special projects to launch? we help you highlight individuals' specific talents and
                                                invite them to participate<span id="dots9">...</span><span id="more9"> in making the launch super and great.</span></p>
                                            <button onclick="myFunction(9)" id="myBtn9" class="btn btn-link read_more small">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services  -->

    <!-- Power of virtual Auctions  -->
    <div class="container card border-warning p-3 bg-white rounded" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <img src="img/banner/auction.png" width="100%" class="img-responsive" srcset="">
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="justify-content-center">
                    <div class="single_reson">
                        <div class="help_content">
                            <h4>Power of Virtual Auctions</h4>
                            <p class="text-justify">During the Covid Shut Down virtual events became a life preserver for organizations that were relying on proceeds, from scheduled events, to keep their organizations a float. What was thought to be a Band-aid, out preformed the in-person events of the past.
                                Virtual auctions exceeded previous profits by 80% or greater. Why?</p>
                            <p class="text-justify">
                                We have learned that there is a new kind of stand alone event that can hold a substantial place in fundraising and the best part about it….
                                You never have to see another auction basket again…No more bows and no more cellophane. Contact me…
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Power of virtual Auctions  -->

    <!-- Events -->
    <div class="popular_causes_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Events</span></h3>
                        <h4>In Person Events Build Special Memories</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="causes_active owl-carousel">
                        <div class="single_cause">
                            <div class="thumb">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="causes_content">
                                <p>Speaker – OC Family Justice Center</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="causes_content">
                                <p>Golf – Boys and Girls Club Capo Valley</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="causes_content">
                                <p>Gala – A Walk through the Jungle of Life</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="causes_content">
                                <p>Muzeo Museum – Dressing Downton</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="causes_content">
                                <p>OC Chef’s Table – illumination foundation</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="causes_content">
                                <p>Social Media – Bolsa Chica Conservancy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events  -->

    <!-- Son's Testimonial  -->
    <div class="counter_area">
        <div class="container">
            <div class="counter_bg overlay">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-heart"></i>
                            </div>
                            <div class="events">
                                <h3>This is when Charity Matterz</h3>
                                <p>My mom helps people make more money so they can help more people…</p>
                                <b class="read_more">Gillian Epperson, 8 years old.</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Son's Testimonial  -->

    <!-- our present and past clients  -->
    <div class="our_volunteer_area mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center">
                        <h3><span>Our Present and Past Clients</span></h3>
                    </div>
                </div>
            </div>
            <!-- Carousel wrapper -->
            <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-ride="carousel">
                <!-- Inner -->
                <div class="carousel-inner py-4">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/BCC-Logo-moon-BLACKBLUE-Transparent.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Beyond-Blindness.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/c10.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/c9.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/CAPC_9427-2020-Branding-Update_color_rev.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/face-the-sun-foundation.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Final-Evite-Logo.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/HBH-Logo-color-3.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="rounded shadow-1-strong mb-4" src="img/Clients/Laguna-Niguel-Chamber-of-Commerce.jpg" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/MDC.jpeg" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/MR@.jpeg" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Muzeo.jpeg" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Niguel-Botanical-Preserve-Transparent.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Ocean-institute.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/OCFJC.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Positive-Vibe-Warriors.png" alt="avatar" style="width: 90%; height:160px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="rounded shadow-1-strong mb-4" src="img/Clients/recycle-Utah.png" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/rotary-international.png" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Screen-Shot-2020-11-12-at-6.06.53-AM.png" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/Screen-Shot-2021-01-30-at-4.39.28-PM.png" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="rounded shadow-1-strong mb-4" src="img/Clients/Screen-Shot-2021-06-18-at-6.48.51-AM.png" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/thumbnail_givsum_Orange-No-Background.png" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/thumbnail_BG-Club.png" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <img class="rounded shadow-1-strong mb-4" src="img/clients/thumbnail_TPVS-Logo.jpg" alt="avatar" style="width: 90%; height:150px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->
                <!-- Controls -->
                <!-- <div class="d-flex justify-content-center mb-4">
                    <a class="carousel-control-prev position-relative" role="button" data-target="#carouselMultiItemExample" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next position-relative" role="button" data-target="#carouselMultiItemExample" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> -->
            </div>
            <!-- Carousel wrapper -->
        </div>
    </div>
    <!-- our present and past clients  -->
    <!-- Testimonial -->
    <div class="section_title text-center mb-55">
        <h3><span>Kind <i class="fa fa-heart-o"></i> Words</span></h3>
    </div>
    <div class="m-3 p-3 rounded" style="background: #fd7e14 url('img/banner/counter_bg.png') repeat fixed center;">
        <div id="carouselExampleControls" class="carousel slide text-center bg-white p-3 rounded" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">PAT &amp; JOLYNN MAHONEY</h5>
                            <p style="color: #fd7e14;">Owners West Coast Arborists</p>
                            <p class="text-muted">
                                <i class="fa fa-quote-left pe-2"></i>
                                Kristin Epperson, Founder of Charity Matterz is one of the brightest, shining stars in Orange County when it comes to organizing, and executing charity events for OC Non-Profits.
                                Kristin and her associates at Charity Matterz, are so passionate about the cause and effectiveness of the non-profit organizations that they partner with, and this fact becomes very apparent with the creative concepts, and storytelling concepts they come up with for their clients.<span id="dots10">...</span><span id="more10">
                                    We have known Kristin for years; we have always known how intelligent she is, and what drive and passion she has for business and giving back to the community.&nbsp;
                                    Kristin Epperson has taken her God given skills and formed Charity Matterz. Kristin and her team are great at quickly understanding an organization and their needs.&nbsp;
                                    Charity Matterz is simply the best with creative, and new ideas for organizations to help them raise the funds critically needed to serve their cause.&nbsp;
                                    Not only is Charity Matterz the most innovative and resourceful event planners of today, they have the skills to pull off the most amazing and unforgettable events.&nbsp;
                                    We would recommend Charity Matterz to any non-profit or company who is looking for a way to creatively engage their staff and community to give back what many of us are so fortunate to already have.&nbsp;
                                    Charity Matterz has put on two unforgettable events at our home.&nbsp; We have done events with and without Charity Matterz, and the difference in the execution of important events when using Charity Matterz has been measurably positive.&nbsp; They take much of the stress off of the hosts and non-profit staff; they keep the focus on what the real objective is – to raise funds.&nbsp;
                                    If you want to partner with a non-profit event planner, we have no other recommendation, but CHARITY MATTERZ!
                            </p>
                            <button onclick="myFunction(10)" id="myBtn10" class="btn btn-link read_more small">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Cathy Rigby McCoy</h5>
                            <p style="color: #fd7e14;">8 Time Olympic Gold Medalist, Tony Award Nominee, Emmy Nominee, and “Peter Pan”</p>
                            <p class="text-muted">
                                <i class="fa fa-quote-left pe-2"></i>
                                I’ve attended/collaborated on a few Charitable Fund Raisers where Kristen has been involved.<br>
                                She is Focused and Passionate about creating a unique experience for the guest while staying focused and promoting the importance of the cause.<br>
                                Kristin pays attention to every detail; technically, artistically and financially.
                                <span id="dots11">...</span><span id="more11">
                                    Equally important to all the above attributes<br>
                                    Kristen is a team player.
                            </p>
                            <button onclick="myFunction(11)" id="myBtn11" class="btn btn-link read_more small">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Susan Bruegman</h5>
                            <p style="color: #fd7e14;">President, Orange County Family Justice Center Foundation</p>
                            <p class="text-muted">
                                <i class="fa fa-quote-left pe-2"></i>
                                I highly recommend Charity Matterz and Kristin Epperson for your next fundraising event.
                                Kristin and her team bring a creative, knowledgeable approach to each event that results in a beautiful, impactful, fun and financially successful experience.
                                Kristin’s keen planning skills, contact base for essential personnel, ability to script the program, and attention to the smallest details make the difference between a good and great event.
                                <span id="dots12">...</span><span id="more12">
                                    She follows through from the conception of an event to the wrap up, post meeting in a timely manner.
                                    Kristin brings this expertise at a fair price. The Orange County Family Justice Center Foundation has been using Charity Matterz to plan and execute our fundraising events for over four years and plan to continue the service for our future events.
                            </p>
                            <button onclick="myFunction(12)" id="myBtn12" class="btn btn-link read_more small">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Nick Di Nieri</h5>
                            <p style="color: #fd7e14;">Professional Benefit Auctioner/Emcee</p>
                            <p class="text-muted">
                                <i class="fa fa-quote-left pe-2"></i>
                                Working with Kristin Epperson and Charity Matterz is always a pleasure.
                                She is a breath of fresh air in an industry that needs fresh thinking, fresh perspective, and fresh ideas.
                                I have worked with her on numerous high -end events, and I have never been in a situation where she left me unprepared, or asking questions.
                                She covers it all. Her scripts are amazing, her scheduling is on point, and her communication is second to none.
                                <span id="dots13">...</span><span id="more13">She truly gives her all to her clients and organizations she is working with.
                                    I work 60-70 events a year, and I genuinely look forward to the ones that I know Kristin and her team are producing."
                            </p>
                            <button onclick="myFunction(13)" id="myBtn13" class="btn btn-link read_more small">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Tim Bockhold</h5>
                            <p style="color: #fd7e14;">Bockhold Investment Group</p>
                            <p class="text-muted">
                                <i class="fa fa-quote-left pe-2"></i>
                                Charity Matterz went above and beyond which truly made our Appreciation Event special in many ways.
                                Given that it was our 17 event our invitees have a certain expectation to meet and Kristin really blew this out of the water.
                                The level of organization provided was exceptional with regards to invitations, food catering, communication with the venue owner and constantly keeping us updated.
                                <span id="dots14">...</span><span id="more14">Last but certainly not least was the level of detail seen throughout the night.
                                    Whether it be the custom printed menus or personalized engraved take home gifts, our invitees felt as though this even was truly put on for them and felt appreciated.
                                    Thank you so much for an amazing night and we all look forward to next year’s special event.
                            </p>
                            <button onclick="myFunction(14)" id="myBtn14" class="btn btn-link read_more small">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Tiffany Antoci</h5>
                            <p style="color: #fd7e14;">Tiffantoci</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Kristin Epperson of Charity Matterz has been a huge advocate and proponent in the introduction, execution, and management of our non-profit, Strength behind Stars.
                                I first met Kristin when she was working with Illumination Foundation and she had the vision to partner with our charity, Just a Little Cloth to help the homeless girls feel beautiful and worthy of wearing a fancy dress while they sang on stage.
                                <span id="dots15">...</span><span id="more15">That is when I discovered her heart was in the right place and she truly cared about what she was doing.
                                    Working with Kristin on this very large platform of homelessness, made me see her big heart, dedication to helping kids, and her skilled expertise, talent and hard effort she put into her mission.
                                    I knew one day we would be working together, or at least I hoped for that.
                                    She was the only person I had ever met, that worked like me, which was although at lightening speed, she knew when to execute certain initiatives, when to approach certain people and sponsors, how to tell the story in a succinct impactful way, and was so capable finding donors and huge corporate sponsors for her events.
                                    When we mutually approached each other to take my smaller vision of creating a non-profit to help with kids getting bullied, our immediate compassion for this cause, propelled us to our partnership now on Strength Behind Stars, a non profit to help create kinder schools.
                                    I would not be able to do this without the creative, business, and executionary talent that Kristin has brought to the table. More importantly, trust is an issue that I don’t take lightly and I have never worked with someone whois so upfront, and honest and when she says something, I believe it.
                                    That to me goes a lot further than just the talent and expertise she brings to any mission she takes on.
                            </p>
                            <button onclick="myFunction(15)" id="myBtn15" class="btn btn-link read_more small">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">PAT & JOLYNN MAHONEY</h5>
                            <p style="color: #fd7e14;">Owners West Coast Arborists</p>
                            <p class="text-muted">
                                <i class="fa fa-quote-left pe-2"></i>
                                Kristin Epperson, Founder of Charity Matterz is one of the brightest, shining stars in Orange County when it comes to organizing, and executing charity events for OC Non-Profits.
                                Kristin and her associates at Charity Matterz, are so passionate about the cause and effectiveness of the non-profit organizations that they partner with, and this fact becomes very apparent with the creative concepts, and storytelling concepts they come up with for their clients.
                                <span id="dots16">...</span><span id="more16">We have known Kristin for years; we have always known how intelligent she is, and what drive and passion she has for business and giving back to the community.
                                    Kristin Epperson has taken her God given skills and formed Charity Matterz. Kristin and her team are great at quickly understanding an organization and their needs.
                                    Charity Matterz is simply the best with creative, and new ideas for organizations to help them raise the funds critically needed to serve their cause.
                                    Not only is Charity Matterz the most innovative and resourceful event planners of today, they have the skills to pull off the most amazing and unforgettable events.
                                    We would recommend Charity Matterz to any non-profit or company who is looking for a way to creatively engage their staff and community to give back what many of us are so fortunate to already have.
                                    Charity Matterz has put on two unforgettable events at our home. We have done events with and without Charity Matterz, and the difference in the execution of important events when using Charity Matterz has been measurably positive.
                                    They take much of the stress off of the hosts and non-profit staff; they keep the focus on what the real objective is – to raise funds.
                                    If you want to partner with a non-profit event planner, we have no other recommendation, but CHARITY MATTERZ!
                            </p>
                            <button onclick="myFunction(16)" id="myBtn16" class="btn btn-link read_more small">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" role="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" style="background-color: #fd7e14; border-radius:50%;" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" role="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" style="background-color: #fd7e14; border-radius:50%;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Testimonial -->
    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <h2>Charity Matterz</h2>
                                </a>
                            </div>
                            <p class="address_text text-justify">Charity Matterz is always here for you either small or large organizations. we looking forward to
                                getting to know where your organization’s heart beats and how charity matters to you.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navigation
                            </h3>
                            <ul class="links">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="About.php">About</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="Gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+1 (949) 433-9405 <br>
                                    kristin@charitymatterz.com <br>
                                    Trabuco Canyon, California, United States
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top Stories
                            </h3>
                            <ul class="news_links">
                                <?php
                                $row = $blog->viewBlogWithLimit(0, 2);
                                $index = 1;
                                foreach ($row as $rw) {
                                    $date = strtotime($rw['date']);
                                ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="blog.php?blog_id=<?php echo $rw['blog_id'] ?>">
                                                <img src="img/blog/<?php echo $rw['image'] ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="blog.php?blog_id=<?php echo $rw['blog_id'] ?>">
                                                <h4><?php echo $rw['title'] ?></h4>
                                            </a>
                                            <span><?php echo date("F d, Y", $date) ?></span>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | <a href="https://colorlib.com" target="_blank">Colorlib</a> | Developed By <a href="https://dreamcodemw.com" target="_blank">DreamCodeMw</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        function myFunction(val) {
            var dots = document.getElementById("dots" + val);
            var moreText = document.getElementById("more" + val);
            var btnText = document.getElementById("myBtn" + val);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
</body>

</html>