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
  margin-left:-200px;
  margin-right:290px;
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
    <div class="container" id="page1">
    <h1>Personal Details</h1>
    <form name="registration_form" method="post" onsubmit="return validateFormPage1()" action="index.php/ProfileformController/index">
    <div class="form-group">
        <label for="Name">Name *</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
        <div id="Name_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="emailid">Email *</label><br>
        <input type="text" style="width: 100%;" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        <div id="emailid_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number *</label>
        <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your phone number" required>
        <div id="phonenumber_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth *</label>
        <input type="date" class="form-control" id="dob" name="dob">
        <div id="dob_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="address">Address *</label>
        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
        <div id="address_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="district">District *</label>
        <input type="text" class="form-control" id="district" name="district" value="Erode" disabled>
        <div id="district_error" class="error"></div>
      </div>
      <button type="button" name="submit-page1" class="btn btn-primary" onclick="nextPage('page1', 'page2')">Next</button>
    </form>
  </div>

  <div class="container" id="page2" style="display: none;">
    <h1>Educational Details</h1>
    <!-- <form name="application_form_page2" method="post" onsubmit="return validateFormPage2()"  > -->
    <div class="form-group">
      <label for="educational_qualification">Educational qualification</label>
     <select class="form-control" id="educational_qualification" name="educational_qualification">
     <option value="">Select your Educational qualification</option>
          <option value="8th">8th</option>
          <option value="sslc">SSLC</option>
          <option value="HSC">HSC</option>
          <option value="bachelor">Bachelor's Degree</option>
          <option value="master">Master's Degree</option>
          <option value="BE/BTech">BE/BTech</option>
          <option value="ME/MTech">ME/MTech</option>
          <option value="doctorate">Doctorate</option>
        </select>
        <div id="eductional_qualification_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department" name="department">
          <option value="">Select your department</option>
          <option value="computer_science">Computer Science engineering</option>
          <option value="EEE">EEE</option>
        </select>
        </div>
        <div class="form-group">
        <label for="skills">Skills</label>
        <input type="text" class="form-control" id="skills" name="skills" placeholder="Enter your skills">
        <div id="skills_error" class="error"></div>
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
        <label for="interest">Area of Interest</label>
        <input type="text" class="form-control" id="interest" name="interest" placeholder="Enter your area of interest">
        <div id="interest_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="resume">Upload Resume</label>
        <input type="file" class="form-control-file" id="resume" name="resume" >
        <div id="resume_error" class="error"></div>
      </div>
      <button type="button" class="btn btn-primary" onclick="previousPage('page2', 'page1')">Previous</button>
      <button type="button" name="submit-page2" class="btn btn-primary next-button" onclick="nextPage('page2', 'page3')">Next</button>
    </form>
  </div>

  <div class="container" id="page3" style="display: none;">
    <h1>Identification Details </h1>
    <form name="application_form_page3" method="post" onsubmit="return validateFormPage3()" action="index.php/RegisterController/registration" >
    <div class="form-group">
        <label for="aadharfrontphoto">Aadhar front photo </label>
        <input type="file" class="form-control-file" id="aadharfrontphoto" name="aadharfrontphoto">
        <div id="aadharfrontphoto_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="aadharbackphoto">Aadhar back Photo</label>
        <input type="file" class="form-control-file" id="aadharbackphoto" name="aadharbackphoto">
        <div id="aadharbackphoto_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
        <div id="photo_error" class="error"></div>
      </div> 
      <button type="button" class="btn btn-primary" onclick="previousPage('page3', 'page2')">Previous</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

  <script>
    function validateFormPage1() {
  var Name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var phoneNumber = document.getElementById('phonenumber').value;
  var dob = document.getElementById('dob').value;
  var address = document.getElementById('address').value;
 
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
 
   if (address.trim() === '') {
     displayError('Address is required.', 'address_error');
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

    function validateFormPage2() {
        var educational_qualification = document.getElementById('educational_qualification').value;
        var skills = document.getElementById('skills').value;
        var experience=document.getElementById('experience').value;
        var interest = document.getElementById('interest').value;
        var resume = document.getElementById('resume').value;
 

        clearErrorMessages();

    if (educational_qualification.trim() === '') {
    displayError('Educational qualification is required.', 'eductional_qualification_error');
    return false;
  }
  if (skills.trim() === '') {
    displayError('Skills are required.', 'skills_error');
    return false;
  }

  if(experience.trim()===''){
    displayError('select the experience.', 'experience_error');
    return false;
  }

  if (interest.trim() === '') {
    displayError('Area of Interest is required.', 'interest_error');
    return false;
  }

  if (resume.trim() === '') {
    displayError('Resume is required.', 'resume_error');
    return false;
  }
      return true; // Form submission for Page 2 is valid
    }

    function validateFormPage3() {
        var aadharFrontPhoto = document.getElementById('aadharfrontphoto').value;
        var aadharBackPhoto = document.getElementById('aadharbackphoto').value;
        var photo = document.getElementById('photo').value;

        clearErrorMessages();
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
      return true; // Form submission for Page 3 is valid
    }

    function previousPage(currentPageId, previousPageId) {
      document.getElementById(currentPageId).style.display = 'none';
      document.getElementById(previousPageId).style.display = 'block';
    }

    function nextPage(currentPageId, nextPageId) {
      var isValid = false;

      if (currentPageId === 'page1') {
        isValid = validateFormPage1();
      } else if (currentPageId === 'page2') {
        isValid = validateFormPage2();
      }

      if (isValid) {
        document.getElementById(currentPageId).style.display = 'none';
        document.getElementById(nextPageId).style.display = 'block';
      }
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
</body>
</html>