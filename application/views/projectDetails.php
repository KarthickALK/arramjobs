<!DOCTYPE html>
<html>
<head>
    <title>Project Details Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  margin: 0;
  padding: 0;
  /* margin-left:-200px;
  margin-right:290px; */
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
</style>
</head>
<body>
<div class="container">
    <h1>Project Details Form</h1>
    <form name="projectform" method="post" onsubmit="return validateForm()" action="projectDetails">
    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
<div id="project-sections">
            <div class="project-section">
            <div class="form-group">
            <label for="projectname">Project Name</label>
            <input type="text" class="form-control" id="projectname" name="projectname[]" >
            <div id="projectname_error" class="error"></div>
        <div class="form-group">
            <label for="Duration of project">Duration of Project</label>
            <input type="text" class="form-control" id="durationofproject" name="durationofproject[]">
            <div id="durationofproject_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="role in the project">Role in the Project</label>
            <input type="text" class="form-control" id="roleofproject" name="roleofproject[]">
            <div id="roleofproject_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="">start date of project*</label>
            <input type="date" class="form-control" id="startdate" name="startdate[]" >
            <div id="startdate_error" class="error"></div>
            <label for="">End date of the project*</label>
            <input type="date" class="form-control" id="enddate" name="enddate[]" >
            <div id="enddate_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="Responsibity">My responsibility in project*</label>
            <textarea class="form-control" rows="3" class="form-control" id="responsibility" name="responsibility[]" ></textarea>
            <div id="responsibility_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="Skills used in project">Skills used in project*</label>
            <input type="text" class="form-control" id="skillsused" name="skillsused[]" >
            <div id="skills_error" class="error"></div>
        </div>
        <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button>
        </div>
        <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>
    </form>

<script>
    var projectFormCount = 1;
    
    function validateForm(){
        var projectname = document.getElementById("projectname");
        var durationofproject = document.getElementById("durationofproject");
        var startdate = document.getElementById("startdate");
        var enddate = document.getElementById("enddate");
        var responsibility = document.getElementById("responsibility");
        var skillsused = document.getElementById("skillsused");
        if(projectname.value === ''){
            displayError('please enter a project name', 'projectname_error');
            return false;
        }
        if(durationofproject.value === ''){
            displayError('please enter a project duration', 'durationofproject_error');
            return false;
        }
        if (roleofproject.value === ''){
          displayError('please enter a role of project', 'roleofproject_error');
        }
        if(startdate.value === ''){
            displayError('please select a start date', 'startdate_error');
            return false;
        }
        if(enddate.value === ''){
            displayError('please select a end date', 'enddate_error');
            return false;
        }
        if(responsibilty.value === ''){
            displayError('This Field is required!', 'responsibility_error');
            return false;
        }
        if(skillsused.value === ''){
            displayError('please enter a Skills used in the project', 'skillsused_error');
            return false;
        }
        return true;
    }
    
 
    function addProjectSection() {
    projectFormCount++;
    var newProjectSection = document.createElement('div');
    newProjectSection.className = 'project-section';

    // Clone the original project section
    var originalSection = document.querySelector('.project-section');
    var clone = originalSection.cloneNode(true);

    // Clear input values in the cloned section
    var inputs = clone.querySelectorAll('input[type="text"], input[type="date"], textarea');
    inputs.forEach(function(input) {
        input.value = '';
    });

    // Append the cloned section to the project sections container
    newProjectSection.appendChild(clone);
    document.getElementById('project-sections').appendChild(newProjectSection);

    // Move the "Submit" button to the end of the last added project section
    var submitButton = document.getElementById('finalsubmit');
    newProjectSection.appendChild(submitButton);

    // Hide the "Add Project" button in the previous section
    var addButton = document.querySelector('button[type="button"]');
    addButton.style.display = 'none';
}

        
    function clearErrorMessages() {
  var errorElements = document.querySelectorAll('.error');
  errorElements.forEach(function (errorElement) {
    errorElement.textContent = '';
  });
}
    function displayError(message, elementId) {
        var errorElement = document.getElementById(elementId);
        errorElement.innerHTML = message;
        errorElement.style.color = 'red';
    }
    </script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

