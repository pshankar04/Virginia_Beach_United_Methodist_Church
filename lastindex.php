<html>
<head>
<link rel="stylesheet" type="text/css" href="/style1.css">
</head>
<body>
<script type="text/javascript">

  function validateUser() {
    var name = document.forms["quiz"]["username"].value;
    var email = document.forms["quiz"]["email"].value;
    var cellPhone = document.forms["quiz"]["cell"].value;
    
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (cellPhone == "") {
        alert("Cell Phone Number must be filled out");
        return false;
    }

}

</script>
<form id="quiz" name="quiz" action="passions.php" method="LINK" onsubmit="validateUser();">

<center>
<p><input type="text"  name="username" id="username" placeholder="Name"> 
    <input type="text"  name="email" id="email" placeholder="Email"> 
 </p>

<p><input type="text"  name="phone" placeholder="Phone"> 
    <input type="text"  name="cell" placeholder="Cell Phone">  
</p>
 
<input type="submit" name="user_details" 
       value="Continue" style="font-size:10pt;color:white;background-color:green;border:5px solid #336600;padding:7px; width:200px" />	
</center>	

</form>
</body>
</html>