<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Form</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Skill Form</h2>
        <form id="skillForm" method="post" action="index.php/projectController/skills">
            <div class="skill-entry">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" id="skillname" name="skillName" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="experience">Experience</label>
                        <select class="form-control" name="experience" id="skillname" required>
                            <option value="fresher">Fresher</option>
                            <option value="0-2">0-2 years</option>
                            <option value="2-5">2-5 years</option>
                            <option value="5-10">5-10 years</option>
                            <option value="10-20">10-20 years</option>
                            <option value="20-above">20 years above</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel" id="skilllevel" required>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="button" id="addSkillBtn">Add Skill</button>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>

        <ul id="addedSkills"></ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#addSkillBtn").click(function() {
                const clonedField = $(".skill-entry").first().clone();
                $("#skillForm").append(clonedField);
            });
            
            $("#skillForm").submit(function() {
                const skillDetails = [];
                
                $(".skill-entry").each(function() {
                    const skillName = $(this).find('input[name="skillName"]').val();
                    const experience = $(this).find('select[name="experience"]').val();
                    const skillLevel = $(this).find('select[name="skilllevel"]').val();
                    skillDetails.push(`${skillName} - Experience: ${experience}, Skill Level: ${skillLevel}`);
                });
                
                $("#addedSkills").empty();
                skillDetails.forEach(skill => {
                    $("#addedSkills").append(`<li>${skill}</li>`);
                });
            });
        });
    </script>
</body>
</html>
