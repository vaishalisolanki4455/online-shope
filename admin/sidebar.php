<?php
session_start();

if (isset($_SESSION['email'])) {
  $id = $_SESSION['id'];
  $email = $_SESSION['email'];
  $name = $_SESSION['name'];

  // print_r($email);
  // exit();

}
if (!isset($_SESSION['id'])) {
  header('Location: login.php');
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities." />
  <meta name="keywords"
    content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app" />
  <meta name="author" content="pixelstrap" />
  <title>Admiro - Premium Admin Template</title>
  <!-- Favicon icon-->
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" />
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap"
    rel="stylesheet" />
  <!-- Flag icon css -->
  <link rel="stylesheet" href="../assets/css/vendors/flag-icon.css" />
  <!-- iconly-icon-->
  <link rel="stylesheet" href="../assets/css/iconly-icon.css" />
  <link rel="stylesheet" href="../assets/css/bulk-style.css" />
  <!-- iconly-icon-->
  <link rel="stylesheet" href="../assets/css/themify.css" />
  <!--fontawesome-->
  <link rel="stylesheet" href="../assets/css/fontawesome-min.css" />
  <!-- Whether Icon css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css" />
  <!-- App css -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen" />
</head>

<body>
  <!-- page-wrapper Start-->
  <!-- tap on top starts-->
  <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
  <!-- tap on tap ends-->
  <!-- loader-->
  <div class="loader-wrapper">
    <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
  </div>
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <header class="page-header row">
      <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index-2.html"><img
            class="light-logo img-fluid" src="../assets/images/logo/logo1.png" alt="logo" /><img
            class="dark-logo img-fluid" src="../assets/images/logo/logo-dark.png" alt="logo" /></a><a
          class="close-btn toggle-sidebar" href="javascript:void(0)">
          <svg class="svg-color">
            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Category"></use>
          </svg></a></div>
      <div class="page-main-header col">
        <div class="header-left">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                    placeholder="Search Admiro .." name="q" title="" autofocus="autofocus" />
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span>
                  </div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="form-group-header d-lg-block d-none">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative d-flex align-items-center">
                <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text"
                  placeholder="Type to Search..." name="q" title="" /><i class="search-bg iconly-Search icli"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-right">
          <ul class="header-right">
            <li class="custom-dropdown">
              <div class="translate_wrapper">
                <div class="current_lang"><a class="lang" href="javascript:void(0)"><i
                      class="flag-icon flag-icon-us"></i>
                    <h6 class="lang-txt f-w-700">ENG</h6>
                  </a></div>
                <ul class="custom-menu profile-menu language-menu py-0 more_lang">
                  <li class="d-block"><a class="lang" href="#" data-value="English"><i
                        class="flag-icon flag-icon-us"></i>
                      <div class="lang-txt">English</div>
                    </a></li>
                  <li class="d-block"><a class="lang" href="#" data-value="fr"><i class="flag-icon flag-icon-fr"></i>
                      <div class="lang-txt">Français</div>
                    </a></li>
                  <li class="d-block"><a class="lang" href="#" data-value="es"><i class="flag-icon flag-icon-es"></i>
                      <div class="lang-txt">Español</div>
                    </a></li>
                </ul>
              </div>
            </li>
            <li class="search d-lg-none d-flex"> <a href="javascript:void(0)">
                <svg>
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Search"></use>
                </svg></a></li>
            <li> <a class="dark-mode" href="javascript:void(0)">
                <svg>
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#moondark"></use>
                </svg></a></li>
            <li class="custom-dropdown"><a href="javascript:void(0)">
                <svg>
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#cart-icon"></use>
                </svg></a><span class="badge rounded-pill badge-primary">2</span>
              <div class="custom-menu cart-dropdown py-0 overflow-hidden">
                <h3 class="title dropdown-title">Cart</h3>
                <ul class="pb-0">
                  <li>
                    <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                        src="../assets/images/dashboard-2/1.png" alt="" />
                      <div class="flex-grow-1"><span class="f-w-600">Watch multicolor</span>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus"
                                data-field="">-</button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1" /><span
                              class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus"
                                data-field="">+</button></span>
                          </div>
                        </div>
                        <h6 class="font-primary">$500</h6>
                      </div>
                      <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                        src="../assets/images/dashboard-2/2.png" alt="" />
                      <div class="flex-grow-1"><span class="f-w-600">Airpods</span>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus"
                                data-field="">-</button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1" /><span
                              class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus"
                                data-field="">+</button></span>
                          </div>
                        </div>
                        <h6 class="font-primary">$500.00</h6>
                      </div>
                      <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li class="total">
                    <h6 class="mb-0">Order Total : <span class="f-w-600">$1000.00</span></h6>
                  </li>
                  <li class="text-center"><a class="d-block mb-3 view-cart f-w-700 text-primary" href="cart.html">Go to
                      your cart</a><a class="btn btn-primary view-checkout text-white" href="checkout.html">Checkout</a>
                  </li>
                </ul>
              </div>
            </li>
            <div class="custom-menu notification-dropdown py-0 overflow-hidden">
            </div>
            </li>
            <li><a class="full-screen" href="javascript:void(0)">
                <svg>
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#scanfull"></use>
                </svg></a></li>
            <li class="custom-dropdown"><a href="javascript:void(0)">
                <svg>
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#bookmark"></use>
                </svg></a>
              <div class="custom-menu bookmark-dropdown py-0 overflow-hidden">
                <h3 class="title bg-primary-light dropdown-title">Bookmark</h3>
                <ul>
                  <li>
                    <form class="mb-0">
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search Bookmark..." /><span
                          class="input-group-text">
                          <svg class="svg-color">
                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Search"></use>
                          </svg></span>
                      </div>
                    </form>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2 btn-activity-primary"><a href="index-2.html">
                        <svg class="svg-color">
                          <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#cube"></use>
                        </svg></a></div>
                    <div class="d-flex justify-content-between align-items-center w-100"><a
                        href="index-2.html">Dashboard</a>
                      <svg class="svg-color icon-star">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                      </svg>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2 btn-activity-secondary"><a href="to-do.html">
                        <svg class="svg-color">
                          <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#check"></use>
                        </svg></a></div>
                    <div class="d-flex justify-content-between align-items-center w-100"><a href="to-do.html">To-do</a>
                      <svg class="svg-color icon-star">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                      </svg>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2 btn-activity-danger"><a href="apex_chart.html">
                        <svg class="svg-color">
                          <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#pie"></use>
                        </svg></a></div>
                    <div class="d-flex justify-content-between align-items-center w-100"><a
                        href="apex_chart.html">Chart</a>
                      <svg class="svg-color icon-star">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                      </svg>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="profile-nav custom-dropdown">
              <div class="user-wrap">
                <div class="user-content">
                  <div class="col-lg-8 col-md-8">
                    <div class=" ">
                      <h2 class="text-end"><?php echo $name ?></h2>
                      <!-- <p>This is a demonstration of integrating a sidebar and a navbar into a single responsive layout.</p> -->
                    </div>
                  </div>
                  <p class="mb-0">Admin<i class="fa-solid fa-chevron-down"></i></p>
                </div>
              </div>
              <div class="custom-menu overflow-hidden">
                <ul class="profile-body">
                  <li class="d-flex">
                    <svg class="svg-color">
                      <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Login"></use>
                    </svg>
                    <a class="ms-2" href="logout.php">Log Out</a>
                  </li>
                </ul>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </header>
   
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page sidebar start-->
      <aside class="page-sidebar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div class="main-sidebar" id="main-sidebar">
          <ul class="sidebar-menu" id="simple-bar">
            <li class="pin-title sidebar-main-title">
              <div>
                <h5 class="sidebar-title f-w-700">Pinned</h5>
              </div>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h5 class="lan-1 f-w-700 sidebar-title">General</h5>
              </div>
            </li>
            <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                href="javascript:void(0)">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Home-dashboard"></use>
                </svg>
                <h6>Dashboards</h6><span class="badge">3</span><i class="iconly-Arrow-Right-2 icli"></i>
              </a>
              <ul class="sidebar-submenu">
                <li> <a href="from.php">user</a></li>
                <li> <a href="contact.php">Contact</a></li>
                <li> <a href="index-2.php">Default</a></li>
                <li><a href="dashboard-02.php">Ecommerce </a></li>
                <li> <a href="dashboard-03.php">Education</a></li>
              </ul>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h5 class="f-w-700 sidebar-title pt-3">Application</h5>
              </div>
            </li>
            <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                href="javascript:void(0)">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Info-circle"></use>
                </svg>
                <h6 class="f-w-600">product</h6><i class="iconly-Arrow-Right-2 icli"></i>
              </a>
              <ul class="sidebar-submenu">
                <li> <a href="productcreate.php">product create </a></li>
                <li> <a href="list-products.php">product Displya </a></li>
              </ul>
            </li>
            <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                href="javascript:void(0)">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Info-circle"></use>
                </svg>
                <h6 class="f-w-600">category</h6><i class="iconly-Arrow-Right-2 icli"></i>
              </a>
              <ul class="sidebar-submenu">
                <li> <a href="category.php">category create </a></li>
                <li> <a href="categorydisplay.php">category Displya </a></li>
              </ul>
            </li>
            <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                href="javascript:void(0)">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Info-circle"></use>
                </svg>
                <h6 class="f-w-600">Blog</h6><i class="iconly-Arrow-Right-2 icli"></i>
              </a>
              <ul class="sidebar-submenu">
                <li> <a href="blog.php">blog create </a></li>
                <li> <a href="blogshow.php">blog Displya </a></li>
              </ul>
            </li>
            <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                href="javascript:void(0)">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Info-circle"></use>
                </svg>
                <h6 class="f-w-600">Deals</h6><i class="iconly-Arrow-Right-2 icli"></i>
              </a>
              <ul class="sidebar-submenu">
                <li> <a href="deals.php">deals create </a></li>
                <li> <a href="dealshow.php">deals Displya </a></li>
              </ul>
            </li>


            <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                href="javascript:void(0)">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Info-circle"></use>
                </svg>
                <h6 class="f-w-600">home</h6><i class="iconly-Arrow-Right-2 icli"></i>
              </a>
              <ul class="sidebar-submenu">
                <li> <a href="slider.php">slider create </a></li>
                <li> <a href="slidershow.php">slider Displya </a></li>
              </ul>
            </li>


            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </aside>
      <!-- Page sidebar end-->


    </div>
    <!-- jquery-->
    <script src="../assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="../assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="../assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- feather-->
    <script src="../assets/js/vendors/feather-icon/feather.min.js"></script>
    <script src="../assets/js/vendors/feather-icon/custom-script.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/sidebar.js"></script>
    <!-- height_equal-->
    <script src="../assets/js/height-equal.js"></script>
    <!-- config-->
    <script src="../assets/js/config.js"></script>
    <!-- apex-->
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- data_table-->
    <script src="../assets/js/js-datatables/datatables/jquery.dataTables.min.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom.js"></script>
    <!-- page_datatable1-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom1.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- theme_customizer-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- tilt-->
    <script src="../assets/js/animation/tilt/tilt.jquery.js"></script>
    <!-- page_tilt-->
    <script src="../assets/js/animation/tilt/tilt-custom.js"></script>
    <!-- dashboard_1-->
    <script src="../assets/js/dashboard/dashboard_1.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
</body>

</html>