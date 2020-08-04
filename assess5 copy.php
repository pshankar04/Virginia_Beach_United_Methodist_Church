<html>
<body>
 <?php
  
  $email  =  htmlspecialchars($_REQUEST['email']);
?> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
var emailID = "<?php echo $email; ?>";
var newWindow;
var passionWindow;
var data;      
var realGift = [];
var giftDesc = [];
var k1;
var k2;
var k3;
var giftAnswerMap = new Map();
var giftPoints = [];
var newContent;

  function getScore(){

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

       var q21 = document.querySelector('input[name="qa21"]:checked').value;
       var q22 = document.querySelector('input[name="qa22"]:checked').value;
       var q23 = document.querySelector('input[name="qa23"]:checked').value;
       var q24 = document.querySelector('input[name="qa24"]:checked').value;
       var q25 = document.querySelector('input[name="qa25"]:checked').value;
       var q26 = document.querySelector('input[name="qa26"]:checked').value;
       var q27 = document.querySelector('input[name="qa27"]:checked').value;
       var q28 = document.querySelector('input[name="qa28"]:checked').value;
       var q29 = document.querySelector('input[name="qa29"]:checked').value;
       var q30 = document.querySelector('input[name="qa30"]:checked').value;
       var q31 = document.querySelector('input[name="qa31"]:checked').value;
       var q32 = document.querySelector('input[name="qa32"]:checked').value;
       var q33 = document.querySelector('input[name="qa33"]:checked').value;
       var q34 = document.querySelector('input[name="qa34"]:checked').value;
       var q35 = document.querySelector('input[name="qa35"]:checked').value;
       var q36 = document.querySelector('input[name="qa36"]:checked').value;
       var q37 = document.querySelector('input[name="qa37"]:checked').value;
       var q38 = document.querySelector('input[name="qa38"]:checked').value;
       var q39 = document.querySelector('input[name="qa39"]:checked').value;
       var q40 = document.querySelector('input[name="qa40"]:checked').value;

       if(q1 == 1 && q2 == 1 && q3 == 1 && q4 == 1 && q5 == 1 && q6 == 1 && q7 == 1 && q8 == 1 && q9 == 1 && q10 == 1 &&
            q11 == 1 && q12 == 1 && q13 == 1 && q14 == 1 && q15 == 1 && q16 == 1 && q17 == 1 && q18 == 1 && q19 == 1 && q20 == 1 &&
            q21 == 1 && q22 == 1 && q23 == 1 && q24 == 1 && q25 == 1 && q26 == 1 && q27 == 1 && q28 == 1 && q29 == 1 && q30 == 1 &&
            q31 == 1 && q32 == 1 && q33 == 1 && q34 == 1 && q35 == 1 && q36 == 1 && q37 == 1 && q38 == 1 && q39 == 1 && q40 == 1){

            alert("You need to answer all the questions to get the Gifts");     
       }else{
       
        
  
       var weightMap = new Map();
       var evalMap = new Map();
       var userAnswerMap = new Map();
       var giftQuestionMap = new Map();
       
       var giftDescriptionMap = new Map();

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

        
       userAnswerMap.set("q21",q21);
       userAnswerMap.set("q22",q22);
       userAnswerMap.set("q23",q23);
       userAnswerMap.set("q24",q24);
       userAnswerMap.set("q25",q25);
       userAnswerMap.set("q26",q26);
       userAnswerMap.set("q27",q27);
       userAnswerMap.set("q28",q28);
       userAnswerMap.set("q29",q29);
       userAnswerMap.set("q30",q30);

       userAnswerMap.set("q31",q31);
       userAnswerMap.set("q32",q32);
       userAnswerMap.set("q33",q33);
       userAnswerMap.set("q34",q34);
       userAnswerMap.set("q35",q35);
       userAnswerMap.set("q36",q36);
       userAnswerMap.set("q37",q37);
       userAnswerMap.set("q38",q38);
       userAnswerMap.set("q39",q39);
       userAnswerMap.set("q40",q40);
        
      


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

       giftDescriptionMap.set("Administration","The God-given ability to organize and manage information, people events and resources to accomplish the objective of a ministry.  The spirit inspired gift of determining priorities, planning, and directing steps toward a God-directed goal.");
       giftDescriptionMap.set("Apostleship","The God-given ability to build the foundation of new churches by preaching the Word, teaching others to live by Christ’s commandments through the example of their own lives, and preparing the people to serve one another.");
       giftDescriptionMap.set("Discernment of Spirit","The God-given ability to recognize what is of God and what is not of God - to distinguish between good and evil, truth and error, and pure motives and impure motives.  People with this gift can sense the presence of evil, and question motives, intentions, doctrine, deeds, and beliefs.  Care must be taken to use this gift to bring good to the Body of Christ – to discern with mercy and understanding rather than to condemn.");
       giftDescriptionMap.set("Evangelism","The God-given ability to spread the good news of Jesus Christ so that unknowing persons respond in faith and discipleship.  People with this gift speak comfortably about their faith; non-believers are drawn into this circle of comfort.");
       giftDescriptionMap.set("Exhortation (Encouragement)","The God-given ability to encourage, help, intercede for, and be an advocate for others in a way that motivates others to grow in their faith and urges them to action.  Takes many forms — music, writings, relationships, prayer, and speaking.");
       giftDescriptionMap.set("Faith","The divine ability to recognize what God wants done and to act when others fall back in doubt.  Believing deeply in the power of prayer, people with this gift also know that God is both present and active in their lives and is faithful to His promises.");
       giftDescriptionMap.set("Giving/Generosity","The divine ability to give material wealth and possessions freely and joyfully, knowing that spiritual wealth will abound as God’s work is advanced.");
       giftDescriptionMap.set("Healing","The divine ability to bring wholeness - physical, emotional or spiritual - to others.  Demonstrates the power of Jesus Christ and the glory of God by listening carefully and using the tools of prayer, touch, and spoken words.");
       giftDescriptionMap.set("Helps/Assistance","The divine ability to work along side others in performing practical and often behind-the-scenes tasks to sustain and enhance the Body of Christ.");
       giftDescriptionMap.set("Hospitality","The divine ability to provide a warm and friendly welcome for people that demonstrates God’s love by providing food, shelter, or fellowship.  People with this gift graciously meet new people and help them feel accepted and at ease in unfamiliar surroundings.");
       giftDescriptionMap.set("Intercession","The divine ability to pray for others, often for extended periods of time, with the certainty that prayer is heard and answers to request will come");
       giftDescriptionMap.set("Knowledge","The divine ability to understand, organize, and effectively use information to advance God’s purposes.  The Holy Spirit appears to be at work as an unusual insight or truth is revealed.");
       giftDescriptionMap.set("Leadership/Leading with Diligence","The God-given ability to motivate, coordinate and direct people doing God’s work.  Leaders take responsibility for setting and achieving goals; they step in where there is a lack of direction.  People with this gift build a team of talented persons, and then empower them.");
       giftDescriptionMap.set("Mercy/Compassion","The God-given ability to see and feel the suffering of others and to minister to them with love and understanding.  This gift is compassion moved to action.");
       giftDescriptionMap.set("Pastor-Teacher (Shepherding)","The divine ability to guide, protect, and care for other Christians as they experience spiritual growth.  Nurture spiritual growth through extended periods of time where trust and confidence is established and time is taken to care for the “whole person”.");
       giftDescriptionMap.set("Prophecy","The divine ability to proclaim God’s truth in a way that makes it relevant to current situations and to envision how He would want things to change.  Prophets listen to God for what He wants them to say and speak to the people bringing edification, exhortation, and consolation.");
       giftDescriptionMap.set("Teaching","The God-given ability to understand and clearly explain God’s truths, and show how we can apply these in our lives.");
       giftDescriptionMap.set("Wisdom","The divine ability to understand and apply Biblical and spiritual knowledge to complex, contradictory or other difficult situations.  The ability to understand and live God’s will, sharing wisdom with others through teaching and providing clarity and direction – a “compass” for the Body of Christ.");


        console.log("newwindow2");
       weightMap.set("1",1);
       weightMap.set("2",2);
       weightMap.set("3",3);
       weightMap.set("4",4);
       weightMap.set("5",5);



var i;
for (i = 1; i < 41; i++) { 
    var userAnswer = userAnswerMap.get("q"+i);
    var score = weightMap.get(userAnswer.toString());
    if(userAnswer != null || userAnswer > 0){
      
      for (var [key, value] of giftQuestionMap.entries()) {
        if(value.includes(i) == true){
           giftAnswerMap.set(key,giftAnswerMap.get(key) + (score - 1));
           break;
        }
      }  
    }
}
var printString = "";
var sortedWeights = [];
for (var [key, value] of giftAnswerMap.entries()) {
    sortedWeights.push(value);  
}
var index = 0 ;
var giftSum;
var gifts = "";
sortedWeights.sort(sortNumber);
var str = "";


while(realGift.length < 4){
giftSum = sortedWeights[index] ;
for (var [key, value] of giftAnswerMap.entries()) {
    if(giftSum == value && !realGift.includes(key)){
      index += 1;
      realGift.push(key);
      giftDesc.push(giftDescriptionMap.get(key));
      giftPoints.push(giftAnswerMap.get(key))
      break;
    }
  }
}


 if (!newWindow || newWindow.closed) {
               
 newWindow = window.open('','sub','height=600,width=1000,left=150,top=70,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');

 setTimeout("writeToWindow()", 5);
 
        
    } else if (newWindow.focus) {
        newWindow.focus(); /* means window is already open*/
    }
    foo();
}

}

