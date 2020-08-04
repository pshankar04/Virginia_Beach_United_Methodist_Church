<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
 <?php
  $giftString = "";
  $name  =  htmlspecialchars($_REQUEST['username']);
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

       var q41 = document.querySelector('input[name="qa41"]:checked').value;
       var q42 = document.querySelector('input[name="qa42"]:checked').value;
       var q43 = document.querySelector('input[name="qa43"]:checked').value;
       var q44 = document.querySelector('input[name="qa44"]:checked').value;
       var q45 = document.querySelector('input[name="qa45"]:checked').value;
       var q46 = document.querySelector('input[name="qa46"]:checked').value;
       var q47 = document.querySelector('input[name="qa47"]:checked').value;
       var q48 = document.querySelector('input[name="qa48"]:checked').value;
       var q49 = document.querySelector('input[name="qa49"]:checked').value;
       var q50 = document.querySelector('input[name="qa50"]:checked').value;
       var q51 = document.querySelector('input[name="qa51"]:checked').value;
       var q52 = document.querySelector('input[name="qa52"]:checked').value;
       var q53 = document.querySelector('input[name="qa53"]:checked').value;
       var q54 = document.querySelector('input[name="qa54"]:checked').value;
       var q55 = document.querySelector('input[name="qa55"]:checked').value;
       var q56 = document.querySelector('input[name="qa56"]:checked').value;
       var q57 = document.querySelector('input[name="qa57"]:checked').value;
       var q58 = document.querySelector('input[name="qa58"]:checked').value;
       var q59 = document.querySelector('input[name="qa59"]:checked').value;
       var q60 = document.querySelector('input[name="qa60"]:checked').value;

       var q61 = document.querySelector('input[name="qa61"]:checked').value;
       var q62 = document.querySelector('input[name="qa62"]:checked').value;
       var q63 = document.querySelector('input[name="qa63"]:checked').value;
       var q64 = document.querySelector('input[name="qa64"]:checked').value;
       var q65 = document.querySelector('input[name="qa65"]:checked').value;
       var q66 = document.querySelector('input[name="qa66"]:checked').value;
       var q67 = document.querySelector('input[name="qa67"]:checked').value;
       var q68 = document.querySelector('input[name="qa68"]:checked').value;
       var q69 = document.querySelector('input[name="qa69"]:checked').value;
       var q70 = document.querySelector('input[name="qa70"]:checked').value;
       var q71 = document.querySelector('input[name="qa71"]:checked').value;
       var q72 = document.querySelector('input[name="qa72"]:checked').value;

       if(q1 == 1 && q2 == 1 && q3 == 1 && q4 == 1 && q5 == 1 && q6 == 1 && q7 == 1 && q8 == 1 && q9 == 1 && q10 == 1 &&
            q11 == 1 && q12 == 1 && q13 == 1 && q14 == 1 && q15 == 1 && q16 == 1 && q17 == 1 && q18 == 1 && q19 == 1 && q20 == 1 &&
            q21 == 1 && q22 == 1 && q23 == 1 && q24 == 1 && q25 == 1 && q26 == 1 && q27 == 1 && q28 == 1 && q29 == 1 && q30 == 1 &&
            q31 == 1 && q32 == 1 && q33 == 1 && q34 == 1 && q35 == 1 && q36 == 1 && q37 == 1 && q38 == 1 && q39 == 1 && q40 == 1 &&
            q41 == 1 && q42 == 1 && q43 == 1 && q44 == 1 && q45 == 1 && q46 == 1 && q47 == 1 && q48 == 1 && q49 == 1 && q50 == 1 &&
            q51 == 1 && q52 == 1 && q53 == 1 && q54 == 1 && q55 == 1 && q56 == 1 && q57 == 1 && q58 == 1 && q59 == 1 && q60 == 1 &&
            q61 == 1 && q62 == 1 && q63 == 1 && q64 == 1 && q65 == 1 && q66 == 1 && q67 == 1 && q68 == 1 && q69 == 1 && q70 == 1 &&
            q71 == 1 && q72 == 1){

            alert("You need to answer the questions to get the Gifts");     
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

       userAnswerMap.set("q41",q41);
       userAnswerMap.set("q42",q42);
       userAnswerMap.set("q43",q43);
       userAnswerMap.set("q44",q44);
       userAnswerMap.set("q45",q45);
       userAnswerMap.set("q46",q46);
       userAnswerMap.set("q47",q47);
       userAnswerMap.set("q48",q48);
       userAnswerMap.set("q49",q49);
       userAnswerMap.set("q50",q50);

       userAnswerMap.set("q51",q51);
       userAnswerMap.set("q52",q52);
       userAnswerMap.set("q53",q53);
       userAnswerMap.set("q54",q54);
       userAnswerMap.set("q55",q55);
       userAnswerMap.set("q56",q56);
       userAnswerMap.set("q57",q57);
       userAnswerMap.set("q58",q58);
       userAnswerMap.set("q59",q59);
       userAnswerMap.set("q60",q60);

       userAnswerMap.set("q61",q61);
       userAnswerMap.set("q62",q62);
       userAnswerMap.set("q63",q63);
       userAnswerMap.set("q64",q64);
       userAnswerMap.set("q65",q65);
       userAnswerMap.set("q66",q66);
       userAnswerMap.set("q67",q67);
       userAnswerMap.set("q68",q68);
       userAnswerMap.set("q69",q69);
       userAnswerMap.set("q70",q70);

       userAnswerMap.set("q71",q71);
       userAnswerMap.set("q72",q72);

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
       giftDescriptionMap.set("Apostleship","The God-given ability to build the foundation of new churches by preaching the Word, teaching others to live by Christ\’s commandments through the example of their own lives, and preparing the people to serve one another.");
       giftDescriptionMap.set("Discernment of Spirit","The God-given ability to recognize what is of God and what is not of God - to distinguish between good and evil, truth and error, and pure motives and impure motives.  People with this gift can sense the presence of evil, and question motives, intentions, doctrine, deeds, and beliefs.  Care must be taken to use this gift to bring good to the Body of Christ – to discern with mercy and understanding rather than to condemn.");
       giftDescriptionMap.set("Evangelism","The God-given ability to spread the good news of Jesus Christ so that unknowing persons respond in faith and discipleship.  People with this gift speak comfortably about their faith; non-believers are drawn into this circle of comfort.");
       giftDescriptionMap.set("Exhortation (Encouragement)","The God-given ability to encourage, help, intercede for, and be an advocate for others in a way that motivates others to grow in their faith and urges them to action.  Takes many forms — music, writings, relationships, prayer, and speaking.");
       giftDescriptionMap.set("Faith","The divine ability to recognize what God wants done and to act when others fall back in doubt.  Believing deeply in the power of prayer, people with this gift also know that God is both present and active in their lives and is faithful to His promises.");
       giftDescriptionMap.set("Giving/Generosity","The divine ability to give material wealth and possessions freely and joyfully, knowing that spiritual wealth will abound as God’\s work is advanced.");
       giftDescriptionMap.set("Healing","The divine ability to bring wholeness - physical, emotional or spiritual - to others.  Demonstrates the power of Jesus Christ and the glory of God by listening carefully and using the tools of prayer, touch, and spoken words.");
       giftDescriptionMap.set("Helps/Assistance","The divine ability to work along side others in performing practical and often behind-the-scenes tasks to sustain and enhance the Body of Christ.");
       giftDescriptionMap.set("Hospitality","The divine ability to provide a warm and friendly welcome for people that demonstrates God\\’s love by providing food, shelter, or fellowship.  People with this gift graciously meet new people and help them feel accepted and at ease in unfamiliar surroundings.");
       giftDescriptionMap.set("Intercession","The divine ability to pray for others, often for extended periods of time, with the certainty that prayer is heard and answers to request will come");
       giftDescriptionMap.set("Knowledge","The divine ability to understand, organize, and effectively use information to advance God’\s purposes.  The Holy Spirit appears to be at work as an unusual insight or truth is revealed.");
       giftDescriptionMap.set("Leadership/Leading with Diligence","The God-given ability to motivate, coordinate and direct people doing God’\s work.  Leaders take responsibility for setting and achieving goals; they step in where there is a lack of direction.  People with this gift build a team of talented persons, and then empower them.");
       giftDescriptionMap.set("Mercy/Compassion","The God-given ability to see and feel the suffering of others and to minister to them with love and understanding.  This gift is compassion moved to action.");
       giftDescriptionMap.set("Pastor-Teacher (Shepherding)","The divine ability to guide, protect, and care for other Christians as they experience spiritual growth.  Nurture spiritual growth through extended periods of time where trust and confidence is established and time is taken to care for the \“whole person\”.");
       giftDescriptionMap.set("Prophecy","The divine ability to proclaim God’\s truth in a way that makes it relevant to current situations and to envision how He would want things to change.  Prophets listen to God for what He wants them to say and speak to the people bringing edification, exhortation, and consolation.");
       giftDescriptionMap.set("Teaching","The God-given ability to understand and clearly explain God’\s truths, and show how we can apply these in our lives.");
       giftDescriptionMap.set("Wisdom","The divine ability to understand and apply Biblical and spiritual knowledge to complex, contradictory or other difficult situations.  The ability to understand and live God’\s will, sharing wisdom with others through teaching and providing clarity and direction – a \“compass\” for the Body of Christ.");


       weightMap.set("1",1);
       weightMap.set("2",2);
       weightMap.set("3",3);
       weightMap.set("4",4);
       weightMap.set("5",5);

var i;
for (i = 1; i < 73; i++) { 
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

foo();
 
}

}

