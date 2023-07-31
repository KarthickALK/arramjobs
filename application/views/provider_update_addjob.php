<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .bg-primary{
             background-color: rgb(16, 16, 99) !important;
            
        }
      

        body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding-right: 350px;
  padding-left:350px;
}

.container {
  background-color: white;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  width: 400px;
  max-width: 100%;
  margin-top:50px;
  border: 1px solid #ccc;
  }

h1 {
  text-align: left;
  padding-bottom:10px;
  margin-bottom: 30px;
  color: navy;
}

.form-group label {
  font-weight: bold;
}

.form-control {
  border-radius: 3px;
  border: 1px solid #ccc;
  padding: 10px;
  width: 100%;
}

/* .btn-primary {
  background-color: #4285f4;
  border: none;
  width: 100%;
  margin-top: 20px;
  padding: 12px;
  font-weight: bold;
  color: #fff;
} */

/* .btn-primary:hover {
  background-color: #2d76d9;
} */

.error {
  color: red;
  margin-top: 5px;
}
#head1{
  color:blue;
}
#font{
  font-size:small;
}
#w{
    width:100%;
}
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
   
       
    function alphaOnly(event) {

            var value = String.fromCharCode(event.which);
            var pattern = new RegExp(/[a-zA-Z]/i);
            return pattern.test(value);
         }
     
         $('#cm').bind('keypress', alphaOnly);
       
      
         -->
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
   
    document.getElementById("nameerrs").innerHTML = "";
    document.forms1.jb.focus();
   return true;
    } 
    else if(((charCode > 48) && (charCode < 57))){
    
    document.getElementById("nameerrs").innerHTML = "Numbers not allowed Please enter only letters";
    document.forms1.cm.focus();
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
   
    document.getElementById("terr").innerHTML = "";
    document.forms1.lk.focus();
   return true;
} 
else if(((charCode > 48) && (charCode < 57))){
    
    document.getElementById("terr").innerHTML = "Numbers not allowed Please enter only letters";
    document.forms1.jb.focus();
    return false;

} 


 }

</script>

<div class="container">
        <form name="forms1" id="font">
            <br>
            <div id="head1" class="bg-primary text-white"><h3>Update Add new job</h3></div>
            <div class="mb-3"  >
                <label for="cm" class="form-label"><b>Company Name:</b></label>
                <input type="text" class="form-control"   id="cm" name="cm" placeholder="enter company name" onkeypress="return allowOnlyLetters(event, this)">
                <p id="nameerrs"  style="color: red;"></p>
            </div>
            <div class="mb-3"  >
                <label for="jb" class="form-label"><b>Job Tittle:</b></label>
                <input type="text" class="form-control"   id="jb" name="jb" placeholder="enter job tittle" onkeypress="return allowOnlyLetters1(event, this)">
                <p id="terr"  style="color: red;"></p>
            </div>
            <div class="mb-3">
                <label for="lk" class="form-label"><b>Location:</b></label>
                <input type="text" class="form-control" id="lk" name="lk" placeholder="enter location">
                <p id="lerr"  style="color: red;"></p>
            </div>
            <div class="mb-3">
                <label for="Jtype" class="form-label" required><b>Job Type:</b></label>
               
                <br>
                <input type="checkbox" id="jtype1" name="jtype1[]" class="ms-5" value='0'>
                <label for="jtype1">Part-Time</label>
                <input type="checkbox" id="jtype2" name="jtype2[]"  class="ms-5" value='1'>
                <label for="jtype2" >Full-Time</label>
                <p id="cerr"  style="color: red;"></p>
            </div>
              
               
            <div>
                <label for="sal" class="form-label"><b>Salary:</b></label>
                <input type="number" class="form-control" id="sal" name="sal">
                <p id="serr"  style="color: red;"></p>
            </div>
                
             <div>  
                <label for="exp" class="form-label"><b>Experience:</b></label>
                <br>
                <input type="checkbox" id="emp1" name="emp1" >
                <label for="exp1" >Fresher</label>
               
                <input type="checkbox" id="emp2" name="emp2"  class="ms-4" >
                <label for="exp2">0-1</label>
               
                <input type="checkbox" id="emp3" name="emp3"  class="ms-4" >
                <label for="exp3">2-3</label>
               
                <input type="checkbox" id="emp4" name="emp4"  class="ms-4">
                <label for="exp4">4-5</label>
                
               
                
                <!-- <input type="checkbox" id="emp6" name="emp6"  class="ms-4" >
                <label for="exp5"  >Others :</label>
                <input type="text" id="emp5" name="emp5">
                <p id="err"  style="color: red;"></p> -->
            </div>
               
                <label>
        <input type="checkbox" id="showTextboxCheckbox" > others
      </label>
      <p id="err"  style="color: red;"></p>
      
      <div id="textboxContainer" style="display: none;" required>
        <label>
          Textbox:
          <input type="text" id="textbox" required>
          
        </label>
      </div>
            <div>
                <label for="nop" class="form-label"><b>Number Of Openings</b></label>
                <input type="number" class="form-control" id="nop" name="nop">
                <p id="nerr"  style="color: red;"></p>
            </div>
              
            <div>
                <label for="des" class="form-label"><b>Description</b></label>
                <input type="text" class="form-control" id="des" name="des" >
                <p id="derr"  style="color: red;"></p>
            </div>
              
            <!-- <input type="button" value="Submit" class="bg-primary text-light w-25"> -->
            <button class="btn bg-primary shadow text-white" id="w" onclick="return groups()"><center>Submit</center></button>
            
            </form>
