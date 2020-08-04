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
       var q6 = document.querySelector('input[name="qa6"]:checked').value;
       var q7 = document.querySelector('input[name="qa7"]:checked').value;
       var q8 = document.querySelector('input[name="qa8"]:checked').value;
       var q9 = document.querySelector('input[name="qa9"]:checked').value;
       var q10 = document.querySelector('input[name="qa10"]:checked').value;
       var q11 = document.querySelector('input[name="qa11"]:checked').value;
       var q12 = document.querySelector('input[name="qa12"]:checked').value;
       var q13 = document.querySelector('input[name="qa13"]:checked').value;
       var q14 = document.querySelector('input[name="qa14"]:checked').value;
       var q15 = document.querySelector('input[name="qa15"]:checked').value;
       var q16 = document.querySelector('input[name="qa16"]:checked').value;
       var q17 = document.querySelector('input[name="qa17"]:checked').value;
       var q18 = document.querySelector('input[name="qa18"]:checked').value;
       var q19 = document.querySelector('input[name="qa19"]:checked').value;
       var q20 = document.querySelector('input[name="qa20"]:checked').value;

  
       var weightMap = new Map();
       var evalMap = new Map();
       var userAnswerMap = new Map();
       var giftQuestionMap = new Map();
       var giftAnswerMap = new Map();

       var administration = [1,19,37,55];
       var apostleship = [2,20,38,56];
       var discernment = [3,21,39,57];
       var evangelism = [5,23,41,59];
       var exhortation = [4,22,40,58];
       var faith = [6,24,42,60];
       var giving = [7,25,43,61];
       var healing = [8,26,44,62];
       var helps = [9,27,45,63];
       var hospitality = [10,28,46,64];
       var knowledge = [12,30,48,66];
       var leadership = [13,31,49,67];
       var mercy = [14,32,50,68];
       var pastor = [16,34,52,70];
       var prophecy = [15,33,51,69];
       var teaching = [17,35,53,71];
       var wisdom = [18,36,54,72];
       var intercession = [29,47,65,11];


       userAnswerMap.set("q1",q1);
       userAnswerMap.set("q2",q2);
       userAnswerMap.set("q3",q3);
       userAnswerMap.set("q4",q4);
       userAnswerMap.set("q5",q5);
       userAnswerMap.set("q6",q6);
       userAnswerMap.set("q7",q7);
       userAnswerMap.set("q8",q8);
       userAnswerMap.set("q9",q9);
       userAnswerMap.set("q10",q10);
       userAnswerMap.set("q11",q11);
       userAnswerMap.set("q12",q12);
       userAnswerMap.set("q13",q13);
       userAnswerMap.set("q14",q14);
       userAnswerMap.set("q15",q15);
       userAnswerMap.set("q16",q16);
       userAnswerMap.set("q17",q17);
       userAnswerMap.set("q18",q18);
       userAnswerMap.set("q19",q19);
       userAnswerMap.set("q20",q20);


       giftQuestionMap.set("Administration",administration);
       giftQuestionMap.set("Apostleship",apostleship);
       giftQuestionMap.set("Discernment of Spirit",discernment);
       giftQuestionMap.set("Evangelism",evangelism);
       giftQuestionMap.set("Exhortation (Encouragement)",exhortation);
       giftQuestionMap.set("Faith",faith);
       giftQuestionMap.set("Giving/Generosity",giving);
       giftQuestionMap.set("Healing",healing);
       giftQuestionMap.set("Helps/Assistance",helps);
       giftQuestionMap.set("Hospitality",hospitality);
       giftQuestionMap.set("Intercession",intercession);
       giftQuestionMap.set("Knowledge",knowledge);
       giftQuestionMap.set("Leadership/Leading with Diligence",leadership);
       giftQuestionMap.set("Mercy/Compassion",mercy);
       giftQuestionMap.set("Pastor-Teacher (Shepherding)",pastor);
       giftQuestionMap.set("Prophecy",prophecy);
       giftQuestionMap.set("Teaching",teaching);
       giftQuestionMap.set("Wisdom",wisdom);

       giftAnswerMap.set("Administration",0);
       giftAnswerMap.set("Apostleship",0);
       giftAnswerMap.set("Discernment of Spirit",0);
       giftAnswerMap.set("Evangelism",0);
       giftAnswerMap.set("Exhortation (Encouragement)",0);
       giftAnswerMap.set("Faith",0);
       giftAnswerMap.set("Giving/Generosity",0);
       giftAnswerMap.set("Healing",0);
       giftAnswerMap.set("Helps/Assistance",0);
       giftAnswerMap.set("Hospitality",0);
       giftAnswerMap.set("Intercession",0);
       giftAnswerMap.set("Knowledge",0);
       giftAnswerMap.set("Leadership/Leading with Diligence",0);
       giftAnswerMap.set("Mercy/Compassion",0);
       giftAnswerMap.set("Pastor-Teacher (Shepherding)",0);
       giftAnswerMap.set("Prophecy",0);
       giftAnswerMap.set("Teaching",0);
       giftAnswerMap.set("Wisdom",0);


       weightMap.set("1",1);
       weightMap.set("2",2);
       weightMap.set("3",3);
       weightMap.set("4",4);
       weightMap.set("5",5);

       
       evalMap.set("5",0);
       evalMap.set("4",0);
       evalMap.set("3",0);
       evalMap.set("2",0);
       evalMap.set("1",0);


