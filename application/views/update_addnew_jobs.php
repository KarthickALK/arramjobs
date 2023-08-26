<!DOCTYPE html>
<html>
<head>
    <title>Experience Details Form</title>
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
    <h1>Update jobs</h1>
    <form name="experienceform" method="post" onsubmit="return validateForm()" action="http://localhost/arramjobs/registration/updateInsert">
    <?php
       foreach($this->data['updateAddNew'] as $key => $value){
       ?>

   <input type="hidden" class="form-control" value=<?php echo $value['id'];?>   id="id" name="id" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
    <div class="form-group">
            <label for="company_name">Company Name*</label>
            <input type="text" class="form-control" id="company_name" value=<?php echo $value['company_name'];?>  name="company_name" >
            <div id="company_name_error" class="error"></div>
        </div>
        
        <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" value=<?php echo $value['job_category_id'];?> name="category" onchange="updateSubcategories()">
                    <option value="">Select a Category</option>
                    <option value="it">Information Technology</option>
                    <option value="education">Education</option>
                    <option value="civil">Civil</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="sales and marketing">sales and marketing</option>
                    <option value="finance">Finance</option>
                    <option value="textile">Textile</option>
                    <option value="sports">Sports</option>
                    <option value="services">Services</option>
                </select>
                <div id="category_error" class="error"></div>
            </div>
            <div class="form-group">
                <label for="subcategory">Subcategory:</label>
                <select class="form-control" id="subcategory" value=<?php echo $value['job_sub_category_id'];?> name="subcategory" disabled>
                    <option value="">Select a Subcategory</option>
                </select>
                <div id="subcategory_error" class="error"></div>
            </div>
            <div class="form-group">
        <label for="experience">Experience</label>
        <select class="form-control" id="experience" value=<?php echo $value['experience'];?> name="experience">
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
            <label for="preferred_location">Preferred Location*</label>
            <input type="text" class="form-control" id="preferred_location"  value=<?php echo $value['location'];?>  name="preferred_location" >
            <div id="preferred_location_error" class="error"></div>
        </div>
 <div class="form-group">
        <label for="jobtype">Job Type :</label>
        <select class="form-control" id="jobtype" value=<?php echo $value['job_type'];?> name="jobtype">
        <option value="">select your jobtype</option>
          <option value="0">Full Time</option>
          <option value="1">Part Time</option>
          </select>
          <div id="jobtype_error" class="error"></div>
</div>
       
<div class="form-group">
            <label for="expected_salary">Expected Salary</label>
            <input type="text" class="form-control" id="expected_salary" value=<?php echo $value['salary'];?> name="expected_salary" >
            <div id="expected_salary_error" class="error"></div>
        </div>

        <div class="form-group">
            <label for="no_of_openings">no_of_openings</label>
            <input type="number" class="form-control" id="no_of_openings" value=<?php echo $value['number_of_openings'];?> name="no_of_openings" >
            <div id="no_of_openings_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" value=<?php echo $value['description'];?> name="description" >
            <div id="description_error" class="error"></div>
        </div>
        <!-- <div class="form-group">
            <label for="Duration of project">Duration of Project</label>
            <input type="text" class="form-control" id="durationofproject" name="durationofproject">
            <div id="durationofproject_error" class="error"></div>
        </div> -->
        <!-- <div class="form-group">
            <label for="">start date of project*</label>
            <input type="date" class="form-control" id="startdate" name="startdate" >
            <div id="startdate_error" class="error"></div>
            <label for="">End date of the project*</label>
            <input type="date" class="form-control" id="enddate" name="enddate" >
            <div id="enddate_error" class="error"></div>
        </div> -->
        <!-- <div class="form-group">
            <label for="Responsibity">My responsibility in project*</label>
            <textarea class="form-control" rows="3" class="form-control" id="responsibility" name="responsibility" ></textarea>
            <div id="responsibility_error" class="error"></div>
        </div> -->
        <!-- <div class="form-group">
            <label for="Skills used in project">Skills used in porject*</label>
            <input type="text" class="form-control" id="skillsused" name="skillsused" >
            <div id="skills_error" class="error"></div>
        </div> -->
        <!-- <h1>Previous Employer details</h1>
        <div class="form-group">
            <label for="Name">Name of employer*</label>
            <input type="text" class="form-control" id="name" name="name" >
            <div id="name_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="phone number">Phone Number</label>
            <input type="text" class="form-control" id="phonenumber" name="phonenumber" >
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div> -->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php 
       }
    ?>
