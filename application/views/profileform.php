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
      <button type="submit" name="submit-page1" class="btn btn-primary" >submit</button>
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