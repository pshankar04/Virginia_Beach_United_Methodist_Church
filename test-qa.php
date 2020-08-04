<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('simple'); ?>


<?php

if($_POST['submit']){

}else{
?>

	<form id="quiz" action="" method="POST">
<p><b>1) Organizing ideas, people, resources, and schedules is easy and enjoyable for me.<b></p>

<input type="radio" name="1" value="1"> Not At All<br>
<input type="radio" name="2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="3" value="3"> Most of the time, usually true<br>
<input type="radio" name="3" value="3"> Consistently<br>
<input type="radio" name="3" value="3"> Absolutely always<br>
<br>

<p><b>2) I yearn to go to new places to proclaim Christ and to help establish another group of believers.<b></p>

<input type="radio" name="1" value="1"> Not At All<br>
<input type="radio" name="2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="3" value="3"> Most of the time, usually true<br>
<input type="radio" name="3" value="3"> Consistently<br>
<input type="radio" name="3" value="3"> Absolutely always<br>
<br>

<p><b>3) I tend to see rightness or wrongness in situations, and can readily distinguish between spiritual truth and error, good and evil.<b></p>

<input type="radio" name="1" value="1"> Not At All<br>
<input type="radio" name="2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="3" value="3"> Most of the time, usually true<br>
<input type="radio" name="3" value="3"> Consistently<br>
<input type="radio" name="3" value="3"> Absolutely always<br>
<br>

<p><b> 4) I tend to see the potential in people and enjoy reassuring and strengthening those who are discouraged.<b></p>

<input type="radio" name="1" value="1"> Not At All<br>
<input type="radio" name="2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="3" value="3"> Most of the time, usually true<br>
<input type="radio" name="3" value="3"> Consistently<br>
<input type="radio" name="3" value="3"> Absolutely always<br>

<br>
<p><b> 5) I am effective at adapting the gospel message so that it connects with an individual's need.<b></p>

<input type="radio" name="1" value="1"> Not At All<br>
<input type="radio" name="2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="3" value="3"> Most of the time, usually true<br>
<input type="radio" name="3" value="3"> Consistently<br>
<input type="radio" name="3" value="3"> Absolutely always<br>
<br>
<center><button type="submit"  
				name="QuizSubmit" 
				style="font-size:10pt;color:white;background-color:green;border:5px solid #336600;padding:7px; width:200px" >
				FINISH
		</button>		
</center>
</form>
<?php
}
?>

<?php get_footer(); ?>
