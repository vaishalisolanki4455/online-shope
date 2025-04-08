<?php
include "connection.php";

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM product WHERE id='$id'";
$query = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($query))
  ;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <title>Admiro - Premium Admin Template</title>
  <!-- Favicon icon-->
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap"
    rel="stylesheet">
  <!-- Flag icon css -->
  <link rel="stylesheet" href="assets/css/vendors/flag-icon.css">
  <!-- iconly-icon-->
  <link rel="stylesheet" href="assets/css/iconly-icon.css">
  <link rel="stylesheet" href="assets/css/bulk-style.css">
  <!-- iconly-icon-->
  <link rel="stylesheet" href="assets/css/themify.css">
  <!--fontawesome-->
  <link rel="stylesheet" href="assets/css/fontawesome-min.css">
  <!-- Whether Icon css-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/weather-icons/weather-icons.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
  <!-- App css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
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
                <h2>product Create</h2>
              </div>
              <div class="col-sm-6 col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html"><i class="iconly-Home icli svg-color"></i></a></li>
                  <li class="breadcrumb-item">product</li>
                  <li class="breadcrumb-item active">product Create</li>
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
                  <div class="form theme-form basic-form">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">product Title </h5>
                          <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?? ''; ?>">
                          <input class="form-control" type="text" value="<?php echo $row['product_name'] ?? ''; ?>"
                            name="product_name" id="product_name" placeholder="product name *">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">description</h5>
                          <input class="form-control" type="text" value="<?php echo $row['description'] ?? ''; ?>"
                            name="description" id="description" placeholder="description *">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">price</h5>
                          <input class="form-control" type="text" value="<?php echo $row['price'] ?? ''; ?>"
                            name="price" id="price" placeholder="Enter price">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">size</h5>
                          <select class="form-select" vlaue="<?php echo $row['size'] ?? ''; ?>" name="size" id="size">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">quantity</h5>
                          <select class="form-select" name="quantity" value="<?php echo $row['quantity'] ?? ''; ?>"
                            id="quantity">
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                            <option>Urgent</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">discount_price </h5>
                          <input class="form-control" type="text" value="<?php echo $row['discount_price'] ?? ''; ?>"
                            name="discount_price" id="discount_price" placeholder="Enter discount_price">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">stock</h5>
                          <input class="datepicker-here form-control" value="<?php echo $row['stock'] ?? ''; ?>"
                            type="text" id="stock" name="stock" data-language="en">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">stock_limit</h5>
                          <input class="datepicker-here form-control" value="<?php echo $row['stock_limit'] ?? ''; ?>"
                            type="text" id="stock_limit" name="stock_limit" data-language="en">
                        </div>
                      </div>
                    </div>
                    <label for="category_id">Category:</label>
                    <select class="form-control mb-3" name="category_id" id="category_id" required>
                      <?php
                      include "connection.php";
                      $sql = "SELECT * FROM category";
                      $result = mysqli_query($conn, $sql);
                      while ($row2 = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $row2['id']; ?>" <?php echo (isset($row['category_id']) && $row['category_id'] == $row2['id']) ? 'selected' : ''; ?>>
                          <?php echo $row2['category']; ?>
                        </option>
                      <?php } ?>
                    </select>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <h5 class="f-w-600 mb-2">image</h5>
                          <input class="form-control" type="file" value="<?php echo $row['image'] ?? ''; ?>"
                            name="image" id="image" placeholder="image *">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <h5><label for="status">status:</label></h5>
                        <select name="status" id="status" class="form-control mb-3">
                          <option value="0">Active</option>
                          <option value="1">In Active</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="text-end">
                          <?php
                          if ($id == '') {
                            ?>
                            <button class="btn btn-success" type="submit" onclick="insertData()">Add</button>
                            <?php
                          } else {
                            ?>
                            <button class="btn btn-warning" type="submit" onclick="updatedata()">Update</button>
                            <?php
                          }
                          ?>
                        </div>
                      </div>
                    </div>
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
    function insertData() {
      // alert("asdf");
      var product_name = $('#product_name').val();
      var description = $('#description').val(); // Correctly retrieves selected values
      var price = $('#price').val();
      var size = $('#size').val();
      var quantity = $('#quantity').val();
      var discount_price = $('#discount_price').val();
      var stock = $('#stock').val();
      var stock_limit = $('#stock_limit').val();
      var category_id = $('#category_id').val();
      var image = $('#image')[0].files[0];
      var status = $('#status').val(); // Access file object

      // alert(category_id)
      // Correctly retrieves selected values



      var fd = new FormData();
      fd.append('product_name', product_name);
      fd.append('description', description); // Appends the correct category_id
      fd.append('price', price);
      fd.append('size', size);
      fd.append('quantity', quantity);
      fd.append('discount_price', discount_price);
      fd.append('stock', stock);
      fd.append('stock_limit', stock_limit);
      fd.append('category_id', category_id);
      fd.append('image', image);
      fd.append('status',status); // Append the file object

      $.ajax({
        type: 'POST',
        url: 'productinsert.php',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          console.log(data);
          if (data == '0') {
            alert("Success");
            window.location.href = 'productcreate.php';
          } else {
            alert("Error");
          }
        }
      });
    }
    function updatedata() {
      // alert("asdfg");
      var id = $("#id").val();
      var product_name = $("#product_name").val();
      var description = $("#description").val();
      var price = $("#price").val();
      var size = $("#size").val();
      var quantity = $("#quantity").val();
      var discount_price = $("#discount_price").val();
      var stock = $("#stock").val();
      var category_id = $('#category_id').val();
      var stock_limit = $("#stock_limit").val();
      var image = $('#image')[0].files[0];
      var status = $('#status').val();


      var fd = new FormData();
      fd.append('id', id);
      fd.append('product_name', product_name);
      fd.append('description', description);
      fd.append('price', price);
      fd.append('size', size);
      fd.append('quantity', quantity);
      fd.append('discount_price', discount_price);
      fd.append('stock', stock);
      fd.append('category_id', category_id);
      fd.append('stock_limit', stock_limit);
      fd.append("image", image);
      fd.append("status",status);


      $.ajax({
        type: "POST",
        url: "productupdate.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          console.log(data);
          // alert(data);
          if (data == '0') {
            alert("success");
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
  <!-- sidebar -->
  <script src="assets/js/sidebar.js"></script>
  <!-- dropzone-->
  <script src="assets/js/dropzone/dropzone.js"></script>
  <script src="assets/js/dropzone/dropzone-script.js"></script>
  <!-- scrollbar-->
  <script src="assets/js/scrollbar/simplebar.js"></script>
  <script src="assets/js/scrollbar/custom.js"></script>
  <!-- slick-->
  <script src="assets/js/slick/slick.min.js"></script>
  <script src="assets/js/slick/slick.js"></script>
  <!-- theme_customizer-->
  <script src="assets/js/theme-customizer/customizer.js"></script>
  <!-- custom script -->
  <script src="assets/js/script.js"></script>
</body>

</html>