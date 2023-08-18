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
    <h1>Provider Login Form</h1>
    <form name="login_form" method="post" action="http://localhost/arramjobs/Registration/view_dashboard"  onsubmit="return validateForm()">
      <div class="form-group">
        <label for="userID">User ID</label>
        <input type="text" class="form-control" id="userID" name="userID" placeholder="Enter your user ID">
        <div id="userID_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        <div id="password_error" class="error"></div>
        
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <br>
      <br>
      <?php if (isset($error_message)) { ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php } ?>
      </form>
      <div id="sign">
            <p>Create an account ? <a id="regis" href="index.php/registration/provider_registration/index">Register</a></p>
        </div>


   
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





<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form validation || Learningrobo</title>
  <link rel="stylesheet" href="style.css">
  <script src="password-manager.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Admin Login Form</title>
  <style>
 
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:#f4f7f9;
}
::selection{
  color: #fff;
  background:#f37e17;
}
.wrapper{
  width: 380px;
  padding: 40px 30px 50px 30px;
  background: #12192c;
  border-radius: 5px;
  text-align: center;
  box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.wrapper header{
  font-size: 35px;
  font-weight: 600;
  color: #fff;
}
.wrapper form{
  margin: 40px 0;
}
form .field{
  width: 100%;
  margin-bottom: 20px;
}
form .field.shake{
  animation: shake 0.3s ease-in-out;
}
@keyframes shake {
  0%, 100%{
    margin-left: 0px;
  }
  20%, 80%{
    margin-left: -12px;
  }
  40%, 60%{
    margin-left: 12px;
  }
}
form .field .input-area{
  height: 50px;
  width: 100%;
  position: relative;
}
form input{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 45px;
  font-size: 18px;
  background: none;
  color: #e1d9ec;
  border-radius: 5px;
  border: 1px solid #e1d9ec;
  border-bottom-width: 2px;
  transition: all 0.2s ease;
}
form .field input:focus,
form .field.valid input{
  border-color: #f37e17;
}
form .field.shake input,
form .field.error input{
  border-color: #ff0000;
}
.field .input-area i{
  position: absolute;
  top: 50%;
  font-size: 18px;
  pointer-events: none;
  transform: translateY(-50%);
}
.input-area .icon{
  left: 15px;
  color: #bfbfbf;
  transition: color 0.2s ease;
}
.input-area .error-icon{
  right: 15px;
  color: #ff0000;
}
form input:focus ~ .icon,
form .field.valid .icon{
  color: #f37e17;
}
form .field.shake input:focus ~ .icon,
form .field.error input:focus ~ .icon{
  color: #bfbfbf;
}
form input::placeholder{
  color: #bfbfbf;
  font-size: 17px;
}
form .field .error-txt{
  color: #ff0000;
  text-align: left;
  margin-top: 5px;
}
form .field .error{
  display: none;
}
form .field.shake .error,
form .field.error .error{
  display: block;
}
form .pass-txt{
  text-align: left;
  margin-top: -10px;
}
.wrapper a{
  color:#f37e17;
  text-decoration: none;
}
.wrapper a:hover{
  text-decoration: underline;
}
form input[type="submit"]{
  height: 50px;
  margin-top: 45px;
  color: #fff;
  padding: 0;
  border: none;
  background:#f37e17;
  cursor: pointer;
  border-bottom: 2px solid rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}
form input[type="submit"]:hover{
  background: white;
  color:#ff6a00;
  font-weight:bold;
}
.sign-txt{
  color: #fff;
}
.credit{
    margin-top: 20px;
    text-align: center;
    color: #000;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.credit a{
    text-decoration: none;
    color:#000;
    font-weight: bold;
}  
input[type="checkbox"] {
  width: 15px;
  height: 15px;
}


</style>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <header style="text-align: left;font-size: 32px; color: #f37e17;">Provider Login</header>
        <form name="login_form" method="post" action="http://localhost/aramjobs/dashboard_page.php" onsubmit="return validateForm()">
            <div class="field Userid">
                <div class="input-area">
                    <input type="text" placeholder="Enter Your User-Id" id="userId" name="userID" required>
                    <i class="icon fas fa-user"></i>
                </div>
                <div class="error error-txt">Please Enter Valid User-Id</div>
            </div>

            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Enter Your Password" id="password-field" required>
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                    <div class="error error-txt">Please Enter Valid Password</div>
                    <input type="checkbox" name="password" class="toggle-password" style="margin-left: 170px;margin-top: 10px;">
                    <label for="showPassword" style="font-size: 14px;color: #f37e17;">Show password</label>
                </div>

                <div class="error error-txt">Password can't be blank</div>
            </div>
            <input type="submit" value="Login">
        </form>
        <div class="sign-txt">Create an account ? <a href="provider_registration.php">Register Now</a></div>
    </div>
</div>


<script>
    function validateForm() {
        var userId = document.getElementById("userId").value;
        var password = document.getElementById("password-field").value;

        if (userId === "") {
            alert("Please enter a valid User-Id");
            return false;
        }

        if (password === "") {
            alert("Please enter a valid Password");
            return false;
        }

        return true; 
      const togglePasswordButton = document.querySelector('.toggle-password');

      togglePasswordButton.addEventListener('click', function() {
      const passwordField = document.querySelector('#password-field');
      if (passwordField.type === 'password') {
      passwordField.type = 'text';
      } else {
    passwordField.type = 'password';
    }
    });

  function validateForm() {
    const userId = document.getElementById("userId");
    const password = document.getElementById("password-field");
    const userIdError = document.querySelector(".field.Userid .error-txt");
    const passwordError = document.querySelector(".field.password .error-txt");

    if (userId.value.trim() === "") {
      userIdError.style.display = "block";
    } else {
      userIdError.style.display = "none";
    }

    if (password.value === "") {
      passwordError.style.display = "block";
    } else {
      passwordError.style.display = "none";
    }
  }

  function validateForm() {
    var userId = document.getElementById("userId").value;
    var password = document.getElementById("password-field").value;

    document.querySelectorAll(".error-txt").forEach(function (element) {
        element.style.display = "none";
    });

    var isValid = true;

    if (userId.trim() === "") {
        document.querySelector(".Userid .error-txt").style.display = "block";
        isValid = false;
    }

    if (password.trim() === "") {
        document.querySelector(".password .error-txt").style.display = "block";
        isValid = false;
    }

    return isValid;
}
</script> -->

</body>
</html>