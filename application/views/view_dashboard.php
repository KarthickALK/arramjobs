<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        .bg-primary{
            background-color: rgb(16, 16, 99) !important;
        }
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
  margin-left:-120px;
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

/* Form input styles */
.form-control {
  border-radius: 3px;
  border: 1px solid #ccc;
  padding: 10px;
}

.form-control-file {
  border: 1px solid #ccc;
  padding: 10px;
}

/* Form button style */
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
#wid{
    width: 100%;
}


 
    </style>
</head>
<body >
    <div class="containers">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    
   <br>
   <br>
   <div class="containers px-4 text-center">
    <div class="row gx-5">
      <div class="col">
       
      </div>
    
    </div>
  </div>
  
  <h2><center>Update Profile</center></h2>
    <div class="container">
        <!-- <h2 class="text-white bg-secondary rounded-5 ms-5 me-5 shadow">Provider Registration Form</h2> -->
        <!-- <h3 class="d-inline-flex p-2 ms-5 me-1 bg-info text-white rounded-3 shadow">Provider Registration Form</h3> -->
        
        <div>
        
       
        <!-- <h4 class="grid-text-center d-flex justify-content-start text-dark bg-secondary bg-opacity-5 rounded-3 ms-5 me-5 mt-3"><center>Company Details</center></h4> -->
        <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 me-5 text-white fs-5">Company Details</div>
     
        <form  name="forms" action="Registration/update_profile" method="post">
       
            <div class=" mb-3 mt-4  ms-5 me-5 w-55  ">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control"  id="name" name="name" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                <p id="nameerr"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="phno" class="form-label">Number:</label>
                <input type="number" class="form-control"  id="phno" name="phno">
                <p id="pherr"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="email" class="form-label" >Email-ID:</label>
                <input type="email" class="form-control"  id="email" name="email" placeholder="enter email">
                <p id="mailerr" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="addr" class="form-label" >street address:</label>
                <input type="address" class="form-control"  id="addr" name="addr" placeholder="enter address">
                <p id="adderr" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="addr" class="form-label" >Landmark:</label>
                <input type="address" class="form-control"  id="landmark1" name="landmark1" placeholder="enter address">
                <p id="landerr1" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="addr" class="form-label" >City:</label>
                <input type="address" class="form-control"  id="city1" name="city1" placeholder="enter city">
                <p id="cityerr1" style="color: red;"></p>
            </div>
           
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="addr" class="form-label" >District:</label>
                <input type="address" class="form-control"  id="district1" name="district1" placeholder="enter district">
                <p id="diserr1" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="addr" class="form-label" >State:</label>
                <input type="address" class="form-control"  id="state1" name="state1" placeholder="enter state">
                <p id="stateerr1" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="addr" class="form-label" >Pincode:</label>
                <input type="number" class="form-control"  id="pincode1" name="pincode1">
                <p id="pinerr1" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="file" class="form-label" >Logo:</label>
                <input type="file" class="form-control" id="file" name="file" >
                <p id="logerr" style="color: red;"></p>
            </div>
            <br>
            <!-- <h3 class=" grid-text-center d-flex justify-content-start text-dark bg-light bg-opacity-50 rounded-3 ms-5 me-5 mt-3"><center>Contact person details</center></h3> -->
            <!-- <div class="grid-text-center p-2 border bg-light  rounded-1 ms-5 me-5">Contact person details</div> -->
             <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 fs-5 me-5 text-light">Contact person details</div>
            
            <div class="mb-3 mt-4  ms-5 me-5 w-55 " >
                <label for="name1" class="form-label">Name:</label>
                <input type="text" class="form-control"  id="name1" name="name1" placeholder="enter name" onkeypress="return allowOnlyLetters1(event, this)">
                <p id="nameerr1"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="role" class="form-label">Role:</label>
                <input type="text" class="form-control"  id="role" name="role" placeholder="enter role">
                <p id="rolerr" style="color: red;"></p>
            </div> 
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="phno1" class="form-label">Mobile Number:</label>
                <input type="number" class="form-control"  id="phno1" name="phno1">
                <p id="pherr1"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="mail1" class="form-label">Email-ID:</label>
                <input type="email" class="form-control"  id="mail1" name="mail1" placeholder="enter email">
                <p id="mailerr1" style="color: red;"></p>
            </div>
           
            <div>
                <button class="btn bg-primary ms-5 mt-3 mb-5  text-white" onclick="return group()" ><center>Submit</center></button> 
                
            </div>
        </form>
       </div>
    </div>
    <br>
    <br>
 </div>
 
 
 <div class="container">
    <h1>Add New Jobs</h1>
    <form name="experienceform" aaction="addnew" method="post" onsubmit="return validateForm()">
   
    <div class="form-group">
            <label for="company_name">Company Name:</label>
            <input type="text" class="form-control" id="company_name" name="company_name" >
            <div id="company_name_error" class="error"></div>
        </div>
        
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
            <input type="text" class="form-control" id="preferred_location" name="preferred_location" >
            <div id="preferred_location_error" class="error"></div>
        </div>
 <div class="form-group">
        <label for="jobtype">Job Type :</label>
        <select class="form-control" id="jobtype" name="jobtype">
        <option value="">select your jobtype</option>
          <option value="part time">Part Time</option>
          <option value="part time">Full Time</option>
          </select>
          <div id="jobtype_error" class="error"></div>
