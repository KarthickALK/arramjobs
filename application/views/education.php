<!DOCTYPE html>
<html>
<head>
    <title>Educational Details Form</title>
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
    <h1>Education Form</h1>
    <!-- The education form container -->
    <div class="education-form-container">
        <form name="educationform" onsubmit="return validateForm()" action="index.php/projectController/edu" >
            <div class="form-group">
                <label for="qualification">Educational Qualification*</label>
                <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()">
                    <option value="">Select Qualification</option>
                    <option value="below_8th">Below 8th</option>
                    <option value="sslc">SSLC</option>
                    <option value="hsc">HSC</option>
                    <option value="bachelors">Bachelors</option>
                    <option value="masters">Masters</option>
                    <option value="doctorate">Doctorate</option>
                </select>
                <div id="qualification_error" class="error"></div>
            </div>
            <div class="form-group" id="department-group" style="display: none;">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="department">
                    <option value="">Select Department</option>
                    <option value="Tamil">Tamil</option>
                    <option value="english">English</option>
                    <option value="maths">Maths</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="computer_science">Computer Science</option>
                </select>
                <div id="department_error" class="error"></div>
            </div>
            <div class="form-group" id="school-group" style="display: none;">
                <label for="school">School Name/collegename</label>
                <input type="text" class="form-control" id="school" name="school">
                <div id="school_error" class="error"></div>
            </div>
            <div class="form-group" id="percentage-group" style="display: none;">
                <label for="percentage">Percentage</label>
                <input type="number" class="form-control" id="percentage" name="percentage">
                <div id="percentage_error" class="error"></div>
            </div>
            <div class="form-group" id="year-group" style="display: none;">
                <label for="year_passed">Year of Passed Out</label>
                <input type="number" class="form-control" id="year_passed" name="year_passed">
                <div id="year_error" class="error"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br><button class="btn btn-secondary" id="addButton" onclick="addEducationForm()">Add</button>
</div>
<script>
    var educationFormCount = 1; // Counter for tracking the number of education forms

    // Function to add a new education form
    function addEducationForm() {
        educationFormCount++; // Increment the counter
        var newEducationFormContainer = document.createElement('div');
        newEducationFormContainer.className = 'education-form-container';

        // Clone the original education form and update its ID to avoid ID conflicts
        var originalEducationForm = document.querySelector('.education-form-container');
        var newEducationForm = originalEducationForm.cloneNode(true);
        newEducationForm.id = 'educationform_' + educationFormCount;

        // Clear the values in the new education form
        clearFormFields(newEducationForm);

        // Append the new education form to the new container and add it to the page
        newEducationFormContainer.appendChild(newEducationForm);
        document.querySelector('.container').appendChild(newEducationFormContainer);
    }

    // Function to clear the form fields in a given education form
    function clearFormFields(educationForm) {
        var fieldsToClear = educationForm.querySelectorAll('input, select');
        for (var i = 0; i < fieldsToClear.length; i++) {
            fieldsToClear[i].value = '';
        }
    }

    function validateForm() {
        var qualification = document.getElementById('qualification').value;
        var department = document.getElementById('department').value;
        var school = document.getElementById('school').value;
        var percentage = document.getElementById('percentage').value;
        var yearPassed = document.getElementById('year_passed').value;


        // Basic qualification validation
        if (!qualification) {
            displayError('Please select a qualification', 'qualification_error');
            return false;
        }
        

        // Additional validation for "Bachelors," "Masters," and "Doctorate"
        if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
            var department = document.getElementById('department').value;
            var school = document.getElementById('school').value;
            var percentage = document.getElementById('percentage').value;
            var yearPassed = document.getElementById('year_passed').value;

            // Validate department
            if (!department) {
                displayError('Department is required for selected qualification', 'department_error');
                return false;
            }

            // Validate school/collegename
            if (!school) {
                displayError('School/collegename is required', 'school_error');
                return false;
            }

            // Validate percentage
            if (!percentage) {
                displayError('Percentage is required', 'percentage_error');
                return false;
            }

            // Validate year of passed out
            if (!yearPassed) {
                displayError('Year of Passed Out is required', 'year_error');
                return false;
            }
        }


        // Form is valid
        return true;
    }

    function toggleFields() {
        var selectedQualification = document.getElementById('qualification').value;
        var departmentGroup = document.getElementById('department-group');
        var schoolGroup = document.getElementById('school-group');
        var percentageGroup = document.getElementById('percentage-group');
        var yearGroup = document.getElementById('year-group');
        var addButton = document.getElementById('addButton');

        // Show/hide the additional fields based on the selected qualification
        if (selectedQualification === 'below_8th') {
            departmentGroup.style.display = 'none';
            schoolGroup.style.display = 'none';
            percentageGroup.style.display = 'none';
            yearGroup.style.display = 'none';
            addButton.style.display = 'none';
        } else {
            // Show the school, percentage, and year fields by default
            schoolGroup.style.display = 'block';
            percentageGroup.style.display = 'block';
            yearGroup.style.display = 'block';

            // Hide the department field for SSLC and HSC
            if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                departmentGroup.style.display = 'none';
                addButton.style.display = 'none';
            } else {
                // Show the department field for other qualifications
                departmentGroup.style.display = 'block';
                addButton.style.display = 'block';
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>