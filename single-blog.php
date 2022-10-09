<?php
session_start();
include_once "classes/blogcontr.class.php";
$blog = new BlogContr;
$blog_id = $_SESSION['blog_id'];

$row = $blog->viewBlogById($blog_id);

$comments = $blog->countComments($blog_id);

if (isset($_POST['comment'])) {
   //********************** */ Validating the data and sanitising it ******************************
   function TestInput($data)
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = strip_tags($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   $name = TestInput($_POST['name']);
   $email = TestInput($_POST['email']);
   $comment = TestInput($_POST['details']);

   $result = $blog->commentBlog($blog_id, $name, $email, $comment);

   if ($result) {
      $msg = "Comment submitted";
   } else {
      $msg2 = "Error, couldn't submit comment";
   }
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>single Blog</title>
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
   <style>
      .bg-logo-24 {
         width: 120px;
         background: linear-gradient(0deg, rgba(253, 126, 20, 0.5), rgba(253, 126, 20, 0.5)), url('img/banner/home.jpg');
         border-radius: 10%;
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
                           <li><a href="#"><i class="fa fa-phone"></i> +1 (949) 433-9405</a></li>
                           <li><a href="#"><i class="fa fa-envelope"></i>kristin@charitymatterz.com</a></li>
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
                  <h3>Single Blog</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- bradcam_area_end  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <?php
               if (isset($msg)) { ?>
                  <div class="alert alert-success text-center fade show mt-3" role="alert">
                     <?php echo $msg; ?>
                  </div>
               <?php
               } elseif (isset($msg2)) { ?>
                  <div class="alert alert-danger text-center fade show mt-3" role="alert">
                     <?php echo $msg2; ?>
                  </div>
               <?php } else {
               }
               ?>
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/<?php echo $row['image'] ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $row['title'] ?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user"></i> <?php echo $row['author'] ?></li>
                        <li><i class="fa fa-user"></i> <?php echo $row['category_name'] ?></li>
                        <li><a href="#comments"><i class="fa fa-comments"></i> <?php echo $comments ?> Comments</a></li>
                     </ul>
                     <p class="text-justify">
                        <?php echo $row['content'] ?>
                     </p>
                  </div>
               </div>
               <div class="comments-area" id="comments">
                  <h4><?php echo $comments ?> Comments</h4>
                  <?php
                  //displaying the data ---------------------------------------------------------------------------------------->
                  @$page = $_GET["page"];

                  if ($page == "" || $page == "1") {

                     $page1 = 0;
                  } else {

                     $page1 = ($page * 4) - 4;
                  }
                  $row = $blog->viewComments($blog_id, $page1, 4);
                  foreach ($row as $rw) {
                     $date = strtotime($rw['date']);
                  ?>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="desc">
                                 <p class="comment">
                                    <?php echo $rw['comment'] ?>
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#"><?php echo $rw['name'] ?></a>
                                       </h5>
                                       <p class="date"><?php echo date("F d, Y", $date) ?> at <?php echo date("h:i a", $date) ?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php }

                  $cout = $blog->countComments($blog_id);

                  $a = $cout / 4;

                  $a = ceil($a);
                  ?>
                  <nav class="blog-pagination justify-content-center d-flex">
                     <ul class="pagination">
                        <li class="page-item">
                           <a href="#" class="page-link" aria-label="Previous">
                              <i class="ti-angle-left"></i>
                           </a>
                        </li>
                        <?php for ($b = 1; $b <= $a; $b++) {  ?>
                           <li class="page-item">
                              <a href="single-blog.php?page=<?php echo $b; ?>" class="page-link"><?php echo $b . " "; ?></a>
                           </li>
                        <?php } ?>
                        <li class="page-item">
                           <a href="#" class="page-link" aria-label="Next">
                              <i class="ti-angle-right"></i>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="comment-form">
                  <h4>Leave a comment</h4>
                  <form class="form-contact comment_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="details" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" name="comment" class="button button-contactForm btn_1 boxed-btn">comment</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Categories</h4>
                     <ul class="list cat-list">
                        <?php
                        $row = $blog->viewCategories();
                        foreach ($row as $rw) {
                           $cat_id = $rw['category_id'];
                           $blogs = $blog->countBlogAndCategory($cat_id);
                        ?>
                           <li>
                              <a href="blog.php?cat_id=<?php echo $cat_id ?>" class="d-flex">
                                 <p class="text-capitalize"><?php echo $rw['category_name'] ?></p>
                                 <p>(<?php echo $blogs; ?>)</p>
                              </a>
                           </li>
                        <?php } ?>
                     </ul>
                  </aside>

                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Posts</h3>
                     <?php
                     $row = $blog->viewBlogWithLimit(0, 4);
                     $index = 1;
                     foreach ($row as $rw) {
                        $date = strtotime($rw['date']);
                     ?>
                        <div class="media post_item">
                           <img src="img/blog/<?php echo $rw['image'] ?>" class="img-responsive" style="max-height: 100px; max-width:100px;" alt="post">
                           <div class="media-body">
                              <a href="blog.php?blog_id=<?php echo $rw['blog_id'] ?>">
                                 <h3><?php echo $rw['title'] ?></h3>
                              </a>
                              <p><?php echo date("F d, Y", $date) ?></p>
                           </div>
                        </div>
                     <?php } ?>
                  </aside>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

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
      $('.datepicker').datepicker({
         iconsLibrary: 'fontawesome',
         icons: {
            rightIcon: '<span class="fa fa-calendar"></span>'
         }
      });

      $('.timepicker').timepicker({
         iconsLibrary: 'fontawesome',
         icons: {
            rightIcon: '<span class="fa fa-clock-o"></span>'
         }
      });
   </script>
</body>

</html>