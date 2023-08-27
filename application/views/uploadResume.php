<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Upload Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .container {
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  width: 50%; 
  margin: 50px auto; 

}
</style>
</head>
<body>
    <div class="container mt-4">
        <h2>Upload resume</h2>
        <form id="resumeForm" method="post" onsubmit="return validateForm()" action="resume">
        <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
            <div class="form-group">
                <label for="resumeFile">Upload Resume</label>
               
                <input type="file" name="resumeFile" accept=".pdf,.doc,.docx">
<?php if (!empty($existingResume) && isset($existingResume['resume'])): ?>
    <p>Existing Resume: <?php echo $existingResume['resume']; ?></p>
<?php endif; ?>

            </div>
            <button class="btn btn-primary" type="submit">Upload</button>
        </form>
    </div>
    <script>
        reusme = document.getElementById('resumeFile');
        function validateForm(){
            if(resume.value===''){
                alert('please choose a resume!');
            }
        }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
