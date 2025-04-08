<?php
session_start();
$id = $_SESSION['id'] ?? '';
$email = $_SESSION['email'] ?? '';
$name = $_SESSION['name'] ?? '';
if (isset($_SESSION['email'])) {

    // print_r($email);
    // exit();
}
// if (!isset($_SESSION['id'])) {
//     header('Location: login.php');
//     exit;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grocee - Organic Food HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start header area -->
    <header class="header__section header__transparent">

        <div class="main__header main__header2 header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">

                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="index.php"><img
                                    class="main__logo--img" src="assets/img/logo/nav-log.png" alt="logo-img"></a></h1>
                    </div>
                    <div class="categories__menu">
                        <div class="categories__menu--header text-white d-flex align-items-center">
                            <svg class="categories__list--icon" xmlns="http://www.w3.org/2000/svg" width="21.007"
                                height="16.831" viewBox="0 0 21.007 16.831">
                                <path id="listine-dots"
                                    d="M20.66,99.786a1.036,1.036,0,0,0-.347-.13H4.227a2.013,2.013,0,0,1,0,3.012q7.988,0,15.976,0h.063a.7.7,0,0,0,.454-.162.9.9,0,0,0,.286-.452v-1.765A.861.861,0,0,0,20.66,99.786ZM3.323,101.162A1.662,1.662,0,1,1,1.662,99.5,1.661,1.661,0,0,1,3.323,101.162Zm16.99,3H4.227a2.013,2.013,0,0,1,0,3.012q7.988,0,15.976,0h.063a.7.7,0,0,0,.454-.164.9.9,0,0,0,.286-.452v-1.765a.861.861,0,0,0-.347-.5A1.082,1.082,0,0,0,20.314,104.161Zm-16.99,1.506a1.662,1.662,0,1,1-1.662-1.662A1.663,1.663,0,0,1,3.323,105.668Zm16.99,3H4.227a2.013,2.013,0,0,1,0,3.012q7.988,0,15.976,0h.063a.7.7,0,0,0,.454-.164.9.9,0,0,0,.286-.45v-1.767a.861.861,0,0,0-.347-.5A1.083,1.083,0,0,0,20.314,108.663Zm-16.99,1.506a1.662,1.662,0,1,1-1.662-1.662A1.663,1.663,0,0,1,3.323,110.169Zm16.99,2.993H4.227a2.013,2.013,0,0,1,0,3.012q7.988,0,15.976,0h.063a.687.687,0,0,0,.454-.162.9.9,0,0,0,.286-.452v-1.765a.861.861,0,0,0-.347-.5A1.035,1.035,0,0,0,20.314,113.163Zm-16.99,1.506a1.662,1.662,0,1,1-1.662-1.662A1.661,1.661,0,0,1,3.323,114.669Z"
                                    transform="translate(0 -99.5)" fill="currentColor" />
                            </svg>
                            <span class="categories__menu--title">All Categories</span>
                            <svg class="categories__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355"
                                height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="dropdown__categories--menu">
                            <ul class="d-none d-lg-block">
                                <?php
                                include "connection.php";
                                // Fetch category data
                                $sql = "SELECT * FROM category WHERE status = 0";
                                $query = mysqli_query($conn, $sql);
                                // Base URL for images
                                $base = "http://localhost:8080/project2/admin";
                                while ($row = mysqli_fetch_array($query)): ?>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link"
                                            href="product.php?category_id=<?php echo $row['id']; ?>">
                                            <h6 class="product__categories--content__maintitle">
                                                <?php echo htmlspecialchars($row['category'], ENT_QUOTES, 'UTF-8'); ?>
                                            </h6>
                                        </a>
                                    </li>
                                <?php endwhile ?>
                            </ul>
                        </div>
                    </div>
                    <div class="header__menu d-none d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="index.php">Home

                                    </a>

                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="blog.php">Blog
                                    </a>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="product.php">product
                                    </a>
                                </li>

                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="contact.php">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__account">
                        <ul class="d-flex">
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="my-account.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                    </svg>

                                </a>
                            </li>
                            <li class="header__account--items">
                                <?php if (isset($id) && !empty($id)): ?>
                                    <a class="header__account--btn minicart__open--btn"
                                        href="cart.php?id=<?php echo $id; ?>" data-offcanvas>
                                    <?php else: ?>
                                        <a class="header__account--btn minicart__open--btn" href="javascript:void(0);"
                                            onclick="alert('Login please');">
                                        <?php endif; ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.706" height="15.534"
                                            viewBox="0 0 14.706 13.534">
                                            <g id="cart" transform="translate(0 0)">
                                                <g id="cart_icon">
                                                    <path id="Path_16787" data-name="Path 16787"
                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                        transform="translate(0 -463.248)" fill="#fefefe" />
                                                    <path id="Path_16788" data-name="Path 16788"
                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                        transform="translate(-1.191 -466.622)" fill="#fefefe" />
                                                    <path id="Path_16789" data-name="Path 16789"
                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                        transform="translate(-2.875 -466.622)" fill="#fefefe" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="items__count">3</span>
                                    </a>
                            </li>
                            <?php
                            if (empty($name)) {
                                ?>
                                <li class="header__account--items">
                                    <div class="user-content">
                                        <div class="col-lg-8 col-md-8">
                                            <div class=" ">
                                                <h3 class="text-end"><?php echo $name ?? 'user' ?></h3>
                                                <input type="hidden" name="" id="" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-0 d-flex">Admin<i class="fa-solid fa-chevron-down"></i></p>
                                            <a class="ms-2 mt-2" href="login.php">Login</a>

                                        </div>
                                    </div>
                                </li>
                                <?php

                            } else {
                                ?>

                                <li class="header__account--items">
                                    <div class="user-content">
                                        <div class="col-lg-8 col-md-8">
                                            <div class=" ">
                                                <h3 class="text-end"><?php echo $name ?? '' ?></h3>
                                                <input type="hidden" name="" id="" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <p class="mb-0 d-flex">Admin<i class="fa-solid fa-chevron-down"></i></p> -->
                                            <a class="ms-2 mt-2" href="logout.php">Log Out</a>

                                        </div>
                                    </div>
                                </li>

                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start offCanvas minicart -->
        <!-- End offCanvas minicart -->
    </header>
    <!-- End header area -->



    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="assets/js/vendor/popper.js" defer="defer"></script>
    <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/glightbox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Customscript js -->
    <script src="assets/js/script.js"></script>

</body>

</html>