<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
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
  margin-left:500px;
   
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  margin-left:-90px;
  color:navy;
}


.form-group {
  margin-bottom: 20px;
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
  width:100%;
  margin-right:10px;
  
}

.form-control-file {
  border: 1px solid #ccc;
  padding: 10px;
}

.btn-primary {
  background-color: #4285f4;
  border: none;
}

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

.nav-link:hover {
    background-color: #007bff;
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
    color:white;
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
}

nav ul li a:hover {
    background-color: #007bff;
}

.logo{
  margin-top:50px;
}

.main {
    margin-top: 70px; 
    padding: 20px;
}


.nav-item.active .nav-link {
    background-color: #FF4500;
}

.nav-item h3 {
    margin: 0;
    padding: 10px 20px;
    color: white;
}


  
  </style> 
</head> 
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
<header>
<div class="logo">
            <img src="arramjobslogo.png" alt="Arram Jobs Logo">
        </div>
    <h2> Arram jobs</h2>
    <nav>
        <ul>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#job-seekers">Seekers</a></li>
            <li><a href="#job-providers">Providers</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#login">Login</a></li>
        </ul>
    </nav>
</header>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="position-sticky">
           
          <ul class="nav flex-column">
          <br>
            
            <li class="nav-item">
                <h3>Create Profile</h3>
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="basicDetails">
              Basic Details
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="educationalDetails">
              Education Details
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="experienceDetails">
              Experience Details
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="projectDetails">
              project Details
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="areaOfInterest">
              Area Of Interest
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="skills">
              Skills
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="resume">
              Upload Resume
              </a>
            </li>
          </ul>
        </div>
      </nav>
     <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      
