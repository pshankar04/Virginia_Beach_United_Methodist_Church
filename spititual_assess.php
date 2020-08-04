<html>
<body>
<script type="text/javascript">
  function getScore(){
       // Get the selected score (assuming one was selected)
       var q1 = document.querySelector('input[name="qa1"]:checked').value;
       var q2 = document.querySelector('input[name="qa2"]:checked').value;
       var q3 = document.querySelector('input[name="qa3"]:checked').value;
       var q4 = document.querySelector('input[name="qa4"]:checked').value;
       var q5 = document.querySelector('input[name="qa5"]:checked').value;
  
       var weightMap = new Map();
       var answerMap = new Map();
       var evalMap = new Map();
       var userAnswerMap = new Map();

       userAnswerMap.set("q1",q1);
       userAnswerMap.set("q2",q2);
       userAnswerMap.set("q3",q3);
       userAnswerMap.set("q4",q4);
       userAnswerMap.set("q5",q5);

       answerMap.set("q1",1);
       answerMap.set("q2",2);
       answerMap.set("q3",3);
       answerMap.set("q4",4);
       answerMap.set("q5",5);

       weightMap.set("q1_1",5);
       weightMap.set("q1_2",4);
       weightMap.set("q1_3",3);
       weightMap.set("q1_4",2);
       weightMap.set("q1_5",1);

       weightMap.set("q2_1",5);
       weightMap.set("q2_2",4);
       weightMap.set("q2_3",3);
       weightMap.set("q2_4",2);
       weightMap.set("q2_5",1);

       weightMap.set("q3_1",5);
       weightMap.set("q3_2",4);
       weightMap.set("q3_3",3);
       weightMap.set("q3_4",2);
       weightMap.set("q3_5",1);

       weightMap.set("q4_1",5);
       weightMap.set("q4_2",4);
       weightMap.set("q4_3",3);
       weightMap.set("q4_4",2);
       weightMap.set("q4_5",1);

       weightMap.set("q5_1",5);
       weightMap.set("q5_2",4);
       weightMap.set("q5_3",3);
       weightMap.set("q5_4",2);
       weightMap.set("q5_5",1);

       
       evalMap.set("5",0);
       evalMap.set("4",0);
       evalMap.set("3",0);
       evalMap.set("2",0);
       evalMap.set("1",0);

var i;
for (i = 1; i < 6; i++) { 
    var userAnswer = userAnswerMap.get("q"+i);
    var score = weightMap.get("q"+i+"_"+userAnswer);
    evalMap.set(score.toString(),evalMap.get(score.toString()) + score);    
}

alert(' ' + evalMap.get("5") + ' ' + evalMap.get("4") + ' ' + evalMap.get("3") + ' ' + evalMap.get("2") + ' ' + evalMap.get("1") + ' ');
var j;
var sortedWeights = [];
for (var [key, value] of evalMap.entries()) {
     sortedWeights.push(value);
}

sortedWeights.sort(sortNumber);  
var k;
var index = 0;
var giftIndex = [];
var correctIndex = 0;
for(k = 0; k < 3 ; k++){
 for (var [key, value] of evalMap.entries()) {
     if(sortedWeights[index] != value){
        correctIndex++;
        continue;
     }
     else if(sortedWeights[index] === value){
        index++;
        giftIndex.push(correctIndex);
        correctIndex = 0;
        break;
     }
 }
}
alert('After Sorting :'+' ' + sortedWeights[0] + ' ' + sortedWeights[1] + ' ' + sortedWeights[2] + ' ');
alert('You have won gifts :'+' ' + 'G'+giftIndex[0] + ' ' + 'G'+giftIndex[1] + ' ' + 'G'+giftIndex[2] + ' ');
}
function sortNumber(a,b) {
    return b - a;
}
</script>
<form id="quiz" action="" method="POST" onsubmit='getScore();'>
<p><b>1) Organizing ideas, people, resources, and schedules is easy and enjoyable for me.<b></p>

<input type="radio" name="qa1" value="1" > Not At All<br>
<input type="radio" name="qa1" value="2" > Some of the time, once in a while true<br>
<input type="radio" name="qa1" value="3" > Most of the time, usually true<br>
<input type="radio" name="qa1" value="3"> Consistently<br>
<input type="radio" name="qa1" value="3"> Absolutely always<br>
<br>

<p><b>2) I yearn to go to new places to proclaim Christ and to help establish another group of believers.<b></p>

<input type="radio" name="qa2" value="1"> Not At All<br>
<input type="radio" name="qa2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa2" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa2" value="4"> Consistently<br>
<input type="radio" name="qa2" value="5"> Absolutely always<br>
<br>

<p><b>3) I tend to see rightness or wrongness in situations, and can readily distinguish between spiritual truth and error, good and evil.<b></p>

<input type="radio" name="qa3" value="1"> Not At All<br>
<input type="radio" name="qa3" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa3" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa3" value="4"> Consistently<br>
<input type="radio" name="qa3" value="5"> Absolutely always<br>
<br>

<p><b> 4) I tend to see the potential in people and enjoy reassuring and strengthening those who are discouraged.<b></p>

<input type="radio" name="qa4" value="1"> Not At All<br>
<input type="radio" name="qa4" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa4" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa4" value="4"> Consistently<br>
<input type="radio" name="qa4" value="5"> Absolutely always<br>

<br>
<p><b> 5) I am effective at adapting the gospel message so that it connects with an individual's need.<b></p>

<input type="radio" name="qa5" value="1"> Not At All<br>
<input type="radio" name="qa5" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa5" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa5" value="4"> Consistently<br>
<input type="radio" name="qa5" value="5"> Absolutely always<br>
<br>
<center>
<input type="submit" name="mysubmit" value="Submit" style="font-size:10pt;color:white;background-color:green;border:5px solid #336600;padding:7px; width:200px" />	
</center>	
</center>
</form>
</body>
</html>