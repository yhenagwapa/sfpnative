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

  <title>SFP Onse - User Profile</title>
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
    <!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/logo/user.jpeg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo htmlspecialchars($_SESSION['firstname'] . ' ' . $_SESSION['middlename'] . ' ' . $_SESSION['lastname']); ?></span>
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
        <a class="nav-link collapsed" href="home.php">
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
      </li><!-- End Reports Nav -->

      <li class="nav-heading">Admin Tools</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="user-accounts.php">
          <i class="bx bx-user"></i>
          <span>Accounts</span>
        </a>
      </li><!-- End Accounts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="user-roles.php">
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
          <li class="breadcrumb-item"><a href="#">Admin Tools</a></li>
          <li class="breadcrumb-item"><a href="user-accounts.php">Accounts</a></li>
          <li class="breadcrumb-item active">user1@user.com</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="wrapper">
      <section class="section profile">
        <div class="row">
  
          <div class="col-xl-12">
  
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                  
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>
  
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                  </li>
  
                </ul>
                <div class="tab-content pt-2">
  
                  <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
  
                    <!-- Profile Edit Form -->
                    <form>
                      <div class="row mb-3">
                        <label for="firstname" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="firstname" type="text" class="form-control" id="firstname" value="User">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="middlename" class="col-md-4 col-lg-3 col-form-label">Middle Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="middlename" type="text" class="form-control" id="middlename" value="">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="lastname" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="lastname" type="text" class="form-control" id="lastname" value="1">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="email" value="user1@user.com">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="contact" class="col-md-4 col-lg-3 col-form-label">Contact Number</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="contact" type="text" class="form-control" id="contact" value="09123456789">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="address" type="text" class="form-control" id="address" value="Suazo St.">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="region" class="col-md-4 col-lg-3 col-form-label">Region</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-control" id="region">
                            <option value="0">Region XI</option>
                          </select>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="province" class="col-md-4 col-lg-3 col-form-label">Province</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-control" id="province">
                            <option value="0">Davao de Oro</option>
                            <option value="1">Davao del Norte</option>
                            <option value="2" selected>Davao del Sur</option>
                            <option value="3">Davao Occidental</option>
                            <option value="4">Davao Oriental</option>
                          </select>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="citymuni" class="col-md-4 col-lg-3 col-form-label">City/Municipality</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-control" id="citymuni">
                            <option value="0">Davao City</option>
                          </select>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="barangay" class="col-md-4 col-lg-3 col-form-label">Barangay</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-control" id="barangay">
                            <option value="0">Barangay 28-C</option>
                          </select>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="zip" class="col-md-4 col-lg-3 col-form-label">Zip Code</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="zip" type="text" class="form-control" id="zip" value="8000">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-control" id="role">
                            <option value="0">Admin</option>
                            <option value="1" selected>Day Care Worker</option>
                          </select>
                        </div>
                      </div>
  
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form><!-- End Profile Edit Form -->
  
                  </div>
  
                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>
  
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>
  
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form><!-- End Change Password Form -->
  
                  </div>
  
                </div><!-- End Bordered Tabs -->
  
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