function sortNumber(a,b) {
    return b - a;
}


function writeToWindow() {
    k1 = realGift[0] + "\n" ;
    k2 = realGift[1] + "\n" ;
    k3 = realGift[2] + "\n";

    newContent = "<html><head><title>Spiritual Gifts</title></head>";
    newContent += "<body><p><h1>"+k1+"</h1></p>";
    newContent += "<p>"+giftDesc[0]+"</p>";
    newContent += "<p>"+"("+giftPoints[0]+" Points)"+"</p><br>";
    newContent += "<p><h1>"+k2+"</h1></p>";
    newContent += "<p>"+giftDesc[1]+"</p>";
    newContent += "<p>"+"("+giftPoints[1]+" Points)"+"</p><br>";
    newContent += "<p><h1>"+k3+"</h1></p>";
    newContent += "<p>"+giftDesc[2]+"</p>";
    newContent += "<p>"+"("+giftPoints[2]+" Points)"+"</p><br>";
    newContent += "</body></html>";
    // write HTML to new window document
    newWindow.document.write(newContent);
    newWindow.document.close(); // close layout stream
     
}

 
  function foo() {
    
    var giftMessage = realGift[0] +"<br/><br/>" + giftDesc[0] + "<br/><br/>" + "("+giftPoints[0]+" Points)" +"<br/><br/>"  +
                      realGift[1] +"<br/><br/>" + giftDesc[1] + "<br/><br/>" + "("+giftPoints[1]+" Points)" + "<br/><br/>" +
                      realGift[2] +"<br/><br/>" + giftDesc[2] + "<br/><br/>" + "("+giftPoints[2]+" Points)";
    $.ajax({
      url:"emailNotify.php",  
      type: "POST",
      data: {"msg": " "+giftMessage+".","email":""+emailID+""},
      success:function(popData){
       alert(popData);
     }
   });
  }


