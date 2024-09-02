<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if not logged in
    header('Location: login.html');
    exit();
}
if ($_SESSION['role'] !== 'child development worker') {
  // If not an Admin, redirect to a different page or show an error
  header("Location: access_denied.php");
  exit();
}

$full_name = isset($_SESSION['full_name']) ? $_SESSION['full_name'] : '';

include 'header-and-sidenav.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      
      <nav style="--bs-breadcrumb-divider: '>';">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Child List</a></li>
          <li class="breadcrumb-item active">Add Child Profile</li>
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
              <h5 class="card-title">Child Details</h5>
              <form class="row g-3" method="post" action="childprofile.js">
                <div class="col-md-2 mt-3 group-heading">
                  Personal Information
                </div>
                <div class="col-md-10 mt-2 group-heading"><hr></div>
              
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="firstname" placeholder="First Name*" required>
                    <label for="firstname">First Name</label><label for="firstname" class="'required">*</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="middlename" placeholder="Middle Name">
                    <label for="middlename">Middle Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                    <label for="lastname">Last Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="extname" placeholder="Extension Name">
                    <label for="extname">Extension Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="dob" placeholder="Date of Birth" required>
                    <label for="dob">Date of Birth</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <select class="form-control" id="sex" aria-label="Sex" required>
                      <option value="" disabled selected>---</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                    <label for="sex">Sex</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="date"  class="form-control" id="deworming_date" name='deworming_date' placeholder="Deworming date">
                    <label for="deworming_date">Deworming Date</label>             
                  </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                      <input type="date"  class="form-control" id="vitamin_a_date" name='vitamin_a_date' placeholder="Viatmin A date">
                      <label for="vitamin_a_date">Vitamin A date</label>
                    </div>
                </div>

                <div class="col-md-4 mt-4 text-sm">
                                    <label for="is_pantawid">Pantawid Member:</label><label for="is_pantawid" class="text-red-600">*</label>
                                </div>
                                <div class="col-md-1 mt-4 text-sm">
                                    <input type="radio" id="is_pantawid_yes" name="is_pantawid" value="1">
                                    <label for="is_pantawid_yes">Yes</label>
                                </div>
                                <div class="col-md-1 mt-4 text-sm">
                                    <input type="radio" id="is_pantawid_no" name="is_pantawid" value="0" checked>
                                    <label for="is_pantawid_no">No</label>
                                </div>
                                <div class="col-md-6 mt-4 additional-details text-sm">
                                    <select  class="form-control required:border-red-500 invalid:border-red-500 rounded border-gray-300" id="pantawid_details" name="pantawid_details" placeholder="Please specify if RCCT or MCCT" disabled>
                                        <option value="" disabled selected>Please specify </option>
                                        <option value="rcct">RCCT</option>
                                        <option value="mcct">MCCT</option>
                                    </select>
                                    
                                </div>
                                
                                <div class="col-md-4 mt-2 text-sm">
                                    <label for="is_person_with_disability">Person with Disability:</label><label for="is_pwd" class="text-red-600">*</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" id="is_person_with_disability_yes" name="is_person_with_disability" value="1">
                                    <label for="is_person_with_disability_yes">Yes</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" id="is_person_with_disability_no" name="is_person_with_disability" value="0" checked>
                                    <label for="is_person_with_disability_no">No</label>
                                </div>
                                <div class="col-md-6 mt-2 text-sm additional-details" id="disability_additionalDetails">
                                    <input type="text"  class="form-control required:border-red-500 invalid:border-red-500 rounded border-gray-300" id="person_with_disability_details" name="person_with_disability_details" placeholder="Please specify" disabled>
                                    
                                </div>

                                <div class="col-md-4 mt-2 text-sm">
                                    <label for="is_indigenous_people">Indigenous People (IP):</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" name="is_indigenous_people" id="is_indigenous_people_yes" value="1" >
                                    <label for="is_indigenous_people_yes">Yes</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" name="is_indigenous_people" id="is_indigenous_people_no" value="0" checked>
                                    <label for="is_indigenous_people_no">No</label>
                                </div>
                                <div class="col-md-6 mt-2 text-sm" style="visibility: hidden">
                                    <input type="text"  class="form-control required:border-red-500 invalid:border-red-500 rounded border-gray-300" name="spaceonly">
                                </div>

                                <div class="col-md-4 mt-2 text-sm">
                                    <label for="is_child_of_soloparent">Child of Solo Parent:</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" name="is_child_of_soloparent" id="is_child_of_soloparent_yes" value="1">
                                    <label for="is_child_of_soloparent_yes">Yes</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" name="is_child_of_soloparent" id="is_child_of_soloparent_no" value="0" checked>
                                    <label for="is_child_of_soloparent_no">No</label>
                                </div>
                                <div class="col-md-6 mt-2 text-sm" style="visibility: hidden">
                                    <input type="text"  class="form-control required:border-red-500 invalid:border-red-500 rounded border-gray-300" name="spaceonly">
                                </div>

                                <div class="col-md-4 mt-2 text-sm">
                                    <label for="is_lactose_intolerant">Lactose Intolerant:</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" name="is_lactose_intolerant" id="is_lactose_intolerant_yes" value="1">
                                    <label for="is_lactose_intolerant_yes">Yes</label>
                                </div>
                                <div class="col-md-1 mt-2 text-sm">
                                    <input type="radio" name="is_lactose_intolerant" id="is_lactose_intolerant_no" value="0" checked>
                                    <label for="is_lactose_intolerant_no">No</label>
                                </div>
                                <div class="col-md-6 mt-2 text-sm" style="visibility: hidden">
                                    <input type="text"  class="form-control required:border-red-500 invalid:border-red-500 rounded border-gray-300" name="spaceonly">
                                </div>
                <!-- <div class="col-md-6">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="actualdateofweighing" placeholder="Actual date of weighing" required>
                    <label for="actualdateofweighing">Actual date of weighing</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="weight" placeholder="Weight" required>
                    <label for="weight">Weight</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="height" placeholder="Height" required>
                    <label for="height">Height</label>
                  </div>
                </div> -->

                <div class="col-md-1 mt-4 group-heading">
                  Address
                </div>
                <div class="col-md-11 mt-8 group-heading"><hr></div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="housenostreetpurok" placeholder="House No./ Street/ Purok" required>
                    <label for="housenostreetpurok">House No./ Street/ Purok</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <select class="form-control" id="region" aria-label="Region" required>
                      <option value="0">Region XI</option>
                    </select>
                    <label for="region">Region</label>
                  </div>
                </div>  
                <div class="col-md-6">
                  <div class="form-floating">
                    <select class="form-control" id="provinceDropdown" aria-label="Province" required>
                      
                    </select>
                    <label for="provinceDropdown">Province</label>
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-floating">
                    <select class="form-control" id="cityDropdown" aria-label="City/Municipality" required>
                      <option value="0">---</option>
                    </select>
                    <label for="cityDropdown">City/Municipality</label>
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-floating">
                    <select class="form-control" id="barangayDropdown" aria-label="Barangay" required>
                      <option value="0">---</option>
                    </select>
                    <label for="barangayDropdown">Barangay</label>
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="zipcode" placeholder="Zip Code" maxlength="4" required>
                    <label for="zip Code">Zip Code</label>
                  </div>
                </div>

                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" id="">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
            </div>
          </div>
        </div>  
        </div>
      </div>

      <script>
                document.addEventListener('DOMContentLoaded', function() {
                // Function to toggle additional details based on radio button selection
                function toggleAdditionalDetails(radioName, additionalDetailsId) {
                    const radios = document.getElementsByName(radioName);
                    const additionalDetailsSelect = document.getElementById(additionalDetailsId);

                    radios.forEach(radio => {
                        radio.addEventListener('change', function() {
                            if (radio.value === '1' && radio.checked) {
                                additionalDetailsSelect.disabled = false;
                            } else if (radio.value === '0' && radio.checked) {
                                additionalDetailsSelect.disabled = true;
                            }
                        });
                    });
                    
                }
                    // Apply the function to each set of radio buttons and additional details
                    toggleAdditionalDetails('is_pantawid', 'pantawid_details');
                    toggleAdditionalDetails('is_person_wtih_disability', 'person_with_disability_details');
                    
                });
            </script>

      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="assets/js/psgc.js"></script>

    </section>
    </div>

  </main><!-- End #main -->

<?php
  include 'footer.php';
?>