<?php
 if ($method == 'basic details') {
?>
  <div class="container" id="page1">
     
    <h1>Personal Details</h1>
     <form name="applicationform" method="post" onsubmit="return validateFormPage()" action='basicDetails'>
     <?php
      foreach ($seekerDetail as $key => $value)
      {
        ?>
     <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">
    <div class="form-group">
        <label for="Name">Name *</label>
        <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name" placeholder="Enter your name" required>
        <div id="Name_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="emailid">Email *</label><br>
        <input type="text" class="form-control" id="email" value="<?php echo $value['email'];?>" name="email" placeholder="Enter your email"  required>
        <div id="emailid_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number *</label>
        <input type="tel" class="form-control" id="phonenumber" value=<?php echo $value['phonenumber'];?> name="phonenumber" placeholder="Enter your phonenumber" value="<?= isset($updateData['phonenumber']) ? $updateData['phonenumber'] : ''; ?>" required>
        <div id="phonenumber_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth *</label>
        <input type="date" class="form-control" id="dateofbirth" value=<?php echo $value['dateofbirth'];?> name="dateofbirth"  required>
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
<h2> Address </h2>
      <div class="form-group">
        <label for="Door no">Door no/building name </label>
        <input type="text" class="form-control" id="doorno" value="<?php echo $value['doorno'];?>" name="doorno">
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
        <input type="text" class="form-control" id="district"  name="district" value="Erode" disabled>
        <div id="district_error" class="error"></div>
      </div>
      <div class="form-group">
    <label for="maritalstatus">Marital Status*</label>
    <select class="form-control" id="maritalstatus"value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>" name="maritalstatus">
        <option value="">Select your marital status</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
    </select>
    <div id="maritalstatus_error" class="error"></div>
</div>
<h1>Identification Details</h1>
<div class="form-group">
        <label for="aadharfrontphoto">Aadhar front photo </label>
        <input type="file" class="form-control" id="aadharfrontphoto" value="<?php echo isset($value['aadhar_front']) ? $value['aadhar_front'] : ''; ?>"   name="aadharfrontphoto">
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
      <button type="submit" name="submitBtn" class="btn btn-primary" >submit</button>
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
  var gender=document.getElementById('gender').value;
  var doorno = document.getElementById('doorno').value;
  var streetaddress = document.getElementById('streetaddress').value;
  var landmark = document.getElementById('landmark').value;
  var pincode = document.getElementById('pincode').value;
  var maritalstatus=document.getElementById('maritalstatus').value;
  var aadharFrontPhoto = document.getElementById('aadharfrontphoto').value;
  var aadharBackPhoto = document.getElementById('aadharbackphoto').value;
  var photo = document.getElementById('photo').value;
  var nameRegex = /^[A-Za-z\s]/;
  clearErrorMessages();
   
   if (Name.trim() === '') {
         displayError('Name is required.', 'Name_error');
         return false;
       } 
       else if (!nameRegex.test(Name)) {
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
   if(gender.trim()===''){
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
   if(maritalstatus.trim()===''){
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
  errorElements.forEach(function (errorElement) {
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
 } elseif ($method == 'education') {
    ?>
  <div class="container">    
<h1>Education Form</h1>
<div id="educationFormsContainer">
<div class="education-form-container">
    <form name="educationform" method="post" onsubmit="return validateForm()" action="educationalDetails" >
        <div class="form-group">
            <label for="qualification">Educational Qualification*</label>
            <select class="form-control" id="qualification" name="qualification[]" onchange="toggleFields()">
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
            <select class="form-control" id="department"  name="department[]">
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
            <input type="text" class="form-control" id="school"  name="school[]">
            <div id="school_error" class="error"></div>
        </div>
        <div class="form-group" id="percentage-group" style="display: none;">
            <label for="percentage">Percentage</label>
            <input type="number" class="form-control" id="percentage"  name="percentage[]">
            <div id="percentage_error" class="error"></div>
        </div>
        <div class="form-group" id="year-group" style="display: none;">
            <label for="year_passed">Year of Passed Out</label>
            <input type="number" class="form-control" id="year_passed" name="year_passed[]">
            <div id="year_error" class="error"></div>
        </div>
        <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
 } elseif ($method == 'experience') {
 ?>

<div class="container">

<?php
foreach ($seekerDetail as $key => $value) {
?>
  <h1>Experience Details Form</h1>
  <form name="experienceform" method="post" onsubmit="return validateexpForm()" action="experienceDetails">
  <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">

    <div class="form-group">
  <label for="category">Category:</label>
  <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
    <option value="">Select a Category</option>
    <option value="it" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'it' ? 'selected' : ''; ?>>Information Technology</option>
    <option value="education" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'education' ? 'selected' : ''; ?>>Education</option>
    <option value="civil" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'civil' ? 'selected' : ''; ?>>Civil</option>
    <option value="healthcare" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'healthcare' ? 'selected' : ''; ?>>Healthcare</option>
    <option value="sales and marketing" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'sales and marketing' ? 'selected' : ''; ?>>Sales and Marketing</option>
    <option value="finance" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'finance' ? 'selected' : ''; ?>>Finance</option>
    <option value="textile" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'textile' ? 'selected' : ''; ?>>Textile</option>
    <option value="sports" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'sports' ? 'selected' : ''; ?>>Sports</option>
    <option value="services" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'services' ? 'selected' : ''; ?>>Services</option>
    <option value="others" <?php echo isset($existingExperience['job_category_id']) && $existingExperience['job_category_id'] === 'others' ? 'selected' : ''; ?>>Others</option>
  </select>
  <div id="category_error" class="error"></div>
</div>
<div class="form-group">
            <label for="subcategory">Subcategory:</label>
            <select class="form-control" id="subcategory"  name="subcategory" disabled>
            <option value="">Select a Subcategory</option>
            </select>
            <div id="subcategory_error" class="error"></div>
            </div>
        <div class="form-group" id="otherCategoryField"   style="display: none;">
        <label for="othercategory">Other Category:</label>
        <input type="text" class="form-control" id="othercategory"  name="othercategory">
        </div>

        <div class="form-group" id="otherSubcategoryField" style="display: none;">
        <label for="othersubcategory">Other Subcategory:</label>
        <input type="text" class="form-control" id="othersubcategory"  name="othersubcategory">
    </div>


<div class="form-group">
  <label for="experience">Experience</label>
  <select class="form-control" id="experience" name="experience">
    <option value="">Select your experience</option>
    <option value="fresher" <?php echo isset($existingExperience['experience']) && $existingExperience['experience'] === 'fresher' ? 'selected' : ''; ?>>Fresher</option>
    <option value="0-2" <?php echo isset($existingExperience['experience']) && $existingExperience['experience'] === '0-2' ? 'selected' : ''; ?>>0-2</option>
    <option value="3-5" <?php echo isset($existingExperience['experience']) && $existingExperience['experience'] === '3-5' ? 'selected' : ''; ?>>3-5</option>
    <option value="5-10" <?php echo isset($existingExperience['experience']) && $existingExperience['experience'] === '5-10' ? 'selected' : ''; ?>>5-10</option>
    <option value="10-15" <?php echo isset($existingExperience['experience']) && $existingExperience['experience'] === '10-15' ? 'selected' : ''; ?>>10-15</option>
    <option value="15-20" <?php echo isset($existingExperience['experience']) && $existingExperience['experience'] === '15-20' ? 'selected' : ''; ?>>15-20</option>
    <option value="above 20 years" <?php echo isset($existingExperience['experience']) && $existingExperience['experience'] === 'above 20 years' ? 'selected' : ''; ?>>Above 20 years</option>
  </select>
  <div id="experience_error" class="error"></div>
</div>


    <div class="form-group">
      <label for="company name">Company Name</label>
      <input type="text" class="form-control" id="companyname" name="companyname" value="<?php echo isset($existingExperience['company_name']) ? $existingExperience['company_name'] : ''; ?>">
      <div id="companyname_error" class="error"></div>
    </div>

    <div class="form-group">
      <label for="role">Role in the company</label>
      <input type="text" class="form-control" id="role" name="role" value="<?php echo isset($existingExperience['job_role']) ? $existingExperience['job_role'] : ''; ?>">
      <div id="role_error" class="error"></div>
    </div>

    <h1>Previous Employer details</h1>

    <div class="form-group">
      <label for="Name">Name of employer*</label>
      <input type="text" class="form-control" id="nameofemployer" name="nameofemployer" value="<?php echo isset($existingExperience['previous_employer_name']) ? $existingExperience['previous_employer_name'] : ''; ?>">
      <div id="name_error" class="error"></div>
    </div>

    <div class="form-group">
      <label for="phone number">Phone Number</label>
      <input type="text" class="form-control" id="number" name="number" value="<?php echo isset($existingExperience['previous_employer_mobile']) ? $existingExperience['previous_employer_mobile'] : ''; ?>">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="emailid" name="emailid" value="<?php echo isset($existingExperience['previous_employer_email']) ? $existingExperience['previous_employer_email'] : ''; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php
}
?>
</div>

<script>
        function updateSubcategories() {
            var categorySelect = document.getElementById("category");
            var subcategorySelect = document.getElementById("subcategory");
            var selectedCategory = categorySelect.value;
            
            subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';
            
            if (selectedCategory === "it") {
                addSubcategoryOption("Architect");
                addSubcategoryOption("developer");
                addSubcategoryOption("Tester");
                addSubcategoryOption("UI/UX Design");
                addSubcategoryOption("Data Scientist");
                addSubcategoryOption("Database admin");
                addSubcategoryOption("Syatem admin");
            }
            else if (selectedCategory === "education") {
                addSubcategoryOption("Teachers");
                addSubcategoryOption("professors");
                
            } 
            else if (selectedCategory === "civil") {
                addSubcategoryOption("Meshon");
                addSubcategoryOption("Painter");
                addSubcategoryOption("Plumber");
                addSubcategoryOption("Electrician");
                addSubcategoryOption("Carpenter");

            }
            else if (selectedCategory === "healthcare") {
                addSubcategoryOption("Doctor");
                addSubcategoryOption("Nurse");
                addSubcategoryOption("Pharmacist");
                addSubcategoryOption("Physiotherapist");
            }
            else if (selectedCategory === "sales and marketing") {
                addSubcategoryOption("sales");
                addSubcategoryOption("Marketing");
            }
            else if (selectedCategory === "finance") {
                addSubcategoryOption("Accountant");
                addSubcategoryOption("Chartered Accountant");
            }
            else if (selectedCategory === "textile") {
                addSubcategoryOption("Supervisor");
                addSubcategoryOption("Floor manager");
                addSubcategoryOption("General manager");
                addSubcategoryOption("Cutting master");
                addSubcategoryOption("Labour");    
            }
            else if (selectedCategory === "sports") {
                addSubcategoryOption("Physical education master");
                addSubcategoryOption("Trainer");   
            }
            else if (selectedCategory === "services") {
                addSubcategoryOption("Driver");
                addSubcategoryOption("Security");
                addSubcategoryOption("Cook");
                addSubcategoryOption("House keeping");
                addSubcategoryOption("Electrician");
                addSubcategoryOption("Plumber"); 
                addSubcategoryOption("Meshon");
                addSubcategoryOption("Carpenter"); 
                addSubcategoryOption("Mechanic");  
            }
            else if (selectedCategory === "others") {
                addSubcategoryOption("others")
            showOtherCategoryFields();
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
        if(experience.value === 'fresher') {
            hideFields();
        }
        else if (experience.value === '') {
            displayError('Please select a experience.', 'experience_error');
            return false;
        } 
        if (companyname.value === '') {
            displayError('Please enter a company name.','companyname_error');
            return false;
        }
        
        if (role.value === '') {
            displayError('Please enter a role.', 'role_error');
            return false;
        }

        if(companyname.value === ''){
            displayError('please enter a company name', 'companyname_error');
            return false;
        }
        if(role.value === ''){
            displayError('please enter a role', 'role_error');
            return false;
        }
        if(name.value === ''){
            displayError('please enter a employer name', 'name_error');
            return false;
        }


        
        return true; 
    }
    function clearErrorMessages() {
  var errorElements = document.querySelectorAll('.error');
  errorElements.forEach(function (errorElement) {
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
    <h1>Project Details Form</h1>
    <form name="projectform" method="post" onsubmit="return validateForm()" action="projectDetails">
    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
<div id="project-sections">
            <div class="project-section">
            <div class="form-group">
            <label for="projectname">Project Name</label>
            <input type="text" class="form-control" id="projectname" name="projectname[]" >
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
            <input type="date" class="form-control" id="startdate" name="startdate[]" >
            <div id="startdate_error" class="error"></div>
            <label for="">End date of the project*</label>
            <input type="date" class="form-control" id="enddate" name="enddate[]" >
            <div id="enddate_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="Responsibity">My responsibility in project*</label>
            <textarea class="form-control" rows="3" class="form-control" id="responsibility" name="responsibility[]" ></textarea>
            <div id="responsibility_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="Skills used in project">Skills used in project*</label>
            <input type="text" class="form-control" id="skillsused" name="skillsused[]" >
            <div id="skills_error" class="error"></div>
        </div>
        <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button>
        </div>
        <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>
    </form>

<script>
    var projectFormCount = 1;
    
    function validateForm(){
        var projectname = document.getElementById("projectname");
        var durationofproject = document.getElementById("durationofproject");
        var startdate = document.getElementById("startdate");
        var enddate = document.getElementById("enddate");
        var responsibility = document.getElementById("responsibility");
        var skillsused = document.getElementById("skillsused");
        if(projectname.value === ''){
            displayError('please enter a project name', 'projectname_error');
            return false;
        }
        if(durationofproject.value === ''){
            displayError('please enter a project duration', 'durationofproject_error');
            return false;
        }
        if (roleofproject.value === ''){
          displayError('please enter a role of project', 'roleofproject_error');
        }
        if(startdate.value === ''){
            displayError('please select a start date', 'startdate_error');
            return false;
        }
        if(enddate.value === ''){
            displayError('please select a end date', 'enddate_error');
            return false;
        }
        if(responsibilty.value === ''){
            displayError('This Field is required!', 'responsibility_error');
            return false;
        }
        if(skillsused.value === ''){
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
  errorElements.forEach(function (errorElement) {
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
  
  
    <div class="container mt-5">
        <h1>Area of Interest Form</h1>
        <form method="post" onsubmit="return validateForm()" >
        
        <div id="educationFormsContainer">
        <div class="education-form-container">    
                 <div class="form-group">
                <label for="category">Category *</label>
                <select class="form-control" id="category" name="category[]" value="<?php echo isset($value['interst_category_id']) ? $value['interest_category_id'] : ''; ?>" onchange="toggleCategoryFields()" >
                    <option value="">Select a category</option>
                    <option value="it">Information Technology</option>
                    <option value="health">Health Care</option>
                    <option value="others">Others</option>
                </select>
                </div>
            <div class="form-group"">
                <label for="subcategory">Subcategory *</label>
                <select class="form-control" id="subcategory" name="subcategory[]" value="<?php echo isset($value['interst_sub_category_id']) ? $value['interst_sub_category_id'] : ''; ?>" >
                    <option value="">Select a sub category </option>
                </select>
            </div>
            <div class="form-group" id="otherCategoryFields" style="display: none;">
                <label for="customCategoryInput">Custom Category</label>
                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput[]" placeholder="Enter custom category">
                <label for="customSubcategoryInput">Custom Subcategory</label>
                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput[]" placeholder="Enter custom subcategory">
            </div>
            <div class="form-group" id="customCategory" style="display: none;">
                <label for="customCategoryInput">Category Name</label>
                <input type="text" class="form-control" id="customCategoryInput" value="<?php echo isset($value['other_interst_category']) ? $value['other_interest_category'] : ''; ?>" name="customCategoryInput[]">
            </div>
      
      <div class="form-group" id="customSubcategory" style="display: none;">
        <label for="customSubcategoryInput"> Subcategory Name</label>
        <input type="text" class="form-control" id="customSubcategoryInput" value="<?php echo isset($value['other_sub_interst_category']) ? $value['other_sub_interst_category'] : ''; ?>" name="customSubcategoryInput[]">
      </div>

            <div class="form-group">
                <label for="preferred-location">Preferred Location to work</label>
                <input type="text" class="form-control" id="preferred-location" value="<?php echo isset($value['prefered_location']) ? $value['prefered_location'] : ''; ?>" name="preferred-location[]">

                <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
            </div>
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" class="form-control" id="experience" value="<?php echo isset($value['experience']) ? $value['experience'] : ''; ?>" name="experience[]">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description[]" value="<?php echo isset($value['description']) ? $value['description'] : ''; ?>" rows="3"></textarea>
            </div>
            <div class="form-group">
                        <label for="jobtype">Job Type</label>
                        <select class="form-control" id="jobtype" name="jobtype[]">
                            <option value="">Select a job type</option>
                            <option value="parttime">Part Time</option>
                            <option value="fulltime">Full Time</option>
                            <option value="both">Both</option>
                        </select>
                    </div>
                
            <div class="form-group">
                <label for="expected-salary">Expected Salary</label>
                <input type="text" class="form-control" id="expected-salary" name="expected-salary[]">
            </div>
            <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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

            if (category === "it") {
                addSubcategoryOption("Architect", subcategorySelect);
                addSubcategoryOption("Developer", subcategorySelect);
                addSubcategoryOption("Tester", subcategorySelect);
            } else if (category === "health") {
                addSubcategoryOption("Doctor", subcategorySelect);
                addSubcategoryOption("Nurse", subcategorySelect);
            } else if (category === "others") {
                addSubcategoryOption("others", subcategorySelect);
                otherCategoryFields.style.display = "block";
            } else {
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
    <div class="container mt-4">
     
        <h2>Skill Form</h2>
        <form id="skillForm" method="post" action="skills">
        <div class="skill-entry">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <br><label for="skillName">Skill Name</label>
                    <input type="text" class="form-control" id="skillname" name="skillname[]"  required>
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
        
        <br><button class="btn btn-primary" type="button" id="addSkillBtn">Add Skill</button>
        <button class="btn btn-success" type="submit">Submit</button>
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
            skillDetails.push (`${skillName} - Experience: ${experience}, Skill Level: ${skillLevel}`);
        });
        
        $("#addedSkills").empty();
        skillDetails.forEach(skill => {
            $("#addedSkills").append(`<li>${skill}</li>`);
        });
    });
  });

    </script>

  <?php
 } elseif ($method == 'resume') {
    ?> 
  <div class="container mt-4">
        <h2>Upload resume</h2>
        <form id="resumeForm" method="post" onsubmit="return validateForm()" action="resume">
      
            <div class="form-group">
                <label for="resumeFile">Upload Resume</label>
               
                <input type="file" name="resumeFile" accept=".pdf,.doc,.docx">

            </div>
            <button class="btn btn-primary" type="submit">Upload</button>
        </form>
    </div>
    <script>
        reusme = document.getElementById('resumeFile');
        function validateForm(){
            if(resume.value===''){
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