</script>
<form id="quiz" name="quiz" action="passions.php" method="POST" onsubmit="getScore();">

<p><b> 1) Organizing ideas, people, resources, and schedules is easy and enjoyable for me.<b></p>

<input type="radio" name="qa1" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa1" value="2" > Some of the time, once in a while true<br>
<input type="radio" name="qa1" value="3" > Most of the time, usually true<br>
<input type="radio" name="qa1" value="4"> Consistently<br>
<input type="radio" name="qa1" value="5"> Absolutely always<br>
<br>

<p><b> 2) I yearn to go to new places to proclaim Christ and to help establish another group of believers.<b></p>

<input type="radio" name="qa2" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa2" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa2" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa2" value="4"> Consistently<br>
<input type="radio" name="qa2" value="5"> Absolutely always<br>
<br>

<p><b> 3) I tend to see rightness or wrongness in situations, and can readily distinguish between spiritual truth and error, good and evil.<b></p>

<input type="radio" name="qa3" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa3" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa3" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa3" value="4"> Consistently<br>
<input type="radio" name="qa3" value="5"> Absolutely always<br>
<br>

<p><b> 4) I tend to see the potential in people and enjoy reassuring and strengthening those who are discouraged.<b></p>

<input type="radio" name="qa4" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa4" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa4" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa4" value="4"> Consistently<br>
<input type="radio" name="qa4" value="5"> Absolutely always<br>

