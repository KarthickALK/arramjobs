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
    <h1>Experience Details Form</h1>
    <form name="experienceform" method="post" onsubmit="return validateForm()" action="pro">
    <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
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
                <select class="form-control" id="subcategory" name="subcategory" disabled>
                    <option value="">Select a Subcategory</option>
                </select>
                <div id="subcategory_error" class="error"></div>
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
            <label for="company name">Company Name</label>
            <input type="text" class="form-control" id="companyname" name="companyname" >
            <div id="companyname_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="role"> Role in the company </label>
            <input type="text" class="form-control" id="role" name="role">
            <div id="role_error" class="error"></div>
</div>
        <h1>Previous Employer details</h1>
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
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
        function updateSubcategories() {
            var categorySelect = document.getElementById("category");
            var subcategorySelect = document.getElementById("subcategory");
            var selectedCategory = categorySelect.value;
            
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
        var category = document.getElementById("category");
        var subcategory = document.getElementById("subcategory");
        var experience = document.getElementById("experience");
        var companyname = document.getElementById("companyname");
        var role = document.getElementById("role");
        var name = document.getElementById("name");
        var phonenumber = document.getElementById("phonenumber");
        var email = document.getElementById("email");

        if (category.value === '') {
            displayError('Category is required.', 'category_error');
            return false;
        }
        
        if (subcategory.value === '') {
            displayError('Please select a subcategory.', 'subcategory_error');
            return false;
        }
        if(experience.value === 'fresher') {
            hideFields();
        }
        else if (experience.value === '') {
            displayError('Please select a experience.', 'experience_error');
            return false;
        } 
        if (companyname.value === '') {
            displayError('Please enter a company name.','companyname_error');
            return false;
        }
        
        if (role.value === '') {
            displayError('Please enter a role.', 'role_error');
            return false;
        }

        if(companyname.value === ''){
            displayError('please enter a company name', 'companyname_error');
            return false;
        }
        if(role.value === ''){
            displayError('please enter a role', 'role_error');
            return false;
        }
        if(name.value === ''){
            displayError('please enter a employer name', 'name_error');
            return false;
        }


        
        return true; 
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

</body>
</html>
