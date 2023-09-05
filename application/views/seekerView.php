<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    #skillForm {
      margin-bottom: -30px;
    }

    #uploadresume {
      background-color: #F8802A;
      color: white;
    }

    #addSkillBtn {
      background-color: navy;
      color: white;
    }

    #addskillsubmit {
      background-color: #F8802A;
      color: white;
    }

    #educationadd {
      background-color: navy;
      color: white;
    }

    #educationsubmit {
      background-color: #F8802A;
      color: white;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 40%;
      margin: 150px auto;
      margin-left: 300px;

    }

    h3 {
      text-align: center;
      margin-bottom: 30px;
      margin-left: -20px;
      color: navy;
    }




    label {
      font-weight: bold;
    }

    .error {
      color: red;
      margin-top: 5px;
    }


    .form-control {
      border-radius: 3px;
      border: 1px solid #ccc;
      padding: 10px;
      width: 100%;
      margin-right: 10px;

    }

    .btn-primary {
      background-color: #4285f4;
      border: none;
    }

    .btn-primary {
      background-color: #F8802A;
      ;
    }

    /* 
.btn-primary:hover {
  background-color: #2d76d9;
} */


    .btn-primary:hover {
      background-color: #2d76d9;
    }

    .form-control[type="file"] {
      border: none;
      background-color: transparent;
      color: #4285f4;
      cursor: pointer;
    }

    button[type="submit"] {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      font-weight: bold;
    }

    .next-button {
      float: right;
    }

    .sidebar {
      position: fixed;
      width: 18%;
      top: 110px;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 20px 0;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #F8802A;
    }

    .nav-link {
      display: block;
      color: #ffffff;
      font-weight: bold;
      text-decoration: none;
      padding: 10px 20px;
    }


    .nav.flex-column {
      list-style: none;
      padding: 0;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 120px;
      z-index: 1000;
      background-color: navy;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h2 {
      color: white;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 25%;
      transform: translate(-50%, -50%);
      color: white;
    }

    header nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);

    }

    header nav ul li {
      display: inline-block;
      margin-left: 50px;
    }

    header nav ul li a {
      color: white;
      font-weight: bold;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 5px;
      /* background-color: #f39c12 ;  */
    }


    header nav ul li a:hover {
      /* background-color: #007bff;
    .btn-primary{ */
      /* background-color: #f39c12 ; */
      color: #F8802A;
      text-decoration: none;
      /* } */
    }

    nav ul li a:hover {
      /* background-color: #007bff;
    .btn-primary{ */
      /* background-color: #f39c12 ; */
      color: navy;
      text-decoration: none;
      /* } */
    }



    .logo {
      margin-top: 50px;
    }

    .sidebar {
      position: fixed;
      width: 18%;
      /* Slightly increased width for more content space */
      top: 110px;
      /* Adjusted top spacing */
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 20px 0;
      /* Reduced padding for a cleaner look */
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      /* Adjusted shadow */
      background-color: #F8802A;
      /* A darker, professional color */
    }


    .nav-link {
      display: block;
      color: #ffffff;
      font-weight: bold;
      text-decoration: none;
      padding: 0px 20px;
      /* Added padding for better touch interaction */
    }

    .main {
      margin-top: 70px;
      padding: 20px;
    }

    .nav-item h4 {
      margin: 0;
      padding: 10px 10px;
      color: white;
    }

    #tamil {
      color: white;
      margin-left: 20px;
    }
    #w{
      margin-bottom:-100px;
      margin-top:160px;

    }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <header>
    <div class="logo">
      <h5 id="tamil"> அறம் வேலைவாய்ப்பு</h5>
    </div>


    <nav>
      <ul>
        <li><a href="http://localhost/arramjobs/wordpress">Home</a></li>
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#how-it-works">How It Works</a></li>
        <li><a href="#job-seekers">Seekers</a></li>
        <li><a href="#job-providers">Providers</a></li>
        <li><a href="#blog">Blog</a></li>

      </ul>
    </nav>
  </header>
  
 
  
  
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="position-sticky">

          <ul class="nav flex-column">
            <br>

            <li class="nav-item">
              <h4>Create Profile</h4>
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/basicDetails"?>">
                Basic Details
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/educationalDetails"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/educationalDetails"?>">
                Education Details
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/experienceDetails"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/experienceDetails"?>">
                Experience Details
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/projectDetails"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/projectDetails"?>">
                project Details
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/areaOfInterest"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/areaOfInterest"?>">
                Area Of Interest
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/skills"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/skills"?>">
                Skills
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/resume"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/resume"?>">
                Upload Resume
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <?php
        if ($method == "dash") {
        ?>
          <h1 class="" id="w"><center>Welcome To Job Seeker Dashboard </center></h1>
        <?php
        } else if ($method == 'basicdetails') {
        ?>

          <div class="container" id="page1">
            <h3>Personal Details</h3>
            <form name="applicationform" method="post" onsubmit="return validateFormPage()" action='<?php echo baseUrl . "seekerController/updateBasicDetails"?>'>
              <?php
              foreach ($basicDetails as $key => $value) {
              ?>
                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">
                <div class="form-group">
                  <label for="Name">Name *</label>
                  <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name" placeholder="Enter your name" required>
                  <div id="Name_error" class="error"></div>

                </div>
                <div class="form-group">
                  <label for="emailid">Email *</label><br>
                  <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" name="email" placeholder="Enter your email" required>
                  <div id="emailid_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="phonenumber">Phone Number *</label>
                  <input type="tel" class="form-control" id="phonenumber" value=<?php echo $value['phonenumber']; ?> name="phonenumber" placeholder="Enter your phonenumber" value="<?= isset($updateData['phonenumber']) ? $updateData['phonenumber'] : ''; ?>" required>
                  <div id="phonenumber_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="dob">Date of Birth *</label>
                  <input type="date" class="form-control" id="dateofbirth" value=<?php echo $value['dateofbirth']; ?> name="dateofbirth" required>
                  <div id="dob_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="gender">Gender *</label>
                  <select class="form-control" id="gender" value="<?php echo isset($value['gender']) ? $value['gender'] : ''; ?>" name="gender" required>
                    <option value="">Select your Gender</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="others">others</option>
                  </select>
                  <div id="gender_error" class="error"></div>
                </div>
                <h4> Address : </h3>
                <div class="form-group">
                  <label for="Door no">Door no/building name </label>
                  <input type="text" class="form-control" id="doorno" value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" name="doorno">
                  <div id="doorno_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="street address">street address </label>
                  <input type="text" class="form-control" id="streetaddress" value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" name="streetaddress">
                  <div id="streetaddress_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="landmark">Landmark </label>
                  <input type="text" class="form-control" id="landmark" value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" name="landmark">
                  <div id="landmark_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="pincode">Pin Code</label>
                  <input type="text" class="form-control" id="pincode" value="<?php echo isset($value['pincode']) ? $value['pincode'] : ''; ?>" name="pincode">
                  <div id="pincode_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="district">District *</label>
                  <input type="text" class="form-control" id="district" name="district" value="Erode" disabled>
                  <div id="district_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="maritalstatus">Marital Status*</label>
                  <select class="form-control" id="maritalstatus" value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>" name="maritalstatus">
                    <option value="">Select your marital status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                  </select>
                  <div id="maritalstatus_error" class="error"></div>
                </div>
                <h1>Identification Details</h1>
                <div class="form-group">
                  <label for="aadharfrontphoto">Aadhar front photo </label>
                  <input type="file" class="form-control" id="aadharfrontphoto" value="<?php echo isset($value['aadhar_front']) ? $value['aadhar_front'] : ''; ?>" name="aadharfrontphoto">
                  <div id="aadharfrontphoto_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="aadharbackphoto">Aadhar back Photo</label>
                  <input type="file" class="form-control" id="aadharbackphoto" value="<?php echo isset($value['aadhar_back']) ? $value['aadhar_back'] : ''; ?>" name="aadharbackphoto">
                  <div id="aadharbackphoto_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="photo">Photo</label>
                  <input type="file" class="form-control" id="photo" value="<?php echo isset($value['photo']) ? $value['photo'] : ''; ?>" name="photo">
                  <div id="photo_error" class="error"></div>
                </div>
                <button type="submit" name="submitBtn" class="btn btn-primary">submit</button>
            </form>
          <?php
              }
          ?>
          </div>

          <script>
            function validateFormPage() {

              var Name = document.getElementById('name').value;
              var email = document.getElementById('email').value;
              var phoneNumber = document.getElementById('phonenumber').value;
              var dob = document.getElementById('dob').value;
              var gender = document.getElementById('gender').value;
              var doorno = document.getElementById('doorno').value;
              var streetaddress = document.getElementById('streetaddress').value;
              var landmark = document.getElementById('landmark').value;
              var pincode = document.getElementById('pincode').value;
              var maritalstatus = document.getElementById('maritalstatus').value;
              var aadharFrontPhoto = document.getElementById('aadharfrontphoto').value;
              var aadharBackPhoto = document.getElementById('aadharbackphoto').value;
              var photo = document.getElementById('photo').value;
              var nameRegex = /^[A-Za-z\s]/;
              clearErrorMessages();

              if (Name.trim() === '') {
                displayError('Name is required.', 'Name_error');
                return false;
              } else if (!nameRegex.test(Name)) {
                displayError('Please enter a valid name.', 'Name_error');
                return false;
              }

              if (email.trim() === '') {
                displayError('Email is required.', 'emailid_error');
                return false;
              } else if (!validateEmail(email)) {
                displayError('Please enter a valid email address.', 'emailid_error');
                return false;
              }

              if (phoneNumber.trim() === '') {
                displayError('Phone Number is required.', 'phonenumber_error');
                return false;
              } else if (!validatePhoneNumber(phoneNumber)) {
                displayError('Please enter a valid phone number.', 'phonenumber_error');
                return false;
              }

              if (dob.trim() === '') {
                displayError('Date of Birth is required.', 'dob_error');
                return false;
              }
              if (gender.trim() === '') {
                displayError('Gender is required.', 'gender_error');
                return false;
              }

              if (doorno.trim() === '') {
                displayError('First line is required.', 'firstline_error');
                return false;
              }

              if (streetaddress.trim() === '') {
                displayError('Street address is required.', 'streetaddress_error');
                return false;
              }

              if (landmark.trim() === '') {
                displayError('City is required.', 'city_error');
                return false;
              }

              if (pincode.trim() === '') {
                displayError('Pin Code is required.', 'pincode_error');
                return false;
              }
              if (maritalstatus.trim() === '') {
                displayError('marital status is required.', 'maritalstatus_error');
                return false;
              }
              if (aadharFrontPhoto.trim() === '') {
                displayError('Aadhar front photo is required.', 'aadharfrontphoto_error');
                return false;
              }

              if (aadharBackPhoto.trim() === '') {
                displayError('Aadhar back photo is required.', 'aadharbackphoto_error');
                return false;
              }

              if (photo.trim() === '') {
                displayError('Photo is required.', 'photo_error');
                return false;
              }
              return true;
            }

            function isValidDate(dateString) {
              var currentDate = new Date();
              var inputDate = new Date(dateString);
              return inputDate <= currentDate;
            }

            function validateEmail(email) {
              var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
              return regex.test(email);
            }

            function validatePhoneNumber(phoneNumber) {
              var regex = /^\d{10}$/;
              return regex.test(phoneNumber);
            }


            function clearErrorMessages() {
              var errorElements = document.querySelectorAll('.error');
              errorElements.forEach(function(errorElement) {
                errorElement.textContent = '';
              });
            }

            function displayError(errorMessage, errorElementId) {
              var errorElement = document.getElementById(errorElementId);
              errorElement.textContent = errorMessage;
            }

            function resetForm() {
              document.getElementById('application_form').reset();
              clearErrorMessages();
              document.getElementById('successMessage').textContent = '';
              document.getElementById('submitBtn').disabled = false;
            }
          </script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        <?php
        } elseif ($method == 'educationalDetails') {
        ?>
          <div class="container" id="education">
            <h3>Education Form</h3>

            <div id="educationFormsContainer">
              <div class="education-form-container">
            
                <form name="educationform" action="<?php echo baseUrl . "seekerController/updateEducationDetails"?>" method="post" onsubmit="return validateForm()" >
                  <?php
              // foreach($educationDetails as $key => $value) {
                 
                if (isset($educationalDetails[0]['id'])) {
                  foreach ($educationalDetails as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
              
              ?>
                   <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <input type="hidden" class="form-control" id="id" value="<?php echo $value['seekerId']; ?>" name="id" placeholder="Enter your name">
                  <div class="form-group">
                    <label for="qualification">Educational Qualification*</label>
                    <select class="form-control" id="qualification"  name="qualification" value="<?php echo $value['educational_qualification']; ?>" onchange="toggleFields()">
                      <option value="">Select Qualification</option>
                      <option value="below_8th">Below 8th</option>
                      <option value="sslc">SSLC</option>
                      <option value="hsc">HSC</option>
                      <option value="bachelors">Bachelors</option>
                      <option value="masters">Masters</option>
                      <option value="doctorate">Doctorate</option>
                    </select>
                    <div id="qualification_error" class="error"></div>
                  </div>
                  <div class="form-group" id="department-group" style="display: none;">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="department" value="<?php echo $value['department']; ?>">
                      <option value="">Select Department</option>
                      <option value="Tamil">Tamil</option>
                      <option value="english">English</option>
                      <option value="maths">Maths</option>
                      <option value="physics">Physics</option>
                      <option value="chemistry">Chemistry</option>
                      <option value="computer_science">Computer Science</option>
                    </select>
                    <div id="department_error" class="error"></div>
                  </div>
                  <div class="form-group" id="school-group" style="display: none;">
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>" name="school">
                  </div>
                  <div class="form-group" id="percentage-group" style="display: none;">
                    <label for="percentage">Percentage</label>
                    <input type="text" class="form-control" id="percentage" id="school"  value="<?php echo $value['percentage']; ?>" name="percentage">
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" style="display: none;">
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>" name="year_passed">
                    <div id="year_error" class="error"></div>
                  </div>
                  <!-- <button type="button" class="btn mt-3" id="educationadd" onclick="addEducationForm()">Add</button> -->
              </div>
              <button type="submit" id="educationsubmit" class="btn">Submit</button>
              <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                       <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                       <div class="form-group">
                    <label for="qualification">Educational Qualification*</label>
                    <select class="form-control" id="qualification"  name="qualification"  onchange="toggleFields()">
                      <option value="">Select Qualification</option>
                      <option value="below_8th">Below 8th</option>
                      <option value="sslc">SSLC</option>
                      <option value="hsc">HSC</option>
                      <option value="bachelors">Bachelors</option>
                      <option value="masters">Masters</option>
                      <option value="doctorate">Doctorate</option>
                    </select>
                    <div id="qualification_error" class="error"></div>
                  </div>
                  <div class="form-group" id="department-group" style="display: none;">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="department" >
                      <option value="">Select Department</option>
                      <option value="Tamil">Tamil</option>
                      <option value="english">English</option>
                      <option value="maths">Maths</option>
                      <option value="physics">Physics</option>
                      <option value="chemistry">Chemistry</option>
                      <option value="computer_science">Computer Science</option>
                    </select>
                    <div id="department_error" class="error"></div>
                  </div>
                  <div class="form-group" id="school-group" style="display: none;">
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school"  name="school">
                  </div>
                  <div class="form-group" id="percentage-group" style="display: none;">
                    <label for="percentage">Percentage</label>
                    <input type="number" class="form-control" id="percentage" id="school"  name="percentage">
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" style="display: none;">
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed"   name="year_passed">
                    <div id="year_error" class="error"></div>
                  </div>
                  <!-- <button type="button" class="btn mt-3" id="educationadd" onclick="addEducationForm()">Add</button> -->
              </div>
              <button type="submit" id="educationsubmit" class="btn">Submit</button>
              </form>
              <?php
                  }
              ?>
            </div>
            <script>
              var educationFormCount = 1;

              function addEducationForm(button) {
                educationFormCount++;
                var newEducationFormContainer = document.createElement('div');
                newEducationFormContainer.className = 'education-form-container';

                // Clone the original form
                var originalForm = document.querySelector('.education-form-container');
                var newForm = originalForm.cloneNode(true);
                newForm.id = 'educationform_' + educationFormCount;

                // Clear the values in the new form
                clearFormFields(newForm);

                // Append the new form to the container
                newEducationFormContainer.appendChild(newForm);
                document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                // Move the "Submit" button to the new form
                var submitButton = document.querySelector('button[type="submit"]');
                newForm.appendChild(submitButton);

                // Hide the "Add" button in the previous form
                button.style.display = "none";
              }
              // Function to clear the form fields in a given education form
              function clearFormFields(educationForm) {
                var fieldsToClear = educationForm.querySelectorAll('input, select');
                for (var i = 0; i < fieldsToClear.length; i++) {
                  fieldsToClear[i].value = '';
                }
              }

              function validateForm() {
                var qualification = document.getElementById('qualification').value;
                var department = document.getElementById('department').value;
                var school = document.getElementById('school').value;
                var percentage = document.getElementById('percentage').value;
                var yearPassed = document.getElementById('year_passed').value;


                // Basic qualification validation
                if (!qualification) {
                  displayError('Please select a qualification', 'qualification_error');
                  return false;
                }


                // Additional validation for "Bachelors," "Masters," and "Doctorate"
                if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
                  var department = document.getElementById('department').value;
                  var school = document.getElementById('school').value;
                  var percentage = document.getElementById('percentage').value;
                  var yearPassed = document.getElementById('year_passed').value;

                  // Validate department
                  if (!department) {
                    displayError('Department is required for selected qualification', 'department_error');
                    return false;
                  }

                  // Validate school/collegename
                  if (!school) {
                    displayError('School/collegename is required', 'school_error');
                    return false;
                  }

                  // Validate percentage
                  if (!percentage) {
                    displayError('Percentage is required', 'percentage_error');
                    return false;
                  }

                  // Validate year of passed out
                  if (!yearPassed) {
                    displayError('Year of Passed Out is required', 'year_error');
                    return false;
                  }
                }


                // Form is valid
                return true;
              }

              function toggleFields() {
                var selectedQualification = document.getElementById('qualification').value;
                var departmentGroup = document.getElementById('department-group');
                var schoolGroup = document.getElementById('school-group');
                var percentageGroup = document.getElementById('percentage-group');
                var yearGroup = document.getElementById('year-group');
                var addButton = document.getElementById('addButton');

                // Show/hide the additional fields based on the selected qualification
                if (selectedQualification === 'below_8th') {
                  departmentGroup.style.display = 'none';
                  schoolGroup.style.display = 'none';
                  percentageGroup.style.display = 'none';
                  yearGroup.style.display = 'none';
                  addButton.style.display = 'none';
                } else {
                  // Show the school, percentage, and year fields by default
                  schoolGroup.style.display = 'block';
                  percentageGroup.style.display = 'block';
                  yearGroup.style.display = 'block';

                  // Hide the department field for SSLC and HSC
                  if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                    departmentGroup.style.display = 'none';
                    addButton.style.display = 'none';
                  } else {
                    // Show the department field for other qualifications
                    departmentGroup.style.display = 'block';
                    addButton.style.display = 'block';
                  }
                }
              }
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <?php
        } elseif ($method == 'experienceDetails') {
          ?>

            <div class="container">
              <h3>Experience Details Form</h3>
              <form name="experienceform" method="post" onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "seekerController/updateExperienceDetails"?>">
                                                                                           
              <?php
                if (isset($experienceDetails[0]['id'])) {
                  foreach ($experienceDetails as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                 
                 <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <input type="hidden" class="form-control" id="id" value="<?php echo $value['seekerId']; ?>" name="id" placeholder="Enter your name">

                  <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                      
                      <option value="">Select a Category</option>
                        <option value="architech">Architech</option>
                        <option value="Developer">Developer</option>
                        <option value="tester">Tester</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="datascience">Data Scientist</option>
                        <option value="databaseadmin">Database Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="professor">Professor</option>
                      <option value="others">Others</option>
                    </select>
                    <div id="category_error" class="error"></div>
                  </div>
                  <div class="form-group">
                    <label for="subcategory">Subcategory:</label>
                    <select class="form-control" id="subcategory" name="subcategory" disabled>
                      <option value="">Select a Subcategory</option>
                    </select>
                    <div id="subcategory_error" class="error"></div>
                  </div>


                  <div class="form-group">
                    <label for="experience">Experience</label>
                    <select class="form-control" id="experience" name="experience" value="<?php echo $value['experience']; ?>">
                      <option value="">Select your experience</option>
                      <option value="fresher" >Fresher</option>
                      <option value="0-2" >0-2</option>
                      <option value="3-5" >3-5</option>
                      <option value="5-10">5-10</option>
                      <option value="10-15">10-15</option>
                      <option value="15-20">15-20</option>
                      <option value="above 20 years">Above 20 years</option>
                    </select>
                    <div id="experience_error" class="error"></div>
                  </div>
                  <div class="form-group" id="otherCategoryField" style="display: none;" >
                    <label for="othercategory">Other Category:</label>
                    <select class="form-control" id="experience" name="experience" value="<?php echo $value['other_category']; ?>" >
                    <input type="text" class="form-control" id="othercategory" name="othercategory" >
                  </div>

                  <div class="form-group" id="otherSubcategoryField" style="display: none;">
                    <label for="othersubcategory">Other Subcategory:</label>
                    <select class="form-control" id="experience" name="experience" value="<?php echo $value['other_sub_category']; ?>" >
                    <input type="text" class="form-control" id="othersubcategory" name="othersubcategory" >
                  </div>


                 


                  <div class="form-group">
                    <label for="company name">Company Name</label>
                    <input type="text" class="form-control" id="companyname" name="companyname" value="<?php echo $value['company_name']; ?>" >
                    <div id="companyname_error" class="error"></div>
                  </div>

                  <div class="form-group">
                    <label for="role">Role in the company</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?php echo $value['job_role']; ?>">
                    <div id="role_error" class="error"></div>
                  </div>

                  <h1>Previous Employer details</h1>

                  <div class="form-group">
                    <label for="Name">Name of employer*</label>
                    <input type="text" class="form-control" id="nameofemployer" name="nameofemployer" value="<?php echo $value['previous_employer_name']; ?>">
                    <div id="name_error" class="error"></div>
                  </div>

                  <div class="form-group">
                    <label for="phone number">Phone Number</label>
                    <input type="text" class="form-control" id="number" name="number" value="<?php echo $value['previous_employer_mobile']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="emailid" name="emailid" value="<?php echo $value['previous_employer_email']; ?>">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                 <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <input type="hidden" class="form-control" id="id"  name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">

                  <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                     
                    <option value="">Select a Category</option>
                        <option value="architech">Architech</option>
                        <option value="Developer">Developer</option>
                        <option value="tester">Tester</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="datascience">Data Scientist</option>
                        <option value="databaseadmin">Database Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="professor">Professor</option>
                      <option value="others">Others</option>
                    </select>
                    <div id="category_error" class="error"></div>
                  </div>
                  <div class="form-group">
                    <label for="subcategory">Subcategory:</label>
                    <select class="form-control" id="subcategory" name="subcategory" disabled>
                      <option value="">Select a Subcategory</option>
                    </select>
                    <div id="subcategory_error" class="error"></div>
                  </div>
                  <div class="form-group" id="otherCategoryField" style="display: none;">
                    <label for="othercategory">Other Category:</label>
                    <input type="text" class="form-control" id="othercategory" name="othercategory">
                  </div>

                  <div class="form-group" id="otherSubcategoryField" style="display: none;">
                    <label for="othersubcategory">Other Subcategory:</label>
                    <input type="text" class="form-control" id="othersubcategory" name="othersubcategory" >
                  </div>


                  <div class="form-group">
                    <label for="experience">Experience</label>
                    <select class="form-control" id="experience" name="experience" >
                      <option value="">Select your experience</option>
                      <option value="fresher" >Fresher</option>
                      <option value="0-2" >0-2</option>
                      <option value="3-5" >3-5</option>
                      <option value="5-10" >5-10</option>
                      <option value="10-15" >10-15</option>
                      <option value="15-20">15-20</option>
                      <option value="above 20 years">Above 20 years</option>
                    </select>
                    <div id="experience_error" class="error"></div>
                  </div>


                  <div class="form-group">
                    <label for="company name">Company Name</label>
                    <input type="text" class="form-control" id="companyname" name="companyname" >
                    <div id="companyname_error" class="error"></div>
                  </div>

                  <div class="form-group">
                    <label for="role">Role in the company</label>
                    <input type="text" class="form-control" id="role" name="role">
                    <div id="role_error" class="error"></div>
                  </div>

                  <h1>Previous Employer details</h1>

                  <div class="form-group">
                    <label for="Name">Name of employer*</label>
                    <input type="text" class="form-control" id="nameofemployer" name="nameofemployer" >
                    <div id="name_error" class="error"></div>
                  </div>

                  <div class="form-group">
                    <label for="phone number">Phone Number</label>
                    <input type="text" class="form-control" id="number" name="number" >
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="emailid" name="emailid"  >
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <?php
                  }
                  ?>
              </form>
            </div>

            <script>
              function updateSubcategories() {
                var categorySelect = document.getElementById("category");
                var subcategorySelect = document.getElementById("subcategory");
                var selectedCategory = categorySelect.value;

                subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                if (selectedCategory === "architech") {
                  addSubcategoryOption("Architect");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption("Design ");
                    addSubcategoryOption("Project ");
                    addSubcategoryOption("Principal ");
                    addSubcategoryOption("Landscape ");
                    addSubcategoryOption("Urban Planner");
                    addSubcategoryOption("Interior Designer");
                    addSubcategoryOption("Architectural Technologist");
                    addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                    addSubcategoryOption("Sustainable Design Consultant");
                    addSubcategoryOption("Architectural Drafter");
                    addSubcategoryOption("Architectural Visualization Artist");
                    addSubcategoryOption("Urban Designer");
                    addSubcategoryOption("Historic Preservation ");
                    addSubcategoryOption("Residential Architect");
                    addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                    addSubcategoryOption("Architectural Educator");
                    addSubcategoryOption("Construction Project Manage");
                    addSubcategoryOption("Industrial Designer");
                    addSubcategoryOption("Healthcare Facility Planner");
                    addSubcategoryOption("Retail Space Designer");

                    addSubcategoryOption()
                } else if (selectedCategory === "Developer") {
                  addSubcategoryOption("Python Software Engineer");
                    addSubcategoryOption("Python");
                    addSubcategoryOption("Python Data Scientist");
                    addSubcategoryOption("Python Machine Learning Engineer");
                    addSubcategoryOption("Python Automation");
                    addSubcategoryOption("Java Software Engineer");
                    addSubcategoryOption("Java");
                    addSubcategoryOption("Java Full Stack ");
                    addSubcategoryOption("Java Android ");
                    addSubcategoryOption("Java Spring ");
                    addSubcategoryOption("Java Microservices ");
                    addSubcategoryOption("JavaScript Software Engineer");
                    addSubcategoryOption("Front-end ");
                    addSubcategoryOption("Node.js ");
                    addSubcategoryOption("React ");
                    addSubcategoryOption("Angular ");
                    addSubcategoryOption("Vue.js ");
                    addSubcategoryOption("Full Stack JavaScript ");
                    addSubcategoryOption("C# Software Engineer");
                    addSubcategoryOption(".NET ");
                    addSubcategoryOption("ASP.NET ");
                    addSubcategoryOption("Unity ");
                    addSubcategoryOption("Xamarin ");
                    addSubcategoryOption("C++ Software Engineer");
                    addSubcategoryOption("Game  (using C++)");
                    addSubcategoryOption("C++ Systems ");
                    addSubcategoryOption("PHP Software Engineer");
                    addSubcategoryOption("PHP Web ");
                    addSubcategoryOption("WordPress ");
                    addSubcategoryOption("Laravel ");
                    addSubcategoryOption("Symfony ");
                    addSubcategoryOption("Ruby Software Engineer");
                    addSubcategoryOption("Ruby on Rails ");
                    addSubcategoryOption("Swift Software Engineer");
                    addSubcategoryOption("iOS  (using Swift)");
                    addSubcategoryOption("macOS  (using Swift)");
                    addSubcategoryOption("Kotlin Software Engineer");
                    addSubcategoryOption("Android  (using Kotlin)");
                    addSubcategoryOption("Go Software Engineer");
                    addSubcategoryOption("Rust Software Engineer");
                    addSubcategoryOption("Systems  (using Rust");
                    addSubcategoryOption("TypeScript Software Engineer");
                    addSubcategoryOption("Front-end  (using TypeScript)");
                    addSubcategoryOption("SQL ");
                    addSubcategoryOption("Database ");
                    addSubcategoryOption("Scala Software Engineer");
                    addSubcategoryOption("Haskell Software Engineer");
                    addSubcategoryOption("Perl Software Engineer ");
                    addSubcategoryOption("Lua Software Engineer ");
                    addSubcategoryOption("Game  (using Lua) ");
                    addSubcategoryOption("MATLAB Software Enginee ");
                    addSubcategoryOption("Data Analyst (using MATLAB) ");

                } else if (selectedCategory === "tester") {
                  addSubcategoryOption("Software ");
                    addSubcategoryOption("Test Engineer");
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                    addSubcategoryOption("Test Automation Engineer");
                    addSubcategoryOption("Manual ");
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                    addSubcategoryOption("Test Manager");
                    addSubcategoryOption("Performance ");
                    addSubcategoryOption("Usability ");
                    addSubcategoryOption("Regression ");
                    addSubcategoryOption("User Acceptance ");
                    addSubcategoryOption("Security ");
                    addSubcategoryOption("Mobile App ");
                    addSubcategoryOption("Game ");
                    addSubcategoryOption("Functional ");
                    addSubcategoryOption("Test Architect");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Continuous Integration ");
                    addSubcategoryOption("Load ");
                    addSubcategoryOption("Test Designer");
                    addSubcategoryOption("Test Technician");
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Compliance ");
                } else if (selectedCategory === "uiux") {
                    addSubcategoryOption("UI/UX Designer");
                    addSubcategoryOption("User Experience Designer");
                    addSubcategoryOption("User Interface Designer");
                    addSubcategoryOption("Interaction Designer");
                    addSubcategoryOption("Visual Designer");
                    addSubcategoryOption("UX Researcher");
                    addSubcategoryOption("UI/UX Architect");
                    addSubcategoryOption("Information Architect");
                    addSubcategoryOption("UX Strategist");
                    addSubcategoryOption("Product Designer");
                    addSubcategoryOption("User-Centered Design Specialist");
                    addSubcategoryOption("Usability Analyst");
                    addSubcategoryOption("UI/UX Developer");
                    addSubcategoryOption("Mobile App Designer");
                    addSubcategoryOption("Web Designer");
                    addSubcategoryOption("Visual Experience Designer");
                    addSubcategoryOption("UX Content Strategist");
                    addSubcategoryOption("Interaction Architect");
                    addSubcategoryOption("UX/UI Illustrator");
                    addSubcategoryOption("User Interface Animator");
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                    addSubcategoryOption("Accessibility Designer ");
                    addSubcategoryOption("Prototype Designer ");
                    addSubcategoryOption("UI/UX Lead ");
                    addSubcategoryOption("Design Systems Manager ");

                } else if (selectedCategory === "datascience") {
                  addSubcategoryOption("Data Scientist");
                    addSubcategoryOption("Senior Data Scientist");
                    addSubcategoryOption("Machine Learning Engineer");
                    addSubcategoryOption("Data Analyst");
                    addSubcategoryOption("Senior Data Analyst");
                    addSubcategoryOption("Statistician");
                    addSubcategoryOption("Business Intelligence Analyst");
                    addSubcategoryOption("Quantitative Analyst (Quant)");
                    addSubcategoryOption("Data Engineer");
                    addSubcategoryOption("Data Architect");
                    addSubcategoryOption("AI Research");
                    addSubcategoryOption("Predictive Modeler");
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                    addSubcategoryOption("Computer Vision Engineer");
                    addSubcategoryOption("Big Data Engineer");
                    addSubcategoryOption("Analytics Manager");
                    addSubcategoryOption("Data Science Manager");
                    addSubcategoryOption("Chief Data Officer (CDO)");
                    addSubcategoryOption("Research Scientist (AI/ML)");
                    addSubcategoryOption("Decision Scientist");
                    addSubcategoryOption("Marketing Analyst");
                    addSubcategoryOption("Operations Research Analyst");
                    addSubcategoryOption("Data Visualization Specialist");
                    addSubcategoryOption("Customer Insights Analyst");
                    addSubcategoryOption("Fraud Analyst");
                } else if (selectedCategory === "databaseadmin") {
                  addSubcategoryOption("Database (DBA)");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption("Database Engineer");
                    addSubcategoryOption("Database Architect");
                    addSubcategoryOption("Database Analyst");
                    addSubcategoryOption("Data Warehouse ");
                    addSubcategoryOption("SQL Server ");
                    addSubcategoryOption("Oracle Database ");
                    addSubcategoryOption("MySQL Database ");
                    addSubcategoryOption("PostgreSQL Database ");
                    addSubcategoryOption("MongoDB ");
                    addSubcategoryOption("NoSQL  ");
                    addSubcategoryOption("DBMS  (Database Management System)");
                    addSubcategoryOption("Database Operations Manager");
                    addSubcategoryOption("Database Performance Tuning Specialist");
                    addSubcategoryOption("Data Migration Specialist");
                    addSubcategoryOption("Database Security ");
                    addSubcategoryOption("Database Backup and Recovery Specialist");
                    addSubcategoryOption("Cloud   (e.g., AWS, Azure, Google Cloud)");
                    addSubcategoryOption("Database Compliance Officer");
                    addSubcategoryOption("Database DevOps Engineer");
                    addSubcategoryOption("Database Automation Engineer");
                    addSubcategoryOption("Database Replication Specialist");
                    addSubcategoryOption("Data Governance Manager");
                    addSubcategoryOption("Data Steward");
                } else if (selectedCategory === "teacher") {
                  addSubcategoryOption("Tamil");
                    addSubcategoryOption("Mathematics ");
                    addSubcategoryOption("Math Instructor");
                    addSubcategoryOption("Algebra ");
                    addSubcategoryOption("Geometry ");
                    addSubcategoryOption("Calculus ");
                    addSubcategoryOption("Statistics ");
                    addSubcategoryOption("Math Tutor");
                    addSubcategoryOption("Math Coach");
                    addSubcategoryOption("Math Curriculum Specialist");
                    addSubcategoryOption("Math Department Chair");
                    addSubcategoryOption("English ");
                    addSubcategoryOption("Language Arts ");
                    addSubcategoryOption("Literature ");
                    addSubcategoryOption("Writing Instructor");
                    addSubcategoryOption("Creative Writing ");
                    addSubcategoryOption("English as a Second Language (ESL) ");
                    addSubcategoryOption("Reading Specialist");
                    addSubcategoryOption("English Tutor");
                    addSubcategoryOption("English Department Chair");
                    addSubcategoryOption("Science ");
                    addSubcategoryOption("Biology ");
                    addSubcategoryOption("Chemistry ");
                    addSubcategoryOption("Physics ");
                    addSubcategoryOption("Environmental Science ");
                    addSubcategoryOption("Earth Science ");
                    addSubcategoryOption("Anatomy and Physiology ");
                    addSubcategoryOption("Science Lab Instructor");
                    addSubcategoryOption("Science Curriculum Specialist");
                    addSubcategoryOption("Social Studies ");
                    addSubcategoryOption("History ");
                    addSubcategoryOption("Geography ");
                    addSubcategoryOption("Civics ");
                    addSubcategoryOption("Government ");
                    addSubcategoryOption("Economics ");
                    addSubcategoryOption("World History ");
                    addSubcategoryOption("Social Studies Department Chair");
                    addSubcategoryOption("Foreign Language ");
                    addSubcategoryOption("Language Instructor");
                    addSubcategoryOption("Spanish ");
                    addSubcategoryOption("French ");
                    addSubcategoryOption("German ");
                    addSubcategoryOption("Chinese ");
                    addSubcategoryOption("Language Lab Coordinator");
                    addSubcategoryOption("Physical Education ");
                    addSubcategoryOption("PE Instructor");
                    addSubcategoryOption("Fitness Coach");
                    addSubcategoryOption("Health Education ");
                    addSubcategoryOption("Sports Coach");
                    addSubcategoryOption("Physical Education Department Chair");
                    addSubcategoryOption("Art ");
                    addSubcategoryOption("Music ");
                    addSubcategoryOption("Drama ");
                    addSubcategoryOption("Visual Arts ");
                    addSubcategoryOption("Choir Director");
                    addSubcategoryOption("Band ");
                    addSubcategoryOption("Art History ");
                    addSubcategoryOption("Special Education ");
                    addSubcategoryOption("Learning Support ");
                    addSubcategoryOption("Resource ");
                    addSubcategoryOption("Inclusion ");
                    addSubcategoryOption("Autism Specialist");
                    addSubcategoryOption("Behavioral Interventionist");
                    addSubcategoryOption("Vocational ");
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                    addSubcategoryOption("Culinary Arts Instructor");
                    addSubcategoryOption("Automotive Technology Teacher");
                    addSubcategoryOption("Computer Science ");
                    addSubcategoryOption("Digital Media Instructor");
                } else if (selectedCategory === "professor") {
                  addSubcategoryOption("University ");
                    addSubcategoryOption("Assistant ");
                    addSubcategoryOption("Associate ");
                    addSubcategoryOption("Full ");
                    addSubcategoryOption("Distinguished ");
                    addSubcategoryOption("Adjunct ");
                    addSubcategoryOption("Visiting ");
                    addSubcategoryOption("Research ");
                    addSubcategoryOption("Clinical ");
                    addSubcategoryOption("Philosophy");
                    addSubcategoryOption("Professor of History");
                    addSubcategoryOption("English");
                    addSubcategoryOption("Psychology");
                    addSubcategoryOption("Sociology");
                    addSubcategoryOption("Political Science");
                    addSubcategoryOption("Anthropology");
                    addSubcategoryOption("Linguistics");
                    addSubcategoryOption("Biology");
                    addSubcategoryOption("Chemistry");
                    addSubcategoryOption("Physics");
                    addSubcategoryOption("Mathematics");
                    addSubcategoryOption("Geology");
                    addSubcategoryOption("Astronomy");
                    addSubcategoryOption(" Environmental Science");
                    addSubcategoryOption("Computer Science");
                    addSubcategoryOption("Electrical Engineering");
                    addSubcategoryOption("Mechanical Engineering");
                    addSubcategoryOption("Civil Engineering");
                    addSubcategoryOption("Chemical Engineering");
                    addSubcategoryOption("Information Technology");
                    addSubcategoryOption("Business Administration");
                    addSubcategoryOption("Economics");
                    addSubcategoryOption("Finance");
                    addSubcategoryOption("Marketing");
                    addSubcategoryOption("Management");
                    addSubcategoryOption("Accounting");
                    addSubcategoryOption("Fine Arts");
                    addSubcategoryOption("Music");
                    addSubcategoryOption("Visual Arts");
                    addSubcategoryOption("Theater");
                    addSubcategoryOption("Dance");
                    addSubcategoryOption("Film Studies");
                    addSubcategoryOption("Educational Psychology");
                    addSubcategoryOption("Medicine");
                    addSubcategoryOption("Nursing");
                    addSubcategoryOption("Public Health");
                    addSubcategoryOption("Pharmacy");
                    addSubcategoryOption("Dentistry");
                    addSubcategoryOption("Law");
                    addSubcategoryOption("Constitutional Law");
                    addSubcategoryOption("Criminal Law");
                    addSubcategoryOption("International Law");
                    addSubcategoryOption("Environmental Law");
                    addSubcategoryOption("Social Work");
                    addSubcategoryOption("Social Welfare");
                    addSubcategoryOption("Clinical Social Work");
                    addSubcategoryOption("Library Science");
                    addSubcategoryOption("Information Studies");
                
                } else {
                  hideOtherCategoryFields();
                }

                subcategorySelect.disabled = false;
              }

              function addSubcategoryOption(subcategory) {
                var subcategorySelect = document.getElementById("subcategory");
                var option = document.createElement("option");
                option.value = subcategory;
                option.text = subcategory;
                subcategorySelect.appendChild(option);
              }

              function showOtherCategoryFields() {
                document.getElementById("otherCategoryField").style.display = "block";
                document.getElementById("otherSubcategoryField").style.display = "block";
              }

              function hideOtherCategoryFields() {
                document.getElementById("otherCategoryField").style.display = "none";
                document.getElementById("otherSubcategoryField").style.display = "none";
              }

              function validateexpForm() {
                var category = document.getElementById("category");
                var subcategory = document.getElementById("subcategory");
                var experience = document.getElementById("experience");
                var companyname = document.getElementById("companyname");
                var role = document.getElementById("role");
                var name = document.getElementById("nameofemployer");
                var phonenumber = document.getElementById("phonenumber");
                var email = document.getElementById("email");

                if (category.value === '') {
                  displayError('Category is required.', 'category_error');
                  return false;
                }

                if (subcategory.value === '') {
                  displayError('Please select a subcategory.', 'subcategory_error');
                  return false;
                }
                if (experience.value === 'fresher') {
                  hideFields();
              } else if (experience.value === '') {
                  displayError('Please select an experience.', 'experience_error');
                  return false;
              }
                if (companyname.value === '') {
                  displayError('Please enter a company name.', 'companyname_error');
                  return false;
                }

                if (role.value === '') {
                  displayError('Please enter a role.', 'role_error');
                  return false;
                }

                if (companyname.value === '') {
                  displayError('please enter a company name', 'companyname_error');
                  return false;
                }
                if (role.value === '') {
                  displayError('please enter a role', 'role_error');
                  return false;
                }
                if (name.value === '') {
                  displayError('please enter a employer name', 'name_error');
                  return false;
                }



                return true;
              }

              function clearErrorMessages() {
                var errorElements = document.querySelectorAll('.error');
                errorElements.forEach(function(errorElement) {
                  errorElement.textContent = '';
                });
              }

              function displayError(message, elementId) {
                var errorElement = document.getElementById(elementId);
                errorElement.innerHTML = message;
                errorElement.style.color = 'red';
              }
            </script>


          <?php
        } elseif ($method == 'project') {
          ?>

            <div class="container">
              <h3 id="projectdeailsform">Project Details Form</h3>
              <form name="projectform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/updateProjectDetails"?>">
                <?php
                if (isset($projectDetails[0]['id'])) {
                  foreach ($projectDetails as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                    <div id="project-sections">
                      <div class="project-section">
                        <div class="form-group">
                          <label for="projectname">Project Name</label>
                          <input type="text" class="form-control" id="projectname" name="projectname" value="<?php echo $value['projectName']; ?>">
                          <div id="projectname_error" class="error"></div>
                          <div class="form-group">
                            <label for="Duration of project">Duration of Project</label>
                            <input type="text" class="form-control" id="durationofproject" name="durationofproject"  value="<?php echo $value['projectDuration']; ?>">
                            <div id="durationofproject_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="role in the project">Role in the Project</label>
                            <input type="text" class="form-control" id="roleofproject" name="roleofproject"  value="<?php echo $value['roleInProject']; ?>">
                            <div id="roleofproject_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="">start date of project*</label>
                            <input type="date" class="form-control" id="startdate" name="startdate" value="<?php echo $value['startingDate']; ?>" >
                            <div id="startdate_error" class="error"></div>
                            <label for="">End date of the project*</label>
                            <input type="date" class="form-control" id="enddate" name="enddate" value="<?php echo $value['endingDate']; ?>" >
                            <div id="enddate_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="Responsibity">My responsibility in project*</label>
                            <input type="text" class="form-control" rows="3" class="form-control" id="responsibility" value="<?php echo $value['responsibilityInProject']; ?>" name="responsibility">
                            <div id="responsibility_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="Skills used in project">Skills used in project*</label>
                            <input type="text" class="form-control" id="skillsused" name="skillsused" value="<?php echo $value['skillsUsedInProject']; ?>">
                            <div id="skills_error" class="error"></div>
                          </div>
                          <!-- <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button> -->
                        </div>
                        <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>
                      <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <div id="project-sections">
                        <div class="project-section">
                          <div class="form-group">
                            <label for="projectname">Project Name</label>
                            <input type="text" class="form-control" id="projectname" name="projectname[]">
                            <div id="projectname_error" class="error"></div>
                            <div class="form-group">
                              <label for="Duration of project">Duration of Project</label>
                              <input type="text" class="form-control" id="durationofproject" name="durationofproject[]">
                              <div id="durationofproject_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="role in the project">Role in the Project</label>
                              <input type="text" class="form-control" id="roleofproject" name="roleofproject[]">
                              <div id="roleofproject_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="">start date of project*</label>
                              <input type="date" class="form-control" id="startdate" name="startdate[]">
                              <div id="startdate_error" class="error"></div>
                              <label for="">End date of the project*</label>
                              <input type="date" class="form-control" id="enddate" name="enddate[]">
                              <div id="enddate_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="Responsibity">My responsibility in project*</label>
                              <textarea class="form-control" rows="3" class="form-control" id="responsibility" name="responsibility[]"></textarea>
                              <div id="responsibility_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="Skills used in project">Skills used in project*</label>
                              <input type="text" class="form-control" id="skillsused" name="skillsused[]">
                              <div id="skills_error" class="error"></div>
                            </div>
                            <!-- <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button> -->
                          </div>
                          <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>
                        <?php
                      }
                        ?>
              </form>

              <script>
                var projectFormCount = 1;

                function validateForm() {
                  var projectname = document.getElementById("projectname");
                  var durationofproject = document.getElementById("durationofproject");
                  var startdate = document.getElementById("startdate");
                  var enddate = document.getElementById("enddate");
                  var responsibility = document.getElementById("responsibility");
                  var skillsused = document.getElementById("skillsused");
                  if (projectname.value === '') {
                    displayError('please enter a project name', 'projectname_error');
                    return false;
                  }
                  if (durationofproject.value === '') {
                    displayError('please enter a project duration', 'durationofproject_error');
                    return false;
                  }
                  if (roleofproject.value === '') {
                    displayError('please enter a role of project', 'roleofproject_error');
                  }
                  if (startdate.value === '') {
                    displayError('please select a start date', 'startdate_error');
                    return false;
                  }
                  if (enddate.value === '') {
                    displayError('please select a end date', 'enddate_error');
                    return false;
                  }
                  if (responsibilty.value === '') {
                    displayError('This Field is required!', 'responsibility_error');
                    return false;
                  }
                  if (skillsused.value === '') {
                    displayError('please enter a Skills used in the project', 'skillsused_error');
                    return false;
                  }
                  return true;
                }


                function addProjectSection() {
                  projectFormCount++;
                  var newProjectSection = document.createElement('div');
                  newProjectSection.className = 'project-section';

                  // Clone the original project section
                  var originalSection = document.querySelector('.project-section');
                  var clone = originalSection.cloneNode(true);

                  // Clear input values in the cloned section
                  var inputs = clone.querySelectorAll('input[type="text"], input[type="date"], textarea');
                  inputs.forEach(function(input) {
                    input.value = '';
                  });

                  // Append the cloned section to the project sections container
                  newProjectSection.appendChild(clone);
                  document.getElementById('project-sections').appendChild(newProjectSection);

                  // Move the "Submit" button to the end of the last added project section
                  var submitButton = document.getElementById('finalsubmit');
                  newProjectSection.appendChild(submitButton);

                  // Hide the "Add Project" button in the previous section
                  var addButton = document.querySelector('button[type="button"]');
                  addButton.style.display = 'none';
                }


                function clearErrorMessages() {
                  var errorElements = document.querySelectorAll('.error');
                  errorElements.forEach(function(errorElement) {
                    errorElement.textContent = '';
                  });
                }

                function displayError(message, elementId) {
                  var errorElement = document.getElementById(elementId);
                  errorElement.innerHTML = message;
                  errorElement.style.color = 'red';
                }
              </script>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

            <?php
          } elseif ($method == 'areaofinterest') {
            ?>


              <div class="container">
                <h3>Area of Interest Form</h3>
                <form method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/updateAreaOfInterest"?>">

                <?php
                if (isset($areaofinterest[0]['id'])) {
                  foreach ($areaofinterest as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                  <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <div id="educationFormsContainer">
                    <div class="education-form-container">
                      <div class="form-group">
                        <label for="category">Category *</label>
                        <select class="form-control" id="category" name="category" value="<?php echo $value['other_interst_category']; ?>"  onchange="toggleCategoryFields()">
                          <option value="">Select a category</option>
                          <option value="architech">Architech</option>
                        <option value="Developer">Developer</option>
                        <option value="tester">Tester</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="datascience">Data Scientist</option>
                        <option value="databaseadmin">Database Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="professor">Professor</option>
                          <!-- <option value="others">Others</option> -->
                        </select>
                      </div>
                      <div class="form-group"">
                <label for=" subcategory">Subcategory *</label>
                        <select class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['other_sub_interst_category']; ?>" >
                          <option value="">Select a sub category </option>
                        </select>
                      </div>
                      <div class="form-group" id="otherCategoryFields" style="display: none;">
                        <label for="customCategoryInput">Custom Category</label>
                        <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                        <label for="customSubcategoryInput">Custom Subcategory</label>
                        <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                      </div>
                      <div class="form-group" id="customCategory" style="display: none;">
                        <label for="customCategoryInput">Category Name</label>
                        <input type="text" class="form-control" id="customCategoryInput"  name="customCategoryInput">
                      </div>

                      <div class="form-group" id="customSubcategory" style="display: none;">
                        <label for="customSubcategoryInput"> Subcategory Name</label>
                        <input type="text" class="form-control" id="customSubcategoryInput"  name="customSubcategoryInput">
                      </div>

                      <div class="form-group">
                        <label for="preferred-location">Preferred Location to work</label>
                        <input type="text" class="form-control" id="preferred-location"  name="preferred-location" value="<?php echo $value['prefered_location']; ?>">

                        <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
                      </div>
                      <div class="form-group">
                        <label for="experience">Experience</label>
                        <input type="text" class="form-control" id="experience"  name="experience" value="<?php echo $value['experience']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" id="description" name="description" value="<?php echo $value['description']; ?>" rows="3">
                      </div>
                      <div class="form-group">
                        <label for="jobtype">Job Type</label>
                        <select class="form-control" id="jobtype" name="jobtype" value="<?php echo $value['job_type']; ?>">
                          <option value="">Select a job type</option>
                          <option value="parttime">Part Time</option>
                          <option value="fulltime">Full Time</option>
                          <option value="both">Both</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="expected-salary">Expected Salary</label>
                        <input type="text" class="form-control" id="expected-salary" name="expected-salary" value="<?php echo $value['expected_salary']; ?>">
                      </div>
                      <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                       <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                         <div id="educationFormsContainer">
                    <div class="education-form-container">
                      <div class="form-group">
                        <label for="category">Category *</label>
                        <select class="form-control" id="category" name="category" onchange="toggleCategoryFields()">
                          <option value="">Select a category</option>
                         <option value="architech">Architech</option>
                        <option value="Developer">Developer</option>
                        <option value="tester">Tester</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="datascience">Data Scientist</option>
                        <option value="databaseadmin">Database Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="professor">Professor</option>
                          <!-- <option value="others">Others</option> -->
                        </select>
                      </div>
                      <div class="form-group"">
                <label for=" subcategory">Subcategory *</label>
                        <select class="form-control" id="subcategory" name="subcategory" >
                          <option value="">Select a sub category </option>
                        </select>
                      </div>
                      <div class="form-group" id="otherCategoryFields" style="display: none;">
                        <label for="customCategoryInput">Custom Category</label>
                        <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                        <label for="customSubcategoryInput">Custom Subcategory</label>
                        <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                      </div>
                      <div class="form-group" id="customCategory" style="display: none;">
                        <label for="customCategoryInput">Category Name</label>
                        <input type="text" class="form-control" id="customCategoryInput"  name="customCategoryInput">
                      </div>

                      <div class="form-group" id="customSubcategory" style="display: none;">
                        <label for="customSubcategoryInput"> Subcategory Name</label>
                        <input type="text" class="form-control" id="customSubcategoryInput"  name="customSubcategoryInput">
                      </div>

                      <div class="form-group">
                        <label for="preferred-location">Preferred Location to work</label>
                        <input type="text" class="form-control" id="preferred-location" " name="preferred-location">

                        <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
                      </div>
                      <div class="form-group">
                        <label for="experience">Experience</label>
                        <input type="text" class="form-control" id="experience"  name="experience">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"  rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="jobtype">Job Type</label>
                        <select class="form-control" id="jobtype" name="jobtype">
                          <option value="">Select a job type</option>
                          <option value="parttime">Part Time</option>
                          <option value="fulltime">Full Time</option>
                          <option value="both">Both</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="expected-salary">Expected Salary</label>
                        <input type="text" class="form-control" id="expected-salary" name="expected-salary">
                      </div>
                      <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?php
                  }
                  ?>
                </form>
              </div>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
              <script>
                var educationFormCount = 1;



                function addEducationForm(button) {
                  educationFormCount++;
                  var newEducationFormContainer = document.createElement('div');
                  newEducationFormContainer.className = 'education-form-container';

                  // Clone the original form
                  var originalForm = document.querySelector('.education-form-container');
                  var newForm = originalForm.cloneNode(true);
                  newForm.id = 'educationform_' + educationFormCount;

                  // Clear the values in the new form
                  clearFormFields(newForm);

                  // Append the new form to the container
                  newEducationFormContainer.appendChild(newForm);
                  document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                  // Move the "Submit" button to the new form
                  var submitButton = document.querySelector('button[type="submit"]');
                  newForm.appendChild(submitButton);

                  // Hide the "Add" button in the previous form
                  button.style.display = "none";
                }

                function clearFormFields(form) {
                  var fieldsToClear = form.querySelectorAll('input, select');
                  for (var i = 0; i < fieldsToClear.length; i++) {
                    fieldsToClear[i].value = '';
                  }
                }

                function toggleCategoryFields() {
                  var category = document.getElementById("category").value;
                  var subcategorySelect = document.getElementById("subcategory");
                  var otherCategoryFields = document.getElementById("otherCategoryFields");

                  // Clear existing options and hide the otherCategoryFields
                  subcategorySelect.innerHTML = "";
                  otherCategoryFields.style.display = "none";

                  if (category === "architech") {
                    // addSubcategoryOption("Architect", subcategorySelect);
                    addSubcategoryOption("Senior", subcategorySelect);
                    addSubcategoryOption("Design", subcategorySelect);
                    addSubcategoryOption("Project", subcategorySelect);
                    addSubcategoryOption("Principal", subcategorySelect);
                    addSubcategoryOption("Landscape", subcategorySelect);
                    addSubcategoryOption("Urban Planner", subcategorySelect);
                    addSubcategoryOption("Interior Designer", subcategorySelect);
                    addSubcategoryOption("Architectural Technologist", subcategorySelect);
                    addSubcategoryOption("BIM (Building Information Modeling) Specialist", subcategorySelect);
                    addSubcategoryOption("Sustainable Design Consultant", subcategorySelect);
                    addSubcategoryOption("Architectural Drafter", subcategorySelect);
                    addSubcategoryOption("Architectural Visualization Artist", subcategorySelect);
                    addSubcategoryOption("Urban Designer", subcategorySelect);
                    addSubcategoryOption("Historic Preservation", subcategorySelect);
                    addSubcategoryOption("Residential Architect", subcategorySelect);
                    addSubcategoryOption("CAD (Computer-Aided Design) Technician", subcategorySelect);
                    addSubcategoryOption("Architectural Educator", subcategorySelect);
                    addSubcategoryOption("Construction Project Manage", subcategorySelect);
                    addSubcategoryOption("Industrial Designer", subcategorySelect);
                    addSubcategoryOption("Healthcare Facility Planner", subcategorySelect);
                    addSubcategoryOption("Retail Space Designer", subcategorySelect);
                  } else if (category === "Developer") {
                    addSubcategoryOption("Python Software Engineer", subcategorySelect);
                    addSubcategoryOption("Python", subcategorySelect);
                    addSubcategoryOption("Python Data Scientist", subcategorySelect);
                    addSubcategoryOption("Python Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Python Automation", subcategorySelect);
                    addSubcategoryOption("Java Software Engineer", subcategorySelect);
                    addSubcategoryOption("Java", subcategorySelect);
                    addSubcategoryOption("Java Full Stack ", subcategorySelect);
                    addSubcategoryOption("Java Android", subcategorySelect);
                    addSubcategoryOption("Java Spring ", subcategorySelect);
                    addSubcategoryOption("Java Microservices", subcategorySelect);
                    addSubcategoryOption("JavaScript Software Engineer", subcategorySelect);
                    addSubcategoryOption("Front-end", subcategorySelect);
                    addSubcategoryOption("Node.js", subcategorySelect);
                    addSubcategoryOption("React", subcategorySelect);
                    addSubcategoryOption("Angular", subcategorySelect);
                    addSubcategoryOption("Vue.js ", subcategorySelect);
                    addSubcategoryOption("Full Stack JavaScript ", subcategorySelect);
                    addSubcategoryOption("C# Software Engineer", subcategorySelect);
                    addSubcategoryOption(".NET", subcategorySelect);
                    addSubcategoryOption("ASP.NET", subcategorySelect);
                    addSubcategoryOption("Unity", subcategorySelect);
                    addSubcategoryOption("Xamarin", subcategorySelect);
                    addSubcategoryOption("C++ Software Engineerse", subcategorySelect);
                    addSubcategoryOption("Game  (using C++)", subcategorySelect);
                    addSubcategoryOption("C++ Systems", subcategorySelect);
                    addSubcategoryOption("PHP Software Engineer", subcategorySelect);
                    addSubcategoryOption("PHP Web", subcategorySelect);
                    addSubcategoryOption("WordPress", subcategorySelect);
                    addSubcategoryOption("Laravel", subcategorySelect);
                    addSubcategoryOption("Symfony", subcategorySelect);
                    addSubcategoryOption("Ruby Software Engineer", subcategorySelect);
                    addSubcategoryOption("Ruby on Rails ", subcategorySelect);
                    addSubcategoryOption("Swift Software Engineer", subcategorySelect);
                    addSubcategoryOption("iOS  (using Swift)", subcategorySelect);
                    addSubcategoryOption("macOS  (using Swift)", subcategorySelect);
                    addSubcategoryOption("Kotlin Software Engineer", subcategorySelect);
                    addSubcategoryOption("Android  (using Kotlin)", subcategorySelect);
                    addSubcategoryOption("Go Software Engineer", subcategorySelect);
                    addSubcategoryOption("Rust Software Engineer", subcategorySelect);
                    addSubcategoryOption("Systems  (using Rust", subcategorySelect);
                     addSubcategoryOption("TypeScript Software Engineer", subcategorySelect);
                     addSubcategoryOption("Front-end  (using TypeScript)", subcategorySelect);
                     addSubcategoryOption("SQL", subcategorySelect);
                     addSubcategoryOption("Database", subcategorySelect);
                     addSubcategoryOption("Scala Software Engineer", subcategorySelect);
                     addSubcategoryOption("Haskell Software Engineer", subcategorySelect);
                     addSubcategoryOption("Perl Software Engineer ", subcategorySelect);
                     addSubcategoryOption("Lua Software Engineer", subcategorySelect);
                     addSubcategoryOption("Game  (using Lua) ", subcategorySelect);
                     addSubcategoryOption("MATLAB Software Enginee ", subcategorySelect);
                     addSubcategoryOption("Data Analyst (using MATLAB) ", subcategorySelect);
                     
                  } else if (category === "tester") {
                    addSubcategoryOption("Software", subcategorySelect);
                    addSubcategoryOption("Test Engineer", subcategorySelect);
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)", subcategorySelect);
                    addSubcategoryOption("Test Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Manual", subcategorySelect);
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)", subcategorySelect);
                    addSubcategoryOption("Test Manager", subcategorySelect);
                    addSubcategoryOption("Performance", subcategorySelect);
                    addSubcategoryOption("Usability", subcategorySelect);
                    addSubcategoryOption("Regression", subcategorySelect);
                    addSubcategoryOption("User Acceptance ", subcategorySelect);
                    addSubcategoryOption("Security", subcategorySelect);
                    addSubcategoryOption("Mobile App ", subcategorySelect);
                    addSubcategoryOption("Game", subcategorySelect);
                    addSubcategoryOption("Functional", subcategorySelect);
                    addSubcategoryOption("Test Architect", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Continuous Integration", subcategorySelect);
                    addSubcategoryOption("Load", subcategorySelect);
                    addSubcategoryOption("Test Designer", subcategorySelect);
                    addSubcategoryOption("Test Technician", subcategorySelect);
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Compliance", subcategorySelect);
                    // addSubcategoryOption("Load", subcategorySelect);
                    otherCategoryFields.style.display = "block";
                  } 
                  else if (category === "uiux") {
                    addSubcategoryOption("UI/UX Designer", subcategorySelect);
                    addSubcategoryOption("User Experience Designer", subcategorySelect);
                    addSubcategoryOption("User Interface Designer", subcategorySelect);
                    addSubcategoryOption("Interaction Designer", subcategorySelect);
                    addSubcategoryOption("Visual Designer", subcategorySelect);
                    addSubcategoryOption("UX Researcher", subcategorySelect);
                    addSubcategoryOption("UI/UX Architect", subcategorySelect);
                    addSubcategoryOption("Information Architect", subcategorySelect);
                    addSubcategoryOption("UX Strategist", subcategorySelect);
                    addSubcategoryOption("Product Designer", subcategorySelect);
                    addSubcategoryOption("User-Centered Design Specialist", subcategorySelect);
                    addSubcategoryOption("Usability Analyst", subcategorySelect);
                    addSubcategoryOption("UI/UX Developer", subcategorySelect);
                    addSubcategoryOption("Mobile App Designer", subcategorySelect);
                    addSubcategoryOption("Web Designer", subcategorySelect);
                    addSubcategoryOption("Visual Experience Designer", subcategorySelect);
                    addSubcategoryOption("UX Content Strategist", subcategorySelect);
                    addSubcategoryOption("Interaction Architect", subcategorySelect);
                    addSubcategoryOption("UX/UI Illustrator", subcategorySelect);
                    addSubcategoryOption("User Interface Animator", subcategorySelect);
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist", subcategorySelect);
                    addSubcategoryOption("Accessibility Designer ", subcategorySelect);
                    addSubcategoryOption("Prototype Designer", subcategorySelect);
                    addSubcategoryOption("UI/UX Lead ", subcategorySelect);
                    addSubcategoryOption("Design Systems Manager", subcategorySelect);
                    // addSubcategoryOption("Software", subcategorySelect);
                    
                  } else if (category === "datascience") {
                    addSubcategoryOption("Data Scientist", subcategorySelect);
                    addSubcategoryOption("Senior Data Scientist", subcategorySelect);
                    addSubcategoryOption("Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Data Analyst", subcategorySelect);
                    addSubcategoryOption("Senior Data Analyst", subcategorySelect);
                    addSubcategoryOption("Statistician", subcategorySelect);
                    addSubcategoryOption("Business Intelligence Analyst", subcategorySelect);
                    addSubcategoryOption("Quantitative Analyst (Quant)", subcategorySelect);
                    addSubcategoryOption("Data Engineer", subcategorySelect);
                    addSubcategoryOption("Data Architect", subcategorySelect);
                    addSubcategoryOption("AI Research", subcategorySelect);
                    addSubcategoryOption("Predictive Modeler", subcategorySelect);
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer", subcategorySelect);
                    addSubcategoryOption("Computer Vision Engineer", subcategorySelect);
                    addSubcategoryOption("Big Data Engineer", subcategorySelect);
                    addSubcategoryOption("Analytics Manager", subcategorySelect);
                    addSubcategoryOption("Data Science Manager", subcategorySelect);
                    addSubcategoryOption("Chief Data Officer (CDO)", subcategorySelect);
                    addSubcategoryOption("Research Scientist (AI/ML)", subcategorySelect);
                    addSubcategoryOption("Decision Scientist", subcategorySelect);
                    addSubcategoryOption("Marketing Analyst", subcategorySelect);
                    addSubcategoryOption("Operations Research Analyst", subcategorySelect);
                    addSubcategoryOption("Data Visualization Specialist", subcategorySelect);
                    addSubcategoryOption("Customer Insights Analyst", subcategorySelect);
                    addSubcategoryOption("Fraud Analyst", subcategorySelect);
                  
                  }else if (category === "databaseadmin") {
                    addSubcategoryOption("Database (DBA)", subcategorySelect);
                    addSubcategoryOption("Senior", subcategorySelect);
                    addSubcategoryOption("Database Engineer", subcategorySelect);
                    addSubcategoryOption("Database Architect", subcategorySelect);
                    addSubcategoryOption("Database Analyst", subcategorySelect);
                    addSubcategoryOption("Data Warehouse", subcategorySelect);
                    addSubcategoryOption("SQL Server ", subcategorySelect);
                    addSubcategoryOption("Oracle Database ", subcategorySelect);
                    addSubcategoryOption("MySQL Database", subcategorySelect);
                    addSubcategoryOption("PostgreSQL Database", subcategorySelect);
                    addSubcategoryOption("MongoDB", subcategorySelect);
                    addSubcategoryOption("NoSQL", subcategorySelect);
                    addSubcategoryOption("DBMS  (Database Management System)", subcategorySelect);
                    addSubcategoryOption("Database Operations Manager", subcategorySelect);
                    addSubcategoryOption("Database Performance Tuning Specialist", subcategorySelect);
                    addSubcategoryOption("Data Migration Specialist", subcategorySelect);
                    addSubcategoryOption("Database Security ", subcategorySelect);
                    addSubcategoryOption("Database Backup and Recovery Specialist", subcategorySelect);
                    addSubcategoryOption("Cloud   (e.g., AWS, Azure, Google Cloud)", subcategorySelect);
                    addSubcategoryOption("Database Compliance Officer", subcategorySelect);
                    addSubcategoryOption("Database DevOps Engineer", subcategorySelect);
                    addSubcategoryOption("Database Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Database Replication Specialist", subcategorySelect);
                    addSubcategoryOption("Data Governance Manager", subcategorySelect);
                    addSubcategoryOption("Data Steward", subcategorySelect);
                    // addSubcategoryOption("", subcategorySelect);
                    // addSubcategoryOption("", subcategorySelect);
                  }
                  else if (category === "teacher") {
                    addSubcategoryOption("Tamil", subcategorySelect);
                    addSubcategoryOption("Mathematics", subcategorySelect);
                    addSubcategoryOption("Math Instructor", subcategorySelect);
                    addSubcategoryOption("Algebra", subcategorySelect);
                    addSubcategoryOption("Geometry", subcategorySelect);
                    addSubcategoryOption("Calculus", subcategorySelect);
                    addSubcategoryOption("Statistics", subcategorySelect);
                    addSubcategoryOption("Math Tutor", subcategorySelect);
                    addSubcategoryOption("Math Coach", subcategorySelect);
                    addSubcategoryOption("Math Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Math Department Chair", subcategorySelect);
                    addSubcategoryOption("English", subcategorySelect);
                    addSubcategoryOption("Language Arts ", subcategorySelect);
                    addSubcategoryOption("Literature", subcategorySelect);
                    addSubcategoryOption("Writing Instructor", subcategorySelect);
                    addSubcategoryOption("Creative Writing", subcategorySelect);
                    addSubcategoryOption("English as a Second Language (ESL) ", subcategorySelect);
                    addSubcategoryOption("Reading Specialist", subcategorySelect);
                    addSubcategoryOption("English Tutor", subcategorySelect);
                    addSubcategoryOption("English Department Chair", subcategorySelect);
                    addSubcategoryOption("Science", subcategorySelect);
                    addSubcategoryOption("Biology", subcategorySelect);
                    addSubcategoryOption("Chemistry", subcategorySelect);
                    addSubcategoryOption("Physics", subcategorySelect);
                    addSubcategoryOption("Environmental Science ", subcategorySelect);
                    addSubcategoryOption("Earth Science ", subcategorySelect);
                    addSubcategoryOption("Anatomy and Physiology ", subcategorySelect);
                    addSubcategoryOption("Science Lab Instructor", subcategorySelect);
                    addSubcategoryOption("Science Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Social Studies ", subcategorySelect);
                    addSubcategoryOption("History", subcategorySelect);
                    addSubcategoryOption("Geography", subcategorySelect);
                    addSubcategoryOption("Civics", subcategorySelect);
                    addSubcategoryOption("Government", subcategorySelect);
                    addSubcategoryOption("Economics", subcategorySelect);
                    addSubcategoryOption("World History ", subcategorySelect);
                    addSubcategoryOption("Social Studies Department Chair", subcategorySelect);
                    addSubcategoryOption("Foreign Language", subcategorySelect);
                    addSubcategoryOption("Language Instructor", subcategorySelect);
                    addSubcategoryOption("Spanish", subcategorySelect);
                    addSubcategoryOption("French", subcategorySelect);
                    addSubcategoryOption("German", subcategorySelect);
                    addSubcategoryOption("Chinese", subcategorySelect);
                    addSubcategoryOption("Language Lab Coordinator", subcategorySelect);
                    addSubcategoryOption("Physical Education ", subcategorySelect);
                    addSubcategoryOption("PE Instructor", subcategorySelect);
                    addSubcategoryOption("Fitness Coach", subcategorySelect);
                    addSubcategoryOption("Health Education ", subcategorySelect);
                    addSubcategoryOption("Sports Coach", subcategorySelect);
                    addSubcategoryOption("Physical Education Department Chair", subcategorySelect);
                    addSubcategoryOption("Art", subcategorySelect);
                    addSubcategoryOption("Music", subcategorySelect);
                    addSubcategoryOption("Drama", subcategorySelect);
                    addSubcategoryOption("Visual Arts ", subcategorySelect);
                    addSubcategoryOption("Choir Director", subcategorySelect);
                    addSubcategoryOption("Band", subcategorySelect);
                    addSubcategoryOption("Art History ", subcategorySelect);
                    addSubcategoryOption("Special Education ", subcategorySelect);
                    addSubcategoryOption("Learning Support ", subcategorySelect);
                    addSubcategoryOption("Resource", subcategorySelect);
                    addSubcategoryOption("Inclusion", subcategorySelect);
                    addSubcategoryOption("Autism Specialist", subcategorySelect);
                    addSubcategoryOption("Behavioral Interventionist", subcategorySelect);
                    addSubcategoryOption("Vocational", subcategorySelect);
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor", subcategorySelect);
                    addSubcategoryOption("Culinary Arts Instructor", subcategorySelect);
                    addSubcategoryOption("Automotive Technology Teacher", subcategorySelect);
                    addSubcategoryOption("Computer Science ", subcategorySelect);
                    addSubcategoryOption("Digital Media Instructor", subcategorySelect);
            
                  }
                  else if (category === "professor") {
                    addSubcategoryOption("University", subcategorySelect);
                    addSubcategoryOption("Assistant", subcategorySelect);
                    addSubcategoryOption("Associate", subcategorySelect);
                    addSubcategoryOption("Distinguished", subcategorySelect);
                    addSubcategoryOption("Adjunct", subcategorySelect);
                    addSubcategoryOption("Visiting", subcategorySelect);
                    addSubcategoryOption("Research", subcategorySelect);
                    addSubcategoryOption("Clinical", subcategorySelect);
                    addSubcategoryOption("Philosophy", subcategorySelect);
                    addSubcategoryOption("Professor of History", subcategorySelect);
                    addSubcategoryOption("English", subcategorySelect);
                    addSubcategoryOption("Psychology", subcategorySelect);
                    addSubcategoryOption("Sociology", subcategorySelect);
                    addSubcategoryOption("Political Science", subcategorySelect);
                    addSubcategoryOption("Anthropology", subcategorySelect);
                    addSubcategoryOption("Linguistics", subcategorySelect);
                    addSubcategoryOption("Biology", subcategorySelect);
                    addSubcategoryOption("Chemistry", subcategorySelect);
                    addSubcategoryOption("Physics", subcategorySelect);
                    addSubcategoryOption("Mathematics", subcategorySelect);
                    addSubcategoryOption("Geology", subcategorySelect);
                    addSubcategoryOption("Astronomy", subcategorySelect);
                    addSubcategoryOption("Environmental Science", subcategorySelect);
                    addSubcategoryOption("Computer Science", subcategorySelect);
                    addSubcategoryOption("Electrical Engineering", subcategorySelect);
                    addSubcategoryOption("Mechanical Engineering", subcategorySelect);
                    addSubcategoryOption("Civil Engineering", subcategorySelect);
                    addSubcategoryOption("Chemical Engineering", subcategorySelect);
                    addSubcategoryOption("Information Technology", subcategorySelect);
                    addSubcategoryOption("Business Administration", subcategorySelect);
                    addSubcategoryOption("Economics", subcategorySelect);
                    addSubcategoryOption("Finance", subcategorySelect);
                    addSubcategoryOption("Marketing", subcategorySelect);
                    addSubcategoryOption("Management", subcategorySelect);
                    addSubcategoryOption("Accounting", subcategorySelect);
                    addSubcategoryOption("Fine Arts", subcategorySelect);
                    addSubcategoryOption("Music", subcategorySelect);
                    addSubcategoryOption("Visual Arts", subcategorySelect);
                    addSubcategoryOption("Theater", subcategorySelect);
                    addSubcategoryOption("Dance", subcategorySelect);
                    addSubcategoryOption("Film Studies", subcategorySelect);
                    addSubcategoryOption("Educational Psychology", subcategorySelect);
                    addSubcategoryOption("Medicine", subcategorySelect);
                    addSubcategoryOption("Nursing", subcategorySelect);
                    addSubcategoryOption("Public Health", subcategorySelect);
                    addSubcategoryOption("Pharmacy", subcategorySelect);
                    addSubcategoryOption("Dentistry", subcategorySelect);
                    addSubcategoryOption("Law", subcategorySelect);
                     addSubcategoryOption("Constitutional Law", subcategorySelect);
                     addSubcategoryOption("International Law", subcategorySelect);
                     addSubcategoryOption("Environmental Law", subcategorySelect);
                     addSubcategoryOption("Social Work", subcategorySelect);
                     addSubcategoryOption("Social Welfare", subcategorySelect);
                     addSubcategoryOption("Clinical Social Work", subcategorySelect);
                     addSubcategoryOption("Library Science", subcategorySelect);
                     addSubcategoryOption("Information Studies", subcategorySelect);
                     
                  }
                  else {
                    // Handle other categories here
                    addSubcategoryOption("Other Subcategory", subcategorySelect);
                  }
                }


                function validateForm() {
                  var category = document.getElementById("category").value;
                  var subcategory = document.getElementById("subcategory").value;
                  var preferredLocation = document.getElementById("preferred-location").value;
                  var jobtype = document.getElementById("jobtype").value;
                  var experience = document.getElementById("experience").value;
                  var description = document.getElementById("description").value;

                  if (category === "") {
                    alert("Please select a category.");
                    return false;
                  }

                  if (subcategory === "" && category !== "") {
                    alert("Please select a subcategory.");
                    return false;
                  }
                  if (preferredLocation.trim() === "") {
                    alert("Please provide a preferred location.");
                    return false;
                  }

                  if (experience.trim() === "") {
                    alert("Please provide your experience.");
                    return false;
                  }

                  if (jobtype.trim() === "") {
                    alert("Please select your job type.");
                    return false;
                  }


                  if (description.trim() === "") {
                    alert("Please provide a description.");
                    return false;
                  }

                  return true;
                }
                // Function to update the subcategories based on the selected category

                // Helper function to add a subcategory option to the select element
                function addSubcategoryOption(value, selectElement) {
                  var option = document.createElement("option");
                  option.value = value.toLowerCase();
                  option.text = value;
                  selectElement.appendChild(option);
                }
              </script>

            <?php
          } elseif ($method == 'skills') {
            ?>
              <div class="container">

                <h3>Skill Form</h3>
                <form id="skillForm" method="post" action="<?php echo baseUrl . "seekerController/updateskills"?>">
                <?php
                if (isset($skills[0]['id'])) {
                  foreach ($skills as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                 <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <div class="skill-entry">
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <br><label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" id="skillname" value="<?php echo $value['skill']; ?>" name="skillname" required>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="experience">Experience</label>
                        <select class="form-control" name="experience" value="<?php echo $value['experience']; ?>" id="experience" required><br>
                          <option value="fresher">Fresher</option>
                          <option value="0-2">0-2 years</option>
                          <option value="2-5">2-5 years</option>
                          <option value="5-10">5-10 years</option>
                          <option value="10-20">10-20 years</option>
                          <option value="20-above">20 years above</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel" value="<?php echo $value['skill_level']; ?>" id="skilllevel" required>
                          <option value="beginner">Beginner</option>
                          <option value="intermediate">Intermediate</option>
                          <option value="advanced">Advanced</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- <br><button class="btn" type="button" id="addSkillBtn">Add Skill</button> -->
                  <button class="btn" id="addskillsubmit" type="submit">Submit</button>
                  <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                       <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                               <div class="skill-entry">
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <br><label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" id="skillname" name="skillname[]" required>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="experience">Experience</label>
                        <select class="form-control" name="experience[]" id="experience" required><br>
                          <option value="fresher">Fresher</option>
                          <option value="0-2">0-2 years</option>
                          <option value="2-5">2-5 years</option>
                          <option value="5-10">5-10 years</option>
                          <option value="10-20">10-20 years</option>
                          <option value="20-above">20 years above</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel[]" id="skilllevel" required>
                          <option value="beginner">Beginner</option>
                          <option value="intermediate">Intermediate</option>
                          <option value="advanced">Advanced</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- <br><button class="btn" type="button" id="addSkillBtn">Add Skill</button> -->
                  <button class="btn" id="addskillsubmit" type="submit">Submit</button>
                  <?php
                  }
                  ?>
                </form>

                <ul id="addedSkills"></ul>
              </div>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

              <script>
                $(document).ready(function() {
                  $("#addSkillBtn").click(function() {
                    const clonedField = $(".skill-entry").first().clone();
                    $("#skillForm").append(clonedField);
                  });

                  $("#skillForm").submit(function() {
                    const skillDetails = [];

                    $(".skill-entry").each(function() {
                      const skillName = $(this).find('input[name="skillname[]"]').val();
                      const experience = $(this).find('select[name="experience[]"]').val();
                      const skillLevel = $(this).find('select[name="skilllevel[]"]').val();
                      skillDetails.push(`${skillName} - Experience: ${experience}, Skill Level: ${skillLevel}`);
                    });

                    $("#addedSkills").empty();
                    skillDetails.forEach(skill => {
                      $("#addedSkills").append(`<li>${skill}</li>`);
                    });
                  });
                });
              </script>

            <?php
          } else if ($method == 'resume') {
            ?>
              <div class="container">
                <h2>Upload resume</h2>
                <form id="resumeForm" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/resume"?>">

                  <div class="form-group">
                    <label for="resumeFile">Upload Resume</label>
                      <input type="file" name="userfile" accept=".pdf,.doc,.docx">
                    </div>
                    <!-- <input type="file" name="userfile"> -->
                   <input type="submit" value="Upload">
                  <!-- <button class="btn btn-primary" type="submit">Upload</button> -->
                </form>
              </div>
              <script>
                reusme = document.getElementById('resumeFile');

                function validateForm() {
                  if (resume.value === '') {
                    alert('please choose a resume!');
                  }
                }
              </script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <?php
          }
            ?>
      </main>
    </div>
  </div>
</body>

</html>