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
      margin-left: -200px;
      margin-right: 290px;
    }

    .container {
      background-color: #fff;  
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 50%; 
      margin-left:500px;
      margin-top:50px;

    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      margin-left: -70px;
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

  </style>
  <title>Admin Login Form</title>
</head>
<body>
  <div class="container">
    <h1>Admin Login Form</h1>
    <form name="login_form" method="post" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="userID">User ID</label>
        <input type="text" class="form-control" id="userID" placeholder="Enter your user ID">
        <div id="userID_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password">
        <div id="password_error" class="error"></div>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
  <script>
    function validateForm() {
      var userID = document.getElementById('userID').value;
      var password = document.getElementById('password').value;

      if (userID.trim() === '') {
        displayError('User ID is required.', 'userID_error');
        return false;
      }

      if (password.trim() === '') {
        displayError('Password is required.', 'password_error');
        return false;
      }

      return true;
    }

    function displayError(errorMessage, errorElementId) {
      var errorElement = document.getElementById(errorElementId);
      errorElement.innerText = errorMessage;
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