function sortNumber(a,b) {
    return b - a;
}

 
  function foo() {
    
    document.getElementById('gift1').value = realGift[0];
    document.getElementById('gift2').value = giftDesc[0];
    document.getElementById('gift3').value = "("+giftPoints[0]+" Points)";
    document.getElementById('gift4').value = realGift[1];
    document.getElementById('gift5').value = giftDesc[1];
    document.getElementById('gift6').value = "("+giftPoints[1]+" Points)";
    document.getElementById('gift7').value = realGift[2];
    document.getElementById('gift8').value = giftDesc[2];
    document.getElementById('gift9').value = "("+giftPoints[2]+" Points)";

  }


</script>
<p align="justify"> God has given you Spiritual Gifts. </p>
<p align="justify">Spiritual gifts are special (divine) abilities given to every believer by the grace of God through the Holy Spirit, to be used to serve and strengthen one another, and to glorify God.</p>
<p align="justify">"Now concerning spiritual gifts, brothers and sisters, I do not want you to be uninformed." I Corinthians 12:1</p>
<p align="justify">Spiritual gifts are given by the Holy Spirit for the building up of the body of Christ and to realize God's Kingdom here on earth. The Holy Spirit has given you spiritual gifts. God wants you to find out about them and to use them to serve God's purposes.</p>
<p align="justify">"Each one, as a good manager of God's different gifts, must use for the good of others the special gift he has received from God." I Peter 4: 1O</p>
<p align="justify">The Spiritual Gifts On-Line Inventory will help you discover and define the special abilities God has given you according to his spiritual purpose for your life. There are more than 70 questions.</p>
<p align="justify">Before you begin, stop and spend some time in prayer. God has given you spiritual gifts. Ask the Holy Spirit to guide you and reveal the gifts He has placed in you. They are placed there for God's purposes and God's glory. Be open to the Holy Spirit as you prayerfully consider these questions.</p>
<p align="justify">Answer based on how true these statements are of your life experience, both past and present. Answer how accurately the statement is true for you, not as you wish or hope it would be, but as it actually is.</p>



