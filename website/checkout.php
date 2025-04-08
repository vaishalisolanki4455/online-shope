<?php
include "connection.php";

session_start();
$id = $_SESSION['id'] ?? '';
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
                        <a class="logo logo__left mb-20" href="index.php">
                            <img src="assets/img/logo/nav-log.png" alt="logo">
                        </a>
                    </header>

                    <main class="main__content_wrapper section--padding pt-0 mb-5">
                        <form action="" method="post">

                            <!-- Billing Address Section -->
                            <div class="checkout__content--step section__shipping--address pt-10">
                                <div class="section__header mb-25">
                                    <h2 class="section__header--title h3">Billing Address</h2>
                                    <p class="section__header--desc">Select the address that matches your card or
                                        payment method.</p>
                                </div>

                                <div class="checkout__content--step__inner3 border-radius-5">
                                    <div class="checkout__content--input__box--wrapper">
                                        <h1 class="m-3 text-center mt-3">User info</h1>
                                        <div class="row">
                                            <div class="col-lg-6 mb-12">
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="First name" id="fname" name="fname" type="text">
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="Last name" id="lname" type="text" name="lname">
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="date" id="date" type="date" name="date">
                                            </div>
                                            <div class="col-12 mb-12">
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="Contact" id="contact" type="text" name="contact">
                                            </div>
                                            <div class="col-12 mb-12">
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="Address" id="address" type="text" name="address">
                                            </div>
                                            <div class="col-12 mb-12">
                                                <input class="checkout__input--field border-radius-5" placeholder="City"
                                                    id="city" type="text" name="city">
                                            </div>
                                            <div class="col-12 mb-12">
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="country" id="country" type="text" name="country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step section__shipping--address">
                                <div class="section__header mb-25">
                                    <h2 class="section__header--title h3">Payment</h2>
                                    <p class="section__header--desc">All transactions are secure and encrypted.</p>
                                </div>

                                <div class="checkout__content--step__inner3 border-radius-5">
                                    <div class="checkout__content--input__box--wrapper">
                                        <div class="row">
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list position__relative">
                                                    <div class="shipping__contact--box__list">
                                                        <div class="shipping__radio--input">
                                                            <input class="shipping__radio--input__field" id="online"
                                                                name="checkmethod" type="radio" value="Online Payment">
                                                        </div>
                                                        <label class="shipping__radio--label" for="online">
                                                            <span class="shipping__radio--label__primary">Online
                                                                Payment</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="shipping__contact--box__list">
                                                <div class="shipping__radio--input">
                                                    <input class="shipping__radio--input__field" id="offline"
                                                        name="checkmethod" type="radio" value="Cash on Delivery">
                                                </div>
                                                <label class="shipping__radio--label" for="offline">
                                                    <span class="shipping__radio--label__primary">Cash on
                                                        Delivery</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!-- Total Section -->
                            <div class="checkout__total--footer mt-4">
                                <?php
                                include "connection.php";
                                $sql = "SELECT cart.*, product.product_name, product.discount_price, product.image 
                                    FROM cart 
                                    LEFT JOIN product ON product.id = cart.product_id
                                    WHERE user_id = '$id'";

                                $query = mysqli_query($conn, $sql);

                                $total = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    $discount_price = (float) $row['discount_price'];
                                    $quantity = (int) $row['quantity'];
                                    $sub_total = $discount_price * $quantity;
                                    $total += $sub_total;
                                }
                                ?>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="h4" style="font-size: 24px; font-weight: bold; border: none; outline: none;">Total:</h3>
                                     <input type="text" class="cart__summary--amount" style="font-size: 24px; font-weight: bold; border: none; outline: none;" name="total" id="total" value="$<?php echo $total; ?>" readonly>
                                </div>
                            </div>

                            <!-- Pay Now Button -->
                            <div class="checkout__content--step__footer d-flex align-items-center mt-4">
                                <button type="button" class="continue__shipping--btn btn border-radius-5"
                                    onclick="insertdata()">Pay Now</button>
                                <a class="previous__link--content" href="cart.php">Return to Cart</a>
                            </div>

                        </form>
                    </main>

                    <footer class="main__footer main__footer--wrapper">
                        <p class="copyright__content">Copyright © 2022
                            <a class="copyright__content--link text__primary" href="index.php">Grocee</a>.
                            All Rights Reserved. Design By Grocee
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- End checkout page area -->
    <script>
        function insertdata() {
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var date = $("#date").val();
            var contact = $("#contact").val();
            var address = $("#address").val();
            var city = $("#city").val();
            var country = $("#country").val();
            var checkmethod = $("input[name='checkmethod']:checked").val();
            var total = $("#total").val();
              // ✅ Get selected radio value
            // alert(checkmethod);

            // if (!checkmethod) {
            //     alert("Please select a payment method.");
            //     return;
            // }

            var fd = new FormData();
            fd.append("fname", fname);
            fd.append("lname", lname);
            fd.append("date", date);
            fd.append("contact", contact);
            fd.append("address", address);
            fd.append("city", city);
            fd.append("country", country);
            fd.append("checkmethod", checkmethod);
            fd.append("total", total);


            $.ajax({
                type: "POST",
                url: "ckeckoutinsert.php",
                data: fd,
                contentType: false,
                processData: false,
                success: function (data) {
                    // alert(data);
                    // console.gol(data);
                    if (data == 0) {
                        // alert("Success");
                        window.location.href = "checkout-2.php";
                    } else {
                        alert('error');
                    }
                }
            });
        }
    </script>


    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="assets/js/vendor/popper.js" defer="defer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/glightbox.min.js"></script>

    <!-- Customscript js -->
    <script src="assets/js/script.js"></script>


</body>

</html>