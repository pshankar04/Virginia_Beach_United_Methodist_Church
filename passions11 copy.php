<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
  
	$email = htmlspecialchars($_REQUEST['email']);
	$name  = htmlspecialchars($_REQUEST['name']);
	$gift1 = htmlspecialchars($_REQUEST['gift1']);
	$gift2 = htmlspecialchars($_REQUEST['gift2']);
	$gift3 = htmlspecialchars($_REQUEST['gift3']);
	$gift4 = htmlspecialchars($_REQUEST['gift4']);
	$gift5 = htmlspecialchars($_REQUEST['gift5']);
	$gift6 = htmlspecialchars($_REQUEST['gift6']);
	$gift7 = htmlspecialchars($_REQUEST['gift7']);
	$gift8 = htmlspecialchars($_REQUEST['gift8']);
	$gift9 = htmlspecialchars($_REQUEST['gift9']);

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">

var emailID = "<?php echo $email ?>";
var username = "<?php echo $name ?>";
var newWindow;
var newContent;
var talentChoices = "";
var passionChoices = "";

function validateChoices() {

    var talents = document.getElementsByName("talent[]");
    var passion = document.getElementsByName("passion[]");

            	var checkboxes1 = document.getElementsByName('talent[]');
				
					for (var i=0, n=checkboxes1.length; i < n ; i++) 
					{
    					if (checkboxes1[i].checked) 
    					{
        					talentChoices += ", "+checkboxes1[i].value;
    					}
					}

				var checkboxes2 = document.getElementsByName('passion[]');
				
					for (var i=0, n=checkboxes2.length; i < n ; i++) 
					{
    					if (checkboxes2[i].checked) 
    					{
        					passionChoices += ", "+checkboxes2[i].value;
    					}
					}	

				talentChoices = talentChoices.substring(2, talentChoices.length);
				passionChoices = passionChoices.substring(2, passionChoices.length);	
			 
                

 if (!newWindow || newWindow.closed) {
               
 newWindow = window.open('','sub','height=800,width=1000,left=150,top=70,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');

 setTimeout("writeToWindow()", 10);
 
        
    } else if (newWindow.focus) {
        newWindow.focus(); /* means window is already open*/
    }

    emailMessage();
   
}

function writeToWindow() {
    

    newContent = "<html><head><title>Spiritual Gifts</title></head>";
    newContent += "<body><center><div style= 'width: 600px; height: 750px; border-radius: 20px; background-color: #f2f2f2; padding: 60px'>"; 
    newContent += "<p align='justify'><h1><?php echo $gift1; ?></h1></p>";
    newContent += "<p align='justify'><?php echo $gift2; ?></p>";
    newContent += "<p align='justify'>"+"<?php echo $gift3; ?></p>";
    newContent += "<p align='justify'><h1><?php echo $gift4; ?></h1></p>";
    newContent += "<p align='justify'><?php echo $gift5; ?></p>";
    newContent += "<p align='justify'><?php echo $gift6; ?></p>";
    newContent += "<p align='justify'><h1><?php echo $gift7; ?></h1></p>";
    newContent += "<p align='justify'><?php echo $gift8; ?></p>";
    newContent += "<p align='justify'>"+"<?php echo $gift9; ?></p>";
    newContent += "<p><h1>Your Talents  :</h1></p>";
    newContent += "<p>"+talentChoices+"</p>";
    newContent += "<p><h1>Your Passions :</h1></p>";
    newContent += "<p>"+passionChoices+"</p>";
	newContent += "<p><button onclick=window.location='http://qav2.cs.odu.edu/puneeth/assess6.php' style='font-size:10pt;color:white;background-color: #4CAF50;border-radius: 4px;padding:10px; width:200px'>Retake Assessment</button></p>";
    newContent += "</div></center></body></html>";

    newWindow.document.write(newContent);
    newWindow.document.close(); // close layout stream 
}

