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
    <div class="container" id="page1">
    <h1>Personal Details</h1>
     <form name="applicationform" method="post" onsubmit="return validateFormPage()" action="dash" >
    <div class="form-group">
        <label for="Name">Name *</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" >
        <div id="Name_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="emailid">Email *</label><br>
        <input type="text" style="width: 100%;" class="form-control" id="email" name="email" placeholder="Enter your email">
        <div id="emailid_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number *</label>
        <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your phone number" >
        <div id="phonenumber_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth *</label>
        <input type="date" class="form-control" id="dob" name="dob">
        <div id="dob_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="gender">Gender *</label>
        <select class="form-control" id="gender" name="gender">
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
      <button type="submit" name="submitBtn" class="btn btn-primary" >submit</button>
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
</body>
</html>