<form id="quiz" name="quiz" action="passions11.php" method="LINK" onsubmit="getScore();">
  <input type="hidden" name="email" value="<?php echo $email; ?>" />
  <input type="hidden" name="name" value="<?php echo $name; ?>" />
  <input type="hidden" id="gift1" name="gift1" value="" />
  <input type="hidden" id="gift2" name="gift2" value="" />
  <input type="hidden" id="gift3" name="gift3" value="" />
  <input type="hidden" id="gift4" name="gift4" value="" />
  <input type="hidden" id="gift5" name="gift5" value="" />
  <input type="hidden" id="gift6" name="gift6" value="" />
  <input type="hidden" id="gift7" name="gift7" value="" />
  <input type="hidden" id="gift8" name="gift8" value="" />
  <input type="hidden" id="gift9" name="gift9" value="" />


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


<p><b> 41)  I openly and confidently tell others what Christ has done for me.<b></p>

<input type="radio" name="qa41" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa41" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa41" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa41" value="4"> Consistently<br>
<input type="radio" name="qa41" value="5"> Absolutely always<br>
<br>

<p><b> 42) When I sense God's blessings on an undertaking, I can move forward in spite of opposition or lack of support.<b></p>

<input type="radio" name="qa42" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa42" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa42" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa42" value="4"> Consistently<br>
<input type="radio" name="qa42" value="5"> Absolutely always<br>
<br>

