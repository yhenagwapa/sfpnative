<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SFP Onse - Child List</title>
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
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo htmlspecialchars($full_name); ?></span>
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
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashborad Nav -->

         <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-people"></i>
            <span>Child List</span>
            </a>
        </li><!-- End Child List Nav -->

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bx bx-home"></i>
                <span>Child Development Center</span>
            </a>
        </li><!-- End Child List Nav -->
        <?php endif; ?>

        <li class="nav-item collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse show" href="#">
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
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
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

            <li class="nav-item">
                <a class="nav-link collapsed" href="user-roles.php">
                <i class="bi box-arrow-in-down"></i>
                <span>Audit Logs</span>
                </a>
            </li><!-- End Audit Logs Nav -->
        <?php endif; ?>
    </ul>

  </aside><!-- End Sidebar-->

</body>
</html>