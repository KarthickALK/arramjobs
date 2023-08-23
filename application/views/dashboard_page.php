<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS and other necessary stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
 header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        }
.main {
        margin-top: 80px; /* Space for the fixed header */
        padding: 20px;
        }
h4{
    color: white;
    margin-left:15px;
}
.sidebar {

    position: fixed;
    top: 100px;
    bottom: 0;
    left: 0;
    z-index: 100;
    padding: 48px 0;
    box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
    background-color:#FF981F;
}

.sidebar-sticky {
    position: fixed;
}

/* Style the active menu item */
.nav-item.active .nav-link {
    background-color: 	#FF4500;
    color: #fff;
}

/* Adjust iframe height */
#iframe {
    height: calc(100vh - 48px); /* Subtract sidebar height */
}

/* Optional: Style the links in the sidebar */
.nav-link {
    color: white;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
}

.nav-link:hover {
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
}

/* Optional: Add some margin and padding to the main content */
#dashboard-content {
    margin-top: 80px;
    padding: 20px;
    
}
</style>
</head>
<body>
<header class="bg-primary text-white p-3">
        <h1 class="text-center">Welcome to arram jobs</h1>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block  sidebar">
                <div class="sidebar-sticky">
                    <h4><b>Dashboard</b></h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" id="profile-link" href="http://localhost/arramjobs/Registration/provider_update_registration">
                                Update Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="edu-link" href="job_view_table">
                             Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="exp-link" href="job_matched_table">
                                Candidates
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pro-link" href="job_matched_table">
                                Wishlist
                            </a>
                        </li>
                         <!-- <li class="nav-item">
                            <a class="nav-link" id="area-link" href="job_wishlist_candidates">
                                Area of Interest
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="skills-link" href="skills">
                                Skill Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="resume-link" href="resume">
                                Upload Resume
                            </a>
                        </li> --> 
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div id="dashboard-content">
                    <iframe id="form-iframe" src="" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
                </div>
            </main>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- ... Your previous HTML code ... -->

<script>
    $(document).ready(function() {
        // Load the default content when the page loads
        // $('#form-iframe').attr('src', 'profile');

        // Handle menu item clicks
        $('#profile-link').click(function(e) {
            e.preventDefault();
            $('#form-iframe').attr('src', 'http://localhost/arramjobs/Registration/provider_update_registration');
        });

        $('#edu-link').click(function(e) {
            e.preventDefault();
            $('#form-iframe').attr('src', 'job_view_table');
        });

        $('#exp-link').click(function(e) {
            e.preventDefault();
            $('#form-iframe').attr('src', 'job_matched_table');
        });

        // Handle other menu item clicks similarly
        $('#pro-link').click(function(e) {
            e.preventDefault();
            $('#form-iframe').attr('src', 'job_wishlist_candidates');
        });

        // $('#area-link').click(function(e) {
        //     e.preventDefault();
        //     $('#form-iframe').attr('src', 'area');
        // });

        // $('#skills-link').click(function(e) {
        //     e.preventDefault();
        //     $('#form-iframe').attr('src', 'skills');
        // });

        // $('#resume-link').click(function(e) {
        //     e.preventDefault();
        //     $('#form-iframe').attr('src', 'resume');
        // });
    });
</script>

</body>
</html>