<p><b> 43) I believe I have been given an abundance of resources so that I may give more to the Lord's work.<b></p>

<input type="radio" name="qa43" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa43" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa43" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa43" value="4"> Consistently<br>
<input type="radio" name="qa43" value="5"> Absolutely always<br>
<br>

<p><b> 44) I see where God heals persons emotionally, socially, spiritually, and physically.<b></p>

<input type="radio" name="qa44" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa44" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa44" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa44" value="4"> Consistently<br>
<input type="radio" name="qa44" value="5"> Absolutely always<br>
<br>

<p><b> 45) I like to find small things that need to be done, and often do them without being asked. <b></p>

<input type="radio" name="qa45" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa45" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa45" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa45" value="4"> Consistently<br>
<input type="radio" name="qa45" value="5"> Absolutely always<br>
<br>

<p><b> 46) I can make people feel at ease even in unfamiliar surroundings.<b></p>

<input type="radio" name="qa46" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa46" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa46" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa46" value="4"> Consistently<br>
<input type="radio" name="qa46" value="5"> Absolutely always<br>
<br>

<p><b> 47) I often see specific results in direct response to my prayers.<b></p>

<input type="radio" name="qa47" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa47" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa47" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa47" value="4"> Consistently<br>
<input type="radio" name="qa47" value="5"> Absolutely always<br>
<br>

<p><b> 48) I confidently share my knowledge and insights with others. <b></p>

<input type="radio" name="qa48" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa48" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa48" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa48" value="4"> Consistently<br>
<input type="radio" name="qa48" value="5"> Absolutely always<br>
<br>

<p><b> 49) I can adjust my leadership style to bring out the best in others.<b></p>

<input type="radio" name="qa49" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa49" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa49" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa49" value="4"> Consistently<br>
<input type="radio" name="qa49" value="5"> Absolutely always<br>
<br>

<p><b> 50) I enjoy helping people who are sometimes regarded as undeserving or beyond help.<b></p>

<input type="radio" name="qa50" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa50" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa50" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa50" value="4"> Consistently<br>
<input type="radio" name="qa50" value="5"> Absolutely always<br>
<br>

<p><b> 51) I boldly expose cultural trends, teachings, or events that contradict biblical principals.<b></p>

<input type="radio" name="qa51" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa51" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa51" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa51" value="4"> Consistently<br>
<input type="radio" name="qa51" value="5"> Absolutely always<br>
<br>

<p><b> 52) I can faithfully provide long-term support and concern for others.<b></p>

<input type="radio" name="qa52" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa52" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa52" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa52" value="4"> Consistently<br>
<input type="radio" name="qa52" value="5"> Absolutely always<br>
<br>

<p><b> 53) I can present information to others at a level that makes it easy for them to grasp and apply to their lives.<b></p>

<input type="radio" name="qa53" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa53" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa53" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa53" value="4"> Consistently<br>
<input type="radio" name="qa53" value="5"> Absolutely always<br>
<br>

<p><b> 54) I can easily select the most effective course of action from among several alternatives.<b></p>

<input type="radio" name="qa54" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa54" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa54" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa54" value="4"> Consistently<br>
<input type="radio" name="qa54" value="5"> Absolutely always<br>
<br>

<p><b> 55) I can identify and effectively use the resources needed to accomplish tasks.<b></p>

<input type="radio" name="qa55" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa55" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa55" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa55" value="4"> Consistently<br>
<input type="radio" name="qa55" value="5"> Absolutely always<br>
<br>

<p><b> 56) I adapt well to different cultures and surroundings in a sensitive and considerate manner.<b></p>

<input type="radio" name="qa56" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa56" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa56" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa56" value="4"> Consistently<br>
<input type="radio" name="qa56" value="5"> Absolutely always<br>
<br>

<p><b> 57) I can identify preaching, teaching, or communication which is not true to the Bible.<b></p>

<input type="radio" name="qa57" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa57" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa57" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa57" value="4"> Consistently<br>
<input type="radio" name="qa57" value="5"> Absolutely always<br>
<br>

<p><b> 58) I strengthen those who are wavering in their faith.<b></p>

<input type="radio" name="qa58" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa58" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa58" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa58" value="4"> Consistently<br>
<input type="radio" name="qa58" value="5"> Absolutely always<br>
<br>

