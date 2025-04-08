

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grocee - Cart</title>
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

<body onload="getdata()">

    <?php
    include "header.php";
    ?>
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Shopping Cart</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white"
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Shopping
                                        Cart</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container-fluid">
                <div class="cart__section--inner">
                    <form action="">
                        <h2 class="cart__title mb-40">Shopping Cart</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart__table">
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
                                        <thead class="cart__table--header">
                                            <tr class="cart__table--header__items">
                                                <th class="cart__table--header__list">Delete_Product</th>
                                                <th class="cart__table--header__list">Product</th>
                                                <th class="cart__table--header__list">Price</th>
                                                <th class="cart__table--header__list">Quantity</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $total = 0;
                                        while ($row = mysqli_fetch_array($query)) {
                                            $discount_price = (float) $row['discount_price'];
                                            $quantity = (int) $row['quantity'];
                                            $sub_total = $discount_price * $quantity;
                                            $total += $sub_total;
                                            ?>
                                            <tbody class="cart__table--body pb-4">
                                                <tr class="cart__table--body__items">
                                                    <td class="cart__table--body__list">
                                                        <div class="cart__product d-flex align-items-center">
                                                            <button class="btn btn-danger"
                                                                onclick="deletedata(<?php echo $row['id'] ?>)">Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <div class="d-flex align-items-center">
                                                            <!-- Image and product name side by side -->
                                                            <div class="cart__thumbnail me-3"> <!-- Added margin -->
                                                                <a href="">
                                                                    <img class="product__items--img product__primary--img"
                                                                        src="<?php echo htmlspecialchars($base . '/' . $row['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                                                        alt="product-img"
                                                                        style="width: 80px; height: auto;">
                                                                </a>
                                                            </div>
                                                            <div class="cart__content">
                                                                <h3 class="m-0"><?php echo $row['product_name'] ?></h3>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <h3 class="">$<?php echo $row['discount_price'] ?></h3>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <div class="quantity__box minicart__quantity">
                                                            <button type="button" class="quantity__value decrease"
                                                                aria-label="quantity value" value="Decrease Value"
                                                                onclick="newupdatequantity(<?php echo $row['id']; ?>, <?php echo $row['quantity'] - 1; ?>)">-</button>
                                                            <label>
                                                                <div class="px-4 border quantity__number">
                                                                    <?php echo $row['quantity'] ?>
                                                                </div>
                                                            </label>
                                                            <button type="button" class="quantity__value increase"
                                                                aria-label="quantity value"
                                                                onclick="updatequantity(<?php echo $row['id']; ?>, <?php echo $row['quantity'] + 1; ?>)">+</button>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>

                                    <script>
                                        function deletedata(id) {
                                            var fd = new FormData();
                                            fd.append("id", id);
                                            // alert(id);
                                            $.ajax({
                                                type: "POST",
                                                url: "cartdelete.php",
                                                data: fd,
                                                processData: false,
                                                contentType: false,
                                                success: function (data) {
                                                    // close.log(data);
                                                    if (data == 0) {
                                                        // alert("data delete");
                                                        getdata();
                                                        window.location.href = 'cart.php';

                                                    } else {
                                                        alert("error");
                                                    }

                                                }
                                            });

                                        }
                                    </script>
                                    <script>
                                        function updatequantity(cart_id, new_quantity) {
                                            var fd = new FormData();
                                            fd.append("cart_id", cart_id);
                                            fd.append("quantity", new_quantity);

                                            $.ajax({
                                                type: "POST",
                                                url: "cartupdate.php",
                                                data: fd,
                                                processData: false,
                                                contentType: false,
                                                success: function (data) {
                                                    if (data == "0") {
                                                        // alert("Quantity updated successfully!");
                                                        window.location.href = 'cart.php';
                                                    } else {
                                                        alert("Error updating quantity.");
                                                    }
                                                }
                                            });
                                        }

                                        function newupdatequantity(cart_id, new_quantity) {
                                            // alert("sdf");
                                            var fd = new FormData();
                                            fd.append("cart_id", cart_id);
                                            fd.append("quantity", new_quantity);

                                            $.ajax({
                                                type: "POST",
                                                url: "cartupdate.php",
                                                data: fd,
                                                processData: false,
                                                contentType: false,
                                                success: function (data) {
                                                    if (data == "0") {
                                                        // alert("Quantity updated successfully!");
                                                        window.location.href = 'cart.php';
                                                    } else {
                                                        alert("Error updating quantity.");
                                                    }
                                                }
                                            });
                                        }
                                    </script>
                                    <div class="continue__shopping d-flex justify-content-between align-items-center mt-5">
                                        <a class="continue__shopping--link" href="index.php">Continue shopping</a>

                                        <div class="d-flex align-items-center">
                                            <h3 class="cart__summary--total__title text-left me-2"
                                                style="font-size: 24px; font-weight: bold;">Total:</h3>
                                                <input type="text" class="cart__summary--amount" style="font-size: 24px; font-weight: bold; border: none; outline: none;" name="total" id="total" value="$<?php echo $total; ?>" readonly>
                                            
                                        </div>
                                        <div class="minicart__button d-flex justify-content-center">

                                            <a class="btn minicart__button--link" href="checkout.php">Checkout</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- cart section end -->




        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3">
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
        </section>
        <!-- End shipping section -->

    </main>

    <!-- Start footer section -->
    <?php
    include "footer.php";
    ?>
    <!-- End footer section -->

    <!-- Quickview Wrapper -->

    <!-- Quickview Wrapper End -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>


    <!-- All Script JS Plugins here  -->
    <script src="assets/js/vendor/popper.js" defer="defer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/glightbox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Customscript js -->
    <script src="assets/js/script.js"></script>

</body>

</html>