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
  margin-left:-200px;
  margin-right:290px;
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
    <h1>Educational Details Form</h1>
    <form name'=educationform' onsubmit="return validateForm()" action="exp">
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
        <div class="form-group" id="department-group">
            <label for="department">Department</label>
            <select class="form-control" id="department" name="department" >
                <option value="">Select Department</option>
                <option value="Tamil">Tamil</option>
                <option value="english">english</option>
                <option value="maths">Maths</option>
                <option value="physics">Physics</option>
                <option value="chemistry">Chemistry</option>
                <option value="computer science">computer science</option>
            </select>
            <div id="qualification_error" class="error"></div>
</div>

        <div class="form-group" id="school-group">
            <label for="school">School Name</label>
            <input type="text" class="form-control" id="school" name="school">
        </div>
        <div class="form-group" id="college-group">
            <label for="college">College Name</label>
            <input type="text" class="form-control" id="college" name="college">
        </div>
        <div class="form-group percentage-fields" id="percentage-sslc-group">
            <label for="percentage_sslc">Percentage in SSLC</label>
            <input type="number" class="form-control" id="percentage_sslc" name="percentage_sslc" step="0.01">
        </div>
        <div class="form-group percentage-fields" id="percentage-hsc-group">
            <label for="percentage_hsc">Percentage in HSC</label>
            <input type="number" class="form-control" id="percentage_hsc" name="percentage_hsc" step="0.01">
        </div>
        <div class="form-group percentage-fields" id="percentage-bachelors-group">
            <label for="percentage_bachelors">Percentage in Bachelors</label>
            <input type="number" class="form-control" id="percentage_bachelors" name="percentage_bachelors" step="0.01">
        </div>
        <div class="form-group percentage-fields" id="percentage-masters-group">
            <label for="percentage_masters">Percentage in Masters</label>
            <input type="number" class="form-control" id="percentage_masters" name="percentage_masters" step="0.01">
        </div>
        <div class="form-group percentage-fields" id="percentage-doctorate-group">
            <label for="percentage_doctorate">Percentage in Doctorate</label>
            <input type="number" class="form-control" id="percentage_doctorate" name="percentage_doctorate" step="0.01">
        </div>
        <div class="form-group">
            <label for="duration">Duration of Education</label>
            <input type="text" class="form-control" id="duration" name="duration">
        </div>
        <div class="form-group">
            <label for="year_passed">Year of Passed Out</label>
            <input type="number" class="form-control" id="year_passed" name="year_passed">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    function toggleFields() {
        var qualification = document.getElementById('qualification').value;
        var departmentGroup = document.getElementById('department-group');

        var departmentGroup=document.getElementById('department'); 
        var schoolGroup = document.getElementById('school-group');
        var collegeGroup = document.getElementById('college-group');
        var percentageSSLCGroup = document.getElementById('percentage-sslc-group');
        var percentageHSCGroup = document.getElementById('percentage-hsc-group');
        var percentageBachelorsGroup = document.getElementById('percentage-bachelors-group');
        var percentageMastersGroup = document.getElementById('percentage-masters-group');
        var percentageDoctorateGroup = document.getElementById('percentage-doctorate-group');
        
        
        schoolGroup.style.display = 'none';
        collegeGroup.style.display = 'none';
        percentageSSLCGroup.style.display = 'none';
        percentageHSCGroup.style.display = 'none';
        percentageBachelorsGroup.style.display = 'none';
        percentageMastersGroup.style.display = 'none';
        percentageDoctorateGroup.style.display = 'none';
        
        if (qualification === 'below_8th' || qualification === '') {
            return;
        }
        
        if (qualification === 'sslc') {
            schoolGroup.style.display = 'block';
            percentageSSLCGroup.style.display = 'block';
        } else {
            schoolGroup.style.display = 'block';
            // collegeGroup.style.display = 'block';

            if (qualification === 'below_8th' || qualification === 'sslc' || qualification === 'hsc') {
            departmentGroup.style.display = 'none';
            } else {
             departmentGroup.style.display = 'block';
            }
            
            if (qualification === 'hsc') {
                percentageHSCGroup.style.display = 'block';
                percentageSSLCGroup.style.display='block';
            } else if (qualification === 'bachelors') {
                collegeGroup.style.display = 'block';
                percentageHSCGroup.style.display = 'block';
                percentageSSLCGroup.style.display='block';
                percentageBachelorsGroup.style.display = 'block';
            } else if (qualification === 'masters') {
                collegeGroup.style.display = 'block';
                percentageHSCGroup.style.display = 'block';
                percentageSSLCGroup.style.display='block';
                percentageBachelorsGroup.style.display = 'block';
                percentageMastersGroup.style.display = 'block';
            } else if (qualification === 'doctorate') {
                collegeGroup.style.display = 'block';
                percentageHSCGroup.style.display = 'block';
                percentageSSLCGroup.style.display='block';
                percentageBachelorsGroup.style.display = 'block';
                percentageMastersGroup.style.display = 'block';
                percentageDoctorateGroup.style.display = 'block';
            }
        }
    }
    function validateForm() {
    var qualification = document.getElementById('qualification').value;
    var yearPassed = document.getElementById('year_passed').value;

    // Clear previous error messages
    document.getElementById('qualification_error').textContent = '';

    if (qualification.trim() === '') {
        document.getElementById('qualification_error').textContent = 'Educational qualification is required.';
        return false;
    }

    if (qualification === 'sslc') {
        var percentageSSLC = parseFloat(document.getElementById('percentage_sslc').value);
        if (isNaN(percentageSSLC) || percentageSSLC < 0 || percentageSSLC > 100) {
            alert("Percentage in required.");
            return false;
        }
        else{
            
        }
    }
    if (qualification === 'HSC') {
        var percentageSSLC = parseFloat(document.getElementById('percentage_sslc').value);
        if (isNaN(percentageSSLC) || percentageSSLC < 0 || percentageSSLC > 100) {
            alert("Percentage in required.");
            return false;
        }
        else{
            
        }
    }

    if (yearPassed.trim() === '') {
        alert("Year of Passed Out is required.");
        return false;
    }
    
    if (isNaN(yearPassed) || yearPassed.length !== 4) {
        alert("Please enter a valid 4-digit year for Year of Passed Out.");
        return false;
    }

    return true; // All validations passed, form submission allowed
}

    </script>
</body>
</html>
