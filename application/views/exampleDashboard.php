<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Sidebar</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* #education{
        color:
    } */
        #candidateResume {
            color: white;
            background-color: #F8802A;
            font-weight: bold;
        }

        /* .bg-warning{
        background-color: #F8802A;
    } */
        #educationTable {
            width: 100%;
        }

        .btn-warning:hover {
            background-color: #2d76d9;
        }

        .bg-secondary {
            background-color: navy !important;
        }

        #updatesubmit {
            background-color: #F8802A !important;
            color: white;
            font-size: large;
        }

        #search {

            margin-left: 950px;
        }

        #categorys {
            margin-left: 300px;
            width: 40%;
        }

        #subcategorys {
            width: 50%;
        }

        /* label{
            margin-left: 330px;
        } */
        #lab {
            margin-left: 10px;
        }

        #lab {
            margin-left: 10px;
        }

        .full {
            align-items: center;


            background-color: #f1f1f1;

        }

        .bg-primary {
            background-color: navy !important;
        }

        .bg-dark {
            background-color: rgb(243, 139, 12) !important;
        }


        /* Adjust sidebar height to match content height */
        .sidebar {
            height: 200vh;
        }

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
            width: 100%;
            margin: 50px auto;
        }

        h3 {
            text-align: center;
            margin-bottom: 30px;
            margin-left: -30px;
            color: navy;
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
            background-color: #f39c12 !important;
        }

        .btn-primary {
            /* background-color: #4285f4; */
            border: none;
            background-color: #F8802A;
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

        .next-button {
            float: right;
        }

        #con {
            width: 50%;
        }

        #addnew {
            width: 50%;
        }

        #updateaddnew {
            width: 50%;
        }

        /* Update header background color to a darker navy */
        /* Header styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120px;
            z-index: 1000;
            background-color: navy;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h2 {
            color: white;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(-50%, -50%);
            color: white;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);

        }

        header nav ul li {
            display: inline-block;
            margin-left: 50px;
        }

        header nav ul li a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            /* background-color: #f39c12 ;  */
        }

        header nav ul li a:hover {
            /* background-color: #007bff;
    .btn-primary{ */
            /* background-color: #f39c12 ; */
            color: #F8802A;
            text-decoration: none;
            /* } */
        }


        .logo {
            margin-top: 50px;
        }

        .sidebar {
            position: fixed;
            width: 18%;
            /* Slightly increased width for more content space */
            top: 110px;
            /* Adjusted top spacing */
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0;
            /* Reduced padding for a cleaner look */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Adjusted shadow */
            background-color: #F8802A;
            /* A darker, professional color */
        }

        .nav-link {
            display: block;
            color: #ffffff;
            font-weight: bold;
            text-decoration: none;
            padding: 20px 20px;
            /* Added padding for better touch interaction */
        }

        /* 
.nav-link:hover {
    background-color: #007bff;
}
.nav-item.active .nav-link {
    background-color: #FF4500;
} */

        .nav-item h3 {
            margin: 0;
            padding: 10px 20px;
            color: white;
        }

        #view {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid #f39c12;
            background-color: #f39c12;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #view:hover {
            background-color: transparent;
            /* Change background on hover */
            color: #f39c12;
            /* Change text color on hover */
        }

        #updates {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid navy;
            /* Border color (adjust as needed) */
            background-color: navy;
            /* Background color (adjust as needed) */
            color: #fff;
            /* Text color */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #updates:hover {
            background-color: transparent;
            /* Change background on hover */
            color: navy;
            /* Change text color on hover */
        }

        #deletes {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid red;
            /* Border color (adjust as needed) */
            background-color: red;
            /* Background color (adjust as needed) */
            color: #fff;
            /* Text color */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #deletes:hover {
            background-color: transparent;
            /* Change background on hover */
            color: red;
            /* Change text color on hover */
        }

        #regis {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid navy;
            /* Border color (adjust as needed) */
            background-color: navy;
            /* Background color (adjust as needed) */
            color: #fff;
            /* Text color */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #regis:hover {
            background-color: transparent;
            /* Change background on hover */
            color: navy;
            /* Change text color on hover */
        }

        #tamil {
            color: white;
            margin-left: 20px;
        }
    </style>

