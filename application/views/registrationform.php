<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding-right: 350px;
  padding-left:350px;
}

.container {
  background-color: white;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  width: 400px;
  max-width: 100%;
  margin-top:50px;
  border: 1px solid #ccc;
  }

h1 {
  text-align: left;
  padding-bottom:10px;
  margin-bottom: 30px;
  color: navy;
}

.form-group label {
  font-weight: bold;
}

.form-control {
  border-radius: 3px;
  border: 1px solid #ccc;
  padding: 10px;
  width: 100%;
}

.btn-primary {
  background-color: #4285f4;
  border: none;
  width: 100%;
  margin-top: 20px;
  padding: 12px;
  font-weight: bold;
  color: #fff;
}

.btn-primary:hover {
  background-color: #2d76d9;
}

.error {
  color: red;
  margin-top: 5px;
}
.success-message {
      margin-top: 20px;
      padding: 10px;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
      border-radius: 4px;
      display: none;
    }

</style>
<title>Registration Form</title>
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>

    <form name="registration_form" method="post" onsubmit="return validateForm()" action="process_registration">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username">
        <div id="username_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="email">Email ID</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <div id="email_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone number</label>
        <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your phone number">
        <div id="phone_error" class="error"></div>
      </div>
      <button type="Submit" class="btn btn-primary">Register</button>
</form>
<div id="sign" class="d-flex justify-content-end align-items-center">
            <p>Already have  an account ? <a id="regis" href="login">login</a></p>
        </div>
  </div>
  <script>
   function validateForm() {
      var username = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phonenumber').value;

      clearErrors();

      if (!username.trim()) {
        displayError('Username is required', 'username_error');
        return false;
      }

      if (!email.trim()) {
        displayError('Email is required', 'email_error');
        return false;
      } else if (!validateEmail(email)) {
        displayError('Please enter a valid email address', 'email_error');
        return false;
      }

      if (!phone.trim()) {
        displayError('Phone number is required', 'phone_error');
        return false;
      } else if (!validatePhone(phone)) {
        displayError('Please enter a valid phone number', 'phone_error');
        return false;
      }

      // window.location.href = 'sample';
      // event.preventDefault();


      return true;
    }

    function validateEmail(email) {
      var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }

    function validatePhone(phone) {
      var regex = /^\d{10}$/;
      return regex.test(phone);
    }

    function displayError(errorMessage, errorElementId) {
      var errorElement = document.getElementById(errorElementId);
      errorElement.textContent = errorMessage;
    }

    function clearErrors() {
      var errorElements = document.getElementsByClassName('error');
      for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = '';
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

