<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php
    include "header.php";
    ?>
    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <?php
                    include "connection.php";

                    // Fetch slider data
                    $sql = "SELECT * FROM slider WHERE status = 0";
                    $query = mysqli_query($conn, $sql);

                    // Base URL for images
                    $base = "http://localhost:8080/project2/admin";

                    // Loop through each row in the slider table
                    while ($row = mysqli_fetch_array($query)):
                        ?>
                        <div class="swiper-slide">
                            <div class="hero__slider--items bg__gray--color">
                                <div class="container slider__items--container">
                                    <div class="hero__slider--items__inner">
                                        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center">
                                            <div class="col">
                                                <div class="slider__content slider__content--padding__left">
                                                    <span class="slider__content--subtitle text__secondary">Eat clean and
                                                        green</span>
                                                    <h2 class="slider__content--maintitle h1">
                                                        Natural is <span class="text__secondary">always</span> <br>
                                                        Healthy
                                                    </h2>
                                                    <p class="slider__content--desc">
                                                        The more you love your health, the more you eat organic. No medicine
                                                        can heal you better than organic food does.
                                                    </p>
                                                    <a class="btn slider__btn" href="index.php">Shop Now</a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="hero__slider--layer">
                                                    <img class="slider__layer--img"
                                                        src="<?php echo $base . '/' . $row['image']; ?>" alt="slider-img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <!-- End slider section -->

        <!-- Start categories product section -->
        <section class="product__section product__categories--section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Recently added to our store</span>
                    <h2 class="section__heading--maintitle">Our Hottest Categories</h2>
                </div>
                <div>

                    <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
                        <li class="product__tab--btn__list active" data-toggle="tab" data-target="#product_all">All</li>
                        <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fresh">Fruits And
                            Vagetables</li>
                        <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits"> Eggs, Meat
                            & Fish </li>
                        <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits">
                            Foodgrains,Oli & Masala
                        </li>
                        <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits">
                            Bakery,Cakes & Dairy </li>
                        <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_nature"> Cleaning &
                            Household</li>
                        <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_recipies">Beauty &
                            Hygiene
                        </li>

                    </ul>
                </div>
                <div class="row g-4 justify-content-center pt-5"> <!-- Bootstrap grid with spacing -->
                    <?php
                    include "connection.php";

                    // Fetch category data
                    $sql = "SELECT * FROM category WHERE status = 0";
                    $query = mysqli_query($conn, $sql);

                    // Base URL for images
                    $base = "http://localhost:8080/project2/admin";

                    // Loop through categories
                    while ($row = mysqli_fetch_array($query)): ?>
                        <div class="col-lg-4 col-md-6 col-12"> <!-- Responsive columns -->
                            <div class="product__items product__bg p-3 m-2 shadow-lg rounded">
                                <!-- Adds spacing & shadow -->
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link"
                                        href="product.php?category_id=<?php echo $row['id']; ?>">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="height: 250px; overflow: hidden;">
                                            <img class="img-fluid w-100 rounded"
                                                src="<?php echo htmlspecialchars($base . '/' . $row['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                                alt="categories-img">
                                        </div>

                                        <div
                                            class="product__categories--content d-flex justify-content-between align-items-center mt-3">
                                            <div class="product__categories--content__left">
                                                <h3 class="product__categories--content__maintitle">
                                                    <?php echo htmlspecialchars($row['category'], ENT_QUOTES, 'UTF-8'); ?>
                                                </h3>
                                                <span class="product__categories--content__subtitle">88 items</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>


        <!-- End categories product section -->

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container">
                <div class="section__heading text-center mb-25">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">Trending Products</h2>
                </div>
                <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
                    <li class="product__tab--btn__list active" data-toggle="tab" data-target="#product_all">All</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fresh">Fruits And
                        Vagetables</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits">Eggs,Meat & Fish
                    </li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_nature">Foodgrains, Oli
                        & Masala</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_recipies">Bakery,Cakes &
                        Dairy </li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_vegetable">Cleaning &
                        Household
                    </li>
                </ul>
                <div class="tab_content">
                    <div id="product_all" class="tab_pane active show">
                        <div class="product__section--inner">
                            <?php
                            include "connection.php";

                            // Fetch slider data
                            $sql = "SELECT * FROM product WHERE status = 0 LIMIT 12";
                            $query = mysqli_query($conn, $sql);

                            // Base URL for images
                            $base = "http://localhost:8080/project2/admin";
                            ?>

                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                <?php
                                while ($row = mysqli_fetch_array($query)): ?>

                                    <div class="col md-28">
                                        <div class="product__items ">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link" href="">
                                                    <img class="product__items--img product__primary--img"
                                                        src="<?php echo htmlspecialchars($base . '/' . $row['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                                        alt="product-img">
                                                    <img class="product__items--img product__secondary--img"
                                                        src="<?php echo htmlspecialchars($base . '/' . $row['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                                        alt="product-img">
                                                </a>
                                                <div class="product__badge">
                                                    <span class="product__badge--items sale">Sale</span>
                                                </div>
                                                <ul class="product__items--action">
                                                    <li class="product__items--action__list">
                                                        <a class="product__items--action__btn" href="">
                                                            <svg class="product__items--action__btn--svg"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path
                                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="32" />
                                                            </svg>
                                                            <span class="visually-hidden">Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="product__items--action__list">
                                                        <a class="product__items--action__btn" data-open="modal1"
                                                            href="javascript:void(0)">
                                                            <svg class="product__items--action__btn--svg"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path
                                                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                    fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                                    stroke-width="32" />
                                                                <path fill="none" stroke="currentColor"
                                                                    stroke-linecap="round" stroke-miterlimit="10"
                                                                    stroke-width="32" d="M338.29 338.29L448 448" />
                                                            </svg>
                                                            <span class="visually-hidden">Quick View</span>
                                                        </a>
                                                    </li>
                                                    <li class="product__items--action__list">
                                                        <a class="product__items--action__btn" href="compare.html">
                                                            <svg class="product__items--action__btn--svg"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="none" stroke="currentColor"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="32"
                                                                    d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                                <path
                                                                    d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="32" />
                                                            </svg>
                                                            <span class="visually-hidden">Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product__items--content text-center">
                                                <button onclick="insertData(<?php echo $row['id'] ?>)"
                                                    class="add__to--cart__btn border-0">+ Add to
                                                    cart</button>


                                                <h3 class="product__items--content__title h4"><a
                                                        href=""><?php echo htmlspecialchars($row['product_name'], ENT_QUOTES, 'UTF-8'); ?></a>
                                                </h3>
                                                <div class="product__items--price">
                                                    <span
                                                        class="current__price">$<?php echo htmlspecialchars($row['discount_price'], ENT_QUOTES, 'UTF-8'); ?></span>
                                                    <span
                                                        class="old__price">$<?php echo htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>


            function insertData(id) {
                // alert('fdfdf');
                // event.preventDefault(); // Prevent form submission

                var product_id = id;
                var fd = new FormData();
                fd.append('product_id', product_id);
                // alert (product_id);

                $.ajax({
                    type: 'POST',
                    url: 'cartinsert.php',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        if (data == '0') {
                            // alert("Success");
                            window.location.href = 'cart.php';
                        } else {
                            alert("Error");
                        }
                    }
                });
            }

        </script>
        <!-- End product section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n30">
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail display-block" href=""><img
                                    class="banner__items--thumbnail__img display-block"
                                    src="assets/img/banner/banner1.png" alt="banner-img">
                                <div class="banner__items--content">
                                    <h2 class="banner__items--content__title text__secondary">Organic Juice</h2>
                                    <p class="banner__items--content__desc text-white">Shop our selection of organic
                                        fresh vegetables in a discounted price 10% off.</p>
                                    <span class="btn banner__items--content__btn">Shop Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail display-block" href=""><img
                                    class="banner__items--thumbnail__img display-block"
                                    src="assets/img/banner/banner2.png" alt="banner-img">
                                <div class="banner__items--content">
                                    <h2 class="banner__items--content__title text__secondary">Organic Food</h2>
                                    <p class="banner__items--content__desc text-black">Shop our selection of organic
                                        fresh vegetables in a discounted price 10% off.</p>
                                    <span class="btn banner__items--content__btn">Shop Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start deal product section -->

        <!-- End deal product section -->

        <!-- Start deals banner section -->
        <section class="deals__banner--section banner__bg">
            <div class="container">
                <div class="row align-items-center">
                    <?php
                    include "connection.php";

                    // Fetch slider data
                    $sql = "SELECT * FROM deals WHERE status = 0";
                    $query = mysqli_query($conn, $sql);

                    // Base URL for images
                    $base = "http://localhost:8080/project2/admin";
                    ?>
                    <div class="col-lg-5 col-md-5 deals__baner--col">
                        <?php
                        while ($row = mysqli_fetch_array($query)): ?>


                            <div class="deals__banner--content">
                                <h3 class="deals__banner--content__subtitle text__secondary">Best Deals of the week!</h3>
                                <h3 class="blog__items--desc"><?php echo substr($row['deals'], 0, 100); ?>...</h3>
                                <p class="blog__items--desc"><?php echo substr($row['description'], 0, 100); ?>...</p>
                                <div class="deals__banner--countdown d-flex" data-countdown="Sep 30, 2022 00:00:00"></div>
                                <a class="btn deals__banner--content__btn" href="">Discover Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 deals__baner--col">
                            <div class="banner__items text-right">
                                <img class="slider__layer--img" src="<?php echo $base . '/' . $row['image']; ?>"
                                    alt="slider-img">
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <!-- End deals banner section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Our recent articles about Organic</span>
                    <h2 class="section__heading--maintitle">Our Blog Posts</h2>
                </div>
                <div class="blog__section--inner">
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-2 mb--n30">
                        <?php
                        include "connection.php";

                        $sql = "SELECT * FROM blog";
                        $query = mysqli_query($conn, $sql);
                        $base = "http://localhost:8080/project2/admin";

                        while ($row = mysqli_fetch_array($query)) { // Loop through all rows
                            ?>
                            <div class="col custom-col mb-30">
                                <div class="blog__items">
                                    <div class="blog__items--thumbnail">
                                        <a class="blog__items--link" href="">
                                            <img class="blog__items--img" src="<?php echo $base . '/' . $row['image']; ?>"
                                                alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="blog__items--content">
                                        <div class="blog__items--meta">
                                            <ul class="d-flex">
                                                <li class="blog__items--meta__list">
                                                    <span class="blog__items--meta__text">19 Comments</span>
                                                </li>

                                            </ul>
                                        </div>
                                        <h3 class="blog__items--title">
                                            <a href="<?php echo $row['id']; ?>"><?php echo $row['blog']; ?></a>
                                        </h3>
                                        <p class="blog__items--desc"><?php echo substr($row['description'], 0, 100); ?>...
                                        </p>
                                        <a class="blog__items--readmore" href="">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } // End while loop
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

        <!-- Start testimonial section -->
        <section class="team__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Skilled Our Team Members</span>
                    <h2 class="section__heading--maintitle">Our Team</h2>
                </div>
                <div class="team__container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img display-block" src="assets/img/other/team1.png"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Bruce Sutton</h3>
                                    <span class="team__content--subtitle">CEO - Founder</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.facebook.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                                    viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237"
                                                        d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                        transform="translate(-960.13 -345.407)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                                    viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303"
                                                        d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                        transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492"
                                                    viewBox="0 0 19.497 19.492">
                                                    <path data-name="Icon awesome-instagram"
                                                        d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                        transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.youtube.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                                    viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321"
                                                        d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                        transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img display-block" src="assets/img/other/team2.png"
                                        alt="team img">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Ellen Thornton</h3>
                                    <span class="team__content--subtitle">Spa Manager</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.facebook.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                                    viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237"
                                                        d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                        transform="translate(-960.13 -345.407)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                                    viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303"
                                                        d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                        transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492"
                                                    viewBox="0 0 19.497 19.492">
                                                    <path data-name="Icon awesome-instagram"
                                                        d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                        transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.youtube.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                                    viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321"
                                                        d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                        transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img display-block" src="assets/img/other/team3.png"
                                        alt="team img">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Milton Marsh</h3>
                                    <span class="team__content--subtitle">Products Manager</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.facebook.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                                    viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237"
                                                        d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                        transform="translate(-960.13 -345.407)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                                    viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303"
                                                        d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                        transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492"
                                                    viewBox="0 0 19.497 19.492">
                                                    <path data-name="Icon awesome-instagram"
                                                        d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                        transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.youtube.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                                    viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321"
                                                        d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                        transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img display-block" src="assets/img/other/team1.png"
                                        alt="team img">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Jackly Smith</h3>
                                    <span class="team__content--subtitle">Senior Maneger</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.facebook.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                                    viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237"
                                                        d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                        transform="translate(-960.13 -345.407)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                                    viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303"
                                                        d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                        transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492"
                                                    viewBox="0 0 19.497 19.492">
                                                    <path data-name="Icon awesome-instagram"
                                                        d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                        transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank"
                                                href="https://www.youtube.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                                    viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321"
                                                        d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                        transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End testimonial section -->

        <!-- Start shipping section -->
        <section class="shipping__section section--padding">
            <div class="container">
                <div class="shipping__section--inner d-flex">
                    <div class="shipping__items">
                        <div class="shipping__items--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.955" height="23.967"
                                viewBox="0 0 32.955 23.967">
                                <path
                                    d="M29.461,9.992H24.967V4H4A3,3,0,0,0,1,7V23.473H4a4.494,4.494,0,0,0,8.988,0h8.988a4.494,4.494,0,1,0,8.988,0h3v-7.49ZM8.49,25.72a2.247,2.247,0,1,1,2.247-2.247A2.244,2.244,0,0,1,8.49,25.72ZM28.712,12.239l2.936,3.745H24.967V12.239ZM26.465,25.72a2.247,2.247,0,1,1,2.247-2.247A2.244,2.244,0,0,1,26.465,25.72Z"
                                    transform="translate(-1 -4)" fill="currentColor" opacity="0.73" />
                            </svg>
                        </div>
                        <div class="shipping__items--content text-center">
                            <h2 class="shipping__items--title h3">Free Shipping</h2>
                            <p class="shipping__items--desc">On all orders over $75.00</p>
                        </div>
                    </div>
                    <div class="shipping__items">
                        <div class="shipping__items--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.63" height="38.407"
                                viewBox="0 0 27.63 38.407">
                                <path
                                    d="M17.615,6.106V1L10.808,7.808l6.808,6.808V9.509A10.219,10.219,0,0,1,27.826,19.721a9.991,9.991,0,0,1-1.191,4.765l2.485,2.485a13.591,13.591,0,0,0-11.5-20.865Zm0,23.826A10.219,10.219,0,0,1,7.4,19.721,9.991,9.991,0,0,1,8.6,14.955L6.11,12.471a13.591,13.591,0,0,0,11.5,20.865v5.106l6.808-6.808-6.808-6.808Z"
                                    transform="translate(-3.8 -0.517)" fill="currentColor" stroke-width="0.4"
                                    opacity="0.7" />
                            </svg>
                        </div>
                        <div class="shipping__items--content text-center">
                            <h2 class="shipping__items--title h3">Free Returns</h2>
                            <p class="shipping__items--desc">On all orders over $75.00</p>
                        </div>
                    </div>
                    <div class="shipping__items">
                        <div class="shipping__items--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.787" height="22.735"
                                viewBox="0 0 27.787 22.735">
                                <path
                                    d="M26.261,3H3.526A2.534,2.534,0,0,0,1,5.526V23.209a2.534,2.534,0,0,0,2.526,2.526H26.261a2.534,2.534,0,0,0,2.526-2.526V5.526A2.534,2.534,0,0,0,26.261,3ZM14.894,13.1H3.526V10.578H14.894Zm0-5.052H3.526V5.526H14.894Z"
                                    transform="translate(-1 -3)" fill="currentColor" opacity="0.7" />
                            </svg>
                        </div>
                        <div class="shipping__items--content text-center">
                            <h2 class="shipping__items--title h3">Secure Payment</h2>
                            <p class="shipping__items--desc">On all orders over $75.00</p>
                        </div>
                    </div>
                    <div class="shipping__items">
                        <div class="shipping__items--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22.143" viewBox="0 0 25 22.143">
                                <path
                                    d="M81.251,82.1c2.151,0,3.12-.959,3.12-2.149S83.4,77.8,81.251,77.8a6.99,6.99,0,0,0-4.694,1.8,3.4,3.4,0,0,0-1.609-.414,3.306,3.306,0,0,0-1.54.385A7,7,0,0,0,68.746,77.8c-2.157,0-3.12.964-3.12,2.149s.96,2.149,3.12,2.149h5.189V99.943H76.06V82.1Zm0-2.862c.709,0,1.554.126,1.554.713s-.846.721-1.554.721H77.7l-.029-.066A5.35,5.35,0,0,1,81.251,79.236ZM72.206,80.67H68.749c-.709,0-1.566-.128-1.566-.721s.854-.713,1.566-.713a5.33,5.33,0,0,1,3.526,1.321Zm-9.706,3.5v2.87H73.44v-4.3H64.066A1.505,1.505,0,0,0,62.5,84.174Zm1.566,14.333a1.5,1.5,0,0,0,1.563,1.434H73.44V88.472H64.066ZM85.934,82.74H76.628v4.306H87.5V84.174A1.507,1.507,0,0,0,85.934,82.74Zm-9.306,17.2h7.743a1.507,1.507,0,0,0,1.566-1.434V88.472H76.628Z"
                                    transform="translate(-62.5 -77.8)" fill="currentColor" opacity="0.7" />
                            </svg>
                        </div>
                        <div class="shipping__items--content text-center">
                            <h2 class="shipping__items--title h3">Gift Service</h2>
                            <p class="shipping__items--desc">On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->
    </main>
    <?php
    include "footer.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>