</head>
<header>
    <div class="logo">
        <h5 id="tamil"> அறம் வேலைவாய்ப்பு</h5>
    </div>

    <nav>
        <ul>
            <li><a href="http://localhost/arramjobs/wordpress">Home</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#job-seekers">Seekers</a></li>
            <li><a href="#job-providers">Providers</a></li>
            <li><a href="#blog">Blog</a></li>
            <!-- <li><a href="#login">Login</a></li> -->
        </ul>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <div id="google_translate_element"></div>
  <script src="https://translate.Google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
  <script>
    function googleTranslateElementInit(){
      new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element');
    }
    </script> -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class=" sidebar col-md-3 col-lg-2 d-md-block">
                <div class="position-sticky">

                    <ul class="nav flex-column">
                        <br>

                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/arramjobs/providerController/dashboard">
                                Provider Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/arramjobs/providerController/providerUpdateRegistration">
                                Provider Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/arramjobs/providerController/jobViewTable">
                                Provider Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/arramjobs/providerController/matchedCandidate">
                                Candidates List
                            </a>
                        </li>
                        <!-- <li class="nav-item">
              <a class="nav-link" href="http://localhost/arramjobs/providerController/jobWishlistCandidates">
              Candidate Wishlists
              </a>
            </li> -->

                        <!-- Add more menu items as needed -->
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <?php
                if ($this->data['method'] == "dashboard") {
                ?>
                    <h1 class="mt-3">
                        <center>Welcome To Job Provider Dashboard</center>
                    </h1>
                <?php
                } else if ($this->data['method'] == "jobview") {
                ?>
                    <div class="container mt-5">
                        <h3 class="text-center">Jobs</h3>
                        <!-- <input type="button" class="btn btn-primary float-end" value="+ Add" onclick="registration/provider_addjob"> -->
                        <!-- <a id="regis" href="provider_addjob">+ Add</a></p>> -->
                        <a id="regis" href="providerAddJob">+ Add jobs</a>

                        <div class="clearfix"></div>
                        <br>


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company Name</th>
                                        <th>Job Title</th>
                                        <th>Location</th>
                                        <th>Job Type</th>
                                        <th>Salary</th>
                                        <th>Experience</th>
                                        <th>Number of Openings</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($this->data['providerJobs'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $value['id'] ?></td>
                                            <td><?php echo $value['company_name'] ?></td>
                                            <td><?php echo $value['jobSubCategory'] ?> <?php echo $value['jobCategory'] ?></td>
                                            <td><?php echo $value['location'] ?></td>
                                            <td><?php echo $value['job_type'] ?></td>
                                            <td><?php echo $value['salary'] ?></td>
                                            <td><?php echo $value['experience'] ?></td>
                                            <td><?php echo $value['number_of_openings'] ?></td>

                                            <td>
                                                <div class="btn-group" role="group">
                                                    <!-- <button class="btn btn-primary">View</button> -->
                                                    <a id="view" href="http://localhost/arramjobs/providerController/jobMatchedTable/<?php echo $value['jobCategory'] ?>">View</a>
                                                    <a id="updates" href="http://localhost/arramjobs/providerController/updateAddNew/<?php echo $value['id'] ?>">Update</a>
                                                    <!-- <a id="view" onclick="confirm('Are you sure , you want to delete..?')" href="deleteAddJob">delete</a> -->
                                                    <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="http://localhost/arramjobs/providerController/deleteAddJob/<?php echo $value['id'] ?>">delete</a>


                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>

                        </div>

                    </div>
                <?php
                } else if ($this->data['method'] == "updateJob") {
                ?>

                    <div class="containers px-4 text-center">
                        <div class="row gx-5">
                            <div class="col">

                            </div>

                        </div>
                    </div>
                    <br>


                    <div class="container" id="con">
                        <h3>
                            <center>Update Profile</center>
                        </h3>
                        <!-- <h2 class="text-white bg-secondary rounded-5 ms-5 me-5 shadow">Provider Registration Form</h2> -->
                        <!-- <h3 class="d-inline-flex p-2 ms-5 me-1 bg-info text-white rounded-3 shadow">Provider Registration Form</h3> -->

                        <div>
                            <?php
                            foreach ($this->data['providerDetail'] as $key => $value) {
                            ?>
                                <!-- <h4 class="grid-text-center d-flex justify-content-start text-dark bg-secondary bg-opacity-5 rounded-3 ms-5 me-5 mt-3"><center>Company Details</center></h4> -->
                                <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 me-5 text-white fs-5">Company Details</div>

                                <form name="forms" action="http://localhost/arramjobs/providerController/update_record" method="post">
                                    <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                                    <div class=" mb-3 mt-4  ms-5 me-5 w-55  ">
                                        <label for="name" class="form-label">Name:</label>
                                        <input type="text" class="form-control" value=<?php echo $value['company_name']; ?> id="name" name="name" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                                        <p id="nameerr" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="phno" class="form-label">Number:</label>
                                        <input type="number" class="form-control" value=<?php echo $value['company_mobile_number']; ?> id="phno" name="phno">
                                        <p id="pherr" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="email" class="form-label">Email-ID:</label>
                                        <input type="email" class="form-control" value=<?php echo $value['company_email']; ?> id="email" name="email" placeholder="enter email">
                                        <p id="mailerr" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="addr" class="form-label">street address:</label>
                                        <input type="address" class="form-control" value=<?php echo $value['street_address']; ?> id="addr" name="addr" placeholder="enter address">
                                        <p id="adderr" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="addr" class="form-label">Landmark:</label>
                                        <input type="address" class="form-control" value=<?php echo $value['Landmark']; ?> id="landmark1" name="landmark1" placeholder="enter address">
                                        <p id="landerr1" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="addr" class="form-label">City:</label>
                                        <input type="address" class="form-control" value=<?php echo $value['City']; ?> id="city1" name="city1" placeholder="enter city">
                                        <p id="cityerr1" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="addr" class="form-label">State:</label>
                                        <input type="address" class="form-control" value=<?php echo $value['state']; ?> id="state1" name="state1" placeholder="enter state">
                                        <p id="stateerr1" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="addr" class="form-label">District:</label>
                                        <input type="address" class="form-control" value=<?php echo $value['district']; ?> id="district1" name="district1" placeholder="enter district">
                                        <p id="diserr1" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="addr" class="form-label">Pincode:</label>
                                        <input type="number" class="form-control" value=<?php echo $value['pincode']; ?> id="pincode1" name="pincode1">
                                        <p id="pinerr1" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="file" class="form-label">Logo:</label>
                                        <input type="file" class="form-control" value=<?php echo $value['company_logo']; ?> id="file" name="file">
                                        <p id="logerr" style="color: red;"></p>
                                    </div>
                                    <br>

                                    <!-- <h3 class=" grid-text-center d-flex justify-content-start text-dark bg-light bg-opacity-50 rounded-3 ms-5 me-5 mt-3"><center>Contact person details</center></h3> -->
                                    <!-- <div class="grid-text-center p-2 border bg-light  rounded-1 ms-5 me-5">Contact person details</div> -->
                                    <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 fs-5 me-5 text-light">Contact person details</div>

                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="name1" class="form-label">Name:</label>
                                        <input type="text" class="form-control" value=<?php echo $value['name']; ?> id="name1" name="name1" placeholder="enter name" onkeypress="return allowOnlyLetters1(event, this)">
                                        <p id="nameerr1" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="role" class="form-label">Role:</label>
                                        <input type="text" class="form-control" value=<?php echo $value['role']; ?> id="role" name="role" placeholder="enter role">
                                        <p id="rolerr" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="phno1" class="form-label">Mobile Number:</label>
                                        <input type="number" class="form-control" value=<?php echo $value['mobile_number']; ?> id="phno1" name="phno1">
                                        <p id="pherr1" style="color: red;"></p>
                                    </div>
                                    <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                        <label for="mail1" class="form-label">Email-ID:</label>
                                        <input type="email" class="form-control" value=<?php echo $value['email']; ?> id="mail1" name="mail1" placeholder="enter email">
                                        <p id="mailerr1" style="color: red;"></p>
                                    </div>

                                    <div>
                                        <button class="btn  ms-5 mt-3 mb-5  text-white w-100" id="updatesubmit" onclick="return group()">
                                            <center>Submit</center>
                                        </button>

                                    </div>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <br>
                    <br>




        </div>
        <!-- <script src="regvalid.js"></script> -->
        <script type="text/javascript">
            function allowOnlyLetters(e, t) {
                if (window.event) {
                    var charCode = window.event.keyCode;
                } else if (e) {
                    var charCode = e.which;
                } else {
                    return true;
                }

                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {

                    document.getElementById("nameerr").innerHTML = "";
                    document.forms.phno.focus();
                    return true;
                } else if (((charCode > 48) && (charCode < 57))) {

                    document.getElementById("nameerr").innerHTML = "Numbers not allowed Please enter only letters";
                    document.forms.name.focus();
                    return false;

                }
            }

            function allowOnlyLetters1(e, t) {
                if (window.event) {
                    var charCode = window.event.keyCode;
                } else if (e) {
                    var charCode = e.which;
                } else {
                    return true;
                }

                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {

                    document.getElementById("nameerr1").innerHTML = "";
                    document.forms.phno1.focus();
                    return true;
                } else if (((charCode > 48) && (charCode < 57))) {

                    document.getElementById("nameerr1").innerHTML = "Numbers not allowed Please enter only letters";
                    document.forms.name1.focus();
                    return false;

                }
            }


            function group() {
                var x = document.forms.name.value;
                var p = document.forms.phno.value;
                var a = document.forms.email.value;
                var y = document.forms.addr.value;
                var y1 = document.forms.landmark1.value;
                var y2 = document.forms.city1.value;
                var y3 = document.forms.pincode1.value;
                var y4 = document.forms.state1.value;
                var y5 = document.forms.district1.value;
                var l = document.forms.file.value;
                var x1 = document.forms.name1.value;
                var p1 = document.forms.phno1.value;
                var a1 = document.forms.mail1.value;
                var r = document.forms.role.value;

                if (x != "") {
                    if (x.length < 4) {
                        document.getElementById("nameerr").innerHTML = "* Name should be in atleast 4 characters";
                        return false;
                    } else if (x.length > 50) {
                        document.getElementById("nameerr").innerHTML = "* Name should not exceed 50 characters";
                        return false;
                    } else {
                        document.getElementById("nameerr").innerHTML = "";

                    }
                } else if (x == "") {
                    var namesms1 = "* Name must be filled out";
                    document.getElementById("nameerr").innerHTML = namesms1;
                    document.forms.name.focus();
                    return false;
                }

                if (p != "") {
                    if (p.length !== 10) {
                        document.getElementById("pherr").innerHTML = "Phone number  must be in 10 digits";
                        return false;
                    } else if (p.length > 11) {
                        document.getElementById("pherr1").innerHTML = "phone number should not exceed 10 digits";
                        return false;
                    } else {
                        document.getElementById("pherr").innerHTML = "";

                    }
                } else if (p == "") {
                    var phsms = "phone number must be filled out";
                    document.getElementById("pherr").innerHTML = phsms;
                    document.forms.phno.focus();
                    return false;

                }

                if (a == "") {
                    var emailsms = "email must be filled out";
                    document.getElementById("mailerr").innerHTML = emailsms;
                    document.forms.email.focus();
                    return false;
                } else if (a != "") {
                    // document.getElementById("mailerr").innerHTML="";
                    /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a)) {
                        document.getElementById("mailerr").innerHTML = "";
                        // return (true);
                    } else {
                        document.getElementById("mailerr").innerHTML = "you have entered an invalid email address";
                        return false;
                    }
                }

                if (y != "") {
                    if (y.length < 3) {
                        document.getElementById("adderr").innerHTML = "* street address should be in atleast 3 characters";
                        return false;
                    } else if (y.length > 100) {
                        document.getElementById("adderr").innerHTML = "* street address should not exceed 100 characters";
                        return false;
                    } else {
                        document.getElementById("adderr").innerHTML = "";
                    }
                } else {
                    var adderr = "* street address must be in filled out";
                    document.getElementById("adderr").innerHTML = adderr;
                    document.forms.addr.focus();
                    return false;
                }

                if (y1 != "") {
                    if (y1.length < 3) {
                        document.getElementById("landerr1").innerHTML = "* landmark should be in atleast 3 characters";
                        return false;
                    } else if (y1.length > 100) {
                        document.getElementById("landerr1").innerHTML = "* landmark should not exceed 100 characters";
                        return false;
                    } else {
                        document.getElementById("landerr1").innerHTML = "";
                    }
                } else {
                    var landmark = "* landmark must be in filled out";
                    document.getElementById("landerr1").innerHTML = landmark;
                    document.forms.landmark1.focus();
                    return false;
                }


                if (y2 != "") {
                    if (y2.length < 3) {
                        document.getElementById("cityerr1").innerHTML = "* city should be in atleast 3 characters";
                        return false;
                    } else if (y2.length > 100) {
                        document.getElementById("cityerr1").innerHTML = "* city should not exceed 100 characters";
                        return false;
                    } else {
                        document.getElementById("cityerr1").innerHTML = "";
                    }
                } else {
                    var city = "* city must be in filled out";
                    document.getElementById("cityerr1").innerHTML = city;
                    document.forms.city1.focus();
                    return false;
                }

                if (y4 != "") {
                    if (y4.length < 3) {
                        document.getElementById("stateerr1").innerHTML = "* state should be in atleast 3 characters";
                        return false;
                    } else if (y2.length > 100) {
                        document.getElementById("stateerr1").innerHTML = "* state should not exceed 100 characters";
                        return false;
                    } else {
                        document.getElementById("stateerr1").innerHTML = "";
                    }
                } else {
                    var state = "* state must be in filled out";
                    document.getElementById("stateerr1").innerHTML = state;
                    document.forms.state1.focus();
                    return false;
                }



                if (y5 != "") {
                    if (y5.length < 3) {
                        document.getElementById("diserr1").innerHTML = "* district should be in atleast 3 characters";
                        return false;
                    } else if (y2.length > 100) {
                        document.getElementById("diserr1").innerHTML = "* district should not exceed 100 characters";
                        return false;
                    } else {
                        document.getElementById("diserr1").innerHTML = "";
                    }
                } else {
                    var district = "* district must be in filled out";
                    document.getElementById("diserr1").innerHTML = district;
                    document.forms.district1.focus();
                    return false;
                }





                if (y3 != "") {
                    if (y3.length !== 6) {
                        document.getElementById("pinerr1").innerHTML = "pincode  must be in 6 digits";
                        return false;
                    } else if (y3.length > 6) {
                        document.getElementById("pinerr1").innerHTML = "pincode should not exceed 6 digits";
                        return false;
                    } else {
                        document.getElementById("pinerr1").innerHTML = "";

                    }
                } else if (y3 == "") {
                    var pincode = "phone number must be filled out";
                    document.getElementById("pinerr1").innerHTML = pincode;
                    document.forms.pincode1.focus();
                    return false;

                }


                if (x1 != "") {
                    if (x1.length < 4) {
                        document.getElementById("nameerr1").innerHTML = "* Name should be in atleast 4 characters";
                        return false;
                    } else if (x1.length > 50) {
                        document.getElementById("nameerr1").innerHTML = "* Name should not exceed 50 characters";
                        return false;
                    } else {
                        document.getElementById("nameerr1").innerHTML = "";

                    }
                }


                // if(l=="")
                // {
                //     var logsms="*Please upload your file";
                //     document.getElementById("logerr").innerHTML=logsms;
                //     document.forms.file.focus();
                //     return false;
                // }
                // else{
                //     document.getElementById("logerr").innerHTML="";

                // }
                if (x1 == "") {
                    var namesms2 = "* Name must be filled out";
                    document.getElementById("nameerr1").innerHTML = namesms2;
                    document.forms.name1.focus();
                    return false;
                }


                if (r != "") {
                    if (y.length > 50) {
                        document.getElementById("rolerr").innerHTML = "* Address should not exceed 50 characters";
                        return false;
                    } else {
                        document.getElementById("rolerr").innerHTML = "";
                    }
                } else {
                    var adderr = "* role must be in filled out";
                    document.getElementById("rolerr").innerHTML = adderr;
                    document.forms.role.focus();
                    return false;
                }

                if (p1 != "") {
                    if (p1.length !== 10) {
                        document.getElementById("pherr1").innerHTML = "Phone number  must be in 10 digits";
                        return false;
                    } else if (p1.length > 11) {
                        document.getElementById("pherr1").innerHTML = "phone number should not exceed 10 digits";
                        return false;
                    } else {
                        document.getElementById("pherr1").innerHTML = "";

                    }
                } else if (p1 == "") {
                    var phsms1 = "phone number must be filled out";
                    document.getElementById("pherr1").innerHTML = phsms1;
                    document.forms.phno1.focus();
                    return false;

                }


                if (a1 == "") {
                    var emailsms1 = "email must be filled out";
                    document.getElementById("mailerr1").innerHTML = emailsms1;
                    document.forms.mail1.focus();
                    return false;
                } else if (a1 != "") {
                    // document.getElementById("mailerr").innerHTML="";
                    /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a1)) {
                        document.getElementById("mailerr1").innerHTML = "";
                        // return (true);
                    } else {
                        document.getElementById("mailerr1").innerHTML = "you have entered an invalid email address";
                        return false;
                    }
                }

            }
        </script>
    <?php
                } else if ($this->data['method'] == "addnew") {
    ?>
        <div class="container" id="addnew">
            <h3>Add New Jobs</h3>
            <form name="experienceform" action="http://localhost/arramjobs/providerController/insertJob" method="post" onsubmit="return validateForm()">

                <div class="form-group">
                    <label for="company_name">Company Name:</label>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                    <div id="company_name_error" class="error"></div>
                </div>

                <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                        <option value="">Select a Category</option>
                        <option value="architech">Architech</option>
                        <option value="Developer">Developer</option>
                        <option value="tester">Tester</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="datascience">Data Scientist</option>
                        <option value="databaseadmin">Database Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="professor">Professor</option>

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
                    <label for="experience">Experience:</label>
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
                    <label for="preferred_location">Location:</label>
                    <input type="text" class="form-control" id="preferred_location" name="preferred_location">
                    <div id="preferred_location_error" class="error"></div>
                </div>
                <div class="form-group">
                    <label for="jobtype">Job Type :</label>
                    <select class="form-control" id="jobtype" name="jobtype">
                        <option value="">select your jobtype</option>
                        <option value="0">Full Time</option>
                        <option value="1">Part Time</option>
                    </select>
                    <div id="jobtype_error" class="error"></div>
                </div>

                <div class="form-group">
                    <label for="expected_salary">Salary:</label>
                    <input type="text" class="form-control" id="expected_salary" name="expected_salary">
                    <div id="expected_salary_error" class="error"></div>
                </div>

                <div class="form-group">
                    <label for="no_of_openings">No Of Openingsr :</label>
                    <input type="number" class="form-control" id="no_of_openings" name="no_of_openings">
                    <div id="no_of_openings_error" class="error"></div>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description">
                    <div id="description_error" class="error"></div>
                </div>
                <button type="submit" class="btn-primary">Submit</button>
            </form>
        </div>
        <script>
            function updateSubcategories() {
                var categorySelect = document.getElementById("category");
                var subcategorySelect = document.getElementById("subcategory");
                var selectedCategory = categorySelect.value;

                // Reset subcategory options
                subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                if (selectedCategory === "architech") {
                    addSubcategoryOption("Architect");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption("Design ");
                    addSubcategoryOption("Project ");
                    addSubcategoryOption("Principal ");
                    addSubcategoryOption("Landscape ");
                    addSubcategoryOption("Urban Planner");
                    addSubcategoryOption("Interior Designer");
                    addSubcategoryOption("Architectural Technologist");
                    addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                    addSubcategoryOption("Sustainable Design Consultant");
                    addSubcategoryOption("Architectural Drafter");
                    addSubcategoryOption("Architectural Visualization Artist");
                    addSubcategoryOption("Urban Designer");
                    addSubcategoryOption("Historic Preservation ");
                    addSubcategoryOption("Residential Architect");
                    addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                    addSubcategoryOption("Architectural Educator");
                    addSubcategoryOption("Construction Project Manage");
                    addSubcategoryOption("Industrial Designer");
                    addSubcategoryOption("Healthcare Facility Planner");
                    addSubcategoryOption("Retail Space Designer");

                    addSubcategoryOption()
                } else if (selectedCategory === "Developer") {
                    addSubcategoryOption("Python Software Engineer");
                    addSubcategoryOption("Python");
                    addSubcategoryOption("Python Data Scientist");
                    addSubcategoryOption("Python Machine Learning Engineer");
                    addSubcategoryOption("Python Automation");
                    addSubcategoryOption("Java Software Engineer");
                    addSubcategoryOption("Java");
                    addSubcategoryOption("Java Full Stack ");
                    addSubcategoryOption("Java Android ");
                    addSubcategoryOption("Java Spring ");
                    addSubcategoryOption("Java Microservices ");
                    addSubcategoryOption("JavaScript Software Engineer");
                    addSubcategoryOption("Front-end ");
                    addSubcategoryOption("Node.js ");
                    addSubcategoryOption("React ");
                    addSubcategoryOption("Angular ");
                    addSubcategoryOption("Vue.js ");
                    addSubcategoryOption("Full Stack JavaScript ");
                    addSubcategoryOption("C# Software Engineer");
                    addSubcategoryOption(".NET ");
                    addSubcategoryOption("ASP.NET ");
                    addSubcategoryOption("Unity ");
                    addSubcategoryOption("Xamarin ");
                    addSubcategoryOption("C++ Software Engineer");
                    addSubcategoryOption("Game  (using C++)");
                    addSubcategoryOption("C++ Systems ");
                    addSubcategoryOption("PHP Software Engineer");
                    addSubcategoryOption("PHP Web ");
                    addSubcategoryOption("WordPress ");
                    addSubcategoryOption("Laravel ");
                    addSubcategoryOption("Symfony ");
                    addSubcategoryOption("Ruby Software Engineer");
                    addSubcategoryOption("Ruby on Rails ");
                    addSubcategoryOption("Swift Software Engineer");
                    addSubcategoryOption("iOS  (using Swift)");
                    addSubcategoryOption("macOS  (using Swift)");
                    addSubcategoryOption("Kotlin Software Engineer");
                    addSubcategoryOption("Android  (using Kotlin)");
                    addSubcategoryOption("Go Software Engineer");
                    addSubcategoryOption("Rust Software Engineer");
                    addSubcategoryOption("Systems  (using Rust");
                    addSubcategoryOption("TypeScript Software Engineer");
                    addSubcategoryOption("Front-end  (using TypeScript)");
                    addSubcategoryOption("SQL ");
                    addSubcategoryOption("Database ");
                    addSubcategoryOption("Scala Software Engineer");
                    addSubcategoryOption("Haskell Software Engineer");
                    addSubcategoryOption("Perl Software Engineer ");
                    addSubcategoryOption("Lua Software Engineer ");
                    addSubcategoryOption("Game  (using Lua) ");
                    addSubcategoryOption("MATLAB Software Enginee ");
                    addSubcategoryOption("Data Analyst (using MATLAB) ");
                } else if (selectedCategory === "tester") {
                    addSubcategoryOption("Software ");
                    addSubcategoryOption("Test Engineer");
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                    addSubcategoryOption("Test Automation Engineer");
                    addSubcategoryOption("Manual ");
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                    addSubcategoryOption("Test Manager");
                    addSubcategoryOption("Performance ");
                    addSubcategoryOption("Usability ");
                    addSubcategoryOption("Regression ");
                    addSubcategoryOption("User Acceptance ");
                    addSubcategoryOption("Security ");
                    addSubcategoryOption("Mobile App ");
                    addSubcategoryOption("Game ");
                    addSubcategoryOption("Functional ");
                    addSubcategoryOption("Test Architect");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Continuous Integration ");
                    addSubcategoryOption("Load ");
                    addSubcategoryOption("Test Designer");
                    addSubcategoryOption("Test Technician");
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Compliance ");
                } else if (selectedCategory === "uiux") {
                    addSubcategoryOption("UI/UX Designer");
                    addSubcategoryOption("User Experience Designer");
                    addSubcategoryOption("User Interface Designer");
                    addSubcategoryOption("Interaction Designer");
                    addSubcategoryOption("Visual Designer");
                    addSubcategoryOption("UX Researcher");
                    addSubcategoryOption("UI/UX Architect");
                    addSubcategoryOption("Information Architect");
                    addSubcategoryOption("UX Strategist");
                    addSubcategoryOption("Product Designer");
                    addSubcategoryOption("User-Centered Design Specialist");
                    addSubcategoryOption("Usability Analyst");
                    addSubcategoryOption("UI/UX Developer");
                    addSubcategoryOption("Mobile App Designer");
                    addSubcategoryOption("Web Designer");
                    addSubcategoryOption("Visual Experience Designer");
                    addSubcategoryOption("UX Content Strategist");
                    addSubcategoryOption("Interaction Architect");
                    addSubcategoryOption("UX/UI Illustrator");
                    addSubcategoryOption("User Interface Animator");
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                    addSubcategoryOption("Accessibility Designer ");
                    addSubcategoryOption("Prototype Designer ");
                    addSubcategoryOption("UI/UX Lead ");
                    addSubcategoryOption("Design Systems Manager ");

                } else if (selectedCategory === "datascience") {
                    addSubcategoryOption("Data Scientist");
                    addSubcategoryOption("Senior Data Scientist");
                    addSubcategoryOption("Machine Learning Engineer");
                    addSubcategoryOption("Data Analyst");
                    addSubcategoryOption("Senior Data Analyst");
                    addSubcategoryOption("Statistician");
                    addSubcategoryOption("Business Intelligence Analyst");
                    addSubcategoryOption("Quantitative Analyst (Quant)");
                    addSubcategoryOption("Data Engineer");
                    addSubcategoryOption("Data Architect");
                    addSubcategoryOption("AI Research");
                    addSubcategoryOption("Predictive Modeler");
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                    addSubcategoryOption("Computer Vision Engineer");
                    addSubcategoryOption("Big Data Engineer");
                    addSubcategoryOption("Analytics Manager");
                    addSubcategoryOption("Data Science Manager");
                    addSubcategoryOption("Chief Data Officer (CDO)");
                    addSubcategoryOption("Research Scientist (AI/ML)");
                    addSubcategoryOption("Decision Scientist");
                    addSubcategoryOption("Marketing Analyst");
                    addSubcategoryOption("Operations Research Analyst");
                    addSubcategoryOption("Data Visualization Specialist");
                    addSubcategoryOption("Customer Insights Analyst");
                    addSubcategoryOption("Fraud Analyst");

                } else if (selectedCategory === "databaseadmin") {
                    addSubcategoryOption("Database (DBA)");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption("Database Engineer");
                    addSubcategoryOption("Database Architect");
                    addSubcategoryOption("Database Analyst");
                    addSubcategoryOption("Data Warehouse ");
                    addSubcategoryOption("SQL Server ");
                    addSubcategoryOption("Oracle Database ");
                    addSubcategoryOption("MySQL Database ");
                    addSubcategoryOption("PostgreSQL Database ");
                    addSubcategoryOption("MongoDB ");
                    addSubcategoryOption("NoSQL  ");
                    addSubcategoryOption("DBMS  (Database Management System)");
                    addSubcategoryOption("Database Operations Manager");
                    addSubcategoryOption("Database Performance Tuning Specialist");
                    addSubcategoryOption("Data Migration Specialist");
                    addSubcategoryOption("Database Security ");
                    addSubcategoryOption("Database Backup and Recovery Specialist");
                    addSubcategoryOption("Cloud   (e.g., AWS, Azure, Google Cloud)");
                    addSubcategoryOption("Database Compliance Officer");
                    addSubcategoryOption("Database DevOps Engineer");
                    addSubcategoryOption("Database Automation Engineer");
                    addSubcategoryOption("Database Replication Specialist");
                    addSubcategoryOption("Data Governance Manager");
                    addSubcategoryOption("Data Steward");
                } else if (selectedCategory === "teacher") {
                    addSubcategoryOption("Tamil");
                    addSubcategoryOption("Mathematics ");
                    addSubcategoryOption("Math Instructor");
                    addSubcategoryOption("Algebra ");
                    addSubcategoryOption("Geometry ");
                    addSubcategoryOption("Calculus ");
                    addSubcategoryOption("Statistics ");
                    addSubcategoryOption("Math Tutor");
                    addSubcategoryOption("Math Coach");
                    addSubcategoryOption("Math Curriculum Specialist");
                    addSubcategoryOption("Math Department Chair");
                    addSubcategoryOption("English ");
                    addSubcategoryOption("Language Arts ");
                    addSubcategoryOption("Literature ");
                    addSubcategoryOption("Writing Instructor");
                    addSubcategoryOption("Creative Writing ");
                    addSubcategoryOption("English as a Second Language (ESL) ");
                    addSubcategoryOption("Reading Specialist");
                    addSubcategoryOption("English Tutor");
                    addSubcategoryOption("English Department Chair");
                    addSubcategoryOption("Science ");
                    addSubcategoryOption("Biology ");
                    addSubcategoryOption("Chemistry ");
                    addSubcategoryOption("Physics ");
                    addSubcategoryOption("Environmental Science ");
                    addSubcategoryOption("Earth Science ");
                    addSubcategoryOption("Anatomy and Physiology ");
                    addSubcategoryOption("Science Lab Instructor");
                    addSubcategoryOption("Science Curriculum Specialist");
                    addSubcategoryOption("Social Studies ");
                    addSubcategoryOption("History ");
                    addSubcategoryOption("Geography ");
                    addSubcategoryOption("Civics ");
                    addSubcategoryOption("Government ");
                    addSubcategoryOption("Economics ");
                    addSubcategoryOption("World History ");
                    addSubcategoryOption("Social Studies Department Chair");
                    addSubcategoryOption("Foreign Language ");
                    addSubcategoryOption("Language Instructor");
                    addSubcategoryOption("Spanish ");
                    addSubcategoryOption("French ");
                    addSubcategoryOption("German ");
                    addSubcategoryOption("Chinese ");
                    addSubcategoryOption("Language Lab Coordinator");
                    addSubcategoryOption("Physical Education ");
                    addSubcategoryOption("PE Instructor");
                    addSubcategoryOption("Fitness Coach");
                    addSubcategoryOption("Health Education ");
                    addSubcategoryOption("Sports Coach");
                    addSubcategoryOption("Physical Education Department Chair");
                    addSubcategoryOption("Art ");
                    addSubcategoryOption("Music ");
                    addSubcategoryOption("Drama ");
                    addSubcategoryOption("Visual Arts ");
                    addSubcategoryOption("Choir Director");
                    addSubcategoryOption("Band ");
                    addSubcategoryOption("Art History ");
                    addSubcategoryOption("Special Education ");
                    addSubcategoryOption("Learning Support ");
                    addSubcategoryOption("Resource ");
                    addSubcategoryOption("Inclusion ");
                    addSubcategoryOption("Autism Specialist");
                    addSubcategoryOption("Behavioral Interventionist");
                    addSubcategoryOption("Vocational ");
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                    addSubcategoryOption("Culinary Arts Instructor");
                    addSubcategoryOption("Automotive Technology Teacher");
                    addSubcategoryOption("Computer Science ");
                    addSubcategoryOption("Digital Media Instructor");
                } else if (selectedCategory === "professor") {
                    addSubcategoryOption("University ");
                    addSubcategoryOption("Assistant ");
                    addSubcategoryOption("Associate ");
                    addSubcategoryOption("Full ");
                    addSubcategoryOption("Distinguished ");
                    addSubcategoryOption("Adjunct ");
                    addSubcategoryOption("Visiting ");
                    addSubcategoryOption("Research ");
                    addSubcategoryOption("Clinical ");
                    addSubcategoryOption("Philosophy");
                    addSubcategoryOption("Professor of History");
                    addSubcategoryOption("English");
                    addSubcategoryOption("Psychology");
                    addSubcategoryOption("Sociology");
                    addSubcategoryOption("Political Science");
                    addSubcategoryOption("Anthropology");
                    addSubcategoryOption("Linguistics");
                    addSubcategoryOption("Biology");
                    addSubcategoryOption("Chemistry");
                    addSubcategoryOption("Physics");
                    addSubcategoryOption("Mathematics");
                    addSubcategoryOption("Geology");
                    addSubcategoryOption("Astronomy");
                    addSubcategoryOption(" Environmental Science");
                    addSubcategoryOption("Computer Science");
                    addSubcategoryOption("Electrical Engineering");
                    addSubcategoryOption("Mechanical Engineering");
                    addSubcategoryOption("Civil Engineering");
                    addSubcategoryOption("Chemical Engineering");
                    addSubcategoryOption("Information Technology");
                    addSubcategoryOption("Business Administration");
                    addSubcategoryOption("Economics");
                    addSubcategoryOption("Finance");
                    addSubcategoryOption("Marketing");
                    addSubcategoryOption("Management");
                    addSubcategoryOption("Accounting");
                    addSubcategoryOption("Fine Arts");
                    addSubcategoryOption("Music");
                    addSubcategoryOption("Visual Arts");
                    addSubcategoryOption("Theater");
                    addSubcategoryOption("Dance");
                    addSubcategoryOption("Film Studies");
                    addSubcategoryOption("Educational Psychology");
                    addSubcategoryOption("Medicine");
                    addSubcategoryOption("Nursing");
                    addSubcategoryOption("Public Health");
                    addSubcategoryOption("Pharmacy");
                    addSubcategoryOption("Dentistry");
                    addSubcategoryOption("Law");
                    addSubcategoryOption("Constitutional Law");
                    addSubcategoryOption("Criminal Law");
                    addSubcategoryOption("International Law");
                    addSubcategoryOption("Environmental Law");
                    addSubcategoryOption("Social Work");
                    addSubcategoryOption("Social Welfare");
                    addSubcategoryOption("Clinical Social Work");
                    addSubcategoryOption("Library Science");
                    addSubcategoryOption("Information Studies");
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
                } else if (company_name.value !== '') {
                    company_nameError.innerHTML = '';


                    if (category.value === '') {
                        displayError('Category is required.', 'category_error');
                        return false;
                    } else if (category.value !== '') {
                        categoryError.innerHTML = '';
                    }


                    if (subcategory.value === "") {
                        displayError('Please select a subcategory.', 'subcategory_error');
                        return false;
                    } else if (subcategory.value !== '') {
                        subcategoryError.innerHTML = '';
                    }


                    if (experience.value.trim() === "") {
                        displayError('Please enter a experience.', 'experience_error');
                        return false;
                    } else if (experience.value !== '') {
                        experienceError.innerHTML = '';
                    }



                    if (preferred_location.value.trim() === "") {
                        displayError('Please enter a preferred_location.', 'preferred_location_error');
                        return false;
                    } else if (preferred_location.value !== '') {
                        preferred_locationError.innerHTML = '';
                    }



                    if (jobtype.value.trim() === "") {
                        displayError('Please enter a jobtype.', 'jobtype_error');
                        return false;
                    } else if (jobtype.value !== '') {
                        jobtype_error.innerHTML = '';
                    }



                    if (expected_salary.value.trim() === "") {
                        displayError('Please enter a expected_salary.', 'expected_salary_error');
                        return false;
                    } else if (expected_salary.value !== '') {
                        expected_salary_error.innerHTML = '';
                    }

                    if (no_of_openings.value.trim() === "") {
                        displayError('Please enter a no_of_openings.', 'no_of_openings_error');
                        return false;
                    } else if (no_of_openings.value !== '') {
                        no_of_openings_error.innerHTML = '';
                    }



                    if (description.value.trim() === "") {
                        displayError('Please enter a description.', 'description_error');
                        return false;
                    } else if (description.value !== '') {
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
    <?php
                } else if ($this->data['method'] == "updateaddnew") {
    ?>
        <div class="container" id="updateaddnew">
            <h3>Update jobs</h3>
            <form name="experienceform" method="post" onsubmit="return validateForm()" action="http://localhost/arramjobs/providerController/updateInsert">
                <?php
                    foreach ($this->data['updateAddNew'] as $key => $value) {
                ?>

                    <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                    <div class="form-group">
                        <label for="company_name">Company Name*</label>
                        <input type="text" class="form-control" id="company_name" value=<?php echo $value['company_name']; ?> name="company_name">
                        <div id="company_name_error" class="error"></div>
                    </div>

                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                            <option value="">Select a Category</option>
                            <option value="architech">Architech</option>
                            <option value="developer">Developer</option>
                            <option value="tester">Tester</option>
                            <option value="uiux">UI/UX Design</option>
                            <option value="datascience">Data Scientist</option>
                            <option value="databaseadmin">Database Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="professor">Professor</option>
                        </select>
                        <div id="category_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="subcategory">Subcategory</label>
                        <select class="form-control" id="subcategory" value=<?php echo $value['job_sub_category_id']; ?> name="subcategory" disabled>
                            <option value="">Select a Subcategory</option>
                        </select>
                        <div id="subcategory_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience</label>
                        <select class="form-control" id="experience" value=<?php echo $value['experience']; ?> name="experience">
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
                        <input type="text" class="form-control" id="preferred_location" value=<?php echo $value['location']; ?> name="preferred_location">
                        <div id="preferred_location_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="jobtype">Job Type :</label>
                        <select class="form-control" id="jobtype" value=<?php echo $value['job_type']; ?> name="jobtype">
                            <option value="">select your jobtype</option>
                            <option value="0">Full Time</option>
                            <option value="1">Part Time</option>
                        </select>
                        <div id="jobtype_error" class="error"></div>
                    </div>

                    <div class="form-group">
                        <label for="expected_salary">Salary</label>
                        <input type="text" class="form-control" id="expected_salary" value=<?php echo $value['salary']; ?> name="expected_salary">
                        <div id="expected_salary_error" class="error"></div>
                    </div>

                    <div class="form-group">
                        <label for="no_of_openings">No Of Openings</label>
                        <input type="number" class="form-control" id="no_of_openings" value=<?php echo $value['number_of_openings']; ?> name="no_of_openings">
                        <div id="no_of_openings_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" value=<?php echo $value['description']; ?> name="description">
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

                if (selectedCategory === "architech") {
                    addSubcategoryOption("Architect");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption("Design ");
                    addSubcategoryOption("Project ");
                    addSubcategoryOption("Principal ");
                    addSubcategoryOption("Landscape ");
                    addSubcategoryOption("Urban Planner");
                    addSubcategoryOption("Interior Designer");
                    addSubcategoryOption("Architectural Technologist");
                    addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                    addSubcategoryOption("Sustainable Design Consultant");
                    addSubcategoryOption("Architectural Drafter");
                    addSubcategoryOption("Architectural Visualization Artist");
                    addSubcategoryOption("Urban Designer");
                    addSubcategoryOption("Historic Preservation Architect");
                    addSubcategoryOption("Residential Architect");
                    addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                    addSubcategoryOption("Architectural Educator");
                    addSubcategoryOption("Construction Project Manage");
                    addSubcategoryOption("Industrial Designer");
                    addSubcategoryOption("Healthcare Facility Planner");
                    addSubcategoryOption("Retail Space Designer");

                    addSubcategoryOption()
                } else if (selectedCategory === "developer") {
                    addSubcategoryOption("Python Software Engineer");
                    addSubcategoryOption("Python");
                    addSubcategoryOption("Python Data Scientist");
                    addSubcategoryOption("Python Machine Learning Engineer");
                    addSubcategoryOption("Python Automation");
                    addSubcategoryOption("Java Software ");
                    addSubcategoryOption("Java");
                    addSubcategoryOption("Java Full Stack ");
                    addSubcategoryOption("Java Android ");
                    addSubcategoryOption("Java Spring ");
                    addSubcategoryOption("Java Microservices ");
                    addSubcategoryOption("JavaScript ");
                    addSubcategoryOption("Front-end ");
                    addSubcategoryOption("Node.js ");
                    addSubcategoryOption("React ");
                    addSubcategoryOption("Angular ");
                    addSubcategoryOption("Vue.js ");
                    addSubcategoryOption("Full Stack JavaScript ");
                    addSubcategoryOption("C#  ");
                    addSubcategoryOption(".NET ");
                    addSubcategoryOption("ASP.NET ");
                    addSubcategoryOption("Unity ");
                    addSubcategoryOption("Xamarin ");
                    addSubcategoryOption("C++  ");
                    addSubcategoryOption("Game(using C++)");
                    addSubcategoryOption("C++ Systems ");
                    addSubcategoryOption("PHP");
                    addSubcategoryOption("WordPress");
                    addSubcategoryOption("Laravel ");
                    addSubcategoryOption("Symfony ");
                    addSubcategoryOption("Ruby ");
                    addSubcategoryOption("Ruby on Rails ");
                    addSubcategoryOption("Swift ");
                    addSubcategoryOption("iOS (using Swift)");
                    addSubcategoryOption("macOS (using Swift)");
                    addSubcategoryOption("Kotlin ");
                    addSubcategoryOption("Android  (using Kotlin)");
                    addSubcategoryOption("Go  ");
                    addSubcategoryOption("Rust  ");
                    addSubcategoryOption("Systems  (using Rust");
                    addSubcategoryOption("TypeScript  ");
                    addSubcategoryOption("Front-end  (using TypeScript)");
                    addSubcategoryOption("SQL ");
                    addSubcategoryOption("Database ");
                    addSubcategoryOption("Scala  ");
                    addSubcategoryOption("Haskell  ");
                    addSubcategoryOption("Perl   ");
                    addSubcategoryOption("Lua   ");
                    addSubcategoryOption("Game  (using Lua) ");
                    addSubcategoryOption("MATLAB   ");
                    addSubcategoryOption("Data Analyst (using MATLAB) ");
                } else if (selectedCategory === "tester") {
                    addSubcategoryOption("Software ");
                    addSubcategoryOption("Test Engineer");
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                    addSubcategoryOption("Test Automation Engineer");
                    addSubcategoryOption("Manual ");
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                    addSubcategoryOption("Test Manager");
                    addSubcategoryOption("Performance ");
                    addSubcategoryOption("Usability ");
                    addSubcategoryOption("Regression ");
                    addSubcategoryOption("User Acceptance ");
                    addSubcategoryOption("Security ");
                    addSubcategoryOption("Mobile App ");
                    addSubcategoryOption("Game ");
                    addSubcategoryOption("Functional ");
                    addSubcategoryOption("Test Architect");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Continuous Integration ");
                    addSubcategoryOption("Load ");
                    addSubcategoryOption("Test Designer");
                    addSubcategoryOption("Test Technician");
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Compliance ");
                } else if (selectedCategory === "uiux") {
                    addSubcategoryOption("UI/UX Designer");
                    addSubcategoryOption("User Experience Designer");
                    addSubcategoryOption("User Interface Designer");
                    addSubcategoryOption("Interaction Designer");
                    addSubcategoryOption("Visual Designer");
                    addSubcategoryOption("UX Researcher");
                    addSubcategoryOption("UI/UX Architect");
                    addSubcategoryOption("Information Architect");
                    addSubcategoryOption("UX Strategist");
                    addSubcategoryOption("Product Designer");
                    addSubcategoryOption("User-Centered Design Specialist");
                    addSubcategoryOption("Usability Analyst");
                    addSubcategoryOption("UI/UX Developer");
                    addSubcategoryOption("Mobile App Designer");
                    addSubcategoryOption("Web Designer");
                    addSubcategoryOption("Visual Experience Designer");
                    addSubcategoryOption("UX Content Strategist");
                    addSubcategoryOption("Interaction Architect");
                    addSubcategoryOption("UX/UI Illustrator");
                    addSubcategoryOption("User Interface Animator");
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                    addSubcategoryOption("Accessibility Designer ");
                    addSubcategoryOption("Prototype Designer ");
                    addSubcategoryOption("UI/UX Lead ");
                    addSubcategoryOption("Design Systems Manager ");

                } else if (selectedCategory === "datascience") {
                    addSubcategoryOption("Data Scientist");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption("Machine Learning Engineer");
                    addSubcategoryOption("Data Analyst");
                    addSubcategoryOption("Senior Data Analyst");
                    addSubcategoryOption("Statistician");
                    addSubcategoryOption("Business Intelligence Analyst");
                    addSubcategoryOption("Quantitative Analyst (Quant)");
                    addSubcategoryOption("Data Engineer");
                    addSubcategoryOption("Data Architect");
                    addSubcategoryOption("AI Research Scientist");
                    addSubcategoryOption("Predictive Modeler");
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                    addSubcategoryOption("Computer Vision Engineer");
                    addSubcategoryOption("Big Data Engineer");
                    addSubcategoryOption("Analytics Manager");
                    addSubcategoryOption("Data Science Manager");
                    addSubcategoryOption("Chief Data Officer (CDO)");
                    addSubcategoryOption("Research Scientist (AI/ML)");
                    addSubcategoryOption("Decision Scientist");
                    addSubcategoryOption("Marketing Analyst");
                    addSubcategoryOption("Operations Research Analyst");
                    addSubcategoryOption("Data Visualization Specialist");
                    addSubcategoryOption("Customer Insights Analyst");
                    addSubcategoryOption("Fraud Analyst");

                } else if (selectedCategory === "databaseadmin") {
                    addSubcategoryOption("Database (DBA)");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption(" Architect");
                    addSubcategoryOption(" Analyst");
                    addSubcategoryOption("Data Warehouse Administrator");
                    addSubcategoryOption("SQL Server ");
                    addSubcategoryOption("Oracle  ");
                    addSubcategoryOption("MySQL  ");
                    addSubcategoryOption("PostgreSQL  ");
                    addSubcategoryOption("MongoDB ");
                    addSubcategoryOption("NoSQL Database ");
                    addSubcategoryOption("DBMS  (Database Management System)");
                    addSubcategoryOption("Database Operations Manager");
                    addSubcategoryOption("Database Performance Tuning Specialist");
                    addSubcategoryOption("Data Migration Specialist");
                    addSubcategoryOption(" Security ");
                    addSubcategoryOption(" Backup and Recovery Specialist");
                    addSubcategoryOption("Cloud   (e.g., AWS, Azure, Google Cloud)");
                    addSubcategoryOption("Database Compliance Officer");
                    addSubcategoryOption("Database DevOps Engineer");
                    addSubcategoryOption("Database Automation Engineer");
                    addSubcategoryOption("Database Replication Specialist");
                    addSubcategoryOption("Data Governance Manager");
                    addSubcategoryOption("Data Steward");
                } else if (selectedCategory === "teacher") {
                    addSubcategoryOption("Tamil");
                    addSubcategoryOption("Mathematics ");
                    addSubcategoryOption("Math Instructor");
                    addSubcategoryOption("Algebra ");
                    addSubcategoryOption("Geometry ");
                    addSubcategoryOption("Calculus ");
                    addSubcategoryOption("Statistics ");
                    addSubcategoryOption("Math Tutor");
                    addSubcategoryOption("Math Coach");
                    addSubcategoryOption("Math Curriculum Specialist");
                    addSubcategoryOption("Math Department Chair");
                    addSubcategoryOption("English ");
                    addSubcategoryOption("Language Arts ");
                    addSubcategoryOption("Literature ");
                    addSubcategoryOption("Writing Instructor");
                    addSubcategoryOption("Creative Writing ");
                    addSubcategoryOption("English as a Second Language (ESL)");
                    addSubcategoryOption("Reading Specialist");
                    addSubcategoryOption("English Tutor");
                    addSubcategoryOption("English Department Chair");
                    addSubcategoryOption("Science ");
                    addSubcategoryOption("Biology ");
                    addSubcategoryOption("Chemistry ");
                    addSubcategoryOption("Physics ");
                    addSubcategoryOption("Environmental Science ");
                    addSubcategoryOption("Earth Science ");
                    addSubcategoryOption("Anatomy and Physiology ");
                    addSubcategoryOption("Science Lab Instructor");
                    addSubcategoryOption("Science Curriculum Specialist");
                    addSubcategoryOption("Social Studies ");
                    addSubcategoryOption("History ");
                    addSubcategoryOption("Geography ");
                    addSubcategoryOption("Civics ");
                    addSubcategoryOption("Government ");
                    addSubcategoryOption("Economics ");
                    addSubcategoryOption("World History ");
                    addSubcategoryOption("Social Studies Department Chair");
                    addSubcategoryOption("Foreign Language ");
                    addSubcategoryOption("Language Instructor");
                    addSubcategoryOption("Spanish ");
                    addSubcategoryOption("French ");
                    addSubcategoryOption("German ");
                    addSubcategoryOption("Chinese ");
                    addSubcategoryOption("Language Lab Coordinator");
                    addSubcategoryOption("Physical Education ");
                    addSubcategoryOption("PE Instructor");
                    addSubcategoryOption("Fitness Coach");
                    addSubcategoryOption("Health Education ");
                    addSubcategoryOption("Sports Coach");
                    addSubcategoryOption("Physical Education Department Chair");
                    addSubcategoryOption("Art ");
                    addSubcategoryOption("Music ");
                    addSubcategoryOption("Drama ");
                    addSubcategoryOption("Visual Arts ");
                    addSubcategoryOption("Choir Director");
                    addSubcategoryOption("Band ");
                    addSubcategoryOption("Art History ");
                    addSubcategoryOption("Special Education ");
                    addSubcategoryOption("Learning Support ");
                    addSubcategoryOption("Resource ");
                    addSubcategoryOption("Inclusion ");
                    addSubcategoryOption("Autism Specialist");
                    addSubcategoryOption("Behavioral Interventionist");
                    addSubcategoryOption("Vocational Teacher");
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                    addSubcategoryOption("Culinary Arts Instructor");
                    addSubcategoryOption("Automotive Technology ");
                    addSubcategoryOption("Computer Science ");
                    addSubcategoryOption("Digital Media Instructor");
                } else if (selectedCategory === "professor") {
                    addSubcategoryOption("University ");
                    addSubcategoryOption("Assistant ");
                    addSubcategoryOption("Associate ");
                    addSubcategoryOption("Full ");
                    addSubcategoryOption("Distinguished ");
                    addSubcategoryOption("Adjunct ");
                    addSubcategoryOption("Visiting ");
                    addSubcategoryOption("Research ");
                    addSubcategoryOption("Clinical ");
                    addSubcategoryOption("Philosophy");
                    addSubcategoryOption("Professor of History");
                    addSubcategoryOption("English");
                    addSubcategoryOption("Psychology");
                    addSubcategoryOption("Sociology");
                    addSubcategoryOption("Political Science");
                    addSubcategoryOption("Anthropology");
                    addSubcategoryOption("Linguistics");
                    addSubcategoryOption("Biology");
                    addSubcategoryOption("Chemistry");
                    addSubcategoryOption("Physics");
                    addSubcategoryOption("Mathematics");
                    addSubcategoryOption("Geology");
                    addSubcategoryOption("Astronomy");
                    addSubcategoryOption(" Environmental Science");
                    addSubcategoryOption("Computer Science");
                    addSubcategoryOption("Electrical Engineering");
                    addSubcategoryOption("Mechanical Engineering");
                    addSubcategoryOption("Civil Engineering");
                    addSubcategoryOption("Chemical Engineering");
                    addSubcategoryOption("Information Technology");
                    addSubcategoryOption("Business Administration");
                    addSubcategoryOption("Economics");
                    addSubcategoryOption("Finance");
                    addSubcategoryOption("Marketing");
                    addSubcategoryOption("Management");
                    addSubcategoryOption("Accounting");
                    addSubcategoryOption("Fine Arts");
                    addSubcategoryOption("Music");
                    addSubcategoryOption("Visual Arts");
                    addSubcategoryOption("Theater");
                    addSubcategoryOption("Dance");
                    addSubcategoryOption("Film Studies");
                    addSubcategoryOption("Educational Psychology");
                    addSubcategoryOption("Medicine");
                    addSubcategoryOption("Nursing");
                    addSubcategoryOption("Public Health");
                    addSubcategoryOption("Pharmacy");
                    addSubcategoryOption("Dentistry");
                    addSubcategoryOption("Law");
                    addSubcategoryOption("Constitutional Law");
                    addSubcategoryOption("Criminal Law");
                    addSubcategoryOption("International Law");
                    addSubcategoryOption("Environmental Law");
                    addSubcategoryOption("Social Work");
                    addSubcategoryOption("Social Welfare");
                    addSubcategoryOption("Clinical Social Work");
                    addSubcategoryOption("Library Science");
                    addSubcategoryOption("Information Studies");
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
                } else if (company_name.value !== '') {
                    company_nameError.innerHTML = '';


                    if (category.value === '') {
                        displayError('Category is required.', 'category_error');
                        return false;
                    } else if (category.value !== '') {
                        categoryError.innerHTML = '';
                    }


                    if (subcategory.value === "") {
                        displayError('Please select a subcategory.', 'subcategory_error');
                        return false;
                    } else if (subcategory.value !== '') {
                        subcategoryError.innerHTML = '';
                    }


                    if (experience.value.trim() === "") {
                        displayError('Please enter a experience.', 'experience_error');
                        return false;
                    } else if (experience.value !== '') {
                        experienceError.innerHTML = '';
                    }



                    if (preferred_location.value.trim() === "") {
                        displayError('Please enter a preferred_location.', 'preferred_location_error');
                        return false;
                    } else if (preferred_location.value !== '') {
                        preferred_locationError.innerHTML = '';
                    }



                    if (jobtype.value.trim() === "") {
                        displayError('Please enter a jobtype.', 'jobtype_error');
                        return false;
                    } else if (jobtype.value !== '') {
                        jobtype_error.innerHTML = '';
                    }



                    if (expected_salary.value.trim() === "") {
                        displayError('Please enter a expected_salary.', 'expected_salary_error');
                        return false;
                    } else if (expected_salary.value !== '') {
                        expected_salary_error.innerHTML = '';
                    }

                    if (no_of_openings.value.trim() === "") {
                        displayError('Please enter a no_of_openings.', 'no_of_openings_error');
                        return false;
                    } else if (no_of_openings.value !== '') {
                        no_of_openings_error.innerHTML = '';
                    }



                    if (description.value.trim() === "") {
                        displayError('Please enter a description.', 'description_error');
                        return false;
                    } else if (description.value !== '') {
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
    <?php
                } else if ($this->data['method'] == "match") {
    ?>
        <div>
            <div class="container mt-5">
                <h3 class="text-center">Job Matched Candidates</h3>
                <!-- <div>
            
            <div class="input-group">
                <!-- <input type="text" class="form-control" id="search" placeholder="Search..."> -->
                <!-- <button class="btn btn-outline-secondary" type="button" id="search">Search</button> -->
                <!-- </div>
        </div>  -->


                <br>

                <div class="row">
                    <!-- <div class="col-md-6">
                <div class="form-group">
                    <label for="category" id="lab1">Category:</label>
                   
                    
                    <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                  
                    <option value="<?php echo $this->data['response'][0]['oic']; ?>" selected><?php echo $this->data['response'][0]['oic']; ?></option>
                    <option value="architech" >architech</option>

                   
                </select>
                    <div id="category_error" class="error"></div>
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subcategory" id="lab">Subcategory:</label>
                    <select class="form-control" id="subcategory" name="subcategory" disabled>
                        <option value=""></option>
                    </select>
                    <div id="subcategory_error" class="error"></div>
                </div>
            </div>
            <div class="input-group">
                
                <button class="btn btn-outline-secondary" type="button" id="search">Search</button>
            </div> -->
                </div>
                <br>
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
                            <?php
                            foreach ($this->data['response'] as $key => $value) {
                            ?>
                                <tr>


                                    <td><?php echo $value['name'] ?></td>
                                    <td><?php echo $value['eq'] ?></td>
                                    <td><?php echo $value['per'] ?></td>
                                    <td><?php echo $value['exp'] ?></td>
                                    <td><?php echo $value['skill'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <!-- <button class="btn btn-primary">View</button> -->
                                            <a id="view" href="http://localhost/arramjobs/providerController/resumeCard/<?php echo $value['id'] ?>">View</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <script>
            function updateSubcategories() {
                var categorySelect = document.getElementById("category");
                var subcategorySelect = document.getElementById("subcategory");
                var selectedCategory = categorySelect.value;


                subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                if (selectedCategory === "architech") {
                    addSubcategoryOption("Architect");
                    addSubcategoryOption("Senior ");
                    addSubcategoryOption("Design ");
                    addSubcategoryOption("Project ");
                    addSubcategoryOption("Principal ");
                    addSubcategoryOption("Landscape ");
                    addSubcategoryOption("Urban Planner");
                    addSubcategoryOption("Interior Designer");
                    addSubcategoryOption("Architectural Technologist");
                    addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                    addSubcategoryOption("Sustainable Design Consultant");
                    addSubcategoryOption("Architectural Drafter");
                    addSubcategoryOption("Architectural Visualization Artist");
                    addSubcategoryOption("Urban Designer");
                    addSubcategoryOption("Historic Preservation ");
                    addSubcategoryOption("Residential ");
                    addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                    addSubcategoryOption("Architectural Educator");
                    addSubcategoryOption("Construction Project Manage");
                    addSubcategoryOption("Industrial Designer");
                    addSubcategoryOption("Healthcare Facility Planner");
                    addSubcategoryOption("Retail Space Designer");

                    addSubcategoryOption()
                } else if (selectedCategory === "developer") {
                    addSubcategoryOption("Python Software Engineer");
                    addSubcategoryOption("Python");
                    addSubcategoryOption("Python Data Scientist");
                    addSubcategoryOption("Python Machine Learning Engineer");
                    addSubcategoryOption("Python Automation");
                    addSubcategoryOption("Java Software Engineer");
                    addSubcategoryOption("Java");
                    addSubcategoryOption("Java Full Stack ");
                    addSubcategoryOption("Java Android ");
                    addSubcategoryOption("Java Spring ");
                    addSubcategoryOption("Java Microservices ");
                    addSubcategoryOption("JavaScript Software Engineer");
                    addSubcategoryOption("Front-end ");
                    addSubcategoryOption("Node.js ");
                    addSubcategoryOption("React ");
                    addSubcategoryOption("Angular ");
                    addSubcategoryOption("Vue.js ");
                    addSubcategoryOption("Full Stack JavaScript Developer");
                    addSubcategoryOption("C# Software Engineer");
                    addSubcategoryOption(".NET ");
                    addSubcategoryOption("ASP.NET ");
                    addSubcategoryOption("Unity ");
                    addSubcategoryOption("Xamarin ");
                    addSubcategoryOption("C++ Software Engineer");
                    addSubcategoryOption("Game  (using C++)");
                    addSubcategoryOption("C++ Systems ");
                    addSubcategoryOption("PHP Software Engineer");
                    addSubcategoryOption("PHP Web ");
                    addSubcategoryOption("WordPress ");
                    addSubcategoryOption("Laravel ");
                    addSubcategoryOption("Symfony Deveoper");
                    addSubcategoryOption("Ruby Software Engineer");
                    addSubcategoryOption("Ruby on Rails Developer");
                    addSubcategoryOption("Swift Software Engineer");
                    addSubcategoryOption("iOS  (using Swift)");
                    addSubcategoryOption("macOS  (using Swift)");
                    addSubcategoryOption("Kotlin Software Engineer");
                    addSubcategoryOption("Android Dveloper (using Kotlin)");
                    addSubcategoryOption("Go Software Engineer");
                    addSubcategoryOption("Rust Software Engineer");
                    addSubcategoryOption("Systems  (using Rust");
                    addSubcategoryOption("TypeScript Software Engineer");
                    addSubcategoryOption("Front-end  (using TypeScript)");
                    addSubcategoryOption("SQL ");
                    addSubcategoryOption("Database ");
                    addSubcategoryOption("Scala Software Engineer");
                    addSubcategoryOption("Haskell Software Engineer");
                    addSubcategoryOption("Perl Software Engineer ");
                    addSubcategoryOption("Lua Software Engineer ");
                    addSubcategoryOption("Game  (using Lua) ");
                    addSubcategoryOption("MATLAB Software Enginee ");
                    addSubcategoryOption("Data Analyst (using MATLAB) ");
                } else if (selectedCategory === "tester") {
                    addSubcategoryOption("Software ");
                    addSubcategoryOption("Test Engineer");
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                    addSubcategoryOption("Test Automation Engineer");
                    addSubcategoryOption("Manual ");
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                    addSubcategoryOption("Test Manager");
                    addSubcategoryOption("Performance ");
                    addSubcategoryOption("Usability ");
                    addSubcategoryOption("Regression ");
                    addSubcategoryOption("User Acceptance ");
                    addSubcategoryOption("Security ");
                    addSubcategoryOption("Mobile App ");
                    addSubcategoryOption("Game ");
                    addSubcategoryOption("Functional ");
                    addSubcategoryOption("Test Architect");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Continuous Integration ");
                    addSubcategoryOption("Load ");
                    addSubcategoryOption("Test Designer");
                    addSubcategoryOption("Test Technician");
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                    addSubcategoryOption("Test Coordinator");
                    addSubcategoryOption("Compliance ");
                } else if (selectedCategory === "uiux") {
                    addSubcategoryOption("UI/UX Designer");
                    addSubcategoryOption("User Experience Designer");
                    addSubcategoryOption("User Interface Designer");
                    addSubcategoryOption("Interaction Designer");
                    addSubcategoryOption("Visual Designer");
                    addSubcategoryOption("UX Researcher");
                    addSubcategoryOption("UI/UX Architect");
                    addSubcategoryOption("Information Architect");
                    addSubcategoryOption("UX Strategist");
                    addSubcategoryOption("Product Designer");
                    addSubcategoryOption("User-Centered Design Specialist");
                    addSubcategoryOption("Usability Analyst");
                    addSubcategoryOption("UI/UX Developer");
                    addSubcategoryOption("Mobile App Designer");
                    addSubcategoryOption("Web Designer");
                    addSubcategoryOption("Visual Experience Designer");
                    addSubcategoryOption("UX Content Strategist");
                    addSubcategoryOption("Interaction Architect");
                    addSubcategoryOption("UX/UI Illustrator");
                    addSubcategoryOption("User Interface Animator");
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                    addSubcategoryOption("Accessibility Designer ");
                    addSubcategoryOption("Prototype Designer ");
                    addSubcategoryOption("UI/UX Lead ");
                    addSubcategoryOption("Design Systems Manager ");

                } else if (selectedCategory === "datascience") {
                    addSubcategoryOption("Data Scientist");
                    addSubcategoryOption("Senior");
                    addSubcategoryOption("Machine Learning Engineer");
                    addSubcategoryOption("Data Analyst");
                    addSubcategoryOption("Senior Data Analyst");
                    addSubcategoryOption("Statistician");
                    addSubcategoryOption("Business Intelligence Analyst");
                    addSubcategoryOption("Quantitative Analyst (Quant)");
                    addSubcategoryOption("Data Engineer");
                    addSubcategoryOption("Data Architect");
                    addSubcategoryOption("AI Research Scientist");
                    addSubcategoryOption("Predictive Modeler");
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                    addSubcategoryOption("Computer Vision Engineer");
                    addSubcategoryOption("Big Data Engineer");
                    addSubcategoryOption("Analytics Manager");
                    addSubcategoryOption("Data Science Manager");
                    addSubcategoryOption("Chief Data Officer (CDO)");
                    addSubcategoryOption("Research Scientist (AI/ML)");
                    addSubcategoryOption("Decision Scientist");
                    addSubcategoryOption("Marketing Analyst");
                    addSubcategoryOption("Operations Research Analyst");
                    addSubcategoryOption("Data Visualization Specialist");
                    addSubcategoryOption("Customer Insights Analyst");
                    addSubcategoryOption("Fraud Analyst");

                } else if (selectedCategory === "databaseadmin") {
                    addSubcategoryOption("Database  (DBA)");
                    addSubcategoryOption("Senior  Administrator");
                    addSubcategoryOption("Database Engineer");
                    addSubcategoryOption("Database Architect");
                    addSubcategoryOption("Database Analyst");
                    addSubcategoryOption("Data Warehouse ");
                    addSubcategoryOption("SQL Server");
                    addSubcategoryOption("Oracle Database Administrator");
                    addSubcategoryOption("MySQL Database Administrator");
                    addSubcategoryOption("PostgreSQL Database Administrator");
                    addSubcategoryOption("MongoDB Administrator");
                    addSubcategoryOption("NoSQL Database Administrator");
                    addSubcategoryOption("DBMS Administrator (Database Management System)");
                    addSubcategoryOption("Database Operations Manager");
                    addSubcategoryOption("Database Performance Tuning Specialist");
                    addSubcategoryOption("Data Migration Specialist");
                    addSubcategoryOption("Database Security Administrator");
                    addSubcategoryOption("Database Backup and Recovery Specialist");
                    addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)");
                    addSubcategoryOption("Database Compliance Officer");
                    addSubcategoryOption("Database DevOps Engineer");
                    addSubcategoryOption("Database Automation Engineer");
                    addSubcategoryOption("Database Replication Specialist");
                    addSubcategoryOption("Data Governance Manager");
                    addSubcategoryOption("Data Steward");
                } else if (selectedCategory === "teacher") {
                    addSubcategoryOption("Tamil");
                    addSubcategoryOption("Mathematics ");
                    addSubcategoryOption("Math Instructor");
                    addSubcategoryOption("Algebra ");
                    addSubcategoryOption("Geometry ");
                    addSubcategoryOption("Calculus ");
                    addSubcategoryOption("Statistics ");
                    addSubcategoryOption("Math Tutor");
                    addSubcategoryOption("Math Coach");
                    addSubcategoryOption("Math Curriculum Specialist");
                    addSubcategoryOption("Math Department Chair");
                    addSubcategoryOption("English ");
                    addSubcategoryOption("Language Arts ");
                    addSubcategoryOption("Literature ");
                    addSubcategoryOption("Writing Instructor");
                    addSubcategoryOption("Creative Writing ");
                    addSubcategoryOption("English as a Second Language (ESL) ");
                    addSubcategoryOption("Reading Specialist");
                    addSubcategoryOption("English Tutor");
                    addSubcategoryOption("English Department Chair");
                    addSubcategoryOption("Science ");
                    addSubcategoryOption("Biology ");
                    addSubcategoryOption("Chemistry ");
                    addSubcategoryOption("Physics ");
                    addSubcategoryOption("Environmental Science ");
                    addSubcategoryOption("Earth Science ");
                    addSubcategoryOption("Anatomy and Physiology ");
                    addSubcategoryOption("Science Lab Instructor");
                    addSubcategoryOption("Science Curriculum Specialist");
                    addSubcategoryOption("Social Studies ");
                    addSubcategoryOption("History ");
                    addSubcategoryOption("Geography ");
                    addSubcategoryOption("Civics ");
                    addSubcategoryOption("Government ");
                    addSubcategoryOption("Economics ");
                    addSubcategoryOption("World History ");
                    addSubcategoryOption("Social Studies Department Chair");
                    addSubcategoryOption("Foreign Language ");
                    addSubcategoryOption("Language Instructor");
                    addSubcategoryOption("Spanish ");
                    addSubcategoryOption("French ");
                    addSubcategoryOption("German ");
                    addSubcategoryOption("Chinese ");
                    addSubcategoryOption("Language Lab Coordinator");
                    addSubcategoryOption("Physical Education ");
                    addSubcategoryOption("PE Instructor");
                    addSubcategoryOption("Fitness Coach");
                    addSubcategoryOption("Health Education ");
                    addSubcategoryOption("Sports Coach");
                    addSubcategoryOption("Physical Education Department Chair");
                    addSubcategoryOption("Art ");
                    addSubcategoryOption("Music ");
                    addSubcategoryOption("Drama ");
                    addSubcategoryOption("Visual Arts ");
                    addSubcategoryOption("Choir Director");
                    addSubcategoryOption("Band ");
                    addSubcategoryOption("Art History ");
                    addSubcategoryOption("Special Education ");
                    addSubcategoryOption("Learning Support ");
                    addSubcategoryOption("Resource ");
                    addSubcategoryOption("Inclusion ");
                    addSubcategoryOption("Autism Specialist");
                    addSubcategoryOption("Behavioral Interventionist");
                    addSubcategoryOption("Vocational Teacher");
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                    addSubcategoryOption("Culinary Arts Instructor");
                    addSubcategoryOption("Automotive Technology ");
                    addSubcategoryOption("Computer Science ");
                    addSubcategoryOption("Digital Media Instructor");
                } else if (selectedCategory === "professor") {
                    addSubcategoryOption("University ");
                    addSubcategoryOption("Assistant ");
                    addSubcategoryOption("Associate ");
                    addSubcategoryOption("Full ");
                    addSubcategoryOption("Distinguished ");
                    addSubcategoryOption("Adjunct ");
                    addSubcategoryOption("Visiting ");
                    addSubcategoryOption("Research ");
                    addSubcategoryOption("Clinical ");
                    addSubcategoryOption("Philosophy");
                    addSubcategoryOption("Professor of History");
                    addSubcategoryOption("English");
                    addSubcategoryOption("Psychology");
                    addSubcategoryOption("Sociology");
                    addSubcategoryOption("Political Science");
                    addSubcategoryOption("Anthropology");
                    addSubcategoryOption("Linguistics");
                    addSubcategoryOption("Biology");
                    addSubcategoryOption("Chemistry");
                    addSubcategoryOption("Physics");
                    addSubcategoryOption("Mathematics");
                    addSubcategoryOption("Geology");
                    addSubcategoryOption("Astronomy");
                    addSubcategoryOption(" Environmental Science");
                    addSubcategoryOption("Computer Science");
                    addSubcategoryOption("Electrical Engineering");
                    addSubcategoryOption("Mechanical Engineering");
                    addSubcategoryOption("Civil Engineering");
                    addSubcategoryOption("Chemical Engineering");
                    addSubcategoryOption("Information Technology");
                    addSubcategoryOption("Business Administration");
                    addSubcategoryOption("Economics");
                    addSubcategoryOption("Finance");
                    addSubcategoryOption("Marketing");
                    addSubcategoryOption("Management");
                    addSubcategoryOption("Accounting");
                    addSubcategoryOption("Fine Arts");
                    addSubcategoryOption("Music");
                    addSubcategoryOption("Visual Arts");
                    addSubcategoryOption("Theater");
                    addSubcategoryOption("Dance");
                    addSubcategoryOption("Film Studies");
                    addSubcategoryOption("Educational Psychology");
                    addSubcategoryOption("Medicine");
                    addSubcategoryOption("Nursing");
                    addSubcategoryOption("Public Health");
                    addSubcategoryOption("Pharmacy");
                    addSubcategoryOption("Dentistry");
                    addSubcategoryOption("Law");
                    addSubcategoryOption("Constitutional Law");
                    addSubcategoryOption("Criminal Law");
                    addSubcategoryOption("International Law");
                    addSubcategoryOption("Environmental Law");
                    addSubcategoryOption("Social Work");
                    addSubcategoryOption("Social Welfare");
                    addSubcategoryOption("Clinical Social Work");
                    addSubcategoryOption("Library Science");
                    addSubcategoryOption("Information Studies");
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
                var categoryError = document.getElementById('category_error');

                var subcategory = document.getElementById("subcategory");
                var subcategoryError = document.getElementById('subcategory_error');

                if (category.value === '') {
                    displayError('Category is required.', 'category_error');
                    return false;
                } else if (category.value !== '') {
                    categoryError.innerHTML = '';
                }


                if (subcategory.value === "") {
                    displayError('Please select a subcategory.', 'subcategory_error');
                    return false;
                } else if (subcategory.value !== '') {
                    subcategoryError.innerHTML = '';
                }
            }
        </script>
    <?php
                } else if ($this->data['method'] == "wishlist") {
    ?>
        <div class="container mt-5">
            <h2 class="text-center">Wishlist Candidate</h2>
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
                                    <!-- <button class="btn btn-primary">View</button> -->
                                    <a id="view" href="http://localhost/arramjobs/providerController/resumeCard">View</a>
                                    <!-- <button class="btn btn-warning">Update</button>
                                <button class="btn btn-danger">Delete</button> -->
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    <?php
                } else if ($this->data['method'] == "resume") {
    ?>


        <div class="full" id="educationTable">

            <body>
                <main class="container">

                    <div class="row">

                        <div class="col-md ">

                            <!-- work experience -->
                        </div>
                        <div class="col-md">
                            <!-- education -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <!-- skills -->
                        </div>
                        <div class="col-md">
                            <!-- recent work -->
                        </div>
                    </div>

                    <?php
                    foreach ($this->data['seekerName'] as $nkey => $nvalue) {
                    ?>

                        <!-- <h1><center>Candidate Profile</center></h1> -->
                        <br>
                        <h2 class=" bg-black p-5 mb-0" id="candidateResume">
                            <center>Candidate Resume</center>
                        </h2>
                        <br>
                        <h4 class="">Candidate Name : <?php echo $nvalue['name'] ?></h4>
                        <br>

                    <?php
                    }
                    ?>
                    </ul>


                    <h3 class="mb-5" id="education">Educational Qualification</h3>
                    <ul>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Educational Qualification</th>
                                        <th>Department</th>
                                        <th>School & College Name</th>
                                        <th>Percentage</th>
                                        <th>Year Of Passing</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($this->data['education'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $value['educational_qualification'] ?></td>
                                            <td><?php echo $value['department'] ?></td>
                                            <td><?php echo $value['school_college_name'] ?></td>
                                            <td><?php echo $value['percentage'] ?></td>
                                            <td><?php echo $value['yearOfPassing'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </ul>

                    <br>

                    <h3 class="mb-5">Skills</h3>
                    <ul>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Skill </th>
                                        <th>Experience</th>
                                        <th>Skill Level</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($this->data['skills'] as $skey => $svalue) {
                                    ?>
                                        <tr>
                                            <td><?php echo $svalue['skill'] ?> </td>
                                            <td><?php echo $svalue['experience'] ?></td>
                                            <td> <?php echo $svalue['skill_level'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </ul>

                    <h3 class="mb-5">Project Details</h3>
                    <ul>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Project Name </th>
                                        <th>Project Duration</th>
                                        <th>Role In Project</th>
                                        <th>Project Description</th>
                                        <th>Skills Used In Project</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($this->data['projectDetails'] as $pkey => $pvalue) {
                                    ?>

                                        <tr>
                                            <td><?php echo $pvalue['projectName'] ?> </td>
                                            <td><?php echo $pvalue['projectDuration'] ?></td>
                                            <td> <?php echo $pvalue['roleInProject'] ?></td>
                                            <td> <?php echo $pvalue['responsibilityInProject'] ?></td>
                                            <td> <?php echo $pvalue['skillsUsedInProject'] ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </ul>



                    <h3 class="mb-5">Area Of Interest</h3>
                    <ul>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Interested Category </th>
                                        <th>Interested Sub Category</th>
                                        <th>Prefered Location</th>
                                        <th>Experience</th>
                                        <th>Job Type</th>
                                        <th>Description</th>
                                        <th>Expected Salary</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($this->data['areaOfInterest'] as $akey => $avalue) {
                                    ?>
                                        <tr>
                                            <td><?php echo $avalue['other_interst_category'] ?> </td>
                                            <td><?php echo $avalue['other_sub_interst_category'] ?></td>
                                            <td> <?php echo $avalue['prefered_location'] ?></td>
                                            <td> <?php echo $avalue['experience'] ?></td>
                                            <td> <?php echo $avalue['job_type'] ?></td>
                                            <td> <?php echo $avalue['description'] ?></td>
                                            <td> <?php echo $avalue['expected_salary'] ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </ul>




                    <h3 class="mb-5">Experience Details</h3>
                    <ul>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Other Category </th>
                                        <th>Other Sub Category</th>
                                        <th>Company Name</th>
                                        <th>Job Role</th>
                                        <th>Previous Employer Name</th>
                                        <th>Previous Employer Mobile</th>
                                        <th>Previous Employer Email</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($this->data['experienceDetails'] as $ikey => $ivalue) {
                                    ?>
                                        <tr>
                                            <td><?php echo $ivalue['other_category'] ?> </td>
                                            <td><?php echo $ivalue['other_sub_category'] ?></td>
                                            <td> <?php echo $ivalue['company_name'] ?></td>
                                            <td> <?php echo $ivalue['job_role'] ?></td>
                                            <td> <?php echo $ivalue['previous_employer_name'] ?></td>
                                            <td> <?php echo $ivalue['previous_employer_mobile'] ?></td>
                                            <td> <?php echo $ivalue['previous_employer_email'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </ul>

        </div>
        </main>
    </div>
<?php
                } else if ($this->data['method'] == "allCandidate") {
?>

    <div class="container mt-5">
        <h3 class="text-center">Job Matched Candidates</h3>
        <div>

            <div class="input-group">
            </div>
        </div>
        <tbody>
            <br>
            <form action="http://localhost/arramjobs/providerController/filterAllCandidate" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category" id="lab1">Category:</label>
                            <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                                <option value="">Selest a Category</option>
                                <option value="architech">Architech</option>
                                <option value="Developer">Developer</option>
                                <option value="tester">Tester</option>
                                <option value="uiux">UI/UX Design</option>
                                <option value="datascience">Data Scientist</option>
                                <option value="databaseadmin">Database Admin</option>
                                <option value="teacher">Teacher</option>
                                <option value="professor">Professor</option>
                            </select>
                            <div id="category_error" class="error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subcategory" id="lab">Subcategory:</label>
                            <select class="form-control" id="subcategory" name="subcategory" disabled>
                                <option value="">Select a Subcategory</option>
                            </select>
                            <div id="subcategory_error" class="error"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="submit" id="search" onclick="">Search</button>
                    </div>
            </form>
    </div>
    <br>
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

                <?php
                    foreach ($this->data['candidateView'] as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['eq'] ?></td>
                        <td><?php echo $value['per'] ?></td>
                        <td><?php echo $value['exp'] ?></td>
                        <td><?php echo $value['skill'] ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <!-- <button class="btn btn-primary">View</button> -->
                                <a id="view" href="http://localhost/arramjobs/providerController/resumeCard/<?php echo $value['id'] ?>">View</a>
                            </div>
                        </td>
                    </tr>
                <?php
                    }
                ?>
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

            if (selectedCategory === "architech") {
                addSubcategoryOption("Architect");
                addSubcategoryOption("Senior Architect");
                addSubcategoryOption("Design Architect");
                addSubcategoryOption("Project Architect");
                addSubcategoryOption("Principal Architect");
                addSubcategoryOption("Landscape Architect");
                addSubcategoryOption("Urban Planner");
                addSubcategoryOption("Interior Designer");
                addSubcategoryOption("Architectural Technologist");
                addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                addSubcategoryOption("Sustainable Design Consultant");
                addSubcategoryOption("Architectural Drafter");
                addSubcategoryOption("Architectural Visualization Artist");
                addSubcategoryOption("Urban Designer");
                addSubcategoryOption("Historic Preservation Architect");
                addSubcategoryOption("Residential Architect");
                addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                addSubcategoryOption("Architectural Educator");
                addSubcategoryOption("Construction Project Manage");
                addSubcategoryOption("Industrial Designer");
                addSubcategoryOption("Healthcare Facility Planner");
                addSubcategoryOption("Retail Space Designer");

                addSubcategoryOption()
            } else if (selectedCategory === "Developer") {
                addSubcategoryOption("Python Software Engineer");
                addSubcategoryOption("Python");
                addSubcategoryOption("Python Data Scientist");
                addSubcategoryOption("Python Machine Learning Engineer");
                addSubcategoryOption("Python Automation");
                addSubcategoryOption("Java Software Engineer");
                addSubcategoryOption("Java");
                addSubcategoryOption("Java Full Stack ");
                addSubcategoryOption("Java Android ");
                addSubcategoryOption("Java Spring ");
                addSubcategoryOption("Java Microservices ");
                addSubcategoryOption("JavaScript Software Engineer");
                addSubcategoryOption("Front-end Developer");
                addSubcategoryOption("Node.js Developer");
                addSubcategoryOption("React Developer");
                addSubcategoryOption("Angular Developer");
                addSubcategoryOption("Vue.js Developer");
                addSubcategoryOption("Full Stack JavaScript Developer");
                addSubcategoryOption("C# Software Engineer");
                addSubcategoryOption(".NET Develope");
                addSubcategoryOption("ASP.NET Developer");
                addSubcategoryOption("Unity Developer");
                addSubcategoryOption("Xamarin Developer");
                addSubcategoryOption("C++ Software Engineer");
                addSubcategoryOption("Game Developer (using C++)");
                addSubcategoryOption("C++ Systems Developer");
                addSubcategoryOption("PHP Software Engineer");
                addSubcategoryOption("PHP Web Developer");
                addSubcategoryOption("WordPress Developer");
                addSubcategoryOption("Laravel Developer");
                addSubcategoryOption("Symfony Developer");
                addSubcategoryOption("Ruby Software Engineer");
                addSubcategoryOption("Ruby on Rails Developer");
                addSubcategoryOption("Swift Software Engineer");
                addSubcategoryOption("iOS Developer (using Swift)");
                addSubcategoryOption("macOS Developer (using Swift)");
                addSubcategoryOption("Kotlin Software Engineer");
                addSubcategoryOption("Android Developer (using Kotlin)");
                addSubcategoryOption("Go Software Engineer");
                addSubcategoryOption("Rust Software Engineer");
                addSubcategoryOption("Systems Developer (using Rust");
                addSubcategoryOption("TypeScript Software Engineer");
                addSubcategoryOption("Front-end Developer (using TypeScript)");
                addSubcategoryOption("SQL Developer");
                addSubcategoryOption("Database Developer");
                addSubcategoryOption("Scala Software Engineer");
                addSubcategoryOption("Haskell Software Engineer");
                addSubcategoryOption("Perl Software Engineer ");
                addSubcategoryOption("Lua Software Engineer ");
                addSubcategoryOption("Game Developer (using Lua) ");
                addSubcategoryOption("MATLAB Software Enginee ");
                addSubcategoryOption("Data Analyst (using MATLAB) ");
            } else if (selectedCategory === "tester") {
                addSubcategoryOption("Software Tester");
                addSubcategoryOption("Test Engineer");
                addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                addSubcategoryOption("Test Automation Engineer");
                addSubcategoryOption("Manual Tester");
                addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                addSubcategoryOption("Test Manager");
                addSubcategoryOption("Performance Tester");
                addSubcategoryOption("Usability Tester");
                addSubcategoryOption("Regression Tester");
                addSubcategoryOption("User Acceptance Tester");
                addSubcategoryOption("Security Tester");
                addSubcategoryOption("Mobile App Tester");
                addSubcategoryOption("Game Tester");
                addSubcategoryOption("Functional Tester");
                addSubcategoryOption("Test Architect");
                addSubcategoryOption("Test Coordinator");
                addSubcategoryOption("Continuous Integration Tester");
                addSubcategoryOption("Load Tester");
                addSubcategoryOption("Test Designer");
                addSubcategoryOption("Test Technician");
                addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                addSubcategoryOption("Test Coordinator");
                addSubcategoryOption("Compliance Tester");
            } else if (selectedCategory === "uiux") {
                addSubcategoryOption("UI/UX Designer");
                addSubcategoryOption("User Experience Designer");
                addSubcategoryOption("User Interface Designer");
                addSubcategoryOption("Interaction Designer");
                addSubcategoryOption("Visual Designer");
                addSubcategoryOption("UX Researcher");
                addSubcategoryOption("UI/UX Architect");
                addSubcategoryOption("Information Architect");
                addSubcategoryOption("UX Strategist");
                addSubcategoryOption("Product Designer");
                addSubcategoryOption("User-Centered Design Specialist");
                addSubcategoryOption("Usability Analyst");
                addSubcategoryOption("UI/UX Developer");
                addSubcategoryOption("Mobile App Designer");
                addSubcategoryOption("Web Designer");
                addSubcategoryOption("Visual Experience Designer");
                addSubcategoryOption("UX Content Strategist");
                addSubcategoryOption("Interaction Architect");
                addSubcategoryOption("UX/UI Illustrator");
                addSubcategoryOption("User Interface Animator");
                addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                addSubcategoryOption("Accessibility Designer ");
                addSubcategoryOption("Prototype Designer ");
                addSubcategoryOption("UI/UX Lead ");
                addSubcategoryOption("Design Systems Manager ");

            } else if (selectedCategory === "datascience") {
                addSubcategoryOption("Data Scientist");
                addSubcategoryOption("Senior Data Scientist");
                addSubcategoryOption("Machine Learning Engineer");
                addSubcategoryOption("Data Analyst");
                addSubcategoryOption("Senior Data Analyst");
                addSubcategoryOption("Statistician");
                addSubcategoryOption("Business Intelligence Analyst");
                addSubcategoryOption("Quantitative Analyst (Quant)");
                addSubcategoryOption("Data Engineer");
                addSubcategoryOption("Data Architect");
                addSubcategoryOption("AI Research Scientist");
                addSubcategoryOption("Predictive Modeler");
                addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                addSubcategoryOption("Computer Vision Engineer");
                addSubcategoryOption("Big Data Engineer");
                addSubcategoryOption("Analytics Manager");
                addSubcategoryOption("Data Science Manager");
                addSubcategoryOption("Chief Data Officer (CDO)");
                addSubcategoryOption("Research Scientist (AI/ML)");
                addSubcategoryOption("Decision Scientist");
                addSubcategoryOption("Marketing Analyst");
                addSubcategoryOption("Operations Research Analyst");
                addSubcategoryOption("Data Visualization Specialist");
                addSubcategoryOption("Customer Insights Analyst");
                addSubcategoryOption("Fraud Analyst");

            } else if (selectedCategory === "databaseadmin") {
                addSubcategoryOption("Database Administrator (DBA)");
                addSubcategoryOption("Senior Database Administrator");
                addSubcategoryOption("Database Engineer");
                addSubcategoryOption("Database Architect");
                addSubcategoryOption("Database Analyst");
                addSubcategoryOption("Data Warehouse Administrator");
                addSubcategoryOption("SQL Server Administrator");
                addSubcategoryOption("Oracle Database Administrator");
                addSubcategoryOption("MySQL Database Administrator");
                addSubcategoryOption("PostgreSQL Database Administrator");
                addSubcategoryOption("MongoDB Administrator");
                addSubcategoryOption("NoSQL Database Administrator");
                addSubcategoryOption("DBMS Administrator (Database Management System)");
                addSubcategoryOption("Database Operations Manager");
                addSubcategoryOption("Database Performance Tuning Specialist");
                addSubcategoryOption("Data Migration Specialist");
                addSubcategoryOption("Database Security Administrator");
                addSubcategoryOption("Database Backup and Recovery Specialist");
                addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)");
                addSubcategoryOption("Database Compliance Officer");
                addSubcategoryOption("Database DevOps Engineer");
                addSubcategoryOption("Database Automation Engineer");
                addSubcategoryOption("Database Replication Specialist");
                addSubcategoryOption("Data Governance Manager");
                addSubcategoryOption("Data Steward");
            } else if (selectedCategory === "teacher") {
                addSubcategoryOption("Tamil");
                addSubcategoryOption("Mathematics Teacher");
                addSubcategoryOption("Math Instructor");
                addSubcategoryOption("Algebra Teacher");
                addSubcategoryOption("Geometry Teacher");
                addSubcategoryOption("Calculus Teacher");
                addSubcategoryOption("Statistics Teacher");
                addSubcategoryOption("Math Tutor");
                addSubcategoryOption("Math Coach");
                addSubcategoryOption("Math Curriculum Specialist");
                addSubcategoryOption("Math Department Chair");
                addSubcategoryOption("English Teacher");
                addSubcategoryOption("Language Arts Teacher");
                addSubcategoryOption("Literature Teacher");
                addSubcategoryOption("Writing Instructor");
                addSubcategoryOption("Creative Writing Teacher");
                addSubcategoryOption("English as a Second Language (ESL) Teacher");
                addSubcategoryOption("Reading Specialist");
                addSubcategoryOption("English Tutor");
                addSubcategoryOption("English Department Chair");
                addSubcategoryOption("Science Teacher");
                addSubcategoryOption("Biology Teacher");
                addSubcategoryOption("Chemistry Teacher");
                addSubcategoryOption("Physics Teacher");
                addSubcategoryOption("Environmental Science Teacher");
                addSubcategoryOption("Earth Science Teacher");
                addSubcategoryOption("Anatomy and Physiology Teacher");
                addSubcategoryOption("Science Lab Instructor");
                addSubcategoryOption("Science Curriculum Specialist");
                addSubcategoryOption("Social Studies Teacher");
                addSubcategoryOption("History Teacher");
                addSubcategoryOption("Geography Teacher");
                addSubcategoryOption("Civics Teacher");
                addSubcategoryOption("Government Teacher");
                addSubcategoryOption("Economics Teacher");
                addSubcategoryOption("World History Teacher");
                addSubcategoryOption("Social Studies Department Chair");
                addSubcategoryOption("Foreign Language Teacher");
                addSubcategoryOption("Language Instructor");
                addSubcategoryOption("Spanish Teacher");
                addSubcategoryOption("French Teacher");
                addSubcategoryOption("German Teacher");
                addSubcategoryOption("Chinese Teacher");
                addSubcategoryOption("Language Lab Coordinator");
                addSubcategoryOption("Physical Education Teacher");
                addSubcategoryOption("PE Instructor");
                addSubcategoryOption("Fitness Coach");
                addSubcategoryOption("Health Education Teacher");
                addSubcategoryOption("Sports Coach");
                addSubcategoryOption("Physical Education Department Chair");
                addSubcategoryOption("Art Teacher");
                addSubcategoryOption("Music Teacher");
                addSubcategoryOption("Drama Teacher");
                addSubcategoryOption("Visual Arts Teacher");
                addSubcategoryOption("Choir Director");
                addSubcategoryOption("Band Teacher");
                addSubcategoryOption("Art History Teacher");
                addSubcategoryOption("Special Education Teacher");
                addSubcategoryOption("Learning Support Teacher");
                addSubcategoryOption("Resource Teacher");
                addSubcategoryOption("Inclusion Teacher");
                addSubcategoryOption("Autism Specialist");
                addSubcategoryOption("Behavioral Interventionist");
                addSubcategoryOption("Vocational Teacher");
                addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                addSubcategoryOption("Culinary Arts Instructor");
                addSubcategoryOption("Automotive Technology Teacher");
                addSubcategoryOption("Computer Science Teacher");
                addSubcategoryOption("Digital Media Instructor");
            } else if (selectedCategory === "professor") {
                addSubcategoryOption("University Professor");
                addSubcategoryOption("Assistant Professor");
                addSubcategoryOption("Associate Professor");
                addSubcategoryOption("Full Professor");
                addSubcategoryOption("Distinguished Professor");
                addSubcategoryOption("Adjunct Professor");
                addSubcategoryOption("Visiting Professor");
                addSubcategoryOption("Research Professor");
                addSubcategoryOption("Clinical Professor");
                addSubcategoryOption("Philosophy");
                addSubcategoryOption("Professor of History");
                addSubcategoryOption("English");
                addSubcategoryOption("Psychology");
                addSubcategoryOption("Sociology");
                addSubcategoryOption("Political Science");
                addSubcategoryOption("Anthropology");
                addSubcategoryOption("Linguistics");
                addSubcategoryOption("Biology");
                addSubcategoryOption("Chemistry");
                addSubcategoryOption("Physics");
                addSubcategoryOption("Mathematics");
                addSubcategoryOption("Geology");
                addSubcategoryOption("Astronomy");
                addSubcategoryOption(" Environmental Science");
                addSubcategoryOption("Computer Science");
                addSubcategoryOption("Electrical Engineering");
                addSubcategoryOption("Mechanical Engineering");
                addSubcategoryOption("Civil Engineering");
                addSubcategoryOption("Chemical Engineering");
                addSubcategoryOption("Information Technology");
                addSubcategoryOption("Business Administration");
                addSubcategoryOption("Economics");
                addSubcategoryOption("Finance");
                addSubcategoryOption("Marketing");
                addSubcategoryOption("Management");
                addSubcategoryOption("Accounting");
                addSubcategoryOption("Fine Arts");
                addSubcategoryOption("Music");
                addSubcategoryOption("Visual Arts");
                addSubcategoryOption("Theater");
                addSubcategoryOption("Dance");
                addSubcategoryOption("Film Studies");
                addSubcategoryOption("Educational Psychology");
                addSubcategoryOption("Medicine");
                addSubcategoryOption("Nursing");
                addSubcategoryOption("Public Health");
                addSubcategoryOption("Pharmacy");
                addSubcategoryOption("Dentistry");
                addSubcategoryOption("Law");
                addSubcategoryOption("Constitutional Law");
                addSubcategoryOption("Criminal Law");
                addSubcategoryOption("International Law");
                addSubcategoryOption("Environmental Law");
                addSubcategoryOption("Social Work");
                addSubcategoryOption("Social Welfare");
                addSubcategoryOption("Clinical Social Work");
                addSubcategoryOption("Library Science");
                addSubcategoryOption("Information Studies");
            } else if (selectedCategory === "services") {
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
            var categoryError = document.getElementById('category_error');

            var subcategory = document.getElementById("subcategory");
            var subcategoryError = document.getElementById('subcategory_error');

            if (category.value === '') {
                displayError('Category is required.', 'category_error');
                return false;
            } else if (category.value !== '') {
                categoryError.innerHTML = '';
            }


            if (subcategory.value === "") {
                displayError('Please select a subcategory.', 'subcategory_error');
                return false;
            } else if (subcategory.value !== '') {
                subcategoryError.innerHTML = '';
            }

        }

        <?php
                } else if ($this->data['method'] == "allCandidate") {
        ?>

                <
                div class = "container mt-5" >
                <
                h3 class = "text-center" > All Candidates < /h3> <
            div >

                <
                div class = "input-group" >
                <
                /div> < /
            div > <
                tbody >
                <
                br >
                <
                form action = "http://localhost/arramjobs/providerController/filterAllCandidate"
            method = "post" >
                <
                div class = "row" >
                <
                div class = "col-md-6" >
                <
                div class = "form-group" >
                <
                label
            for = "category"
            id = "lab1" > Category: < /label> <
            select class = "form-control"
            id = "category"
            name = "category"
            onchange = "updateSubcategories()" >
                <
                option value = "" > Selest a Category < /option> <
            option value = "architech" > Architech < /option> <
            option value = "Developer" > Developer < /option> <
            option value = "tester" > Tester < /option> <
            option value = "uiux" > UI / UX Design < /option> <
            option value = "datascience" > Data Scientist < /option> <
            option value = "databaseadmin" > Database Admin < /option> <
            option value = "teacher" > Teacher < /option> <
            option value = "professor" > Professor < /option> < /
            select > <
                div id = "category_error"
            class = "error" > < /div> < /
            div > <
                /div> <
            div class = "col-md-6" >
            <
            div class = "form-group" >
            <
            label
            for = "subcategory"
            id = "lab" > Subcategory: < /label> <
            select class = "form-control"
            id = "subcategory"
            name = "subcategory"
            disabled >
                <
                option value = "" > Select a Subcategory < /option> < /
            select > <
                div id = "subcategory_error"
            class = "error" > < /div> < /
            div > <
                /div> <
            div class = "input-group" >
            <
            button class = "btn btn-outline-secondary"
            type = "button"
            id = "search"
            onclick = "" > Search < /button> < /
            div > <
                /form> < /
            div > <
                br >
                <
                br >
                <
                div class = "table-responsive" >
                <
                table class = "table table-bordered table-striped" >
                <
                thead >
                <
                tr >
                <
                th > Name < /th> <
            th > Degree < /th> <
            th > Percentage < /th> <
            th > Fresher / Experience < /th> <
            th > Skills < /th> <
            th > Actions < /th> < /
            tr > <
                /thead> <
            tbody >

                <?php
                    foreach ($this->data['candidateView'] as $key => $value) {
                ?> <
                    tr >
                    <
                    td > <?php echo $value['name'] ?> < /td> <
            td > <?php echo $value['eq'] ?> < /td> <
            td > <?php echo $value['per'] ?> < /td> <
            td > <?php echo $value['exp'] ?> < /td> <
            td > <?php echo $value['skill'] ?> < /td> <
            td >
                <
                div class = "btn-group"
            role = "group" >
                <
                !-- < button class = "btn btn-primary" > View < /button> --> <
            a href = "http://localhost/arramjobs/providerController/resumeCard/<?php echo $value['id'] ?>" > View < /a> < /
            div > <
                /td> < /
            tr >
            <?php
                    }
            ?> <
            /tbody> < /
            table > <
                /div> < /
            div > <
                script >
                function updateSubcategories() {
                    var categorySelect = document.getElementById("category");
                    var subcategorySelect = document.getElementById("subcategory");
                    var selectedCategory = categorySelect.value;

                    // Reset subcategory options
                    subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                    if (selectedCategory === "architech") {
                        addSubcategoryOption("Architect");
                        addSubcategoryOption("Senior Architect");
                        addSubcategoryOption("Design Architect");
                        addSubcategoryOption("Project Architect");
                        addSubcategoryOption("Principal Architect");
                        addSubcategoryOption("Landscape Architect");
                        addSubcategoryOption("Urban Planner");
                        addSubcategoryOption("Interior Designer");
                        addSubcategoryOption("Architectural Technologist");
                        addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                        addSubcategoryOption("Sustainable Design Consultant");
                        addSubcategoryOption("Architectural Drafter");
                        addSubcategoryOption("Architectural Visualization Artist");
                        addSubcategoryOption("Urban Designer");
                        addSubcategoryOption("Historic Preservation Architect");
                        addSubcategoryOption("Residential Architect");
                        addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                        addSubcategoryOption("Architectural Educator");
                        addSubcategoryOption("Construction Project Manage");
                        addSubcategoryOption("Industrial Designer");
                        addSubcategoryOption("Healthcare Facility Planner");
                        addSubcategoryOption("Retail Space Designer");

                        addSubcategoryOption()
                    } else if (selectedCategory === "Developer") {
                        addSubcategoryOption("Python Software Engineer");
                        addSubcategoryOption("Python");
                        addSubcategoryOption("Python Data Scientist");
                        addSubcategoryOption("Python Machine Learning Engineer");
                        addSubcategoryOption("Python Automation");
                        addSubcategoryOption("Java Software Engineer");
                        addSubcategoryOption("Java");
                        addSubcategoryOption("Java Full Stack ");
                        addSubcategoryOption("Java Android ");
                        addSubcategoryOption("Java Spring ");
                        addSubcategoryOption("Java Microservices ");
                        addSubcategoryOption("JavaScript Software Engineer");
                        addSubcategoryOption("Front-end Developer");
                        addSubcategoryOption("Node.js Developer");
                        addSubcategoryOption("React Developer");
                        addSubcategoryOption("Angular Developer");
                        addSubcategoryOption("Vue.js Developer");
                        addSubcategoryOption("Full Stack JavaScript Developer");
                        addSubcategoryOption("C# Software Engineer");
                        addSubcategoryOption(".NET Develope");
                        addSubcategoryOption("ASP.NET Developer");
                        addSubcategoryOption("Unity Developer");
                        addSubcategoryOption("Xamarin Developer");
                        addSubcategoryOption("C++ Software Engineer");
                        addSubcategoryOption("Game Developer (using C++)");
                        addSubcategoryOption("C++ Systems Developer");
                        addSubcategoryOption("PHP Software Engineer");
                        addSubcategoryOption("PHP Web Developer");
                        addSubcategoryOption("WordPress Developer");
                        addSubcategoryOption("Laravel Developer");
                        addSubcategoryOption("Symfony Developer");
                        addSubcategoryOption("Ruby Software Engineer");
                        addSubcategoryOption("Ruby on Rails Developer");
                        addSubcategoryOption("Swift Software Engineer");
                        addSubcategoryOption("iOS Developer (using Swift)");
                        addSubcategoryOption("macOS Developer (using Swift)");
                        addSubcategoryOption("Kotlin Software Engineer");
                        addSubcategoryOption("Android Developer (using Kotlin)");
                        addSubcategoryOption("Go Software Engineer");
                        addSubcategoryOption("Rust Software Engineer");
                        addSubcategoryOption("Systems Developer (using Rust");
                        addSubcategoryOption("TypeScript Software Engineer");
                        addSubcategoryOption("Front-end Developer (using TypeScript)");
                        addSubcategoryOption("SQL Developer");
                        addSubcategoryOption("Database Developer");
                        addSubcategoryOption("Scala Software Engineer");
                        addSubcategoryOption("Haskell Software Engineer");
                        addSubcategoryOption("Perl Software Engineer ");
                        addSubcategoryOption("Lua Software Engineer ");
                        addSubcategoryOption("Game Developer (using Lua) ");
                        addSubcategoryOption("MATLAB Software Enginee ");
                        addSubcategoryOption("Data Analyst (using MATLAB) ");
                    } else if (selectedCategory === "tester") {
                        addSubcategoryOption("Software Tester");
                        addSubcategoryOption("Test Engineer");
                        addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                        addSubcategoryOption("Test Automation Engineer");
                        addSubcategoryOption("Manual Tester");
                        addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                        addSubcategoryOption("Test Manager");
                        addSubcategoryOption("Performance Tester");
                        addSubcategoryOption("Usability Tester");
                        addSubcategoryOption("Regression Tester");
                        addSubcategoryOption("User Acceptance Tester");
                        addSubcategoryOption("Security Tester");
                        addSubcategoryOption("Mobile App Tester");
                        addSubcategoryOption("Game Tester");
                        addSubcategoryOption("Functional Tester");
                        addSubcategoryOption("Test Architect");
                        addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Continuous Integration Tester");
                        addSubcategoryOption("Load Tester");
                        addSubcategoryOption("Test Designer");
                        addSubcategoryOption("Test Technician");
                        addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                        addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Compliance Tester");
                    } else if (selectedCategory === "uiux") {
                        addSubcategoryOption("UI/UX Designer");
                        addSubcategoryOption("User Experience Designer");
                        addSubcategoryOption("User Interface Designer");
                        addSubcategoryOption("Interaction Designer");
                        addSubcategoryOption("Visual Designer");
                        addSubcategoryOption("UX Researcher");
                        addSubcategoryOption("UI/UX Architect");
                        addSubcategoryOption("Information Architect");
                        addSubcategoryOption("UX Strategist");
                        addSubcategoryOption("Product Designer");
                        addSubcategoryOption("User-Centered Design Specialist");
                        addSubcategoryOption("Usability Analyst");
                        addSubcategoryOption("UI/UX Developer");
                        addSubcategoryOption("Mobile App Designer");
                        addSubcategoryOption("Web Designer");
                        addSubcategoryOption("Visual Experience Designer");
                        addSubcategoryOption("UX Content Strategist");
                        addSubcategoryOption("Interaction Architect");
                        addSubcategoryOption("UX/UI Illustrator");
                        addSubcategoryOption("User Interface Animator");
                        addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                        addSubcategoryOption("Accessibility Designer ");
                        addSubcategoryOption("Prototype Designer ");
                        addSubcategoryOption("UI/UX Lead ");
                        addSubcategoryOption("Design Systems Manager ");

                    } else if (selectedCategory === "datascience") {
                        addSubcategoryOption("Data Scientist");
                        addSubcategoryOption("Senior Data Scientist");
                        addSubcategoryOption("Machine Learning Engineer");
                        addSubcategoryOption("Data Analyst");
                        addSubcategoryOption("Senior Data Analyst");
                        addSubcategoryOption("Statistician");
                        addSubcategoryOption("Business Intelligence Analyst");
                        addSubcategoryOption("Quantitative Analyst (Quant)");
                        addSubcategoryOption("Data Engineer");
                        addSubcategoryOption("Data Architect");
                        addSubcategoryOption("AI Research Scientist");
                        addSubcategoryOption("Predictive Modeler");
                        addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                        addSubcategoryOption("Computer Vision Engineer");
                        addSubcategoryOption("Big Data Engineer");
                        addSubcategoryOption("Analytics Manager");
                        addSubcategoryOption("Data Science Manager");
                        addSubcategoryOption("Chief Data Officer (CDO)");
                        addSubcategoryOption("Research Scientist (AI/ML)");
                        addSubcategoryOption("Decision Scientist");
                        addSubcategoryOption("Marketing Analyst");
                        addSubcategoryOption("Operations Research Analyst");
                        addSubcategoryOption("Data Visualization Specialist");
                        addSubcategoryOption("Customer Insights Analyst");
                        addSubcategoryOption("Fraud Analyst");

                    } else if (selectedCategory === "databaseadmin") {
                        addSubcategoryOption("Database Administrator (DBA)");
                        addSubcategoryOption("Senior Database Administrator");
                        addSubcategoryOption("Database Engineer");
                        addSubcategoryOption("Database Architect");
                        addSubcategoryOption("Database Analyst");
                        addSubcategoryOption("Data Warehouse Administrator");
                        addSubcategoryOption("SQL Server Administrator");
                        addSubcategoryOption("Oracle Database Administrator");
                        addSubcategoryOption("MySQL Database Administrator");
                        addSubcategoryOption("PostgreSQL Database Administrator");
                        addSubcategoryOption("MongoDB Administrator");
                        addSubcategoryOption("NoSQL Database Administrator");
                        addSubcategoryOption("DBMS Administrator (Database Management System)");
                        addSubcategoryOption("Database Operations Manager");
                        addSubcategoryOption("Database Performance Tuning Specialist");
                        addSubcategoryOption("Data Migration Specialist");
                        addSubcategoryOption("Database Security Administrator");
                        addSubcategoryOption("Database Backup and Recovery Specialist");
                        addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)");
                        addSubcategoryOption("Database Compliance Officer");
                        addSubcategoryOption("Database DevOps Engineer");
                        addSubcategoryOption("Database Automation Engineer");
                        addSubcategoryOption("Database Replication Specialist");
                        addSubcategoryOption("Data Governance Manager");
                        addSubcategoryOption("Data Steward");
                    } else if (selectedCategory === "teacher") {
                        addSubcategoryOption("Tamil");
                        addSubcategoryOption("Mathematics Teacher");
                        addSubcategoryOption("Math Instructor");
                        addSubcategoryOption("Algebra Teacher");
                        addSubcategoryOption("Geometry Teacher");
                        addSubcategoryOption("Calculus Teacher");
                        addSubcategoryOption("Statistics Teacher");
                        addSubcategoryOption("Math Tutor");
                        addSubcategoryOption("Math Coach");
                        addSubcategoryOption("Math Curriculum Specialist");
                        addSubcategoryOption("Math Department Chair");
                        addSubcategoryOption("English Teacher");
                        addSubcategoryOption("Language Arts Teacher");
                        addSubcategoryOption("Literature Teacher");
                        addSubcategoryOption("Writing Instructor");
                        addSubcategoryOption("Creative Writing Teacher");
                        addSubcategoryOption("English as a Second Language (ESL) Teacher");
                        addSubcategoryOption("Reading Specialist");
                        addSubcategoryOption("English Tutor");
                        addSubcategoryOption("English Department Chair");
                        addSubcategoryOption("Science Teacher");
                        addSubcategoryOption("Biology Teacher");
                        addSubcategoryOption("Chemistry Teacher");
                        addSubcategoryOption("Physics Teacher");
                        addSubcategoryOption("Environmental Science Teacher");
                        addSubcategoryOption("Earth Science Teacher");
                        addSubcategoryOption("Anatomy and Physiology Teacher");
                        addSubcategoryOption("Science Lab Instructor");
                        addSubcategoryOption("Science Curriculum Specialist");
                        addSubcategoryOption("Social Studies Teacher");
                        addSubcategoryOption("History Teacher");
                        addSubcategoryOption("Geography Teacher");
                        addSubcategoryOption("Civics Teacher");
                        addSubcategoryOption("Government Teacher");
                        addSubcategoryOption("Economics Teacher");
                        addSubcategoryOption("World History Teacher");
                        addSubcategoryOption("Social Studies Department Chair");
                        addSubcategoryOption("Foreign Language Teacher");
                        addSubcategoryOption("Language Instructor");
                        addSubcategoryOption("Spanish Teacher");
                        addSubcategoryOption("French Teacher");
                        addSubcategoryOption("German Teacher");
                        addSubcategoryOption("Chinese Teacher");
                        addSubcategoryOption("Language Lab Coordinator");
                        addSubcategoryOption("Physical Education Teacher");
                        addSubcategoryOption("PE Instructor");
                        addSubcategoryOption("Fitness Coach");
                        addSubcategoryOption("Health Education Teacher");
                        addSubcategoryOption("Sports Coach");
                        addSubcategoryOption("Physical Education Department Chair");
                        addSubcategoryOption("Art Teacher");
                        addSubcategoryOption("Music Teacher");
                        addSubcategoryOption("Drama Teacher");
                        addSubcategoryOption("Visual Arts Teacher");
                        addSubcategoryOption("Choir Director");
                        addSubcategoryOption("Band Teacher");
                        addSubcategoryOption("Art History Teacher");
                        addSubcategoryOption("Special Education Teacher");
                        addSubcategoryOption("Learning Support Teacher");
                        addSubcategoryOption("Resource Teacher");
                        addSubcategoryOption("Inclusion Teacher");
                        addSubcategoryOption("Autism Specialist");
                        addSubcategoryOption("Behavioral Interventionist");
                        addSubcategoryOption("Vocational Teacher");
                        addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                        addSubcategoryOption("Culinary Arts Instructor");
                        addSubcategoryOption("Automotive Technology Teacher");
                        addSubcategoryOption("Computer Science Teacher");
                        addSubcategoryOption("Digital Media Instructor");
                    } else if (selectedCategory === "professor") {
                        addSubcategoryOption("University Professor");
                        addSubcategoryOption("Assistant Professor");
                        addSubcategoryOption("Associate Professor");
                        addSubcategoryOption("Full Professor");
                        addSubcategoryOption("Distinguished Professor");
                        addSubcategoryOption("Adjunct Professor");
                        addSubcategoryOption("Visiting Professor");
                        addSubcategoryOption("Research Professor");
                        addSubcategoryOption("Clinical Professor");
                        addSubcategoryOption("Philosophy");
                        addSubcategoryOption("Professor of History");
                        addSubcategoryOption("English");
                        addSubcategoryOption("Psychology");
                        addSubcategoryOption("Sociology");
                        addSubcategoryOption("Political Science");
                        addSubcategoryOption("Anthropology");
                        addSubcategoryOption("Linguistics");
                        addSubcategoryOption("Biology");
                        addSubcategoryOption("Chemistry");
                        addSubcategoryOption("Physics");
                        addSubcategoryOption("Mathematics");
                        addSubcategoryOption("Geology");
                        addSubcategoryOption("Astronomy");
                        addSubcategoryOption(" Environmental Science");
                        addSubcategoryOption("Computer Science");
                        addSubcategoryOption("Electrical Engineering");
                        addSubcategoryOption("Mechanical Engineering");
                        addSubcategoryOption("Civil Engineering");
                        addSubcategoryOption("Chemical Engineering");
                        addSubcategoryOption("Information Technology");
                        addSubcategoryOption("Business Administration");
                        addSubcategoryOption("Economics");
                        addSubcategoryOption("Finance");
                        addSubcategoryOption("Marketing");
                        addSubcategoryOption("Management");
                        addSubcategoryOption("Accounting");
                        addSubcategoryOption("Fine Arts");
                        addSubcategoryOption("Music");
                        addSubcategoryOption("Visual Arts");
                        addSubcategoryOption("Theater");
                        addSubcategoryOption("Dance");
                        addSubcategoryOption("Film Studies");
                        addSubcategoryOption("Educational Psychology");
                        addSubcategoryOption("Medicine");
                        addSubcategoryOption("Nursing");
                        addSubcategoryOption("Public Health");
                        addSubcategoryOption("Pharmacy");
                        addSubcategoryOption("Dentistry");
                        addSubcategoryOption("Law");
                        addSubcategoryOption("Constitutional Law");
                        addSubcategoryOption("Criminal Law");
                        addSubcategoryOption("International Law");
                        addSubcategoryOption("Environmental Law");
                        addSubcategoryOption("Social Work");
                        addSubcategoryOption("Social Welfare");
                        addSubcategoryOption("Clinical Social Work");
                        addSubcategoryOption("Library Science");
                        addSubcategoryOption("Information Studies");
                    } else if (selectedCategory === "services") {
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
                var categoryError = document.getElementById('category_error');

                var subcategory = document.getElementById("subcategory");
                var subcategoryError = document.getElementById('subcategory_error');

                if (category.value === '') {
                    displayError('Category is required.', 'category_error');
                    return false;
                } else if (category.value !== '') {
                    categoryError.innerHTML = '';
                }


                if (subcategory.value === "") {
                    displayError('Please select a subcategory.', 'subcategory_error');
                    return false;
                } else if (subcategory.value !== '') {
                    subcategoryError.innerHTML = '';
                }

            }
    </script>
<?php
                } else if ($this->data['method'] == "filltercandidate") {
?>

    <div class="container mt-5">
        <h3 class="text-center">Job Matched Candidates</h3>
        <div>

            <div class="input-group">
            </div>
        </div>
        <tbody>
            <br>
            <form action="http://localhost/arramjobs/providerController/filterAllCandidate" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category" id="lab1">Category:</label>
                            <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                                <option value="">Selest a Category</option>
                                <option value="architech">Architech</option>
                                <option value="Developer">Developer</option>
                                <option value="tester">Tester</option>
                                <option value="uiux">UI/UX Design</option>
                                <option value="datascience">Data Scientist</option>
                                <option value="databaseadmin">Database Admin</option>
                                <option value="teacher">Teacher</option>
                                <option value="professor">Professor</option>
                            </select>
                            <div id="category_error" class="error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subcategory" id="lab">Subcategory:</label>
                            <select class="form-control" id="subcategory" name="subcategory" disabled>
                                <option value="">Select a Subcategory</option>
                            </select>
                            <div id="subcategory_error" class="error"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="submit" id="search" onclick="">Search</button>
                    </div>
            </form>
    </div>
    <br>
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

                <?php
                    foreach ($this->data['filtercandidate'] as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['eq'] ?></td>
                        <td><?php echo $value['per'] ?></td>
                        <td><?php echo $value['exp'] ?></td>
                        <td><?php echo $value['skill'] ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <!-- <button class="btn btn-primary">View</button> -->
                                <a href="http://localhost/arramjobs/providerController/resumeCard/<?php echo $value['id'] ?>">View</a>
                            </div>
                        </td>
                    </tr>
                <?php
                    }
                ?>
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

            if (selectedCategory === "architech") {
                addSubcategoryOption("Architect");
                addSubcategoryOption("Senior Architect");
                addSubcategoryOption("Design Architect");
                addSubcategoryOption("Project Architect");
                addSubcategoryOption("Principal Architect");
                addSubcategoryOption("Landscape Architect");
                addSubcategoryOption("Urban Planner");
                addSubcategoryOption("Interior Designer");
                addSubcategoryOption("Architectural Technologist");
                addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                addSubcategoryOption("Sustainable Design Consultant");
                addSubcategoryOption("Architectural Drafter");
                addSubcategoryOption("Architectural Visualization Artist");
                addSubcategoryOption("Urban Designer");
                addSubcategoryOption("Historic Preservation Architect");
                addSubcategoryOption("Residential Architect");
                addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                addSubcategoryOption("Architectural Educator");
                addSubcategoryOption("Construction Project Manage");
                addSubcategoryOption("Industrial Designer");
                addSubcategoryOption("Healthcare Facility Planner");
                addSubcategoryOption("Retail Space Designer");

                addSubcategoryOption()
            } else if (selectedCategory === "Developer") {
                addSubcategoryOption("Python Software Engineer");
                addSubcategoryOption("Python");
                addSubcategoryOption("Python Data Scientist");
                addSubcategoryOption("Python Machine Learning Engineer");
                addSubcategoryOption("Python Automation");
                addSubcategoryOption("Java Software Engineer");
                addSubcategoryOption("Java");
                addSubcategoryOption("Java Full Stack ");
                addSubcategoryOption("Java Android ");
                addSubcategoryOption("Java Spring ");
                addSubcategoryOption("Java Microservices ");
                addSubcategoryOption("JavaScript Software Engineer");
                addSubcategoryOption("Front-end Developer");
                addSubcategoryOption("Node.js Developer");
                addSubcategoryOption("React Developer");
                addSubcategoryOption("Angular Developer");
                addSubcategoryOption("Vue.js Developer");
                addSubcategoryOption("Full Stack JavaScript Developer");
                addSubcategoryOption("C# Software Engineer");
                addSubcategoryOption(".NET Develope");
                addSubcategoryOption("ASP.NET Developer");
                addSubcategoryOption("Unity Developer");
                addSubcategoryOption("Xamarin Developer");
                addSubcategoryOption("C++ Software Engineer");
                addSubcategoryOption("Game Developer (using C++)");
                addSubcategoryOption("C++ Systems Developer");
                addSubcategoryOption("PHP Software Engineer");
                addSubcategoryOption("PHP Web Developer");
                addSubcategoryOption("WordPress Developer");
                addSubcategoryOption("Laravel Developer");
                addSubcategoryOption("Symfony Developer");
                addSubcategoryOption("Ruby Software Engineer");
                addSubcategoryOption("Ruby on Rails Developer");
                addSubcategoryOption("Swift Software Engineer");
                addSubcategoryOption("iOS Developer (using Swift)");
                addSubcategoryOption("macOS Developer (using Swift)");
                addSubcategoryOption("Kotlin Software Engineer");
                addSubcategoryOption("Android Developer (using Kotlin)");
                addSubcategoryOption("Go Software Engineer");
                addSubcategoryOption("Rust Software Engineer");
                addSubcategoryOption("Systems Developer (using Rust");
                addSubcategoryOption("TypeScript Software Engineer");
                addSubcategoryOption("Front-end Developer (using TypeScript)");
                addSubcategoryOption("SQL Developer");
                addSubcategoryOption("Database Developer");
                addSubcategoryOption("Scala Software Engineer");
                addSubcategoryOption("Haskell Software Engineer");
                addSubcategoryOption("Perl Software Engineer ");
                addSubcategoryOption("Lua Software Engineer ");
                addSubcategoryOption("Game Developer (using Lua) ");
                addSubcategoryOption("MATLAB Software Enginee ");
                addSubcategoryOption("Data Analyst (using MATLAB) ");
            } else if (selectedCategory === "tester") {
                addSubcategoryOption("Software Tester");
                addSubcategoryOption("Test Engineer");
                addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                addSubcategoryOption("Test Automation Engineer");
                addSubcategoryOption("Manual Tester");
                addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                addSubcategoryOption("Test Manager");
                addSubcategoryOption("Performance Tester");
                addSubcategoryOption("Usability Tester");
                addSubcategoryOption("Regression Tester");
                addSubcategoryOption("User Acceptance Tester");
                addSubcategoryOption("Security Tester");
                addSubcategoryOption("Mobile App Tester");
                addSubcategoryOption("Game Tester");
                addSubcategoryOption("Functional Tester");
                addSubcategoryOption("Test Architect");
                addSubcategoryOption("Test Coordinator");
                addSubcategoryOption("Continuous Integration Tester");
                addSubcategoryOption("Load Tester");
                addSubcategoryOption("Test Designer");
                addSubcategoryOption("Test Technician");
                addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                addSubcategoryOption("Test Coordinator");
                addSubcategoryOption("Compliance Tester");
            } else if (selectedCategory === "uiux") {
                addSubcategoryOption("UI/UX Designer");
                addSubcategoryOption("User Experience Designer");
                addSubcategoryOption("User Interface Designer");
                addSubcategoryOption("Interaction Designer");
                addSubcategoryOption("Visual Designer");
                addSubcategoryOption("UX Researcher");
                addSubcategoryOption("UI/UX Architect");
                addSubcategoryOption("Information Architect");
                addSubcategoryOption("UX Strategist");
                addSubcategoryOption("Product Designer");
                addSubcategoryOption("User-Centered Design Specialist");
                addSubcategoryOption("Usability Analyst");
                addSubcategoryOption("UI/UX Developer");
                addSubcategoryOption("Mobile App Designer");
                addSubcategoryOption("Web Designer");
                addSubcategoryOption("Visual Experience Designer");
                addSubcategoryOption("UX Content Strategist");
                addSubcategoryOption("Interaction Architect");
                addSubcategoryOption("UX/UI Illustrator");
                addSubcategoryOption("User Interface Animator");
                addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                addSubcategoryOption("Accessibility Designer ");
                addSubcategoryOption("Prototype Designer ");
                addSubcategoryOption("UI/UX Lead ");
                addSubcategoryOption("Design Systems Manager ");

            } else if (selectedCategory === "datascience") {
                addSubcategoryOption("Data Scientist");
                addSubcategoryOption("Senior Data Scientist");
                addSubcategoryOption("Machine Learning Engineer");
                addSubcategoryOption("Data Analyst");
                addSubcategoryOption("Senior Data Analyst");
                addSubcategoryOption("Statistician");
                addSubcategoryOption("Business Intelligence Analyst");
                addSubcategoryOption("Quantitative Analyst (Quant)");
                addSubcategoryOption("Data Engineer");
                addSubcategoryOption("Data Architect");
                addSubcategoryOption("AI Research Scientist");
                addSubcategoryOption("Predictive Modeler");
                addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                addSubcategoryOption("Computer Vision Engineer");
                addSubcategoryOption("Big Data Engineer");
                addSubcategoryOption("Analytics Manager");
                addSubcategoryOption("Data Science Manager");
                addSubcategoryOption("Chief Data Officer (CDO)");
                addSubcategoryOption("Research Scientist (AI/ML)");
                addSubcategoryOption("Decision Scientist");
                addSubcategoryOption("Marketing Analyst");
                addSubcategoryOption("Operations Research Analyst");
                addSubcategoryOption("Data Visualization Specialist");
                addSubcategoryOption("Customer Insights Analyst");
                addSubcategoryOption("Fraud Analyst");

            } else if (selectedCategory === "databaseadmin") {
                addSubcategoryOption("Database Administrator (DBA)");
                addSubcategoryOption("Senior Database Administrator");
                addSubcategoryOption("Database Engineer");
                addSubcategoryOption("Database Architect");
                addSubcategoryOption("Database Analyst");
                addSubcategoryOption("Data Warehouse Administrator");
                addSubcategoryOption("SQL Server Administrator");
                addSubcategoryOption("Oracle Database Administrator");
                addSubcategoryOption("MySQL Database Administrator");
                addSubcategoryOption("PostgreSQL Database Administrator");
                addSubcategoryOption("MongoDB Administrator");
                addSubcategoryOption("NoSQL Database Administrator");
                addSubcategoryOption("DBMS Administrator (Database Management System)");
                addSubcategoryOption("Database Operations Manager");
                addSubcategoryOption("Database Performance Tuning Specialist");
                addSubcategoryOption("Data Migration Specialist");
                addSubcategoryOption("Database Security Administrator");
                addSubcategoryOption("Database Backup and Recovery Specialist");
                addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)");
                addSubcategoryOption("Database Compliance Officer");
                addSubcategoryOption("Database DevOps Engineer");
                addSubcategoryOption("Database Automation Engineer");
                addSubcategoryOption("Database Replication Specialist");
                addSubcategoryOption("Data Governance Manager");
                addSubcategoryOption("Data Steward");
            } else if (selectedCategory === "teacher") {
                addSubcategoryOption("Tamil");
                addSubcategoryOption("Mathematics Teacher");
                addSubcategoryOption("Math Instructor");
                addSubcategoryOption("Algebra Teacher");
                addSubcategoryOption("Geometry Teacher");
                addSubcategoryOption("Calculus Teacher");
                addSubcategoryOption("Statistics Teacher");
                addSubcategoryOption("Math Tutor");
                addSubcategoryOption("Math Coach");
                addSubcategoryOption("Math Curriculum Specialist");
                addSubcategoryOption("Math Department Chair");
                addSubcategoryOption("English Teacher");
                addSubcategoryOption("Language Arts Teacher");
                addSubcategoryOption("Literature Teacher");
                addSubcategoryOption("Writing Instructor");
                addSubcategoryOption("Creative Writing Teacher");
                addSubcategoryOption("English as a Second Language (ESL) Teacher");
                addSubcategoryOption("Reading Specialist");
                addSubcategoryOption("English Tutor");
                addSubcategoryOption("English Department Chair");
                addSubcategoryOption("Science Teacher");
                addSubcategoryOption("Biology Teacher");
                addSubcategoryOption("Chemistry Teacher");
                addSubcategoryOption("Physics Teacher");
                addSubcategoryOption("Environmental Science Teacher");
                addSubcategoryOption("Earth Science Teacher");
                addSubcategoryOption("Anatomy and Physiology Teacher");
                addSubcategoryOption("Science Lab Instructor");
                addSubcategoryOption("Science Curriculum Specialist");
                addSubcategoryOption("Social Studies Teacher");
                addSubcategoryOption("History Teacher");
                addSubcategoryOption("Geography Teacher");
                addSubcategoryOption("Civics Teacher");
                addSubcategoryOption("Government Teacher");
                addSubcategoryOption("Economics Teacher");
                addSubcategoryOption("World History Teacher");
                addSubcategoryOption("Social Studies Department Chair");
                addSubcategoryOption("Foreign Language Teacher");
                addSubcategoryOption("Language Instructor");
                addSubcategoryOption("Spanish Teacher");
                addSubcategoryOption("French Teacher");
                addSubcategoryOption("German Teacher");
                addSubcategoryOption("Chinese Teacher");
                addSubcategoryOption("Language Lab Coordinator");
                addSubcategoryOption("Physical Education Teacher");
                addSubcategoryOption("PE Instructor");
                addSubcategoryOption("Fitness Coach");
                addSubcategoryOption("Health Education Teacher");
                addSubcategoryOption("Sports Coach");
                addSubcategoryOption("Physical Education Department Chair");
                addSubcategoryOption("Art Teacher");
                addSubcategoryOption("Music Teacher");
                addSubcategoryOption("Drama Teacher");
                addSubcategoryOption("Visual Arts Teacher");
                addSubcategoryOption("Choir Director");
                addSubcategoryOption("Band Teacher");
                addSubcategoryOption("Art History Teacher");
                addSubcategoryOption("Special Education Teacher");
                addSubcategoryOption("Learning Support Teacher");
                addSubcategoryOption("Resource Teacher");
                addSubcategoryOption("Inclusion Teacher");
                addSubcategoryOption("Autism Specialist");
                addSubcategoryOption("Behavioral Interventionist");
                addSubcategoryOption("Vocational Teacher");
                addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                addSubcategoryOption("Culinary Arts Instructor");
                addSubcategoryOption("Automotive Technology Teacher");
                addSubcategoryOption("Computer Science Teacher");
                addSubcategoryOption("Digital Media Instructor");
            } else if (selectedCategory === "professor") {
                addSubcategoryOption("University Professor");
                addSubcategoryOption("Assistant Professor");
                addSubcategoryOption("Associate Professor");
                addSubcategoryOption("Full Professor");
                addSubcategoryOption("Distinguished Professor");
                addSubcategoryOption("Adjunct Professor");
                addSubcategoryOption("Visiting Professor");
                addSubcategoryOption("Research Professor");
                addSubcategoryOption("Clinical Professor");
                addSubcategoryOption("Philosophy");
                addSubcategoryOption("Professor of History");
                addSubcategoryOption("English");
                addSubcategoryOption("Psychology");
                addSubcategoryOption("Sociology");
                addSubcategoryOption("Political Science");
                addSubcategoryOption("Anthropology");
                addSubcategoryOption("Linguistics");
                addSubcategoryOption("Biology");
                addSubcategoryOption("Chemistry");
                addSubcategoryOption("Physics");
                addSubcategoryOption("Mathematics");
                addSubcategoryOption("Geology");
                addSubcategoryOption("Astronomy");
                addSubcategoryOption(" Environmental Science");
                addSubcategoryOption("Computer Science");
                addSubcategoryOption("Electrical Engineering");
                addSubcategoryOption("Mechanical Engineering");
                addSubcategoryOption("Civil Engineering");
                addSubcategoryOption("Chemical Engineering");
                addSubcategoryOption("Information Technology");
                addSubcategoryOption("Business Administration");
                addSubcategoryOption("Economics");
                addSubcategoryOption("Finance");
                addSubcategoryOption("Marketing");
                addSubcategoryOption("Management");
                addSubcategoryOption("Accounting");
                addSubcategoryOption("Fine Arts");
                addSubcategoryOption("Music");
                addSubcategoryOption("Visual Arts");
                addSubcategoryOption("Theater");
                addSubcategoryOption("Dance");
                addSubcategoryOption("Film Studies");
                addSubcategoryOption("Educational Psychology");
                addSubcategoryOption("Medicine");
                addSubcategoryOption("Nursing");
                addSubcategoryOption("Public Health");
                addSubcategoryOption("Pharmacy");
                addSubcategoryOption("Dentistry");
                addSubcategoryOption("Law");
                addSubcategoryOption("Constitutional Law");
                addSubcategoryOption("Criminal Law");
                addSubcategoryOption("International Law");
                addSubcategoryOption("Environmental Law");
                addSubcategoryOption("Social Work");
                addSubcategoryOption("Social Welfare");
                addSubcategoryOption("Clinical Social Work");
                addSubcategoryOption("Library Science");
                addSubcategoryOption("Information Studies");
            } else if (selectedCategory === "services") {
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
            var categoryError = document.getElementById('category_error');

            var subcategory = document.getElementById("subcategory");
            var subcategoryError = document.getElementById('subcategory_error');

            if (category.value === '') {
                displayError('Category is required.', 'category_error');
                return false;
            } else if (category.value !== '') {
                categoryError.innerHTML = '';
            }


            if (subcategory.value === "") {
                displayError('Please select a subcategory.', 'subcategory_error');
                return false;
            } else if (subcategory.value !== '') {
                subcategoryError.innerHTML = '';
            }

        }

        <?php
                }
        ?>
    </script>