<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if not logged in
    header('Location: login.html');
    exit();
}
$full_name = isset($_SESSION['full_name']) ? $_SESSION['full_name'] : '';

include 'header-and-sidenav.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <nav style="--bs-breadcrumb-divider: '>';">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="#">Child List</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="wrapper">
    <section class="section">
      <div class="row">
        <div class="col-lg-16">

          <div class="card">
            <div class="card-body">
              <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'child development worker'): ?>
                <div class="col mt-4 mb-6">
                  <a href="add-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add Child Profile</button></a>
                </div>
              <?php endif; ?>

              <!-- Table with stripped rows -->
              <table class="table datatable mt-3">
                <thead>
                  <tr>
                    <th>
                      <b>Child Name</b>
                    </th>
                    <th>Sex</th>
                    <th data-type="date" data-format="MM/DD/YYYY">Date of Birth</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Juan Santos Dela Cruz</td>
                    <td>Female</td>
                    <td>01/01/2022</td>
                    <td>10</td>
                    <td>10</td>
                    <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a> </td>
                  </tr>
                  <tr>
                    <td>Child 2</td>
                    <td>Male</td>
                    <td>01/01/2022</td>
                    <td>10</td>
                    <td>10</td>
                    <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                  </tr>
                  <tr>
                    <td>Child 3</td>
                    <td>Female</td>
                    <td>01/01/2022</td>
                    <td>10</td>
                    <td>10</td>
                    <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                  </tr>
                  <tr>
                    <td>Child 4</td>
                    <td>Male</td>
                    <td>01/01/2022</td>
                    <td>10</td>
                    <td>10</td>
                    <td><a href="update-child-profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> View</button></a></td>
                  </tr>
                  <tr>
                    <td>Child 5</td>
                    <td>Female</td>
                    <td>01/01/2022</td>
                    <td>10</td>
                    <td>10</td>
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

<?php
include 'footer.php';
?>
  
