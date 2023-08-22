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
    <h1>Login Form </h1>
    <form id="otpForm" method="post" onsubmit="return validateOTP(document.getElementById('otp').value)">
      <div class="form-group">
        <label for="otp">OTP</label>
        <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter the OTP"   required>
  </div>
      <button type="button" class="btn btn-link" id="resendOTP">Resend OTP</button>
      <button type="submit" class="btn btn-primary">Verify</button>
    </form>
  </div>

  
  <script>
    // document.getElementById('otpForm').addEventListener('submit', function(event) {
    //   event.preventDefault();
    //   const otpInput = document.getElementById('otp').value;
    //   if (validateOTP(otpInput)) {
    //     alert('Login successful!');
    //   } else {
    //     alert('Invalid OTP. Please enter a 4-digit OTP.');
    //   }
    // });

    function validateOTP(otp) {
      // Check if the OTP is exactly 4 digits
      return /^\d{4}$/.test(otp);
      
    }

    document.getElementById('resendOTP').addEventListener('click', function() {
      alert('Resending OTP...');
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
