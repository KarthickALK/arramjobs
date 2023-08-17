<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
/* Reset some default styles */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
    
}

body {
    background: #f4f7f9;
    font-family: Arial, sans-serif;
    left:0;
    right:0;
    width:100%;
}

/* Header styles */
header {
    margin-left:0px;
    background-color: #1976D2;
    color: white;
    padding: 20px;
    text-align: center;
    position: fixed; /* Fixed position to keep the header at the top */
    width: 100%; /* Ensure full width */
    top: 0; /* Position at the top */
    z-index: 1; /* Ensure header is above other content */
}

/* Main content container */
.dashboard-container {
    display: flex;
    margin-top: 80px; /* Ensure content starts below the fixed header */
}

/* Side menu styles */
.side-menu {
    margin-top: 90px;
    background-color: #FFC107;
    width: 250px;
    height: 100vh;
    font-weight: bold;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    padding-top: 3rem;
   }

.side-menu h3 {
    padding: 10px 20px;
    margin: 0;
    font-weight: bold;
    background-color: #FFA000;
    color: #fff;
}

.side-menu ul {
    list-style: none;
    padding: 0;
}

.side-menu li {
    padding: 10px 20px;
    border-bottom: 1px solid #ccc;
}

.side-menu a {
    text-decoration: none;
    color: #333;
    display: block;
    font-size: 16px;
}

.side-menu a:hover {
    color: #f37e17;
    font-weight: bold;
}

/* Main content styles */
.content {
    flex: 1;
    padding: 20px;
    margin-left: 250px;
}

@media (max-width: 768px) {
    .dashboard-container {
        flex-direction: column;
    }

    .content {
        margin-left: 0;
    }

    .side-menu {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
    <header>
        <h1>Welcome to arramjobs</h1>
</header>
<div class="dashboard-container">
<main class="content p-3" id="dashboard-content">
    </main>

<nav class="side-menu">
    <h3 class="px-3 py-2">Create profile</h3>
    <ul class="list-unstyled">
        <li><a href="javascript:void(0);" onclick="loadForm('profile')">Basic Details</a></li>
        <li><a href="javascript:void(0);" onclick="loadForm('edu')">Education Details</a></li>
        <li><a href="javascript:void(0);" onclick="loadForm('exp')">Experience Details</a></li>
        <!-- <li><a href="javascript:void(0);" onclick="loadForm('pro')">Project Details</a></li>
        <li><a href="javascript:void(0);" onclick="loadForm('area')">Area Of Interest</a></li>
        <li><a href="javascript:void(0);" onclick="loadForm('skills')">Skills Details</a></li>
        <li><a href="javascript:void(0);" onclick="loadForm('resume')">Upload Resume</a></li> -->
    </ul>
</nav>

<script>
function loadForm(formName) {
  var contentElement = document.getElementById('dashboard-content');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      contentElement.innerHTML = this.responseText;

    }
  };
  xhttp.open('GET', formName, true);
  xhttp.send();
}





</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



</body> 
</html>