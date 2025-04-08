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
    <link rel="stylesheet" href="assets/css/order.css">

</head>

<body>

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
                            <h1 class="breadcrumb__content--title text-white mb-25">Order info</h1>
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
                        <?php
                        include "connection.php";

                        $sql = "SELECT `order`.*,product.product_name, product.image
                        FROM `order`
                        LEFT JOIN product ON product.id = `order`.product_id WHERE user_id = '$id'";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {

                            $base = "http://localhost:8080/project2/admin";

                            ?>
                            <div class="order-info-box p-4 border rounded shadow-sm bg-light mb-5 pb-5">
                                <h3 class="mb-3">Order Summary</h3>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 me-2">ADDRESS:</h5>
                                    <h5 class="mb-0 fw-bold"><?php echo htmlspecialchars($row['address']); ?></>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 me-2">CONTACT:</h5>
                                    <h5 class="mb-0 fw-bold"><?php echo htmlspecialchars($row['contact']); ?></>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart__table">
                                        <table class="cart__table--inner">
                                            <thead class="cart__table--header">
                                                <tr class="cart__table--header__items">
                                                    <th class="cart__table--header__list">DATE</th>
                                                    <th class="cart__table--header__list">PRODUCT</th>
                                                    <th class="cart__table--header__list">QUANTITY</th>
                                                    <th class="cart__table--header__list">TOTAL</th>
                                                    <th class="cart__table--header__list">CHECKMETHOD</th>
                                                </tr>
                                            </thead>
                                            <tbody class="cart__table--body pb-4">
                                                <td class="cart__table--body__list"><?php echo $row['date']; ?></td>
                                                <td class="cart__table--body__list">
                                                    <?php
                                                    $productNames = explode(',', $row['product_name']); // Splitting if stored as comma-separated
                                                    foreach ($productNames as $product) {
                                                        echo htmlspecialchars($product) . "<br>"; // Displaying each product name separately
                                                    }
                                                    ?>
                                                </td>
                                                <td class="cart__table--body__list"><?php echo $row['quantity']; ?></td>
                                                <td class="cart__table--body__list"><?php echo $row['total']; ?></td>
                                                <td class="cart__table--body__list"><?php echo $row['checkmethod']; ?></td>

                                            </tbody>
                                            <?php
                        }
                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- cart section end -->
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