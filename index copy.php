<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    width: 600px;
    height: 400px;
    border-radius: 20px;
    background-color: #f2f2f2;
    padding: 60px;
}
</style>
<body>

<script>
    
    function validateUser() {
        var name = document.forms["quiz"]["username"].value;
        var email = document.forms["quiz"]["email"].value;
       
    
        if (name == "") {
            alert("Please enter your Name");
            return false;
        }

        if (email == "") {
            alert("Please enter your Email");
            return false;
        }else{
            if(!is_email(email)){
                alert("Please enter the Correct/Complete Email Address");
                return false;
            }
        }
}

        function is_email(email){  

        var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        return emailReg.test(email); 
} 

</script>
<center>
<div>
    <center><h2>Virginia Beach Methodist Church</h2></center>
    <center><h3>Spiritual Assessment</h3></center>
    <center>
        <p>
            Just as God has designed no two snowflakes alike, God has uniquely designed each person. This inventory is provided for you to begin to prayerfully consider the person God created you to be and to begin to discover God's purpose for your life. There are three parts to this inventory. Once you have completed all three parts, you will be able to view your results.
        </p>
        <p>
            Before you begin we'd like to collect a little information from you. Your results will be emailed to our church.
        </p>
            
    </center>
  <form name="quiz" action="assess6.php" method="LINK" onsubmit="return validateUser();">

    <center>
    <input type="text" id="username" name="username" placeholder="YOUR NAME"><br/>
    <input type="text" id="email" name="email" placeholder="YOUR EMAIL">
    </center>

    <center>
    <input type="submit" value="Continue" >
    </center>

  </form>
</div>
</center>
</body>
</html>
