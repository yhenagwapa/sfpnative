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

  <title>SFP Onse - Update Child Profile</title>
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
          <li class="breadcrumb-item"><a href="home.php">Child List</a></li>
          <li class="breadcrumb-item active">Juan Santos Dela Cruz</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="wrapper">
    <section class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 d-flex flex-column align-items-center justify-content-center w-100">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Juan Santos Dela Cruz</h5>
                  <!-- Tab Menu -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="personalinfo-tab" data-bs-toggle="tab" data-bs-target="#personalinfo" type="button" role="tab" aria-controls="personalindfo" aria-selected="true">Personal Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="records-tab" data-bs-toggle="tab" data-bs-target="#records" type="button" role="tab" aria-controls="records" aria-selected="false">Deworming and Vitamin A Record</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="feeding-tab" data-bs-toggle="tab" data-bs-target="#feeding" type="button" role="tab" aria-controls="feeding" aria-selected="false">Feeding</button>
                    </li>
                  </ul>
                  
                  <div class="tab-content pt-2" id="myTabContent">

                    <!-- Personal info tab -->
                    <div class="tab-pane fade show active" id="personalinfo" role="tabpanel" aria-labelledby="personalinfo-tab">
                      <form class="row g-3 mt-3 mb-3">

                        <!-- name -->
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="lastname" value="Dela Cruz" >
                            <label for="lastname">Last Name</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="firstname" value="Juan" >
                            <label for="firstname">First Name</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="middlename" value="Santos" >
                            <label for="middlename">Middle Name</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="extname" value="Jr." >
                            <label for="extname">Ext. Name</label>
                          </div>
                        </div>

                        <!-- dob -->
                        <div class="col-md-3">
                          <div class="form-floating">
                            <input type="date" class="form-control" id="dob" value="01/01/2022" >
                            <label for="dob">Date of Birth</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="years" value="2" readonly>
                            <label for="years">Years</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="months" value="5" readonly>
                            <label for="months">Months</label>
                          </div>
                        </div>

                        <!-- sex -->
                        <div class="col-md-3">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="sex" value="Male" >
                            <label for="sex">Sex</label>
                          </div>
                        </div>

                        <!-- weight/height -->
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="actualdateofweighing" value="02/02/2024" readonly>
                            <label for="actualdateofweighing">Actual date of weighing</label>
                          </div>  
                        </div>
                        <div class="col-md-3">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="weight" value="10" readonly>
                            <label for="weight">Weight</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="height" value="10" readonly>
                            <label for="height">Height</label>
                          </div>
                        </div>

                        <!-- address -->
                        <div class="col-12">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="housenostreetpurok" value="123 ABC St. Purok 1" readonly>
                            <label for="housenostreetpurok">House No./ Street/ Purok</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="region" value="Region XI" readonly>
                            <label for="region">Region</label>
                          </div>
                        </div>  
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="province" value="Davao del Sur" readonly>
                            <label for="province">Province</label>
                          </div>
                        </div> 
                        <div class="col-md-4">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="citymuni" value="Davao City" readonly>
                            <label for="citymuni">City/Municipality</label>                      
                          </div>
                        </div> 
                        <div class="col-md-4">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="barangay" value="Brgy. 1-A" readonly>
                            <label for="barangay">Barangay</label>
                          </div>
                        </div> 
                        <div class="col-4">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="zipcode" value="8000" readonly>
                            <label for="zip Code">Zip</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="pantawid">Pantawid Member:</label>
        
                          <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <input class="form-check-input accordion-radio collapsed" type="radio" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" name="gridRadios" id="is_pantawid" value="option1">
                              Yes
                              <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body ">
                                  <div class="form-floating">
                                    <input type="text" class="form-control" id="pantawidtype" placeholder="Please specify if RCCT or MCCT" required>
                                    <label for="pantawidtype">Please specify if RCCT or MCCT</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <input class="form-check-input accordion-radio collapsed" type="radio" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" name="gridRadios" id="isnot_pantawid" value="option2" checked>
                                No
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  
                                </div>
                            </div>
                          </div>
                        </div>
        
                        <div class="col-md-6">
                          <label for="pantawid">Person with disability (PWD):</label>
        
                          <div class="accordion" id="accordionExample1">
                            <div class="accordion-item">
                              <input class="form-check-input accordion-radio collapsed" type="radio" data-bs-toggle="collapse" data-bs-target="#collapseOneA" aria-expanded="false" aria-controls="collapseOneA" name="gridRadios1" id="is_pwd" value="option1" >
                              Yes
                              <div id="collapseOneA" class="accordion-collapse collapse " data-bs-parent="#accordionExample1">
                                <div class="accordion-body ">
                                  <div class="form-floating">
                                    <input type="text" class="form-control" id="disability" placeholder="Please specify" required>
                                    <label for="disability">Please specify</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <input class="form-check-input accordion-radio collapsed" type="radio" data-bs-toggle="collapse" data-bs-target="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwoA" name="gridRadios1" id="isnot_pwd" value="option2" checked>
                                No
                                <div id="collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                  
                                </div>
                            </div>
                          </div>
                        </div>
        
                        <div class="col-md-6">
                          <fieldset>
                            <legend class="col-form-label">Indigenous People (IP):</legend>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios5" id="gridRadios5" value="option1">
                              <label class="form-check-label" for="gridRadios5">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios5" id="gridRadios5" value="option2" checked>
                              <label class="form-check-label" for="gridRadios5">
                                No
                              </label>
                            </div>
                          </fieldset>
                        </div>
        
                        <div class="col-md-6">
                          <fieldset>
                            <legend class="col-form-label">Child of Solo Parent:</legend>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios6" id="gridRadios5" value="option1">
                              <label class="form-check-label" for="gridRadios6">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios6" id="gridRadios6" value="option2" checked>
                              <label class="form-check-label" for="gridRadios6">
                                No
                              </label>
                            </div>
                          </fieldset>
                        </div>
        
                        <div class="col-md-6">
                          <fieldset>
                            <legend class="col-form-label">Lactose Intolerant:</legend>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios7" id="gridRadios5" value="option1">
                              <label class="form-check-label" for="gridRadios7">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios7" id="gridRadios6" value="option2" checked>
                              <label class="form-check-label" for="gridRadio7">
                                No
                              </label>
                            </div>
                          </fieldset>
                        </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>

                    <!-- Records tab -->
                    <div class="tab-pane fade" id="records" role="tabpanel" aria-labelledby="records-tab">
                      <form class="row g-3 mt-3">
                        <div class="col mb-6">
                          <label for="deworming" class="col-form-label">Deworming</label>
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="dewormingdate" value="No Record">
                        </div>
                        <div class="col-md-3">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add</button></a>
                        </div>
                        
                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Deworming Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <!-- Deworming -->
                                <div class="row mt-3 mb-5">
                                  <label for="deworming" class="col-form-label">Deworming date:</label>
                                  <div class="col-sm-10">
                                    <input type="date" class="form-control" id="deworming">
                                  </div>
                                </div>
        
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col mb-6">
                          <label for="deworming" class="col-form-label">Vitamin A Supplementation</label>
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="dewormingdate" value="No Record">
                        </div>
                        <div class="col-md-3">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered1"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add</button></a>
                        </div>
                      
                        <div class="modal fade" id="verticalycentered1" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Vitamin A Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                                <!-- Vitamin A -->
                                <div class="row mt-3 mb-5">
                                  <label for="vitamin" class="col-form-label">Vitamin A Supplementation date:</label>
                                  <div class="col-sm-10">
                                    <input type="date" class="form-control" id="vitamin">
                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </form><!-- End floating Labels Form -->
                    </div>

                    <!-- Feeding tab -->
                    <div class="tab-pane fade" id="feeding" role="tabpanel" aria-labelledby="feeding-tab">
                      <form class="row g-3 mt-3">
                        <div class="col mb-6">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered2"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Attendance</button></a>
                        </div>
                        <div class="modal fade" id="verticalycentered2" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Feeding Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <!-- Feeding details -->
                                <div class="row mt-3 mb-3">
                                  <label for="feeding" class="col-form-label">Feeding date:</label>
                                  <div class="col-sm-10">
                                    <input type="date" class="form-control" id="feeding">
                                  </div>
                                  <div class="mt-3 col-sm-10">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="withmilk" checked>
                                      <label class="form-check-label" for="withmilk">
                                        With milk
                                      </label>
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
                        </div>

                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Feeding No.</th>
                              <th scope="col">Date</th>
                              <th scope="col">With Milk</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>03/01/2024</td>
                              <td><input class="form-check-input" type="checkbox" id="milk1" checked disabled></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>03/02/2024</td>
                              <td><input class="form-check-input" type="checkbox" id="milk2" disabled></td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>03/03/2024</td>
                              <td><input class="form-check-input" type="checkbox" id="milk3" checked disabled></td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>03/04/2024</td>
                              <td><input class="form-check-input" type="checkbox" id="milk4" disabled></td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>03/05/2024</td>
                              <td><input class="form-check-input" type="checkbox" id="milk5" checked disabled></td>
                            </tr>
                          </tbody>
                        </table>

                      </form>
                      <div class="text-center">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered3">After 120 Feedings</a>
                      </div>
                      <div class="modal fade" id="verticalycentered3" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">After 120 Feedings</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <!-- Feeding details -->
                              <div class="row mt-3 mb-3">
                                <label for="endweight" class="col-form-label">Actual Date of Weighing</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="actualdateof_endweight">
                                </div>
                                <div class="mt-3 col-sm-10">
                                  <div class="form-floating">
                                    <input class="form-control" type="text" id="endweight" placeholder="Weight" required>
                                    <label for="endweight">Weight</label>
                                  </div>
                                </div>
                                <div class="mt-3 col-sm-10">
                                  <div class="form-floating">
                                    <input class="form-control" type="text" id="endheight" placeholder="Height" required>
                                    <label for="endheight">Height</label>
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
                      </div>

                    </div>
                  </div><!-- End Default Tabs -->
    
                </div>
              </div>







              
              
            </div>
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