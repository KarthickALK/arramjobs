<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Area of Interest Form</title>
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
    <div class="container mt-5">
        <h1>Area of Interest Form</h1>
        <form method="post" onsubmit="return validateForm()" action="area">
        <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
        <div id="educationFormsContainer">
        <div class="education-form-container">    
                 <div class="form-group">
                <label for="category">Category *</label>
                <select class="form-control" id="category" name="category[]" value="<?php echo isset($value['interst_category_id']) ? $value['interest_category_id'] : ''; ?>" onchange="toggleCategoryFields()" >
                    <option value="">Select a category</option>
                    <option value="it">Information Technology</option>
                    <option value="health">Health Care</option>
                    <option value="others">Others</option>
                </select>
                </div>
            <div class="form-group"">
                <label for="subcategory">Subcategory *</label>
                <select class="form-control" id="subcategory" name="subcategory[]" value="<?php echo isset($value['interst_sub_category_id']) ? $value['interst_sub_category_id'] : ''; ?>" >
                    <option value="">Select a sub category </option>
                </select>
            </div>
            <div class="form-group" id="otherCategoryFields" style="display: none;">
                <label for="customCategoryInput">Custom Category</label>
                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput[]" placeholder="Enter custom category">
                <label for="customSubcategoryInput">Custom Subcategory</label>
                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput[]" placeholder="Enter custom subcategory">
            </div>
            <div class="form-group" id="customCategory" style="display: none;">
                <label for="customCategoryInput">Category Name</label>
                <input type="text" class="form-control" id="customCategoryInput" value="<?php echo isset($value['other_interst_category']) ? $value['other_interest_category'] : ''; ?>" name="customCategoryInput[]">
            </div>
      
      <div class="form-group" id="customSubcategory" style="display: none;">
        <label for="customSubcategoryInput"> Subcategory Name</label>
        <input type="text" class="form-control" id="customSubcategoryInput" value="<?php echo isset($value['other_sub_interst_category']) ? $value['other_sub_interst_category'] : ''; ?>" name="customSubcategoryInput[]">
      </div>

            <div class="form-group">
                <label for="preferred-location">Preferred Location to work</label>
                <input type="text" class="form-control" id="preferred-location" value="<?php echo isset($value['prefered_location']) ? $value['prefered_location'] : ''; ?>" name="preferred-location[]">

                <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
            </div>
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" class="form-control" id="experience" value="<?php echo isset($value['experience']) ? $value['experience'] : ''; ?>" name="experience[]">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description[]" value="<?php echo isset($value['description']) ? $value['description'] : ''; ?>" rows="3"></textarea>
            </div>
            <div class="form-group">
                        <label for="jobtype">Job Type</label>
                        <select class="form-control" id="jobtype" name="jobtype[]">
                            <option value="">Select a job type</option>
                            <option value="parttime">Part Time</option>
                            <option value="fulltime">Full Time</option>
                            <option value="both">Both</option>
                        </select>
                    </div>
                
            <div class="form-group">
                <label for="expected-salary">Expected Salary</label>
                <input type="text" class="form-control" id="expected-salary" name="expected-salary[]">
            </div>
            <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        var educationFormCount = 1;



        function addEducationForm(button) {
            educationFormCount++;
            var newEducationFormContainer = document.createElement('div');
            newEducationFormContainer.className = 'education-form-container';

            // Clone the original form
            var originalForm = document.querySelector('.education-form-container');
            var newForm = originalForm.cloneNode(true);
            newForm.id = 'educationform_' + educationFormCount;

            // Clear the values in the new form
            clearFormFields(newForm);

            // Append the new form to the container
            newEducationFormContainer.appendChild(newForm);
            document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

            // Move the "Submit" button to the new form
            var submitButton = document.querySelector('button[type="submit"]');
            newForm.appendChild(submitButton);

            // Hide the "Add" button in the previous form
            button.style.display = "none";
        }    
    function clearFormFields(form) {
        var fieldsToClear = form.querySelectorAll('input, select');
        for (var i = 0; i < fieldsToClear.length; i++) {
        fieldsToClear[i].value = '';
        }
        }
        function toggleCategoryFields() {
            var category = document.getElementById("category").value;
            var subcategorySelect = document.getElementById("subcategory");
            var otherCategoryFields = document.getElementById("otherCategoryFields");

            // Clear existing options and hide the otherCategoryFields
            subcategorySelect.innerHTML = "";
            otherCategoryFields.style.display = "none";

            if (category === "it") {
                addSubcategoryOption("Architect", subcategorySelect);
                addSubcategoryOption("Developer", subcategorySelect);
                addSubcategoryOption("Tester", subcategorySelect);
            } else if (category === "health") {
                addSubcategoryOption("Doctor", subcategorySelect);
                addSubcategoryOption("Nurse", subcategorySelect);
            } else if (category === "others") {
                addSubcategoryOption("others", subcategorySelect);
                otherCategoryFields.style.display = "block";
            } else {
                // Handle other categories here
                addSubcategoryOption("Other Subcategory", subcategorySelect);
            }
        }


        function validateForm() {
            var category = document.getElementById("category").value;
            var subcategory = document.getElementById("subcategory").value;
            var preferredLocation = document.getElementById("preferred-location").value;
            var jobtype = document.getElementById("jobtype").value;
            var experience = document.getElementById("experience").value;
            var description = document.getElementById("description").value;

            if (category === "") {
                alert("Please select a category.");
                return false;
            }

            if (subcategory === "" && category !== "") {
                alert("Please select a subcategory.");
                return false;
            }
            if (preferredLocation.trim() === "") {
                alert("Please provide a preferred location.");
                return false;
            }

            if (experience.trim() === "") {
                alert("Please provide your experience.");
                return false;
            }

            if (jobtype.trim() === "") {
                alert("Please select your job type.");
                return false;
            }
            

            if (description.trim() === "") {
                alert("Please provide a description.");
                return false;
            }

            return true;
        }
        
        // Function to update the subcategories based on the selected category

        // Helper function to add a subcategory option to the select element
        function addSubcategoryOption(value, selectElement) {
            var option = document.createElement("option");
            option.value = value.toLowerCase();
            option.text = value;
            selectElement.appendChild(option);
        }
          
    </script>
</body>
</html>
