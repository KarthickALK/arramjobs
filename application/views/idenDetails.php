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
  margin-left:100px;
  margin-right:590px;
  margin-top:30px;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  margin-left:-90px;
  margin-top:20px;
  color:navy;
}


.form-group {
  margin-bottom: 20px;
  background-color: #fff;
  padding: 5px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  width: 80%; 
  margin-left:60px;
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

button[type="submit"] {
  width: 75%;
  margin-top: 20px;
  padding: 12px;
  font-weight: bold;
  margin-left:60px;
  margin-bottom:10px;
}
.next-button {
    float: right;
  }
  </style>
</head> 

</head> 
<body>
<div class="form-group">
<h1>Identification Details </h1>
    <form name="application_form_page3" method="post" onsubmit="return validateFormPage3()" action="index.php/idenController/registration">
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
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
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