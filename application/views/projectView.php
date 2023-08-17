<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  margin: 0;
  padding: 0;
  /* margin-left:-200px;
  margin-right:290px; */
}

.container {
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  width: 50%; 
  margin: 50px auto; 
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
  </style>
</head> 
<body>
<?php
 if ($method == 'basic details') {
?>
    <div class="container">
    <h1>Personal Details</h1>
     <form name="basicDetails_form" method="post" onsubmit="return validateFormPage()" action="dash" >
    <div class="form-group">
        <label for="Name">Name *</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
        <div id="Name_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="emailid">Email *</label><br>
        <input type="text" style="width: 100%;" class="form-control" id="email" name="email" placeholder="Enter your email" >
        <div id="emailid_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number *</label>
        <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your phone number">
        <div id="phonenumber_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth *</label>
        <input type="date" class="form-control" id="dob" name="dob" >
        <div id="dob_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="gender">Gender *</label>
        <select class="form-control" id="gender" name="gender" >
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
        <input type="text" class="form-control" id="doorno" name="doorno"></textarea>
        <div id="doorno_error" class="error"></div>
</div>
        <div class="form-group">
        <label for="street address">street address </label>
        <input type="text" class="form-control" id="streetaddress" name="streetaddress">
        <div id="streetaddress_error" class="error"></div>
</div>
<div class="form-group">
        <label for="landmark">Landmark </label>
        <input type="text" class="form-control" id="landmark" name="landmark">
        <div id="landmark_error" class="error"></div>
</div>
<div class="form-group">
        <label for="pincode">Pin Code</label>
        <input type="text" class="form-control" id="pincode" name="pincode">
        <div id="pincode_error" class="error"></div>
</div>
<div class="form-group">
        <label for="district">District *</label>
        <input type="text" class="form-control" id="district" name="district" value="Erode" disabled>
        <div id="district_error" class="error"></div>
      </div>
      <div class="form-group">
    <label for="maritalstatus">Marital Status*</label>
    <select class="form-control" id="maritalstatus" name="maritalstatus">
        <option value="">Select your marital status</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
    </select>
    <div id="maritalstatus_error" class="error"></div>
</div>
<h1>Identification Details</h1>
<div class="form-group">
        <label for="aadharfrontphoto">Aadhar front photo </label>
        <input type="file" class="form-control" id="aadharfrontphoto" name="aadharfrontphoto">
        <div id="aadharfrontphoto_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="aadharbackphoto">Aadhar back Photo</label>
        <input type="file" class="form-control" id="aadharbackphoto" name="aadharbackphoto">
        <div id="aadharbackphoto_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" class="form-control" id="photo" name="photo">
        <div id="photo_error" class="error"></div>
      </div> 
      <button type="submit" name="submit-page" class="btn btn-primary" >submit</button>
    </form>
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
  function register(){
    window.href="educationDetails.php";
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
    <!-- The education form container -->
    <div class="education-form-container">
        <form name="educationform" onsubmit="return validateeducationForm()" action="dash" >
            <div class="form-group">
                <label for="qualification">Educational Qualification*</label>
                <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()">
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
                <select class="form-control" id="department" name="department">
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
                <input type="text" class="form-control" id="school" name="school">
                <div id="school_error" class="error"></div>
            </div>
            <div class="form-group" id="percentage-group" style="display: none;">
                <label for="percentage">Percentage</label>
                <input type="number" class="form-control" id="percentage" name="percentage">
                <div id="percentage_error" class="error"></div>
            </div>
            <div class="form-group" id="year-group" style="display: none;">
                <label for="year_passed">Year of Passed Out</label>
                <input type="number" class="form-control" id="year_passed" name="year_passed">
                <div id="year_error" class="error"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br><button class="btn btn-secondary" id="addButton" onclick="addEducationForm()">Add</button>
</div>
<script>
    var educationFormCount = 1; // Counter for tracking the number of education forms

    // Function to add a new education form
    function addEducationForm() {
        educationFormCount++; // Increment the counter
        var newEducationFormContainer = document.createElement('div');
        newEducationFormContainer.className = 'education-form-container';

        // Clone the original education form and update its ID to avoid ID conflicts
        var originalEducationForm = document.querySelector('.education-form-container');
        var newEducationForm = originalEducationForm.cloneNode(true);
        newEducationForm.id = 'educationform_' + educationFormCount;

        // Clear the values in the new education form
        clearFormFields(newEducationForm);

        // Append the new education form to the new container and add it to the page
        newEducationFormContainer.appendChild(newEducationForm);
        document.querySelector('.container').appendChild(newEducationFormContainer);
    }

    // Function to clear the form fields in a given education form
    function clearFormFields(educationForm) {
        var fieldsToClear = educationForm.querySelectorAll('input, select');
        for (var i = 0; i < fieldsToClear.length; i++) {
            fieldsToClear[i].value = '';
        }
    }

    function validateeducationForm() {
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

        if (qualification === 'bachelors' && !document.getElementById('educationform_1')) {
            alert("Please fill in the Hsc details first and then add bachelors details using add button.");
            return false;
        }

        if (qualification === 'masters' && !document.getElementById('educationform_1')) {
            alert("Please fill in the Bachelors details first and then add masters details using add button.");
            return false;
        }

        // Form is valid
        return true;
    }
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <?php
 } elseif ($method == 'experience') {
    ?>
    <div class="container">
    <h1>Experience Details Form</h1>
    <form name="experienceform" method="post" onsubmit="return validateexpForm()" action="dash">
    <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                    <option value="">Select a Category</option>
                    <option value="it">Information Technology</option>
                    <option value="education">Education</option>
                    <option value="civil">Civil</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="sales and marketing">sales and marketing</option>
                    <option value="finance">Finance</option>
                    <option value="textile">Textile</option>
                    <option value="sports">Sports</option>
                    <option value="services">Services</option>
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
        <select class="form-control" id="experience" name="experience">
          <option value="">select your experience</option>
          <option value="fresher">Fresher</option>
          <option value="0-2">0-2</option>
          <option value="3-5">3-5</option>
          <option value="5-10">5-10</option>
          <option value="10-15">10-15</option>
          <option value="15-20">15-20</option>
          <option value="above 20 years">above 20 years</option>
          </select>
          <div id="experience_error" class="error"></div>
</div>
        <div class="form-group">
            <label for="company name">Company Name</label>
            <input type="text" class="form-control" id="companyname" name="companyname" >
            <div id="companyname_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="role"> Role in the company </label>
            <input type="text" class="form-control" id="role" name="role">
            <div id="role_error" class="error"></div>
</div>
        <h1>Previous Employer details</h1>
        <div class="form-group">
            <label for="Name">Name of employer*</label>
            <input type="text" class="form-control" id="name" name="name" >
            <div id="name_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="phone number">Phone Number</label>
            <input type="text" class="form-control" id="phonenumber" name="phonenumber" >
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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
                addSubcategoryOption()
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
            
            
            subcategorySelect.disabled = false;
        }
        
        function addSubcategoryOption(subcategory) {
            var subcategorySelect = document.getElementById("subcategory");
            var option = document.createElement("option");
            option.value = subcategory;
            option.text = subcategory;
            subcategorySelect.appendChild(option);
        }
       
        function validateexpForm() {
        var category = document.getElementById("category");
        var subcategory = document.getElementById("subcategory");
        var experience = document.getElementById("experience");
        var companyname = document.getElementById("companyname");
        var role = document.getElementById("role");
        var name = document.getElementById("name");
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php
 } 
 ?>


