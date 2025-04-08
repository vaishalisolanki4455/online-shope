<!DOCTYPE html >
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon"/>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
    <!-- Flag icon css -->
    <link rel="stylesheet" href="../assets/css/vendors/flag-icon.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/iconly-icon.css"/>
    <link rel="stylesheet" href="../assets/css/bulk-style.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/themify.css"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-min.css"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css"/>
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen"/>
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
      <?php include "sidebar.php";
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
                  <h2>Education Dashboard</h2>
                  <p class="mb-0 text-title-gray">"Welcome back to your educational adventure!"</p>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Education</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-3">
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-md-6">
                <div class="card graphic-design overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/20.png" alt="chair"/></div>
                        </div>
                        <div class="flex-grow-1"> 
                          <h5>Graphic Design</h5>
                          <p class="mb-0">Alice Goodwin</p>
                        </div>
                      </div>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <ul> 
                      <li><i class="iconly-Document icli me-1"></i>
                        <h5>10 Lessons</h5>
                      </li>
                      <li><i class="iconly-Time-Square icli me-1"></i>
                        <h5>8 Hours</h5>
                      </li>
                      <li><i class="iconly-User3 icli me-1"></i>
                        <h5>16 Students</h5>
                      </li>
                      <li><i class="iconly-Star icli me-1"></i>
                        <h5>3.6</h5>
                      </li>
                    </ul>
                    <div class="crypto-dashborad-chart">
                      <div class="bitcoin-chart" id="bitcoin-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-md-6">
                <div class="card graphic-design overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/21.png" alt="chair"/></div>
                        </div>
                        <div class="flex-grow-1"> 
                          <h5>Design Thinking</h5>
                          <p class="mb-0">Alice Goodwin</p>
                        </div>
                      </div>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <ul> 
                      <li><i class="iconly-Document icli me-1"></i>
                        <h5>112 Lessons</h5>
                      </li>
                      <li><i class="iconly-Time-Square icli me-1"></i>
                        <h5>6 Hours</h5>
                      </li>
                      <li><i class="iconly-User3 icli me-1"></i>
                        <h5>20 Students</h5>
                      </li>
                      <li><i class="iconly-Star icli me-1"></i>
                        <h5>5.8</h5>
                      </li>
                    </ul>
                    <div class="crypto-dashborad-chart">
                      <div class="ripple-chart" id="ripple-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-md-12">
                <div class="card graphic-design overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <div class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/22.png" alt="chair"/></div>
                        </div>
                        <div class="flex-grow-1"> 
                          <h5>Graphic Design</h5>
                          <p class="mb-0">Alice Goodwin</p>
                        </div>
                      </div>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <ul> 
                      <li><i class="iconly-Document icli me-1"></i>
                        <h5>18 Lessons</h5>
                      </li>
                      <li><i class="iconly-Time-Square icli me-1"></i>
                        <h5>9 Hours</h5>
                      </li>
                      <li><i class="iconly-User3 icli me-1"></i>
                        <h5>10 Students</h5>
                      </li>
                      <li><i class="iconly-Star icli me-1"></i>
                        <h5>9.5</h5>
                      </li>
                    </ul>
                    <div class="crypto-dashborad-chart">
                      <div class="ethereum-chart" id="ethereum-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-sm-6 order-sm-1 order-xl-0 box-col-5">
                <div class="card upcoming-card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Upcoming Classes</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body upcoming-class pt-0">
                    <div class="activity-day">
                      <h6>15 march</h6>
                    </div>
                    <ul>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <h5>09:00</h5>
                        </div>
                        <div class="flex-grow-1 border-2 b-l-primary">
                          <h6>GDM 2nd semester</h6>
                          <p>One-line Drawing Method</p>
                        </div><i class="fa-solid fa-circle circle-dot-primary pull-right"></i>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <h5>10:00</h5>
                        </div>
                        <div class="flex-grow-1 border-2 b-l-secondary">
                          <h6>GDM 2nd semester</h6>
                          <p>Continuous Line Drawing</p>
                        </div><i class="fa-solid fa-circle circle-dot-secondary pull-right"></i>
                      </li>
                    </ul>
                    <div class="activity-day">
                      <h6>17 march</h6>
                    </div>
                    <ul>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <h5>12:00</h5>
                        </div>
                        <div class="flex-grow-1 border-2 b-l-primary">
                          <h6>GDM 2nd semester</h6>
                          <p>One-line Drawing Method</p>
                        </div><i class="fa-solid fa-circle circle-dot-primary pull-right"></i>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <h5>08:00</h5>
                        </div>
                        <div class="flex-grow-1 border-2 b-l-secondary">
                          <h6>GDM 2nd semester</h6>
                          <p>Continuous Line Drawing</p>
                        </div><i class="fa-solid fa-circle circle-dot-secondary pull-right"></i>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0">
                          <h5>11:00</h5>
                        </div>
                        <div class="flex-grow-1 border-2 b-l-primary">
                          <h6>GDM 2nd semester</h6>
                          <p>Continuous Line Drawing</p>
                        </div><i class="fa-solid fa-circle circle-dot-primary pull-right"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 order-xxl-0 order-xl-4 col-lg-12 box-col-7">
                <div class="card performance-card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>School Performance</h3>
                      <div class="d-flex">
                        <ul class="performance-header">
                          <li class="me-3"><span class="circle bg-primary me-1"> </span>
                            <p class="mb-0">Students</p>
                          </li>
                          <li class="me-3"><span class="circle bg-secondary me-1"></span>
                            <p class="mb-0">Teachers</p>
                          </li>
                        </ul>
                        <ul class="simple-wrapper nav nav-pills" id="myTab" role="tablist">
                          <li class="nav-item"><a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#yearly" role="tab" aria-selected="true">Yearly</a></li>
                          <li class="nav-item"><a class="nav-link" id="profile-tabs" data-bs-toggle="tab" href="#monthly" role="tab" aria-selected="false">Monthly</a></li>
                          <li class="nav-item"><a class="nav-link active" id="contact-tab" data-bs-toggle="tab" href="#weekly" role="tab" aria-selected="false">Weekly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0">
                    <div id="groupBarChart"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-5 box-order-1">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Notice Board</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body notice-board">
                    <ul> 
                      <li class="d-flex gap-2"> 
                        <div class="flex-shrink-0"><img class="img-fluid" src="../assets/images/dashboard-1/news-update/1.png" alt=""/></div>
                        <div class="flex-grow-1"> 
                          <h6>Virtual STEM Clubs for 4-8 with Destina...</h6>
                          <p class="text-truncate">Wed, Feb 24,2022; 12:00 pm-1:00pm</p>
                        </div>
                      </li>
                      <li class="d-flex gap-2"> 
                        <div class="flex-shrink-0"><img class="img-fluid" src="../assets/images/dashboard-1/news-update/2.png" alt=""/></div>
                        <div class="flex-grow-1"> 
                          <h6>Art Now Series Presents Catherine...</h6>
                          <p class="text-truncate">Wed, Feb 24,2022; 12:00 pm-1:00pm</p>
                        </div>
                      </li>
                      <li class="d-flex gap-2"> 
                        <div class="flex-shrink-0"><img class="img-fluid" src="../assets/images/dashboard-1/news-update/3.png" alt=""/></div>
                        <div class="flex-grow-1"> 
                          <h6>Artistic Challenges For Your Creatie...</h6>
                          <p class="text-truncate">Wed, Feb 24,2022; 12:00 pm-1:00pm</p>
                        </div>
                      </li>
                      <li class="d-flex gap-2"> 
                        <div class="flex-shrink-0"><img class="img-fluid" src="../assets/images/dashboard-1/news-update/4.png" alt=""/></div>
                        <div class="flex-grow-1"> 
                          <h6>Weekly Photo Challenge & Critique...</h6>
                          <p class="text-truncate">Wed, Feb 24,2022; 12:00 pm-1:00pm</p>
                        </div>
                      </li>
                      <li class="d-flex gap-2"> 
                        <div class="flex-shrink-0"><img class="img-fluid" src="../assets/images/dashboard-1/news-update/5.png" alt=""/></div>
                        <div class="flex-grow-1"> 
                          <h6>Art Now Series Presents Catherine...</h6>
                          <p class="text-truncate">Wed, Feb 24,2022; 12:00 pm-1:00pm</p>
                        </div>
                      </li>
                      <li class="d-flex gap-2"> 
                        <div class="flex-shrink-0"><img class="img-fluid" src="../assets/images/dashboard-1/news-update/6.png" alt=""/></div>
                        <div class="flex-grow-1"> 
                          <h6>Virtual STEM Clubs for 4-8 with Destina...</h6>
                          <p class="text-truncate">Wed, Feb 24,2022; 12:00 pm-1:00pm</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-7 order-xxl-0 order-xl-1 col-sm-6 box-col-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Student Details</h3>
                  </div>
                  <div class="card-body pt-0 details-table">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone mt-0" id="student-detail" style="width:100%">
                        <thead>
                          <tr> 
                            <th>Customer</th>
                            <th>Poduct</th>
                            <th>QTY</th>
                            <th>Attendance</th>
                            <th class="text-center">rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/7.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Gary Goodwin</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Dedoh5@error.com</h6>
                            </td>
                            <td class="f-w-600">QTY:12</td>
                            <td class="f-w-600 text-center">51</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">45/50</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/8.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Ralph Venter</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Norog95@fada.com</h6>
                            </td>
                            <td class="f-w-600">QTY:14</td>
                            <td class="f-w-600 text-center">95</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">30/100</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/9.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Edwin Deo</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Mopot43@fada.com</h6>
                            </td>
                            <td class="f-w-600">QTY:16</td>
                            <td class="f-w-600 text-center">94</td>
                            <td class="text-end">
                              <div class="btn bg-light-warning border-light-warning text-warning">45/60</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/10.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Aaron Hors</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Fafiya34@fada.com</h6>
                            </td>
                            <td class="f-w-600">QTY:18</td>
                            <td class="f-w-600 text-center">62</td>
                            <td class="text-end">
                              <div class="btn bg-light-danger border-light-danger text-danger">26/50</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/11.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Fenter Jessy</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Rewox6@erroe.com</h6>
                            </td>
                            <td class="f-w-600">QTY:20</td>
                            <td class="f-w-600 text-center">91</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">80/100</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/12.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Alice Hogan</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Alice345@fada.com</h6>
                            </td>
                            <td class="f-w-600">QTY:22</td>
                            <td class="f-w-600 text-center">93</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">45/50</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-6 order-xxl-0 order-xl-4 col-lg-6 col-md-7 box-col-6">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>New Courses</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown7" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown7"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body course-table pt-0">
                    <div class="table-responsive">
                      <table class="table table-bordernone">
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0 comman-round">
                                  <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/13.png" alt="chair"/></div>
                                </div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Gary Goodwin</h5></a>
                                  <p>Elementary</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>30 class</h5>
                              <p>60 hours</p>
                            </td>
                            <td>5 days left</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0 comman-round">
                                  <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/14.png" alt="chair"/></div>
                                </div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Ralph Venter</h5></a>
                                  <p>Advanced</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>34 class</h5>
                              <p>45 hours</p>
                            </td>
                            <td>2 days left</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0 comman-round">
                                  <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/15.png" alt="chair"/></div>
                                </div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Edwin Deo</h5></a>
                                  <p>Advanced</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>87 class</h5>
                              <p>23 hours</p>
                            </td>
                            <td>4 days left</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0 comman-round">
                                  <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/16.png" alt="chair"/></div>
                                </div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Aaron Hors</h5></a>
                                  <p>Elementary</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>12 class</h5>
                              <p>56 hours</p>
                            </td>
                            <td>9 days left</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0 comman-round">
                                  <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/17.png" alt="chair"/></div>
                                </div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Fenter Jessy</h5></a>
                                  <p>Art.3748979</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>65 class</h5>
                              <p>60 hours</p>
                            </td>
                            <td>1 days left</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0 comman-round">
                                  <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/18.png" alt="chair"/></div>
                                </div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Alice Hogan</h5></a>
                                  <p>Art.2738979</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>43 class</h5>
                              <p>78 hours</p>
                            </td>
                            <td>6 days left</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0 comman-round">
                                  <div class="icon"><img class="img-fluid" src="../assets/images/dashboard-3/user/19.png" alt="chair"/></div>
                                </div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Aaron Hors</h5></a>
                                  <p>Art.7438378</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>20 class</h5>
                              <p>40 hours</p>
                            </td>
                            <td>5 days left</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-5 order-xxl-0 order-xl-2 col-lg-6 col-md-5 col-sm-6 box-col-6">
                <div class="card pie-card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Time Spent on Learning</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown8" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown8"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body revenue-category">
                    <div class="pie-chart" id="pie-chart"></div>
                    <div class="donut-legend" id="legend"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>To-do list</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body todo-list filled-checkbox">
                    <ul>
                      <li class="d-flex line-primary">
                        <div class="flex-shrink-0">
                          <div class="form-check checkbox checkbox-solid-primary">
                            <input class="form-check-input" id="solid1" type="checkbox"/>
                            <label class="form-check-label" for="solid1"> </label>
                          </div>
                        </div>
                        <div class="flex-grow-1"><a href="task.html">
                            <h5 class="f-w-500">Complete English test</h5></a>
                          <h6>Complete english test</h6>
                        </div><span>2 hours</span>
                      </li>
                      <li class="d-flex line-secondary">
                        <div class="flex-shrink-0">
                          <div class="form-check checkbox checkbox-solid-primary">
                            <input class="form-check-input" id="solid2" type="checkbox" checked=""/>
                            <label class="form-check-label" for="solid2"> </label>
                          </div>
                        </div>
                        <div class="flex-grow-1"><a href="task.html">
                            <h5 class="f-w-500">Prepare for History exam</h5></a>
                          <h6>Complete english test</h6>
                        </div><span>4 hours</span>
                      </li>
                      <li class="d-flex line-danger">
                        <div class="flex-shrink-0">
                          <div class="form-check checkbox checkbox-solid-primary">
                            <input class="form-check-input" id="solid3" type="checkbox"/>
                            <label class="form-check-label" for="solid3"> </label>
                          </div>
                        </div>
                        <div class="flex-grow-1"><a href="task.html">
                            <h5 class="f-w-500">Finish Digital Art project</h5></a>
                          <h6>Make the adjustments</h6>
                        </div><span>6 hours</span>
                      </li>
                      <li class="d-flex line-info">
                        <div class="flex-shrink-0">
                          <div class="form-check checkbox checkbox-solid-primary">
                            <input class="form-check-input" id="solid4" type="checkbox"/>
                            <label class="form-check-label" for="solid4"> </label>
                          </div>
                        </div>
                        <div class="flex-grow-1"><a href="task.html">
                            <h5 class="f-w-500">Write essay Honesty is....</h5></a>
                          <h6>2-3 pages, include at least 3...</h6>
                        </div><span>8 hours</span>
                      </li>
                      <li class="d-flex line-secondary">
                        <div class="flex-shrink-0">
                          <div class="form-check checkbox checkbox-solid-primary">
                            <input class="form-check-input" id="solid5" type="checkbox"/>
                            <label class="form-check-label" for="solid5"> </label>
                          </div>
                        </div>
                        <div class="flex-grow-1"><a href="task.html">
                            <h5 class="f-w-500">Make Presentation</h5></a>
                          <h6>Complete english test</h6>
                        </div><span>1 hours</span>
                      </li>
                      <li class="d-flex line-success">
                        <div class="flex-shrink-0">
                          <div class="form-check checkbox checkbox-solid-primary">
                            <input class="form-check-input" id="solid6" type="checkbox" checked=""/>
                            <label class="form-check-label" for="solid6"> </label>
                          </div>
                        </div>
                        <div class="flex-grow-1"><a href="task.html">
                            <h5 class="f-w-500">Complete English test</h5></a>
                          <h6>Make the adjustments</h6>
                        </div><span>3 hours</span>
                      </li>
                      <li class="d-flex line-warning">
                        <div class="flex-shrink-0">
                          <div class="form-check checkbox checkbox-solid-primary">
                            <input class="form-check-input" id="solid7" type="checkbox"/>
                            <label class="form-check-label" for="solid7"> </label>
                          </div>
                        </div>
                        <div class="flex-grow-1"><a href="task.html">
                            <h5 class="f-w-500">Prepare for History exam</h5></a>
                          <h6>Complete english test</h6>
                        </div><span>5 hours</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-7 order-xxl-0 order-xl-3 col-md-6 box-col-7 box-order-2">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Assignments</h3>
                  </div>
                  <div class="card-body pt-0 assignment-table">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone pt-0" id="assignment" style="width:100%">
                        <thead>
                          <tr> 
                            <th>Customer</th>
                            <th>Subject</th>
                            <th>Start Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">submit date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/1.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Gary Goodwin</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Accounts</h6>
                            </td>
                            <td class="f-w-600">20 May</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed  </div>
                            </td>
                            <td class="f-w-600 text-center">31 july</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/2.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Ralph Venter</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600">Bus. Study</h6>
                            </td>
                            <td class="f-w-600">10 May</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed  </div>
                            </td>
                            <td class="f-w-600 text-center">5th Aug</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/3.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Edwin Deo</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td> 
                              <h6 class="f-w-600"> Mathematics</h6>
                            </td>
                            <td class="f-w-600">30 Sep</td>
                            <td class="text-end">
                              <div class="btn bg-light-warning border-light-warning text-warning">Pending </div>
                            </td>
                            <td class="f-w-600 text-center">31 July</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/4.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Aaron Hors</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td> 
                              <h6 class="f-w-600">Computer App</h6>
                            </td>
                            <td class="f-w-600">13 Oct</td>
                            <td class="text-end">
                              <div class="btn bg-light-danger border-light-danger text-danger">Canceled </div>
                            </td>
                            <td class="f-w-600 text-center">31 May</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/5.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Fenter Jessy</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td> 
                              <h6 class="f-w-600"> Graphic Design</h6>
                            </td>
                            <td class="f-w-600">25 May</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed  </div>
                            </td>
                            <td class="f-w-600 text-center">24 Oct</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-3/user/6.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Alice Hogan</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="f-w-600"> Design Thinking</h6>
                            </td>
                            <td class="f-w-600">20 Feb</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed  </div>
                            </td>
                            <td class="f-w-600 text-center">31 July</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-5 col-sm-6 box-col-6">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Schedule a lesson</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown02" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown02"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="default-datepicker">
                      <div class="datepicker-here" data-language="en">                                   </div>
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
    <!-- jquery-->
    <script src="../assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="../assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="../assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/sidebar.js"></script>
    <!-- config-->
    <script src="../assets/js/config.js"></script>
    <!-- apex-->
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- date picker-->
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- data_table-->
    <script src="../assets/js/js-datatables/datatables/jquery.dataTables.min.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom.js"></script>
    <!-- page_datatable1-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom1.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- theme_customizer-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- dashboard_3-->
    <script src="../assets/js/dashboard/dashboard_3.js"></script>
    <!-- echart_pie-->
    <script src="../assets/js/chart/echart/pie-chart/facePrint.js"></script>
    <script src="../assets/js/chart/echart/pie-chart/testHelper.js"></script>
    <script src="../assets/js/chart/echart/pie-chart/custom-transition-texture.js"></script>
    <script src="../assets/js/chart/echart/data/symbols.js"></script>
    <!-- morrischart-->
    <script src="../assets/js/chart/morris-chart/raphael.js"></script>
    <script src="../assets/js/chart/morris-chart/morris.js"> </script>
    <script src="../assets/js/chart/morris-chart/prettify.min.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>
</html>