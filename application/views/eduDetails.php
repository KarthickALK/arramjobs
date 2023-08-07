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
  </style>
</head> 
<body>
<div class="form-group">
<h1>Educational Details </h1>
    <form name="application_form_page3" method="post" onsubmit="return validateFormPage()" action="index.php/educationalController/registration">

<div class="form-group">
      <label for="educational_qualification">Educational qualification</label>
     <select class="form-control" id="educational_qualification" name="educational_qualification">
     <option value="">Select your Educational qualification</option>
          <option value="8th">8th</option>
          <option value="sslc">SSLC</option>
          <option value="HSC">HSC</option>
          <option value="bachelor">Bachelor's Degree</option>
          <option value="master">Master's Degree</option>
          <option value="BE/BTech">BE/BTech</option>
          <option value="ME/MTech">ME/MTech</option>
          <option value="doctorate">Doctorate</option>
        </select>
        <div id="educational_qualification_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department" name="department">
          <option value="">Select your department</option>
          <option value="computer_science">Computer Science engineering</option>
          <option value="EEE">EEE</option>
        </select>
        </div>
        <div class="form-group">
        <label for="skills">Skills</label>
        <input type="text" class="form-control" id="skills" name="skills" placeholder="Enter your skills">
        <div id="skills_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="experience">Experience</label>
        <select class="form-control" id="experience" name="experience">
          <option value="">select your experience</option>
          <option value="fresher">Fresher</option>
          <option value="0-2">0-2</option>
          <option value="3-5">3-5</option>
          <option value="5-10">5-10</option>
          <option value="10-15">10-15</option>
          <option value="15-20">15-20</option>
          <option value="above 20 years">above 20 years</option>
          </select>
          <div id="experience_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="interest">Area of Interest</label>
        <input type="text" class="form-control" id="interest" name="interest" placeholder="Enter your area of interest">
        <div id="interest_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="resume">Upload Resume</label>
        <input type="file" class="form-control-file" id="resume" name="resume" >
        <div id="resume_error" class="error"></div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script>
function validateFormPage() {
        var educational_qualification = document.getElementById('educational_qualification').value;
        var skills = document.getElementById('skills').value;
        var experience=document.getElementById('experience').value;
        var interest = document.getElementById('interest').value;
        var resume = document.getElementById('resume').value;
 

        clearErrorMessages();

    if (educational_qualification.trim() === '') {
    displayError('Educational qualification is required.', 'educational_qualification_error');
    return false;
  }
  if (skills.trim() === '') {
    displayError('Skills are required.', 'skills_error');
    return false;
  }

  if(experience.trim()===''){
    displayError('select the experience.', 'experience_error');
    return false;
  }

  if (interest.trim() === '') {
    displayError('Area of Interest is required.', 'interest_error');
    return false;
  }

  if (resume.trim() === '') {
    displayError('Resume is required.', 'resume_error');
    return false;
  }
      return true; // Form submission for Page 2 is valid
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
</form>
</body>
</html>