</div>
<script>
        function updateSubcategories() {
            var categorySelect = document.getElementById("category");
            var subcategorySelect = document.getElementById("subcategory");
            var selectedCategory = categorySelect.value;
            
            // Reset subcategory options
            subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';
            
            if (selectedCategory === "it") {
                addSubcategoryOption("Architect");
                addSubcategoryOption("developer");
                addSubcategoryOption("Tester");
                addSubcategoryOption("UI/UX Design");
                addSubcategoryOption("Data Scientist");
                addSubcategoryOption("Database admin");
                addSubcategoryOption("Syatem admin");
                addSubcategoryOption()
            }
            else if (selectedCategory === "education") {
                addSubcategoryOption("Teachers");
                addSubcategoryOption("professors");
                
            } 
            else if (selectedCategory === "civil") {
                addSubcategoryOption("Meshon");
                addSubcategoryOption("Painter");
                addSubcategoryOption("Plumber");
                addSubcategoryOption("Electrician");
                addSubcategoryOption("Carpenter");

            }
            else if (selectedCategory === "healthcare") {
                addSubcategoryOption("Doctor");
                addSubcategoryOption("Nurse");
                addSubcategoryOption("Pharmacist");
                addSubcategoryOption("Physiotherapist");
            }
            else if (selectedCategory === "sales and marketing") {
                addSubcategoryOption("sales");
                addSubcategoryOption("Marketing");
            }
            else if (selectedCategory === "finance") {
                addSubcategoryOption("Accountant");
                addSubcategoryOption("Chartered Accountant");
            }
            else if (selectedCategory === "textile") {
                addSubcategoryOption("Supervisor");
                addSubcategoryOption("Floor manager");
                addSubcategoryOption("General manager");
                addSubcategoryOption("Cutting master");
                addSubcategoryOption("Labour");    
            }
            else if (selectedCategory === "sports") {
                addSubcategoryOption("Physical education master");
                addSubcategoryOption("Trainer");   
            }
            else if (selectedCategory === "services") {
                addSubcategoryOption("Driver");
                addSubcategoryOption("Security");
                addSubcategoryOption("Cook");
                addSubcategoryOption("House keeping");
                addSubcategoryOption("Electrician");
                addSubcategoryOption("Plumber"); 
                addSubcategoryOption("Meshon");
                addSubcategoryOption("Carpenter"); 
                addSubcategoryOption("Mechanic");  
            }
         subcategorySelect.disabled = false;
        }
        
        function addSubcategoryOption(subcategory) {
            var subcategorySelect = document.getElementById("subcategory");
            var option = document.createElement("option");
            option.value = subcategory;
            option.text = subcategory;
            subcategorySelect.appendChild(option);
        }
        function validateForm() {

        var company_name = document.getElementById("company_name");
        var company_nameError = document.getElementById('company_name_error');
        
        var category = document.getElementById("category");
        var categoryError = document.getElementById('category_error');

        var subcategory = document.getElementById("subcategory");
        var subcategoryError = document.getElementById('subcategory_error');

        var experience = document.getElementById("experience");
        var experienceError = document.getElementById('experience_error');

        var jobtype = document.getElementById("jobtype");
        var jobtypeError = document.getElementById('jobtype_error')

        var preferred_location = document.getElementById("preferred_location");
        var preferred_locationError = document.getElementById("preferred_location_error");
        
        var expected_salary = document.getElementById("expected_salary");
        var expected_salaryError = document.getElementById('expected_salary_error');


        var no_of_openings = document.getElementById("no_of_openings");
        var no_of_openingsError = document.getElementById('no_of_openings_error');

        var description = document.getElementById("description");
        var descriptionError = document.getElementById('description_error');
        

        if (company_name.value === '') {
            displayError('company_name is required.', 'company_name_error');
            return false;
        }
        else if (company_name.value !== '') {
            company_nameError.innerHTML ='';


        if (category.value === '') {
            displayError('Category is required.', 'category_error');
            return false;
        }
        else if (category.value !== '') {
        categoryError.innerHTML = '';
        }
        
        
        if (subcategory.value === "") {
           displayError('Please select a subcategory.', 'subcategory_error');
            return false;
        }
        else if (subcategory.value !== '') {
            subcategoryError.innerHTML = '';
        }


        if (experience.value.trim() === "") {
            displayError('Please enter a experience.','experience_error');
            return false;
        }
        else if (experience.value !== '') {
            experienceError.innerHTML = '';
        }



        if (preferred_location.value.trim() === "") {
            displayError('Please enter a preferred_location.','preferred_location_error');
            return false;
        }
        else if (preferred_location.value !== '') {
           preferred_locationError.innerHTML = '';
        }



        if (jobtype.value.trim() === "") {
            displayError('Please enter a jobtype.','jobtype_error');
            return false;
        }
        else if (jobtype.value !== '') {
            jobtype_error.innerHTML = '';
        }



        if (expected_salary.value.trim() === "") {
            displayError('Please enter a expected_salary.','expected_salary_error');
            return false;
        }
        else if ( expected_salary.value !== '') {
            expected_salary_error.innerHTML = '';
        }

        if (no_of_openings.value.trim() === "") {
            displayError('Please enter a no_of_openings.','no_of_openings_error');
            return false;
        }
        else if ( no_of_openings.value !== '') {
            no_of_openings_error.innerHTML = '';
        }


        
        if (description.value.trim() === "") {
            displayError('Please enter a description.','description_error');
            return false;
        }
        else if ( description.value !== '') {
            description_error.innerHTML = '';
        }



        return true; 
    }
    function displayError(message, elementId) {
        var errorElement = document.getElementById(elementId);
        errorElement.innerHTML = message;
        errorElement.style.color = 'red';
    }

}   
    </script>

</body>
</html>