<br>
<p><b> 5) I am effective at adapting the gospel message so that it connects with an individual's need.<b></p>

<input type="radio" name="qa5" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa5" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa5" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa5" value="4"> Consistently<br>
<input type="radio" name="qa5" value="5"> Absolutely always<br>
<br>

<p><b> 6) I find it natural and easy to trust God to answer my prayers, and believe that God will help me to accomplish great things.<b></p>

<input type="radio" name="qa6" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa6" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa6" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa6" value="4"> Consistently<br>
<input type="radio" name="qa6" value="5"> Absolutely always<br>
<br>

<p><b> 7) It is easy and enjoyable to manage my income so that I may give liberally to God's work.<b></p>

<input type="radio" name="qa7" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa7" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa7" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa7" value="4"> Consistently<br>
<input type="radio" name="qa7" value="5"> Absolutely always<br>
<br>

<p><b> 8) My prayers are a source of healing for others.<b></p>

<input type="radio" name="qa8" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa8" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa8" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa8" value="4"> Consistently<br>
<input type="radio" name="qa8" value="5"> Absolutely always<br>
<br>

<p><b> 9) I feel comfortable being a helper, working behind the scenes, assisting others to do their job more effectively.<b></p>

<input type="radio" name="qa9" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa9" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa9" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa9" value="4"> Consistently<br>
<input type="radio" name="qa9" value="5"> Absolutely always<br>
<br>

<p><b> 10) I view my home as a place to minister to others.<b></p>

<input type="radio" name="qa10" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa10" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa10" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa10" value="4"> Consistently<br>
<input type="radio" name="qa10" value="5"> Absolutely always<br>
<br>

<p><b> 11) I am honored when I get prayer requests from others, and I consistently pray for them.<b></p>

<input type="radio" name="qa11" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa11" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa11" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa11" value="4"> Consistently<br>
<input type="radio" name="qa11" value="5"> Absolutely always<br>
<br>

<p><b> 12) I easily discover and/or recognize spiritual meanings.<b></p>

<input type="radio" name="qa12" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa12" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa12" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa12" value="4"> Consistently<br>
<input type="radio" name="qa12" value="5"> Absolutely always<br>
<br>

<p><b> 13) I influence others to perform to the best of their abilities to accomplish goals.<b></p>

<input type="radio" name="qa13" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa13" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa13" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa13" value="4"> Consistently<br>
<input type="radio" name="qa13" value="5"> Absolutely always<br>
<br>

<p><b> 14) People with problems and/or pain attract my attention more quickly than others.<b></p>

