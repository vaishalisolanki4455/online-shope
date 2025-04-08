<?php
include "connection.php";
session_start();
$name = $_SESSION['name'];
$id = $_SESSION['id'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grocee - Checkout</title>
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

    <!-- Start checkout page area -->
    <div class="checkout__page--area">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian">
                    <header class="main__header checkout__mian--header mb-30">
                        <a class="logo logo__left" href="index.php"><img src="assets/img/logo/nav-log.png"
                                alt="logo"></a>
                        <details class="order__summary--mobile__version">
                            <summary class="order__summary--toggle border-radius-5">
                                <span class="order__summary--toggle__inner">
                                    <span class="order__summary--toggle__icon">
                                        <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>    
                                </span>
                            </summary>
                            
                        </details>
                    </header>
                    <main class="main__content_wrapper section--padding pt-0">
                        <form action="#">
                            <div class="checkout__content--step section__shipping--address pt-0">
                                <div class="section__header checkout__header--style3 position__relative mb-25">
                                    <span class="checkout__order--number">Order <?php echo $name ?></span>
                                    <h2 class="section__header--title h3">Thank you submission</h2>
                                    <div class="checkout__submission--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.995" height="25.979"
                                            viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="order__confirmed--area border-radius-5 mb-15">
                                    <h3 class="order__confirmed--title h4">Your order is confirmed</h3>
                                    <p class="order__confirmed--desc">You,ll receive a confirmation email with your
                                        order number shortly</p>
                                </div>


                                <div class="customer__information--area border-radius-5 mb-12">
                                    <?php
                                    include "connection.php";

                                    $sql = "SELECT * FROM checkout WHERE user_id = '$id'";
                                    $query = mysqli_query($conn, $sql);

                                    if ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <h3 class="customer__information--title h4">Customer Information</h3>
                                        <div class="customer__information--inner d-flex">
                                            <div class="customer__information--list">
                                                <div class="customer__information--step">
                                                    <h4 class="customer__information--subtitle h5">Contact information</h4>
                                                    <ul>
                                                        <li><span
                                                                class="customer__information--text"><?php echo $row['contact']; ?></span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="customer__information--step">
                                                    <h4 class="customer__information--subtitle h5">Shipping address</h4>
                                                    <ul>
                                                        <li><span
                                                                class="customer__information--text"><?php echo $row['country']; ?>,</span>
                                                        </li>
                                                        <li><span
                                                                class="customer__information--text"><?php echo $row['city']; ?>,</span>
                                                        </li>
                                                        <li><span
                                                                class="customer__information--text"><?php echo $row['address']; ?>
                                                            </span></li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="customer__information--list">
                                                <div class="customer__information--step">
                                                    <h4 class="customer__information--subtitle h5">Payment method</h4>
                                                    <ul>
                                                        <li><span
                                                                class="customer__information--text"><?php echo $row['checkmethod']; ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                <a class="continue__shipping--btn btn border-radius-5" href="orderinsert.php">Pay
                                    now</a>
                                <a class="previous__link--content" href="cart.php">Return to shipping</a>
                            </div>
                        </form>
                    </main>
                    <footer class="main__footer main__footer--wrapper">
                        <p class="copyright__content">Copyright © 2022 <a class="copyright__content--link text__primary"
                                href="index.php">Grocee</a> . All Rights Reserved.Design By Grocee</p>
                    </footer>
                </div>
                <aside class="checkout__sidebar sidebar">
                    <div class="cart__table checkout__product--table">
                        <table class="cart__table--inner">
                            <?php
                            include "connection.php";
                            $sql = "SELECT cart.*, product.product_name, product.discount_price, product.image 
                                         FROM cart 
                                        LEFT JOIN product ON product.id = cart.product_id
                                        WHERE user_id = '$id'";
                            // echo $sql;
                            // exit;
                            
                            $query = mysqli_query($conn, $sql);
                            // Base URL for images
                            $base = "http://localhost:8080/project2/admin";
                            ?>
                            <tbody class="cart__table--body">
                                <?php
                                $total = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    $discount_price = (float) $row['discount_price'];
                                    $quantity = (int) $row['quantity'];
                                    $sub_total = $discount_price * $quantity;
                                    $total += $sub_total;
                                    ?>
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="product__image two  d-flex align-items-center">
                                                <div class="product__thumbnail border-radius-5">
                                                    <img class="border-radius-5"
                                                            src="<?php echo $base . '/' . $row['image']; ?>"
                                                            alt="cart-product">
                                                    <span class="product__thumbnail--quantity"><?php echo $row['quantity']; ?></span>
                                                </div>
                                                <div class="product__description">
                                                    <h3 class="product__description--name h4"><?php echo $row['product_name']; ?></h3>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price">$<?php echo $sub_total ?></span>
                                        </td>
                                    </tr>
                                   
                                   
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                   
                    <div class="checkout__total">
                        <table class="checkout__total--table">
                            <tbody class="checkout__total--body">
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Subtotal </td>
                                    <td class="checkout__total--amount text-right">$<?php echo $total ?></td>
                                </tr>
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Shipping</td>
                                    <td class="checkout__total--calculated__text text-right">Calculated at next step
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="checkout__total--footer">
                                <tr class="checkout__total--footer__items">
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">
                                        Total </td>
                                    <td
                                        class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                        $<?php echo $total ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->

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