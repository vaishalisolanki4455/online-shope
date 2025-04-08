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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Plugin css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <!-- Start header area -->
    <?php
    include "header.php";
    ?>
    <!-- End header area -->

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section mb-60">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">As fresh as Fruit</span>
                                            <h2 class="slider__content4--maintitle text-white h1">The Roots Are <br>
                                                with fruits</h2>
                                            <p class="slider__content4--desc text-white d-sm-none">The more you love
                                                your health, more you eat organic. No medicine can heal you better than
                                                organic food does</p>
                                            <a class="btn slider__btn style4" href="category.php">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">As fresh as Fruit</span>
                                            <h2 class="slider__content4--maintitle text-white h1">The Roots Are <br>
                                                with fruits</h2>
                                            <p class="slider__content4--desc text-white d-sm-none">The more you love
                                                your health, more you eat organic. No medicine can heal you better than
                                                organic food does</p>
                                            <a class="btn slider__btn style4" href="category.php">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg three">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle">As fresh as Fruit</span>
                                            <h2 class="slider__content4--maintitle h1">The Roots Are <br> with fruits
                                            </h2>
                                            <p class="slider__content4--desc d-sm-none">The more you love your health,
                                                more you eat organic. No medicine can heal you better than organic food
                                                does</p>
                                            <a class="btn slider__btn style4" href="category.php">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <!-- End slider section -->

        

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container">
                <div class="section__heading text-center mb-25">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">Trending category</h2>
                </div>
                <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
                    <li class="product__tab--btn__list active" data-toggle="tab" data-target="#product_all">All</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fresh">Fresh</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits">Fruits </li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_nature">Nature</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_recipies">Recipies </li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_vegetable">Vegetable
                    </li>
                </ul>
                <div class="tab_content">
                    <div id="product_all" class="tab_pane active show">
                        <div class="product__section--inner">
                            <?php
                            include "connection.php";

                            // Fetch slider data
                            $sql = "SELECT * FROM category WHERE status = 0";
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
                                                <a class="add__to--cart__btn" href="">+ Add to cart</a>
                                                <h3 class="product__items--content__title h4"><a
                                                        href=""><?php echo htmlspecialchars($row['category'], ENT_QUOTES, 'UTF-8'); ?></a>
                                                </h3>
                                               
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
        <!-- End product section -->

        <!-- Start banner section -->
        <section class="banner__section banner4__section section--padding pt-0">
            <div class="container">
                <div class="row mb--n30">
                    <div class=" banner4__items--col col-lg-3 mb-30">
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="category.php"><img
                                    class="banner__items--thumbnail__img display-block"
                                    src="assets/img/banner/banner12.png" alt="banner-img">
                                <div class="banner4__items--content content__style1 text-center">
                                    <h2 class="banner4__items--content__title text-white">56% off in all <br>
                                        category</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                            xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                            viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                transform="translate(0 -41.916)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="banner4__items--col col-lg-6 mb-30">
                        <div class="banner__items banner4__items position__relative mb-20">
                            <a class="banner__items--thumbnail display-block" href="category.php"><img
                                    class="banner__items--thumbnail__img banner__img--max__height display-block"
                                    src="assets/img/banner/banner13.png" alt="banner-img">
                                <div class="banner4__items--content content__style2">
                                    <h2 class="banner4__items--content__title style2 text-white">Organic Food <br>
                                        category</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                            xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                            viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                transform="translate(0 -41.916)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="category.php"><img
                                    class="banner__items--thumbnail__img banner__img--max__height display-block"
                                    src="assets/img/banner/banner14.png" alt="banner-img">
                                <div class="banner4__items--content content__style2">
                                    <h2 class="banner4__items--content__title style2 text-white">Natural Fresh <br>
                                        Vegetable</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                            xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                            viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                transform="translate(0 -41.916)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="banner4__items--col col-lg-3 mb-30">
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="category.php"><img
                                    class="banner__items--thumbnail__img display-block"
                                    src="assets/img/banner/banner15.png" alt="banner-img">
                                <div class="banner4__items--content content__style1 text-center">
                                    <h2 class="banner4__items--content__title text-white">Natural Fresh <br>
                                        Fruit</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                            xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                            viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                transform="translate(0 -41.916)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">New category</h2>
                </div>
                <div class="product__section--inner product__swiper--activation swiper">
                    <?php
                    include "connection.php";

                    // Fetch slider data
                    $sql = "SELECT * FROM product WHERE status = 0 ";
                    $query = mysqli_query($conn, $sql);

                    // Base URL for images
                    $base = "http://localhost:8080/project2/admin";
                    ?>

                    <div class="swiper-wrapper">
                        <?php
                        // Loop through each row in the slider table
                        while ($row = mysqli_fetch_array($query)): ?>

                            <div class="product__items product__bg">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="">
                                        <img class="product__items--img"
                                            src="<?php echo htmlspecialchars($base . '/' . $row['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                            alt="categories-img">
                                        <div
                                            class="product__categories--content d-flex justify-content-between align-items-center">
                                            <div class="product__categories--content__left">
                                                <h3 class="product__categories--content__maintitle">
                                                    <?php echo htmlspecialchars($row['product_name'], ENT_QUOTES, 'UTF-8'); ?>
                                                </h3>
                                                <span class="product__categories--content__subtitle">88 items</span>
                                            </div>
                                            <div class="product__categories--icon">

                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>


                </div>
            </div>

            </div>
            </div>
        </section>
        <!-- End product section -->

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