var i;
for (i = 1; i < 21; i++) { 
    var userAnswer = userAnswerMap.get("q"+i);
    var score = weightMap.get(userAnswer.toString());
    for (var [key, value] of giftQuestionMap.entries()) {
        if(value.includes(i) == true){
           giftAnswerMap.set(key,giftAnswerMap.get(key) + score);
           break;
        }
    }  
}
var printString = "";
for (var [key, value] of giftAnswerMap.entries()) {
    printString = printString + "  "+value +" : "+ key + "\n";
}

alert("Print String :"+printString);


}

</script>
<form id="quiz" action="" method="POST" onsubmit='getScore();'>
<p><b> 1) Organizing ideas, people, resources, and schedules is easy and enjoyable for me.<b></p>

<input type="radio" name="qa1" value="1" > Not At All<br>
<input type="radio" name="qa1" value="2" > Some of the time, once in a while true<br>
<input type="radio" name="qa1" value="3" > Most of the time, usually true<br>
<input type="radio" name="qa1" value="3"> Consistently<br>
<input type="radio" name="qa1" value="3"> Absolutely always<br>
<br>

<p><b> 2) I yearn to go to new places to proclaim Christ and to help establish another group of believers.<b></p>

<input type="radio" name="qa2" value="1"> Not At All<br>
<input type="radio" name="qa2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa2" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa2" value="4"> Consistently<br>
<input type="radio" name="qa2" value="5"> Absolutely always<br>
<br>

<p><b> 3) I tend to see rightness or wrongness in situations, and can readily distinguish between spiritual truth and error, good and evil.<b></p>

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

<p><b> 6) I find it natural and easy to trust God to answer my prayers, and believe that God will help me to accomplish great things.<b></p>

<input type="radio" name="qa6" value="1"> Not At All<br>
<input type="radio" name="qa6" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa6" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa6" value="4"> Consistently<br>
<input type="radio" name="qa6" value="5"> Absolutely always<br>
<br>

<p><b> 7) It is easy and enjoyable to manage my income so that I may give liberally to God's work.<b></p>

<input type="radio" name="qa7" value="1"> Not At All<br>
<input type="radio" name="qa7" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa7" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa7" value="4"> Consistently<br>
<input type="radio" name="qa7" value="5"> Absolutely always<br>
<br>

<p><b> 8) My prayers are a source of healing for others.<b></p>

<input type="radio" name="qa8" value="1"> Not At All<br>
<input type="radio" name="qa8" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa8" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa8" value="4"> Consistently<br>
<input type="radio" name="qa8" value="5"> Absolutely always<br>
<br>

