<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
  <title>Document</title> -->
  <!-- <style>
    body {
background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
main {
padding-left: 240px;
}
}
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; 
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; 
}
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 



<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
            </a>

           
            <a href="<?php echo site_url('provider_update_registration'); ?>" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-lock fa-fw me-3"></i><span>Update Profile</span>
            </a>

            <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-line fa-fw me-3"></i><span>Add Jobs</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-pie fa-fw me-3"></i><span>Requirement Jobs</span>
            </a>
        </div>
    </div>
</nav> -->
 <!-- <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" >
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        
        <a href="/provider_update_registration.php" class="list-group-item list-group-item-action py-2 ripple" action="http://localhost/arramjobs/registration/active_menu"  method="post"><i
            class="fas fa-lock fa-fw me-3"></i><span>Update Profile</span></a>
            
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-line fa-fw me-3"></i><span>Jobs</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Candidate</span>
        </a> -->

       
<!-- </body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="styles.css">


<style>
  body {
  margin: 0;
  padding: 0;
  background:#f4f7f9;
  font-family: Arial, sans-serif;
}

header {
  background-color: #12192c;
  color: #f37e17;
  padding: 40px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 24px;
}

.user-profile {
  font-size: 18px;
}

.dashboard-container {
  display: flex;
}

.side-menu {
  background-color: #c6cae9;
  width: 250px;
  height: 100vh;
  font-weight:bold;
}

.side-menu ul {
  list-style: none;
  padding: 0;
}

.side-menu li {
  padding: 10px;
}

.side-menu a {
  text-decoration: none;
  color: #333;
  display: block;
}

.side-menu a:hover {
 color:#f37e17;
 font-weight:bold;
}

.content {
  flex: 1;
  padding: 20px;
}
.logo {
    width: 100px; 
    height: 50px; 
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo img {
    max-width: 100%; 
    max-height: 100%; 
}
.no-underline {
            text-decoration: none; 
            color: #f37e17; 
            font-size: 18px;
}
        
</style>
</head>
<body>
  <header>
    <div class="logo">
         <a href="dashboard_page.php"> <img src="images/aram.jpeg" alt="AramJobs Logo"></a>
      </div>
      <div class="user-profile" style="font-size: 30px; font-weight:bold;font-family: 'Playfair Display', serif">Welcome Arramjobs</div>
    <a href="login.php" style="color:#f37e17; "  class="no-underline">Logout</a>
  </header>
  <body>
  
  <div class="dashboard-container">
  <nav class="side-menu">
  <ul>
    <li><a href="provider_update_registration">Profile</a></li> 
    <li><a href="view_provider_addjob">Jobs</a></li>
    <li><a href="candidates.php">Candidates</a></li>
    <li><a href="wishlist.php">Wishlist</a></li>
  </ul>
</nav>
</body>
    <main class="content">
    
    </main>
  </div>
</body>
</html> -->










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
    <h1>Welcome to arramjobs </h1>
      </header>
 
  <div class="dashboard-container">
        <nav class="side-menu">
            <h3 class="px-3 py-2">Create profile</h3>
            <ul class="list-unstyled">
                <li><a href="javascript:void(0);" onclick="loadContent('provider_update_registration')" class="nav-link">Profile</a></li>
                <li><a href="javascript:void(0);" onclick="loadContent('view_provider_addjob')" class="nav-link">jobs</a></li>
                <li><a href="javascript:void(0);" onclick="loadContent('exp')" class="nav-link">Candidate</a></li>
                <li><a href="javascript:void(0);" onclick="loadContent('pro')" class="nav-link">Wishlist</a></li>
              
            </ul>
        </nav>

        <main class="content p-3" id="dashboard-content">
          
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
   <script>
        function loadContent(page) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('dashboard-content').innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', page, true);
            xhr.send();
        }
    </script>

</body>
</html>