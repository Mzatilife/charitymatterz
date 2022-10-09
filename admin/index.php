<?php
session_start();
unset($_SESSION['fname']);
unset($_SESSION['user_id']);
include_once "../classes/manageusercontr.class.php";

if (isset($_POST['login'])) {

  //********************** */ Validating the data and sanitising it ******************************
  function TestInput($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = TestInput($_POST['email']);
  $password = TestInput($_POST['password']);

  // passing login information
  $login = new ManageUserContr;
  $msg2 = $login->userLogin($email, $password);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mahala M. Mkwepu">
  <link rel="shortcut icon" type="image/x-icon" href="../img/info/Website-CM-logo-01.png">
  <title>Login</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="light ">
  <div class="wrapper vh-100">
    <div class="row align-items-center h-100" style="background-image: url('../img/banner/background.jpg');">
      <div class="col-lg-6 d-none d-lg-flex">
      </div> <!-- ./col -->
      <div class="col-lg-6">
        <div class="w-100 mx-auto bg-white rounded p-3">
          <form class="mx-auto text-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="../index.php">
              <img src="../img/info/Website-CM-logo-01.png" width="50%" class="bg-logo-24" srcset="">
            </a>
            <h1 class="h6 mb-3">Sign in</h1>
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
            } ?>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" name="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
          </form>
        </div> <!-- .card -->
      </div> <!-- ./col -->
    </div> <!-- .row -->
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src='js/daterangepicker.js'></script>
  <script src='js/jquery.stickOnScroll.js'></script>
  <script src="js/tinycolor-min.js"></script>
  <script src="js/config.js"></script>
  <script src="js/apps.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>
</body>

</html>
</body>

</html>