<p><b> 9) I feel comfortable being a helper, working behind the scenes, assisting others to do their job more effectively.<b></p>

<input type="radio" name="qa9" value="1"> Not At All<br>
<input type="radio" name="qa9" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa9" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa9" value="4"> Consistently<br>
<input type="radio" name="qa9" value="5"> Absolutely always<br>
<br>

<p><b> 10) I view my home as a place to minister to others.<b></p>

<input type="radio" name="qa10" value="1"> Not At All<br>
<input type="radio" name="qa10" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa10" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa10" value="4"> Consistently<br>
<input type="radio" name="qa10" value="5"> Absolutely always<br>
<br>

<p><b> 11) I am honored when I get prayer requests from others, and I consistently pray for them.<b></p>

<input type="radio" name="qa11" value="1"> Not At All<br>
<input type="radio" name="qa11" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa11" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa11" value="4"> Consistently<br>
<input type="radio" name="qa11" value="5"> Absolutely always<br>
<br>

<p><b> 12) I easily discover and/or recognize spiritual meanings.<b></p>

<input type="radio" name="qa12" value="1"> Not At All<br>
<input type="radio" name="qa12" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa12" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa12" value="4"> Consistently<br>
<input type="radio" name="qa12" value="5"> Absolutely always<br>
<br>

<p><b> 13) I influence others to perform to the best of their abilities to accomplish goals.<b></p>

<input type="radio" name="qa13" value="1"> Not At All<br>
<input type="radio" name="qa13" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa13" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa13" value="4"> Consistently<br>
<input type="radio" name="qa13" value="5"> Absolutely always<br>
<br>

<p><b> 14) People with problems and/or pain attract my attention more quickly than others.<b></p>

<input type="radio" name="qa14" value="1"> Not At All<br>
<input type="radio" name="qa14" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa14" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa14" value="4"> Consistently<br>
<input type="radio" name="qa14" value="5"> Absolutely always<br>
<br>

<p><b> 15) I experience urges to speak God's message that proves to be timely and needed by others.<b></p>

<input type="radio" name="qa15" value="1"> Not At All<br>
<input type="radio" name="qa15" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa15" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa15" value="4"> Consistently<br>
<input type="radio" name="qa15" value="5"> Absolutely always<br>
<br>

<p><b> 16) I enjoy spending time nurturing others.<b></p>

<input type="radio" name="qa16" value="1"> Not At All<br>
<input type="radio" name="qa16" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa16" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa16" value="4"> Consistently<br>
<input type="radio" name="qa16" value="5"> Absolutely always<br>
<br>

<p><b> 17) I can communicate scripture in ways that motivates others to study and want to learn more.<b></p>

<input type="radio" name="qa17" value="1"> Not At All<br>
<input type="radio" name="qa17" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa17" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa17" value="4"> Consistently<br>
<input type="radio" name="qa17" value="5"> Absolutely always<br>
<br>

<p><b> 18) Others often seek me out for advice about spiritual or personal matters.<b></p>

<input type="radio" name="qa18" value="1"> Not At All<br>
<input type="radio" name="qa18" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa18" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa18" value="4"> Consistently<br>
<input type="radio" name="qa18" value="5"> Absolutely always<br>
<br>

<p><b> 19) I am careful, thorough, and skilled at managing details.<b></p>

<input type="radio" name="qa19" value="1"> Not At All<br>
<input type="radio" name="qa19" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa19" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa19" value="4"> Consistently<br>
<input type="radio" name="qa19" value="5"> Absolutely always<br>
<br>

<p><b> 20) I am attracted to the idea of serving in another country or ethnic community.<b></p>

<input type="radio" name="qa20" value="1"> Not At All<br>
<input type="radio" name="qa20" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa20" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa20" value="4"> Consistently<br>
<input type="radio" name="qa20" value="5"> Absolutely always<br>
<br>


<center>
<input type="submit" name="mysubmit" value="Submit" style="font-size:10pt;color:white;background-color:green;border:5px solid #336600;padding:7px; width:200px" />	
</center>	
</center>
</form>
</body>
</html>