function emailMessage() {
    
    newContent = "<html><head><title>Spiritual Gifts</title></head>";
    newContent += "<body><p>Hello "+username+",</p>";
    newContent += "<body><p>Congratulations! Please find your Spiritual Gifts below</p>";
    newContent += "<p><h1><?php echo $gift1; ?></h1></p>";
    newContent += "<p><?php echo $gift2; ?></p>";
    newContent += "<p>"+"<?php echo $gift3; ?></p>";
    newContent += "<p><h1><?php echo $gift4; ?></h1></p>";
    newContent += "<p><?php echo $gift5; ?></p>";
    newContent += "<p>"+"<?php echo $gift6; ?></p>";
    newContent += "<p><h1><?php echo $gift7; ?></h1>";
    newContent += "<p><?php echo $gift8; ?></p>";
    newContent += "<p>"+"<?php echo $gift9; ?></p>";
    newContent += "<p><h1>Your Talents  :</h1></p>";
    newContent += "<p>"+talentChoices+"</p>";
    newContent += "<p><h1>Your Passions  :</h1></p>";
    newContent += "<p>"+passionChoices+"</p>";
    newContent += "</body></html>";

    
    $.ajax({
      url:"emailNotify.php",  
      type: "POST",
      data: {msg: " "+newContent+".",email:""+emailID},
      success:function(popData){
       alert(popData);
     }
   });
  }
 

</script>

<form id="passionForm" name="passionForm" action="index.php" onsubmit="return validateChoices();" method="POST">
<!-- onsubmit='validateChoices();' -->
<p><b> I have the following talents or resources: </b></p> <br>
<input type="hidden" name="email" value="<?php echo $email; ?>" />

<div class="row">

	<div class="column left"><input type="checkbox" name="talent[]" value="Accounting"/>Accounting</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Decorating"/>Decorating</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Music Instrumental"/>Music Instrumental</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Administrative Skills"/>Administrative Skills</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Desk Top Publishing"/>Desk Top Publishing</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Artistic"/>Artistic</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Disciple Bible Study Graduate"/>Disciple Bible Study Graduate</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Organization"/>Organization</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Auto Repair"/>Auto Repair</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Drama"/>Drama</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Outdoor Adventure Sports"/>Outdoor Adventure Sports</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Camera Operator"/>Camera Operator</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Editing"/>Editing</div>

	<div class="column right"><input type="checkbox" name="talent[]" value="Painting"/>Painting</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Camping"/>Camping</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Elementary Education"/>Elementary Education</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Photography"/>Photography</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Career Counseling"/>Career Counseling</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Encourage"/>Encourage</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Pre-Press Production"/>Pre-Press Production</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Carpentry"/>Carpentry</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Event Planning"/>Event Planning</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Problem Solving"/>Problem Solving</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Child Care"/>Child Care</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Facilitation"/>Facilitation</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Public Speaking"/>Public Speaking</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Clerical"/>Clerical</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Floral Design"/>Floral Design</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Puppets"/>Puppets</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Communication"/>Communication</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Food Service"/>Food Service</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Script Writing"/>Script Writing</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Compassion"/>Compassion</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Foreign Language"/>Foreign Language</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Secondary Education"/>Secondary Education</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Computer Graphics"/>Computer Graphics</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Gardening">Gardening</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Sewing"/>Sewing</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Computerized Photography"/>Computerized Photography</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Good Listener"/>Good Listener</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Set Design/Construction">⁭Set Design/Construction</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Construction"/>Construction</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Graphic Design"/>Graphic Design</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Sign Language"/>Sign Language</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Counseling"/>Counseling</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Hospitality"/>Hospitality</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Sound Mixing"/>Sound Mixing</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="CPR/First Aid"/>CPR/First Aid</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Human Resources"/>Human Resources</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Sports Coach"/>Sports Coach</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Craftsmanship"/>Craftsmanship</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Intercession"/>Intercession</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Teaching"/>Teaching</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Creative"/>Creative</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Landscaping"/>Landscaping</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Team Player"/>Team Player</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Creative Communication"/>Creative Communication</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Leadership Skills"/>Leadership Skills</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Technical Skills"/>Technical Skills</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Dancer"/>Dancer</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Legal Knowledge"/>Legal Knowledge</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Video Production"/>Video Production</div>
	<div class="column left"><input type="checkbox" name="talent[]" value="Data Entry"/>Data Entry</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Marketing"/>Marketing</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Vision"/>Vision</div>
	<div class="column middle"><input type="checkbox" name="talent[]" value="Medical Knowledge"/>Medical Knowledge</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Word Processing"/>Word Processing</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Writing"/>Writing</div>
	<div class="column right"><input type="checkbox" name="talent[]" value="Others"/>Others</div>
	
