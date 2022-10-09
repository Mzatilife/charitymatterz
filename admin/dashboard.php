<?php
include "../includes/session.php";
include_once "../classes/blogcontr.class.php";
$blog = new BlogContr;
if (isset($_GET['del_id'])) {
  $id = $_GET['del_id'];
  $result = $blog->deleteBlog($id);

  if ($result) {
    $msg = "Blog deleted!";
  } else {
    $msg2 = "couldn't delete blog!";
  }
} elseif (isset($_GET['edit_id'])) {
  $_SESSION['edit'] = $_GET['edit_id'];
  header('location:edit_blog.php');
} elseif (isset($_GET['view_id'])) {
  $_SESSION['view'] = $_GET['view_id'];
  header('location:view_blog.php');
} else { # code...
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="Mahala M. Mkwepu" />
    <link rel="shortcut icon" type="image/x-icon" href="../img/info/Website-CM-logo-01.png">
  <title>Dashboard</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css" />
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css" />
  <link rel="stylesheet" href="css/select2.css" />
  <link rel="stylesheet" href="css/dropzone.css" />
  <link rel="stylesheet" href="css/uppy.min.css" />
  <link rel="stylesheet" href="css/jquery.steps.css" />
  <link rel="stylesheet" href="css/jquery.timepicker.css" />
  <link rel="stylesheet" href="css/quill.snow.css" />
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css" />
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme" />
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled />
</head>

<body class="vertical light">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
            <i class="fe fe-sun fe-16"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="circle circle-sm bg-info">
              <i class="fe fe-16 fe-user text-white mb-0"></i>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <button type="button" class="dropdown-item text-danger" data-toggle="modal" data-target=".modal-full">Logout</button>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.php">
            <img src="../img/info/Website-CM-logo-01.png" width="100%" class="bg-logo-24" srcset="">
          </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item active w-100">
            <a class="nav-link" href="dashboard.php">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">Dashboard</span>
            </a>
          </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>Operations</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-upload fe-16"></i>
              <span class="ml-3 item-text">Upload</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="upload_blog.php"><span class="ml-1 item-text">Blog</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="categories.php"><span class="ml-1 item-text">Categories</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="categories.php">
              <i class="fe fe-layers fe-16"></i>
              <span class="ml-3 item-text">Categories</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="blogs.php">
              <i class="fe fe-book-open fe-16"></i>
              <span class="ml-3 item-text">Blogs</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center mb-2">
              <div class="col">
                <h2 class="h5 page-title">Welcome!</h2>
              </div>
            </div>
            <!-- widgets -->
            <div class="row my-4">
              <div class="col-md-4 col-xl-4 mb-4">
                <div class="card shadow">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center">
                        <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-book-open text-white mb-0"></i>
                        </span>
                      </div>
                      <div class="col pr-0">
                        <p class="small text-muted mb-0">Blogs</p>
                        <?php $blogs = $blog->countBlog(); ?>
                        <span class="h3 mb-0"><?php echo $blogs; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-xl-4 mb-4">
                <div class="card shadow">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center">
                        <span class="circle circle-sm bg-warning">
                          <i class="fe fe-16 fe-layers text-white mb-0"></i>
                        </span>
                      </div>
                      <div class="col pr-0">
                        <p class="small text-muted mb-0">Categories</p>
                        <?php $cats = $blog->countCategory(); ?>
                        <span class="h3 mb-0"><?php echo $cats; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-xl-4 mb-4">
                <div class="card shadow">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center">
                        <span class="circle circle-md bg-secondary">
                          <img src="../img/info/Website-CM-logo-01.png" width="100%" class="bg-logo-24" srcset="">
                        </span>
                      </div>
                      <div class="col pr-0">
                        <p class="small text-muted mb-0">Go to home Page</p>
                        <span class="h6 mb-0"><a href="../index.php">charitymatterz.org</a></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end section -->
            <!-- .row -->
            <div class="row">
              <!-- / .col-md-6 -->
              <!-- Striped rows -->
              <div class="col-md-12 col-lg-12">
                <div class="card shadow">
                  <div class="card-header">
                    <strong class="card-title">Recent Blogs</strong>
                    <a class="float-right small text-muted" href="blogs.php">View all</a>
                  </div>
                  <div class="card-body my-n2">
                    <table class="table table-striped table-hover table-borderless">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Author</th>
                          <th>Title</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $row = $blog->viewBlogWithLimit(0, 4);
                        $index = 1;
                        foreach ($row as $rw) {
                          $date = strtotime($rw['date']);
                        ?>
                          <tr>
                            <td><?php echo $index; ?></td>
                            <td scope="col" style="text-transform:capitalize;"><?php echo $rw['author']; ?></td>
                            <td><?php echo $rw['title']; ?></td>
                            <td><?php echo date("d M Y", $date); ?></td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="dashboard.php?view_id=<?php echo $rw['blog_id'] ?>">View</a>
                                <a class="dropdown-item" href="dashboard.php?edit_id=<?php echo $rw['blog_id'] ?>">Edit</a>
                                <a class="dropdown-item text-danger" href="dashboard.php?del_id=<?php echo $rw['blog_id'] ?>">Remove</a>
                              </div>
                            </td>
                          </tr>
                        <?php
                          $index++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Striped rows -->
            </div>
            <!-- .row-->
          </div>
          <!-- .col-12 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container-fluid -->
    </main>
    <!-- main -->
  </div>

  <div class="modal fade modal-full" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
    <button aria-label="" type="button" class="close px-2" data-dismiss="modal" aria-hidden="true">
      <span aria-hidden="true">×</span>
    </button>
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <h3> Are you sure you want to log out?</h3>
          <button aria-label="" type="button" class="btn btn-primary btn-lg mb-2 my-2 my-sm-0" data-dismiss="modal">cancel</button>
          <a href="logout.php" class="btn btn-danger btn-lg mb-2 my-2 my-sm-0" type="submit">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- .wrapper -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/jquery.stickOnScroll.js"></script>
  <script src="js/tinycolor-min.js"></script>
  <script src="js/config.js"></script>
  <script src="js/d3.min.js"></script>
  <script src="js/topojson.min.js"></script>
  <script src="js/datamaps.all.min.js"></script>
  <script src="js/datamaps-zoomto.js"></script>
  <script src="js/datamaps.custom.js"></script>
  <script src="js/Chart.min.js"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="js/gauge.min.js"></script>
  <script src="js/jquery.sparkline.min.js"></script>
  <script src="js/apexcharts.min.js"></script>
  <script src="js/apexcharts.custom.js"></script>
  <script src="js/jquery.mask.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.steps.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.timepicker.js"></script>
  <script src="js/dropzone.min.js"></script>
  <script src="js/uppy.min.js"></script>
  <script src="js/quill.min.js"></script>
  <script>
    $(".select2").select2({
      theme: "bootstrap4",
    });
    $(".select2-multi").select2({
      multiple: true,
      theme: "bootstrap4",
    });
    $(".drgpicker").daterangepicker({
      singleDatePicker: true,
      timePicker: false,
      showDropdowns: true,
      locale: {
        format: "MM/DD/YYYY",
      },
    });
    $(".time-input").timepicker({
      scrollDefault: "now",
      zindex: "9999" /* fix modal open */ ,
    });
    /** date range picker */
    if ($(".datetimes").length) {
      $(".datetimes").daterangepicker({
        timePicker: true,
        startDate: moment().startOf("hour"),
        endDate: moment().startOf("hour").add(32, "hour"),
        locale: {
          format: "M/DD hh:mm A",
        },
      });
    }
    var start = moment().subtract(29, "days");
    var end = moment();

    function cb(start, end) {
      $("#reportrange span").html(
        start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
      );
    }
    $("#reportrange").daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          Today: [moment(), moment()],
          Yesterday: [
            moment().subtract(1, "days"),
            moment().subtract(1, "days"),
          ],
          "Last 7 Days": [moment().subtract(6, "days"), moment()],
          "Last 30 Days": [moment().subtract(29, "days"), moment()],
          "This Month": [moment().startOf("month"), moment().endOf("month")],
          "Last Month": [
            moment().subtract(1, "month").startOf("month"),
            moment().subtract(1, "month").endOf("month"),
          ],
        },
      },
      cb
    );
    cb(start, end);
    $(".input-placeholder").mask("00/00/0000", {
      placeholder: "__/__/____",
    });
    $(".input-zip").mask("00000-000", {
      placeholder: "____-___",
    });
    $(".input-money").mask("#.##0,00", {
      reverse: true,
    });
    $(".input-phoneus").mask("(000) 000-0000");
    $(".input-mixed").mask("AAA 000-S0S");
    $(".input-ip").mask("0ZZ.0ZZ.0ZZ.0ZZ", {
      translation: {
        Z: {
          pattern: /[0-9]/,
          optional: true,
        },
      },
      placeholder: "___.___.___.___",
    });
    // editor
    var editor = document.getElementById("editor");
    if (editor) {
      var toolbarOptions = [
        [{
          font: [],
        }, ],
        [{
          header: [1, 2, 3, 4, 5, 6, false],
        }, ],
        ["bold", "italic", "underline", "strike"],
        ["blockquote", "code-block"],
        [{
            header: 1,
          },
          {
            header: 2,
          },
        ],
        [{
            list: "ordered",
          },
          {
            list: "bullet",
          },
        ],
        [{
            script: "sub",
          },
          {
            script: "super",
          },
        ],
        [{
            indent: "-1",
          },
          {
            indent: "+1",
          },
        ], // outdent/indent
        [{
          direction: "rtl",
        }, ], // text direction
        [{
            color: [],
          },
          {
            background: [],
          },
        ], // dropdown with defaults from theme
        [{
          align: [],
        }, ],
        ["clean"], // remove formatting button
      ];
      var quill = new Quill(editor, {
        modules: {
          toolbar: toolbarOptions,
        },
        theme: "snow",
      });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      "use strict";
      window.addEventListener(
        "load",
        function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName("needs-validation");
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(
            forms,
            function(form) {
              form.addEventListener(
                "submit",
                function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add("was-validated");
                },
                false
              );
            }
          );
        },
        false
      );
    })();
  </script>
  <script>
    var uptarg = document.getElementById("drag-drop-area");
    if (uptarg) {
      var uppy = Uppy.Core()
        .use(Uppy.Dashboard, {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: "dark",
          width: 770,
          height: 210,
          plugins: ["Webcam"],
        })
        .use(Uppy.Tus, {
          endpoint: "https://master.tus.io/files/",
        });
      uppy.on("complete", (result) => {
        console.log(
          "Upload complete! We’ve uploaded these files:",
          result.successful
        );
      });
    }
  </script>
  <script src="js/apps.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-56159088-1");
  </script>
</body>

</html>