</div>
<!-- <script src="addjs.js"></script> -->
<script>
  function groups(){
    var z1=document.forms1.cm.value;
    var z2=document.forms1.jb.value;
    var z3=document.forms1.lk.value;
    var z4=document.forms1.jtype1.value;
    var z5=document.forms1.jtype2.value;
    var z6=document.forms1.sal.value;
    var z7=document.forms1.nop.value;
    var z8=document.forms1.des.value;
  
      if(z1 != "")
      {
      if(z1.length<4)
      {
          document.getElementById("nameerrs").innerHTML="* Name should be in atleast 4 characters";
          return false;
      }
      else if(z1.length>50)
      {
          document.getElementById("nameerrs").innerHTML="* Name should not exceed 50 characters";
          return false;
      }
      else{
          document.getElementById("nameerrs").innerHTML="";
          
      }
      }
      else if(z1=="")
      {
          var namesms11="* Name must be filled out";
          document.getElementById("nameerrs").innerHTML=namesms11;
          document.forms1.cm.focus();
          return false;
      }

      if(z2 != "")
      {
      if(z2.length<3)
      {
          document.getElementById("terr").innerHTML="* job tittle should be in atleast 3 characters";
          return false;
      }
      else if(z2.length>50)
      {
          document.getElementById("terr").innerHTML="* job tittle should not exceed 50 characters";
          return false;
      }
      else
      {
        document.getElementById("terr").innerHTML="";
      }
      }
      else if(z2=="")
      {
        var namesms1="* job tittle must be filled out";
        document.getElementById("terr").innerHTML=namesms1;
        document.forms1.jb.focus();
        return false;
      }
      if(z3 != "")
      {
      if(z3.length<3)
      {
        document.getElementById("lerr").innerHTML="* location should be in atleast 3 characters";
        return false;
      }
      else if(z3.length>50)
      {
        document.getElementById("lerr").innerHTML="* location should not exceed 50 characters";
        return false;
      }
      else
      {
        document.getElementById("lerr").innerHTML="";
      }
      }
      else if(z3=="")
      {
        var namesms1="* location must be filled out";
        document.getElementById("lerr").innerHTML=namesms1;
        document.forms1.lk.focus();
        return false;
      }
      var valid=false;
      if(document.getElementById("jtype1").checked)
      {
        valid=true;
        document.getElementById("cerr").innerHTML="";
      }
      else if(document.getElementById("jtype2").checked)
      {
        valid=true;
        document.getElementById("cerr").innerHTML="";
      }
      else
      {
        var n1="*Please select atleast one checkbox";
        document.getElementById("cerr").innerHTML=n1;
        document.forms1.jtype1.focus();
        document.forms1.jtype2.focus();
        return false;
      }
      if(z6 !="" )
      {
      if(z6.length>20)
      {
        document.getElementById("serr").innerHTML="salary should not exceed 20 digits";
        return false;
      }
      else
      {
       document.getElementById("serr").innerHTML="";
      }
      }  
      else if(z6=="")
      {
       var phsms1="salary must be filled out";
       document.getElementById("serr").innerHTML=phsms1;
       document.forms1.sal.focus();
       return false;
      }
      var valid=false;
      if(document.getElementById("emp1").checked){
        valid=true;
        document.getElementById("err").innerHTML="";
      }
      else if(document.getElementById("emp2").checked){
        valid=true;
        document.getElementById("err").innerHTML="";
      }
      else if(document.getElementById("emp3").checked){
        valid=true;
        document.getElementById("err").innerHTML="";
      }
      else if(document.getElementById("emp4").checked){
        valid=true;
        document.getElementById("err").innerHTML="";
      }
      // else if(document.getElementById("emp5").checked){
      //   valid=true;
      //   document.getElementById("err").innerHTML="";
      // }
      // else if(document.getElementById("emp6").checked){
      //   valid=true;
      //   document.getElementById("err").innerHTML="";
      // }
      else if(document.getElementById("showTextboxCheckbox").checked){
        valid=true;
        document.getElementById("err").innerHTML="";
      }
      else{
        var n11="*Please select atleast one checkbox";
        document.getElementById("err").innerHTML=n11;
        document.forms1.emp1.focus();
        document.forms1.emp2.focus();
        document.forms1.emp3.focus();
        document.forms1.emp4.focus();
        document.forms1.textbox.focus();
        document.forms1.showTextboxCheckbox.focus();
        return false;
        
      }
      if(z7 == "")
      {
        var noop="*number of opening must be filled out";
        document.getElementById("nerr").innerHTML=noop;
        document.forms1.nop.focus();
        return false;
      }
      else
      {
      document.getElementById("nerr").innerHTML="";
      }
      if(z8 == "")
      {
        var des1="*description must be filled out";
        document.getElementById("derr").innerHTML=des1;
        document.forms1.des.focus();
        return false;
      }
      else
      {
        document.getElementById("derr").innerHTML="";
      }
      }



      

      const showTextboxCheckbox = document.getElementById('showTextboxCheckbox');
        const textboxContainer = document.getElementById('textboxContainer');
        
       
        showTextboxCheckbox.addEventListener('change', function() {
          // 
          if (showTextboxCheckbox.checked) {
            textboxContainer.style.display = 'block';
          } else {
            textboxContainer.style.display = 'none';
          }
        });
</script>
</body>
<br>
<br>
</html>