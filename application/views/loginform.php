<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Login Form</title>
  <!-- karthickchanged -->
  <!-- karthickchanged2 -->

  <style>
    .btn-primary {
      background-color: #f39c12 !important;
    }

    header nav ul li a:hover {
      /* background-color: #007bff;
    .btn-primary{ */
      /* background-color: #f39c12 ; */
      color: #F8802A;
      text-decoration: none;
      /* } */
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
      margin-left: 700px;
      margin-top: 50px;

    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      margin-left: -40px;
      color: navy;
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
    }

    nav ul li a:hover {
      /* background-color: #f39c12 !important; */
      text-decoration: none;
    }

    .logo {
      margin-top: 50px;
    }

    #tamil {
      color: white;
      margin-left: 30px;
    }
  </style>

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
        <!-- <li><a href="#login">Login</a></li> -->
      </ul>
    </nav>
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>


  <div class="container">
    <h2>Seeker Login </h2>
    <form id="phoneForm" action="<?php echo baseUrl . "seekerController/seekerLogin" ?>" method="post"
      onsubmit="return validateForm()">
      <div class="form-group">
        <label for="phone">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"
          required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your phone number"
          required>
      </div>
      <!--  <button type="button" class="btn btn-link">New User</a> -->
      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <br>
    <div id="sign">
      <p>Create an account ? <a id="regis" href="<?php echo baseUrl . "seekerController/registration" ?>">Register</a>
      </p>
    </div>
    <div class="error">
      <?php if (isset($login_error))
        echo $login_error; ?>
    </div>
  </div>

  <script>
    function validateForm() {
      var phoneNumber = document.getElementById("phonenumber").value;
      var phoneRegex = /^\d{10}$/;

      if (!phoneRegex.test(phoneNumber)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
      }

      return true;
    }
  </script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>