<input type="radio" name="qa14" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa14" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa14" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa14" value="4"> Consistently<br>
<input type="radio" name="qa14" value="5"> Absolutely always<br>
<br>

<p><b> 15) I experience urges to speak God's message that proves to be timely and needed by others.<b></p>

<input type="radio" name="qa15" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa15" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa15" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa15" value="4"> Consistently<br>
<input type="radio" name="qa15" value="5"> Absolutely always<br>
<br>

<p><b> 16) I enjoy spending time nurturing others.<b></p>

<input type="radio" name="qa16" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa16" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa16" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa16" value="4"> Consistently<br>
<input type="radio" name="qa16" value="5"> Absolutely always<br>
<br>

<p><b> 17) I can communicate scripture in ways that motivates others to study and want to learn more.<b></p>

<input type="radio" name="qa17" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa17" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa17" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa17" value="4"> Consistently<br>
<input type="radio" name="qa17" value="5"> Absolutely always<br>
<br>

<p><b> 18) Others often seek me out for advice about spiritual or personal matters.<b></p>

<input type="radio" name="qa18" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa18" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa18" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa18" value="4"> Consistently<br>
<input type="radio" name="qa18" value="5"> Absolutely always<br>
<br>

<p><b> 19) I am careful, thorough, and skilled at managing details.<b></p>

<input type="radio" name="qa19" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa19" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa19" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa19" value="4"> Consistently<br>
<input type="radio" name="qa19" value="5"> Absolutely always<br>
<br>

<p><b> 20) I am attracted to the idea of serving in another country or ethnic community.<b></p>

<input type="radio" name="qa20" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa20" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa20" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa20" value="4"> Consistently<br>
<input type="radio" name="qa20" value="5"> Absolutely always<br>
<br>

<p><b> 21) I receive affirmation from others concerning the reliability of my insights or perceptions.<b></p>

<input type="radio" name="qa21" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa21" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa21" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa21" value="4"> Consistently<br>
<input type="radio" name="qa21" value="5"> Absolutely always<br>
<br>

<p><b> 22) I enjoy motivating others to take steps for spiritual growth.<b></p>

<input type="radio" name="qa22" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa22" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa22" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa22" value="4"> Consistently<br>
<input type="radio" name="qa22" value="5"> Absolutely always<br>
<br>

<p><b> 23) I consistently look for opportunities to build relationships with non-Christians.<b></p>

<input type="radio" name="qa23" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa23" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa23" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa23" value="4"> Consistently<br>
<input type="radio" name="qa23" value="5"> Absolutely always<br>
<br>

<p><b> 24) Even in difficult times, I have confidence in God's continuing provision and help; I am convinced of God's daily presence in my life. <b></p>

<input type="radio" name="qa24" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa24" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa24" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa24" value="4"> Consistently<br>
<input type="radio" name="qa24" value="5"> Absolutely always<br>
<br>

<p><b> 25) I give more than a tithe so that Kingdom work can be accomplished.<b></p>

<input type="radio" name="qa25" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa25" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa25" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa25" value="4"> Consistently<br>
<input type="radio" name="qa25" value="5"> Absolutely always<br>
<br>

<p><b> 26) I create a safe, healing environment for persons having difficulty with life.<b></p>

<input type="radio" name="qa26" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa26" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa26" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa26" value="4"> Consistently<br>
<input type="radio" name="qa26" value="5"> Absolutely always<br>
<br>

<p><b> 27) I enjoy doing routine tasks that support the ministry.<b></p>

<input type="radio" name="qa27" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa27" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa27" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa27" value="4"> Consistently<br>
<input type="radio" name="qa27" value="5"> Absolutely always<br>
<br>

<p><b> 28) I genuinely believe the Lord directs strangers to me who need to get connected to others.<b></p>

<input type="radio" name="qa28" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa28" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa28" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa28" value="4"> Consistently<br>
<input type="radio" name="qa28" value="5"> Absolutely always<br>
<br>