</div>

<br><br>

<p><b> I sense I have a passion for : </b></p> <br>

<div class="row">

	<div class="column left"><input type="checkbox" name="passion[]" value="Abuse Victims"/>Abuse Victims</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Addiction Recovery"/>Addiction Recovery</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Hospitalized"/>Hospitalized</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Babies"/>Babies</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Building Maintenance"/>Building Maintenance</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Infertility"/>Infertility </div>
	<div class="column left"><input type="checkbox" name="passion[]" value="College Students"/>College Students</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Career Planning"/>Career Planning</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Landscape"/>Landscape</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Disabled"/>Disabled</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Care Giving"/>Care Giving</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Learning"/>Learning</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Elderly"/>Elderly</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Chronically Ill"/>Chronically Ill</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Mental Health"/>Mental Health</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Elementary Students"/>Elementary Students</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Connect People to ministries"/>Connect People to ministries</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Mentoring"/>Mentoring</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Families"/>Families</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Counseling"/>Counseling</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Missions"/>Missions</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Hearing Impaired"/>Hearing Impaired</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Crafts"/>Crafts</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Music"/>Music</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Homeless"/>Homeless</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Decorating"/>Decorating</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Organization"/>Organization</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Middle School Students"/>Middle School Students</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Design Work"/>Design Work</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Parenting"/>Parenting</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Men"/>Men</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Developing Leaders"/>Developing Leaders</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Physical Fitness"/>Physical Fitness</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Minorities"/>Minorities</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Discipleship"/>Discipleship</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Prayer"/>Prayer</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Pre-Schoolers"/>Pre-Schoolers</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Divorce Care"/>Divorce Care</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Problem Solvers"/>Problem Solvers</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Prisoners"/>Prisoners</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Drama"/>Drama</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="⁭Proofreading">Proofreading</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Senior High Students"/>Senior High Students</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Encouragement of Others"/>Encouragement of Others</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Relationship with God"/>Relationship with God</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Single Parents"/>Single Parents</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Equipping"/>Equipping</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Service"/>Service</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Singles"/>Singles</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Evangelism"/>Evangelism</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Sewing"/>Sewing</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Teen Moms"/>Teen Moms</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Event Planning"/>Event Planning</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Spiritual Growth"/>Spiritual Growth</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Underprivileged"/>Underprivileged</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Fellowship"/>Fellowship</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Sports"/>Sports</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Unemployed"/>Unemployed</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Financial Issues"/>Financial Issues</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Teaching"/>Teaching</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Visitors"/>Visitors</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Floral"/>Floral</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Technology"/>Technology</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Widows/Widowers"/>Widows/Widowers</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Food Service"/>Food Service</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Truth"/>Truth</div>
	<div class="column left"><input type="checkbox" name="passion[]" value="Women">Women</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Gardening"/>Gardening</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Worship"/>Worship</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Writing"/>Writing</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Written Word of God"/>Written Word of God</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Other"/>Other</div>
	<div class="column right"><input type="checkbox" name="passion[]" value="Grief/Grieving"/>Grief/Grieving</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Health Education"/>Health Education</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Helping"/>Helping</div>
	<div class="column middle"><input type="checkbox" name="passion[]" value="Hospice Care"/>Hospice Care</div>


</div>	
<br><br>

<center>
<input type="submit" name="mysubmit" value="SUBMIT" style="font-size:10pt;color:white;background-color: #4CAF50;border-radius: 4px;
 padding:10px; width:200px" />	
</center>	

</form>
</body>
</html>