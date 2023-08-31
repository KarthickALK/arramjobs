<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 400px;
      max-width: 70%;
    }

    h1 {
      text-align: center;
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

  </style>
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
        <form id="phoneForm" action="http://localhost/arramjobs/seekerLogin/" method="post" onsubmit="return validateForm()">
        <div class="form-group">
                <label for="phone">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your phone number" required>
            </div>
            <!--  <button type="button" class="btn btn-link">New User</a> -->
            <button type="submit" class="btn btn-primary">Submit</button> 
            
        </form>
        <br>
        <div id="sign">
            <p>Create an account ? <a id="regis" href="">Register</a></p>
        </div>
        <div class="error">
      <?php if (isset($login_error)) echo $login_error; ?>
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