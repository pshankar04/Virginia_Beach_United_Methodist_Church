<html>
<head>
<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
<script type="text/javascript">


  
function validateChoices() {

    var talents = document.getElementsByName("talent[]");
    var passion = document.getElementsByName("passion[]");

            if(talents[0].checked==false && talents[1].checked==false && talents[2].checked==false)
            {
                alert("Please answer about your Talents ");
                return false;
            }        
}
 

</script>
<form id="quiz" action="" method="POST" onsubmit='validateChoices();'>
<p><b> Please answer below questions <b></p> <br>

<div id="container" class="blog-pager">
			<p> 1) What are your Talents and Resources ? </p> <br>
	<div id="left">		
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Accounting
			<input type="checkbox" name="talent[]" value="Drama"/>Administrative Skills
			<input type="checkbox" name="talent[]" value="Decorating"/>Artistic
			<input type="checkbox" name="talent[]" value="Decorating"/>Auto Repair
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Camera Operator
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Camping
			<input type="checkbox" name="talent[]" value="Drama"/>Career Counseling
			<input type="checkbox" name="talent[]" value="Decorating"/>Carpentry
			<input type="checkbox" name="talent[]" value="Decorating"/>Child Care
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Clerical
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Communication
			<input type="checkbox" name="talent[]" value="Drama"/>Compassion
			<input type="checkbox" name="talent[]" value="Decorating"/>Computer Graphics
			<input type="checkbox" name="talent[]" value="Decorating"/>Computerized Photography
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Construction
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Counseling
			<input type="checkbox" name="talent[]" value="Drama"/>CPR/First Aid
			<input type="checkbox" name="talent[]" value="Decorating"/>Craftsmanship
			<input type="checkbox" name="talent[]" value="Decorating"/>Creative
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Creative Communication
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Dancer
			<input type="checkbox" name="talent[]" value="Drama"/>Data Entry
    </div>
    <div id="center">
			<input type="checkbox" name="talent[]" value="Decorating"/>Decorating
			<input type="checkbox" name="talent[]" value="Decorating"/>Desk Top Publishing
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Disciple Bible Study Graduate
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Drama
			<input type="checkbox" name="talent[]" value="Drama"/>Editing
			<input type="checkbox" name="talent[]" value="Decorating"/>Elementary Education
			<input type="checkbox" name="talent[]" value="Decorating"/>Encourage
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Event Planning
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Facilitation
			<input type="checkbox" name="talent[]" value="Drama"/>Floral Design
			<input type="checkbox" name="talent[]" value="Decorating"/>Food Service
			<input type="checkbox" name="talent[]" value="Decorating"/>Foreign Language
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Gardening
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Good Listener
			<input type="checkbox" name="talent[]" value="Drama"/>Graphic Design
			<input type="checkbox" name="talent[]" value="Decorating"/>Hospitality
			<input type="checkbox" name="talent[]" value="Decorating"/>Human Resources
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Intercession
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Landscaping
			<input type="checkbox" name="talent[]" value="Drama"/>Leadership Skills
			<input type="checkbox" name="talent[]" value="Decorating"/>Legal Knowledge
			<input type="checkbox" name="talent[]" value="Decorating"/>Marketing
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Medical Knowledge
	</div>
	<div id="right">		
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Music – Instrumental
			<input type="checkbox" name="talent[]" value="Drama"/>Music – Vocal
			<input type="checkbox" name="talent[]" value="Decorating"/>Organization
			<input type="checkbox" name="talent[]" value="Decorating"/>Outdoor Adventure Sports
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Painting
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Photography
			<input type="checkbox" name="talent[]" value="Drama"/>Pre-Press Production
			<input type="checkbox" name="talent[]" value="Decorating"/>Problem Solving
			<input type="checkbox" name="talent[]" value="Decorating"/>Public Speaking
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Puppets
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Script Writing
			<input type="checkbox" name="talent[]" value="Drama"/>Secondary Education
			<input type="checkbox" name="talent[]" value="Decorating"/>⁭ Set Design/Construction
			<input type="checkbox" name="talent[]" value="Decorating"/>Sewing
			<input type="checkbox" name="talent[]" value="Decorating"/>Sign Language
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Sound Mixing
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Sports Coach
			<input type="checkbox" name="talent[]" value="Drama"/>Teaching
			<input type="checkbox" name="talent[]" value="Decorating"/>Team Player
			<input type="checkbox" name="talent[]" value="Decorating"/>Technical Skills
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Video Production
			<input type="checkbox" name="talent[]" value="Camera Operator"/>Vision
			<input type="checkbox" name="talent[]" value="Drama"/>Word Processing
			<input type="checkbox" name="talent[]" value="Decorating"/>Writing
			<input type="checkbox" name="talent[]" value="Decorating"/>Others
	</div>

<p> 2) What is your Passion ? </p>
			<div id="left">

			<input type="checkbox" name="passion[]" value="Music"/>Music
			<input type="checkbox" name="passion[]" value="Food Service"/>Food Service
			<input type="checkbox" name="passion[]" value="Gardening"/>Gardening

			<div id="center">
					<input type="checkbox" name="passion[]" value="Music"/>Music
			        <input type="checkbox" name="passion[]" value="Food Service"/>Food Service
			        <input type="checkbox" name="passion[]" value="Gardening"/>Gardening
			<div>

			<div id="right">
					<input type="checkbox" name="passion[]" value="Music"/>Music
					<input type="checkbox" name="passion[]" value="Food Service"/>Food Service
					<input type="checkbox" name="passion[]" value="Gardening"/>Gardening
			<div>	

<center>
<input type="submit" name="mysubmit" 
       value="Continue" style="font-size:10pt;color:white;background-color:green;border:5px solid #336600;padding:7px; width:200px" />	
</center>	

</form>
</body>
</html>