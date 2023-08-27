<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Responsive Job View Table</title>
    <style>
        .btn-group > .btn {
            margin-right: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Job matched candidates</h2>
        <!-- <input type="button" class="btn btn-primary float-end" value="+ Add"> -->
        <div class="clearfix"></div>
        <br>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Degree</th>
                        <th>Percentage</th>
                        <th>Fresher/Experience</th>
                        <th>Skills</th>
                       
                        
                       
                        <th>Actions</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>Data 4</td>
                        <td>Data 5</td>
                       
                        
                        <td>
                            <div class="btn-group" role="group">
                                <button class="btn btn-primary">View</button>
                                <!-- <button class="btn btn-warning">Update</button>
                                <button class="btn btn-danger">Delete</button> -->
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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

    </script>
</body>
</html>