</div>
       
<div class="form-group">
            <label for="expected_salary">Salary:</label>
            <input type="text" class="form-control" id="expected_salary" name="expected_salary" >
            <div id="expected_salary_error" class="error"></div>
        </div>

        <div class="form-group">
            <label for="no_of_openings">No Of Openingsr  :</label>
            <input type="number" class="form-control" id="no_of_openings" name="no_of_openings" >
            <div id="no_of_openings_error" class="error"></div>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" >
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
</div>
 <!-- <script src="regvalid.js"></script> -->
 <script type="text/javascript">
      function allowOnlyLetters(e, t)   
  {    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
  else {
   return true; }   

    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {
   
    document.getElementById("nameerr").innerHTML = "";
    document.forms.phno.focus();
   return true;
} 
else if(((charCode > 48) && (charCode < 57))){
    
    document.getElementById("nameerr").innerHTML = "Numbers not allowed Please enter only letters";
    document.forms.name.focus();
    return false;

} 
  }
  
  function allowOnlyLetters1(e, t)   
  {    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
  else {
   return true; }   

    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {
   
    document.getElementById("nameerr1").innerHTML = "";
    document.forms.phno1.focus();
   return true;
} 
else if(((charCode > 48) && (charCode < 57))){
    
    document.getElementById("nameerr1").innerHTML = "Numbers not allowed Please enter only letters";
    document.forms.name1.focus();
    return false;

} 
  }
  
    
