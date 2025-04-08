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
  <link rel="stylesheet" href="assets/css/vendors/flag-icon.css" />
  <!-- iconly-icon-->
  <link rel="stylesheet" href="assets/css/iconly-icon.css" />
  <link rel="stylesheet" href="assets/css/bulk-style.css" />
  <!-- iconly-icon-->
  <link rel="stylesheet" href="assets/css/themify.css" />
  <!--fontawesome-->
  <link rel="stylesheet" href="assets/css/fontawesome-min.css" />
  <!-- Whether Icon css-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/weather-icons/weather-icons.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/simple-datatables/dist/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css" />
  <!-- App css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen" />
</head>

<body onload="getdata()">
  <!-- page-wrapper Start-->
  <!-- tap on top starts-->
  <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
  <!-- tap on tap ends-->
  <!-- loader-->
  <div class="loader-wrapper">
    <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
  </div>
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <?php
    include "sidebar.php";
    ?>
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page sidebar start-->
      <!-- Page sidebar end-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6 col-12">
                <h2>Product list</h2>
              </div>
              <div class="col-sm-6 col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html"><i class="iconly-Home icli svg-color"></i></a></li>
                  <li class="breadcrumb-item">ECommerce</li>
                  <li class="breadcrumb-item active">Product list</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="list-product-header">
                    <div>
                      <div class="light-box"><a data-bs-toggle="collapse" href="#collapseProduct" role="button"
                          aria-expanded="false" aria-controls="collapseProduct"><i class="filter-icon show"
                            data-feather="filter"></i><i class="icon-close filter-close hide"></i></a></div><a
                        class="btn btn-primary" href="productcreate.php"><i class="fa-solid fa-plus"></i>Add Product</a>
                    </div>
                    <div class="collapse" id="collapseProduct">
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table" id="">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>P_Name</th>
                          <th>des</th>
                          <th>price</th>
                          <th>size</th>
                          <th>quantity</th>
                          <th>d_price</th>
                          <th>stock</th>
                          <th>s_limit</th>
                          <th>c_id</th>
                          <th>image</th>
                          <th>status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="getdata">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">Copyright 2024 © Admiro theme by pixelstrap.</p>
            </div>
            <div class="col-md-6">
              <p class="float-end mb-0">Hand crafted &amp; made with
                <svg class="svg-color footer-icon">
                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#heart"></use>
                </svg>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
    function getdata() {
      // alert("asdcfv");
      $.ajax({
        type: "POST",
        url: "productdisplay.php",
        // data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          // alert(data);
          $('#getdata').html(data);
        }
      });
    }
    function deletedata(id) {
      var fd = new FormData();
      fd.append("id", id);
      $.ajax({
        type: "POST",
        url: "productdelete.php",
        data: fd,
        processData: false,
        contentType: false,
        success: function (data) {
          if (data == 0) {
            alert("data delete");
            getdata();
            window.location.href = 'list-products.php';

          } else {
            alert("error");
          }

        }
      })

    }
  </script>
  <!-- jquery-->
  <script src="assets/js/vendors/jquery/jquery.min.js"></script>
  <!-- bootstrap js-->
  <script src="assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
  <script src="assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
  <!--fontawesome-->
  <script src="assets/js/vendors/font-awesome/fontawesome-min.js"></script>
  <!-- feather-->
  <script src="assets/js/vendors/feather-icon/feather.min.js"></script>
  <script src="assets/js/vendors/feather-icon/custom-script.js"></script>
  <!-- sidebar -->
  <script src="assets/js/sidebar.js"></script>
  <!-- scrollbar-->
  <script src="assets/js/scrollbar/simplebar.js"></script>
  <script src="assets/js/scrollbar/custom.js"></script>
  <!-- slick-->
  <script src="assets/js/slick/slick.min.js"></script>
  <script src="assets/js/slick/slick.js"></script>
  <!-- datatables-->
  <script src="assets/js/js-datatables/simple-datatables%40latest.js"></script>
  <!-- custom_list_product-->
  <script src="assets/js/custom-list-product.js"></script>
  <!-- theme_customizer-->
  <script src="assets/js/theme-customizer/customizer.js"></script>
  <!-- custom script -->
  <script src="assets/js/script.js"></script>
</body>

</html>