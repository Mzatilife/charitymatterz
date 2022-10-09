<?php
session_start();
include_once "classes/blogcontr.class.php";
$blog = new BlogContr;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact</title>
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
        #more9 {
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
                                    <li><a href="#"> <i class="fa fa-phone"></i> +1 (949) 433-9405</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>kristin@charitymatterz.com</a></li>
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

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <?php
                    if (isset($_GET["result"]) && $_GET["result"] == "yes") { ?>
                        <div class="alert alert-success text-center fade show mt-3" role="alert">
                            <p>Message sent!</p>
                        </div>
                    <?php
                    } elseif (isset($_GET["result"]) && $_GET["result"] == "no") { ?>
                        <div class="alert alert-danger text-center fade show mt-3" role="alert">
                        <p>Error, Can't send message, check network connection!</p>
                        </div>
                    <?php } else {
                    }
                    ?>
                    <form class="form-contact contact_form" action="contact_process.php" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder="Enter Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>United States, California.</h3>
                            <p>Trabuco Canyon</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 (949) 433-9405</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>kristin@charitymatterz.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="">
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
    </section>
    <!-- ================ contact section end ================= -->

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
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>
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