<p><b> 29) When I hear requests for prayers, I eagerly and immediately begin to pray. <b></p>

<input type="radio" name="qa29" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa29" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa29" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa29" value="4"> Consistently<br>
<input type="radio" name="qa29" value="5"> Absolutely always<br>
<br>

<p><b> 30) I receive information from the Spirit.<b></p>

<input type="radio" name="qa30" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa30" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa30" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa30" value="4"> Consistently<br>
<input type="radio" name="qa30" value="5"> Absolutely always<br>
<br>

<p><b> 31) I seem to be "out in front" of others in faith ventures; and many follow my example.<b></p>

<input type="radio" name="qa31" value="1" checked="true" > Not At All<br>
<input type="radio" name="qa31" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa31" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa31" value="4"> Consistently<br>
<input type="radio" name="qa31" value="5"> Absolutely always<br>
<br>

<p><b> 32) I can patiently support those going through painful experiences as they try to stabilize their lives.<b></p>

<input type="radio" name="qa32" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa32" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa32" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa32" value="4"> Consistently<br>
<input type="radio" name="qa32" value="5"> Absolutely always<br>
<br>

<p><b> 33) I see most actions as right or wrong; and feel the need to correct the wrong.<b></p>

<input type="radio" name="qa33" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa33" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa33" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa33" value="4"> Consistently<br>
<input type="radio" name="qa33" value="5"> Absolutely always<br>
<br>

<p><b> 34) I like to provide guidance for the whole person - spiritually, emotionally, relationally, etc.<b></p>

<input type="radio" name="qa34" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa34" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa34" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa34" value="4"> Consistently<br>
<input type="radio" name="qa34" value="5"> Absolutely always<br>
<br>

<p><b> 35) I can spend time in study knowing that presenting truth will make a difference in the lives of people.<b></p>

<input type="radio" name="qa35" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa35" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa35" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa35" value="4"> Consistently<br>
<input type="radio" name="qa35" value="5"> Absolutely always<br>
<br>

<p><b> 36) I can often find simple, practical solutions in the midst of conflict or confusion.<b></p>

<input type="radio" name="qa36" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa36" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa36" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa36" value="4"> Consistently<br>
<input type="radio" name="qa36" value="5"> Absolutely always<br>
<br>

<p><b> 37) I can clarify goals, and develop strategies or plans to accomplish them.<b></p>

<input type="radio" name="qa37" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa37" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa37" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa37" value="4"> Consistently<br>
<input type="radio" name="qa37" value="5"> Absolutely always<br>
<br>

<p><b> 38) I am drawn to proclaim and teach the good news of the gospel in places where it has not been heard or taught. <b></p>

<input type="radio" name="qa38" value="1"  checked="true"> Not At All<br>
<input type="radio" name="qa38" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa38" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa38" value="4"> Consistently<br>
<input type="radio" name="qa38" value="5"> Absolutely always<br>
<br>

<p><b> 39) I can see through phoniness or deceit before it is evident to others.<b></p>

<input type="radio" name="qa39" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa39" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa39" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa39" value="4"> Consistently<br>
<input type="radio" name="qa39" value="5"> Absolutely always<br>
<br>

<p><b> 40) I give hope to others by directing them to the promises of God.<b></p>

<input type="radio" name="qa40" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa40" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa40" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa40" value="4"> Consistently<br>
<input type="radio" name="qa40" value="5"> Absolutely always<br>
<br>



<center>
 
<!-- <button type="button" style="font-size:10pt;color:white;background-color:green;border:5px solid #336600;padding:7px; width:200px" 
       onClick="getScore()">Click Me</button>  -->
<input type="submit" name="submit" value="SUBMIT" style="font-size:10pt;color:white;background-color:green;
border:5px solid #336600;padding:7px; width:200px" />

</center>	

</form>
</body>
</html>