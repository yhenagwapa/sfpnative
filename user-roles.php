<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if not logged in
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SFP Onse - Add Child</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/dswd-logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="https://fo11.dswd.gov.ph/" class="logo d-flex align-items-center">
        <img src="assets/img/logo/dswd_logo.png" alt="dswd_logo">
        <span class="d-none d-lg-block">SFP ONSE</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/logo/user.jpeg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Username</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed"  href="home.php">
          <i class="bi bi-people"></i>
          <span>Child List</span>
        </a>
      </li><!-- End Child List Nav -->

      <li class="nav-item collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-journal-text"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Masterlist of Beneficiaries</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Malnourished Children</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Person with Disability</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Undernourished Children, Ethnicity, etc.</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Weight for Age</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Weight for Height</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Height for Age</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Age Bracket Upon Entry</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Age Bracket After 120 Feedings</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Weight and Height Monitoring</span>
            </a>
          </li>
          <li>
            <a href="view-masterlist.php">
              <i class="bi bi-circle"></i><span>Actual Feeding Attendance</span>
            </a>
          </li>
        </ul>
      </li><!-- End View Masterlist Nav -->

      <li class="nav-heading">Admin Tools</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="user-accounts.php">
          <i class="bx bx-user"></i>
          <span>Accounts</span>
        </a>
      </li><!-- End Accounts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
        <i class="bi bi-tools"></i>
          <span>Roles</span>
        </a>
      </li><!-- End Roles Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      
      <nav style="--bs-breadcrumb-divider: '>';">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Admin Tools</li>
          <li class="breadcrumb-item active">Roles</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="wrapper">
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <!-- <div class="col mt-4 mb-6">
                  <a href="add-user-roles.html"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Role</button></a>
                </div> -->
                <!-- Table with stripped rows -->
                <table class="table mt-4">
                  <thead>
                    <tr>
                      <th>
                        <b>Privileges</b>
                      </th>
                      <th>Admin</th>
                      <th>Day Care Worker</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Add child personal information</td>
                      <td><input class="form-check-input" type="checkbox" id="priv1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="priv2" checked disabled></td>
                      <td><a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a> </td>
                      <div class="modal fade" id="verticalycentered" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Add child personal information</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row g-2 mt-3 mb-3">
                                <div class="col-md-6">
                                    Admin
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check col-md-6">
                                      <input class="form-check-input" type="checkbox" id="priv1" checked>
                                      <label class="form-check-label" for="priv1">Allow</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    Day Care Worker
                                </div>
                                <div class="col-md-6">
                                  <div class="form-check col-md-6">
                                    <input class="form-check-input" type="checkbox" id="priv2" checked>
                                    <label class="form-check-label" for="priv2">Allow</label>
                                  </div> 
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </tr>
                    
                    <tr>
                      <td>Edit child personal information</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                    <tr>
                      <td>Add deworming records</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                    <tr>
                      <td>Add vitamin a records</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                    <tr>
                    <tr>
                      <tr>
                      <td>Add child feeding information</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                    <tr>
                      <td>View Reports</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                    <tr>
                      <td>Print Reports</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                    <tr>
                      <td>Admin Tools</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                    <tr>
                      <td>Update Profile</td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                      <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>