<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .btn-primary{
      background-color: #f39c12 !important;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
      margin-left: -200px;
      margin-right: 290px;
    }

    .container {
      background-color: #fff;  
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 30%; 
      margin-left:700px;
      margin-top:50px;

    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      margin-left: -20px;
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

    /* Form input styles */
    .form-control {
      border-radius: 3px;
      border: 1px solid #ccc;
      padding: 10px;
    }

    /* Form button style */
    .btn-primary {
      background-color: #4285f4;
      border: none;
    }

    .btn-primary:hover {
      background-color: #2d76d9;
    }

    button[type="submit"] {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      font-weight: bold;
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
  background-color: #f39c12 !important;
  text-decoration: none;
}

.logo{
  margin-top:50px;
}
#tamil{
  color:white;
  margin-left:30px;
}
</style>
<title>Registration Form</title>
</head>
<body>
<header>
<div class="logo">
<h5 id="tamil"> அறம் வேலைவாய்ப்பு</h5>
        </div>
   
    <nav>
        <ul>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#job-seekers">Seekers</a></li>
            <li><a href="#job-providers">Providers</a></li>
            <li><a href="#blog">Blog</a></li>
           
        </ul>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>
  <div class="container">
    <h2><center>Registration Form</center></h2>
    <br>

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
<br>
<div id="sign" class="d-flex justify-content-end align-items-center">
            <p>Already have  an account ? <a id="regis" href="http://localhost/arramjobs/seekerController/login">login</a></p>
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