<p><b> 59) I seek opportunities to talk about spiritual matters with unbelievers.<b></p>

<input type="radio" name="qa59" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa59" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa59" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa59" value="4"> Consistently<br>
<input type="radio" name="qa59" value="5"> Absolutely always<br>
<br>

<p><b> 60) I trust God in circumstances where success cannot be guaranteed by human effort alone.<b></p>

<input type="radio" name="qa60" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa60" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa60" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa60" value="4"> Consistently<br>
<input type="radio" name="qa60" value="5"> Absolutely always<br>
<br>

<p><b> 61) I like knowing that my financial support makes a difference in the lives and ministries of God's people.<b></p>

<input type="radio" name="qa61" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa61" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa61" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa61" value="4"> Consistently<br>
<input type="radio" name="qa61" value="5"> Absolutely always<br>
<br>

<p><b> 62) I have experienced the power of the Holy Spirit when praying for the healing of another.<b></p>

<input type="radio" name="qa62" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa62" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa62" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa62" value="4"> Consistently<br>
<input type="radio" name="qa62" value="5"> Absolutely always<br>
<br>

<p><b> 63) I readily and happily use my natural or learned skills to help wherever needed.<b></p>

<input type="radio" name="qa63" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa63" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa63" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa63" value="4"> Consistently<br>
<input type="radio" name="qa63" value="5"> Absolutely always<br>
<br>

<p><b> 64) I like to create a place where people do not feel that they are alone.<b></p>

<input type="radio" name="qa64" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa64" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa64" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa64" value="4"> Consistently<br>
<input type="radio" name="qa64" value="5"> Absolutely always<br>
<br>

<p><b> 65) I pray with confidence because I know that God works in response to prayer.<b></p>

<input type="radio" name="qa65" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa65" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa65" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa65" value="4"> Consistently<br>
<input type="radio" name="qa65" value="5"> Absolutely always<br>
<br>

<p><b> 66) I understand and can connect different Bible stories and teachings without difficulty.<b></p>

<input type="radio" name="qa66" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa66" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa66" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa66" value="4"> Consistently<br>
<input type="radio" name="qa66" value="5"> Absolutely always<br>
<br>

<p><b> 67) I figure out where we need to go and help others to get there.<b></p>

<input type="radio" name="qa67" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa67" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa67" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa67" value="4"> Consistently<br>
<input type="radio" name="qa67" value="5"> Absolutely always<br>
<br>

<p><b> 68)  I can look beyond a person's handicaps or problems to see a life that matters to God.<b></p>

<input type="radio" name="qa68" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa68" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa68" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa68" value="4"> Consistently<br>
<input type="radio" name="qa68" value="5"> Absolutely always<br>
<br>

<p><b> 69) I like people who are honest and will speak the truth.<b></p>

<input type="radio" name="qa69" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa69" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa69" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa69" value="4"> Consistently<br>
<input type="radio" name="qa69" value="5"> Absolutely always<br>
<br>

<p><b> 70) I enjoy giving guidance and practical support to small groups of people.<b></p>

<input type="radio" name="qa70" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa70" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa70" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa70" value="4"> Consistently<br>
<input type="radio" name="qa70" value="5"> Absolutely always<br>
<br>

<p><b> 71) I enjoy preparing and organizing material in order to teach it to others.<b></p>

<input type="radio" name="qa71" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa71" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa71" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa71" value="4"> Consistently<br>
<input type="radio" name="qa71" value="5"> Absolutely always<br>
<br>

<p><b> 72) I give practical advice to help others through complicated situations.<b></p>

<input type="radio" name="qa72" value="1" checked="true"> Not At All<br>
<input type="radio" name="qa72" value="2"> Some of the time, once in a while true<br>
<input type="radio" name="qa72" value="3"> Most of the time, usually true<br>
<input type="radio" name="qa72" value="4"> Consistently<br>
<input type="radio" name="qa72" value="5"> Absolutely always<br>
<br>
 
<center>
 
<!-- <button type="button" style="font-size:10pt;color:white;background-color:green;border:5px solid #336600;padding:7px; width:200px" 
       onClick="getScore()">Click Me</button>  -->
<input type="submit" name="submit" value="CONTINUE" style="font-size:10pt;color:white;background-color: #4CAF50;
padding:10px; width:200px" />

</center>	

</form>
</body>
</html>