function group()
{
    var x=document.forms.name.value;
    var p=document.forms.phno.value;
    var a=document.forms.email.value;
    var y=document.forms.addr.value;
    var y1=document.forms.landmark1.value;
    var y2=document.forms.city1.value;
    var y3=document.forms.pincode1.value;
    var y5=document.forms.district1.value;
    var y4=document.forms.state1.value;
    var l=document.forms.file.value;
    var x1=document.forms.name1.value;
    var p1=document.forms.phno1.value;
    var a1=document.forms.mail1.value;
    var r=document.forms.role.value;

    if(x != "")
    {
        if(x.length<4)
        {
            document.getElementById("nameerr").innerHTML="* Name should be in atleast 4 characters";
            return false;
        }
        else if(x.length>50)
        {
            document.getElementById("nameerr").innerHTML="* Name should not exceed 50 characters";
            return false;
        }
        else{
            document.getElementById("nameerr").innerHTML="";
            
        }
    }
    else if(x=="")
    {
        var namesms1="* Name must be filled out";
        document.getElementById("nameerr").innerHTML=namesms1;
        document.forms.name.focus();
        return false;
    }

     if(p !="" )
     {
        if(p.length!==10)
        {
            document.getElementById("pherr").innerHTML="Phone number  must be in 10 digits";
            return false;
        }
        else if(p.length>11)
        {
         document.getElementById("pherr1").innerHTML="phone number should not exceed 10 digits";
         return false;
        }
      
        else{
            document.getElementById("pherr").innerHTML="";
            
        }
    }  
    
     else if(p=="")
     {
        var phsms="phone number must be filled out";
        document.getElementById("pherr").innerHTML=phsms;
        document.forms.phno.focus();
        return false;
        
    }

    if(a=="")
     {
         var emailsms="email must be filled out";
         document.getElementById("mailerr").innerHTML=emailsms;
         document.forms.email.focus();
         return false;
     }
     else if(a!="")
     {
         // document.getElementById("mailerr").innerHTML="";
        /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a))
         {
             document.getElementById("mailerr").innerHTML="";
             // return (true);
         }
         else{
             document.getElementById("mailerr").innerHTML="you have entered an invalid email address";
             return false;
         }
     }   

     if(y!="")
     {
         if(y.length<3)
         {
             document.getElementById("adderr").innerHTML="* street address should be in atleast 3 characters";
             return false;
         }
         else if(y.length>100)
         {
             document.getElementById("adderr").innerHTML="* street address should not exceed 100 characters";
             return false;
         }
         else
         {
             document.getElementById("adderr").innerHTML="";
         }
     }
     else 
     {
         var adderr = "* street address must be in filled out";
         document.getElementById("adderr").innerHTML=adderr;
         document.forms.addr.focus();
         return false;
     }

     if(y1!="")
     {
         if(y1.length<3)
         {
             document.getElementById("landerr1").innerHTML="* landmark should be in atleast 3 characters";
             return false;
         }
         else if(y1.length>100)
         {
             document.getElementById("landerr1").innerHTML="* landmark should not exceed 100 characters";
             return false;
         }
         else
         {
             document.getElementById("landerr1").innerHTML="";
         }
     }
     else 
     {
         var landmark = "* landmark must be in filled out";
         document.getElementById("landerr1").innerHTML=landmark;
         document.forms.landmark1.focus();
         return false;
     }

     
     if(y2!="")
     {
         if(y2.length<3)
         {
             document.getElementById("cityerr1").innerHTML="* city should be in atleast 3 characters";
             return false;
         }
         else if(y2.length>100)
         {
             document.getElementById("cityerr1").innerHTML="* city should not exceed 100 characters";
             return false;
         }
         else
         {
             document.getElementById("cityerr1").innerHTML="";
         }
     }
     else 
     {
         var city= "* city must be in filled out";
         document.getElementById("cityerr1").innerHTML=city;
         document.forms.city1.focus();
         return false;
     }


     if(y5!="")
     {
         if(y5.length<3)
         {
             document.getElementById("diserr1").innerHTML="* district should be in atleast 3 characters";
             return false;
         }
         else if(y5.length>100)
         {
             document.getElementById("diserr1").innerHTML="* district should not exceed 100 characters";
             return false;
         }
         else
         {
             document.getElementById("diserr1").innerHTML="";
         }
     }
     else 
     {
         var district= "* district must be in filled out";
         document.getElementById("diserr1").innerHTML=district;
         document.forms.district1.focus();
         return false;
     }

     if(y4!="")
     {
         if(y4.length<3)
         {
             document.getElementById("stateerr1").innerHTML="* state should be in atleast 3 characters";
             return false;
         }
         else if(y4.length>100)
         {
             document.getElementById("stateerr1").innerHTML="* state should not exceed 100 characters";
             return false;
         }
         else
         {
             document.getElementById("stateerr1").innerHTML="";
         }
     }
     else 
     {
         var state= "* state must be in filled out";
         document.getElementById("stateerr1").innerHTML=state;
         document.forms.state1.focus();
         return false;
     }


     
    





     if(y3 !="" )
     {
        if(y3.length!==6)
        {
            document.getElementById("pinerr1").innerHTML="pincode  must be in 6 digits";
            return false;
        }
        else if(y3.length>6)
        {
         document.getElementById("pinerr1").innerHTML="pincode should not exceed 6 digits";
         return false;
        }
      
        else{
            document.getElementById("pinerr1").innerHTML="";
            
        }
    }  
    
     else if(y3=="")
     {
        var pincode="phone number must be filled out";
        document.getElementById("pinerr1").innerHTML=pincode;
        document.forms.pincode1.focus();
        return false;
        
    }

     
    if(x1 != "")
    {
        if(x1.length<4)
        {
            document.getElementById("nameerr1").innerHTML="* Name should be in atleast 4 characters";
            return false;
        }
        else if(x1.length>50)
        {
            document.getElementById("nameerr1").innerHTML="* Name should not exceed 50 characters";
            return false;
        }
        else{
            document.getElementById("nameerr1").innerHTML="";
            
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
    if(x1=="")
    {
        var namesms2="* Name must be filled out";
        document.getElementById("nameerr1").innerHTML=namesms2;
        document.forms.name1.focus();
        return false;
    }

     
    if(r!="")
     {
          if(y.length>50)
         {
             document.getElementById("rolerr").innerHTML="* Address should not exceed 50 characters";
             return false;
         }
         else
         {
             document.getElementById("rolerr").innerHTML="";
         }
     }
     else 
     {
         var adderr = "* role must be in filled out";
         document.getElementById("rolerr").innerHTML=adderr;
         document.forms.role.focus();
         return false;
     }

    if(p1 !="" )
    {
       if(p1.length!==10)
       {
           document.getElementById("pherr1").innerHTML="Phone number  must be in 10 digits";
           return false;
       }
       else if(p1.length>11)
       {
        document.getElementById("pherr1").innerHTML="phone number should not exceed 10 digits";
        return false;
       }
     
       else{
           document.getElementById("pherr1").innerHTML="";
           
       }
   }  
   
    else if(p1=="")
    {
       var phsms1="phone number must be filled out";
       document.getElementById("pherr1").innerHTML=phsms1;
       document.forms.phno1.focus();
       return false;
       
   }

  
    if(a1=="")
    {
        var emailsms1="email must be filled out";
        document.getElementById("mailerr1").innerHTML=emailsms1;
        document.forms.mail1.focus();
        return false;
    }
    else if(a1!="")
    {
        // document.getElementById("mailerr").innerHTML="";
       /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a1))
        {
            document.getElementById("mailerr1").innerHTML="";
            // return (true);
        }
        else{
            document.getElementById("mailerr1").innerHTML="you have entered an invalid email address";
            return false;
        }
    }   

  }
 </script>

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