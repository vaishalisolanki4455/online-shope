<?php
session_start();
$id = $_SESSION['id'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grocee - Account</title>
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
    <?php
    // include "header.php";
    // include "header.php";
    ?>
    <!-- End header area -->

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Account</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white"
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Account</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">
                <div class="my__account--section__inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="account__wrapper account__wrapper--style4 border-radius-10">
                                <div class="account__content">
                                    <h2 class="account__content--title h3 mb-20">Orders History</h2>
                                    <div class="account__table--area">
                                        <table class="account__table">
                                            <thead class="account__table--header">
                                                <tr class="account__table--header__child">
                                                    <th class="account__table--header__child--items">Order</th>
                                                    <!-- <th class="account__table--header__child--items">Admin</th> -->
                                                    <th class="account__table--header__child--items">Date</th>
                                                    <th class="account__table--header__child--items">Payment Method</th>
                                                    <th class="account__table--header__child--items">Payment Status</th>
                                                    <th class="account__table--header__child--items">Total</th>
                                                    <th class="account__table--header__child--items">Info order</th>

                                                </tr>
                                            </thead>
                                            <tbody class="account__table--body mobile__none">
                                                <?php
                                                include "connection.php";

                                                // Fetch all user_id records from checkout table
                                                $sql = "SELECT checkout.*,grocee.name 
                                                 FROM checkout
                                                 LEFT JOIN grocee ON checkout.user_id = grocee.id WHERE user_id = '$id'";
                                                $query = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                    <tr class="account__table--body__child">
                                                        <td class="account__table--body__child--items">
                                                            #<?php echo $row['user_id']; ?></td>

                                                        <td class="account__table--body__child--items">
                                                            <?php echo $row['date']; ?>
                                                        </td>
                                                        <td class="account__table--body__child--items">
                                                            <?php echo $row['checkmethod']; ?>
                                                        </td>
                                                        <?php
                                                        if ($row['checkmethod'] == '') {
                                                            ?>
                                                            <td class="account__table--body__child--items">unpaid</td>
                                                        <?php
                                                        } else {
                                                            ?>
                                                            <td class="account__table--body__child--items">paid</td>
                                                            <?php
                                                        }
                                                        ?>
                                                        <td class="account__table--body__child--items">
                                                            <?php echo $row['total']; ?>
                                                        </td>
                                                        <td class="account__table--body__child--items">
                                                            <button class="view-order-btn btn btn-info"
                                                                onclick="window.location.href='order.php';">
                                                                View 
                                                            </button>
                                                        </td>


                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3">
                            <?php
                            include "connection.php";
                            $sql = "SELECT * FROM checkout WHERE user_id = '$id'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($query);
                            ?>
                            <div class="account__details">
                                <h4 class="account__details--title">Account details</h4>
                                <p class="account__details--desc">Admin <br> <?php echo $row['address']; ?>
                                    <br><?php echo $row['city']; ?><br> <?php echo $row['country']; ?>
                                </p>
                                <a class="account__details--link" href="checkout-2.php">View Addresses (1)</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- my account section end -->

        <!-- Start shipping section -->
        <!-- <section class="shipping__section2 shipping__style3">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping1.png" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Shipping</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping2.png" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Payment</h2>
                            <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping3.png" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Return</h2>
                            <p class="shipping__items2--content__desc">30 day guarantee</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping4.png" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Support</h2>
                            <p class="shipping__items2--content__desc">Support every time</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End shipping section -->

    </main>

    <!-- Start footer section -->
    <?php
    include "footer.php";
    ?>
    <!-- End footer section -->

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

    <!-- Customscript js -->
    <script src="assets/js/script.js"></script>

</body>

</html>