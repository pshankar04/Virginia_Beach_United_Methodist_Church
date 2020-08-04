<?php
	
	include("./php/class.phpmailer.php");

	  $dbHost = "handson-mysql"; // MySQL Server
    $dbUser = "bkongara"; // MySQL Username
    $dbPass = "Mamatha5!"; // MySQL Password
    $dbname = "Taste_of_India"; // MySQL Database Name
    $DB_TBLName = "Users"; // MySQL Table Name

   	$Conn  = mysql_connect($dbHost,$dbUser,$dbPass) or die('Error connecting to mysql');
    mysql_select_db($dbname) or die ( 'Error connecting to db' );
    if (!$Conn) {
    	echo "Failed in connected ";

    }
 	
     function sendMailForDecision($firstName,$lastName,$userId){

      $return_arrfinal = array();
      $status_array['status'] = '1';
      $mail = new PHPMailer();
      $toarraymail=$lastName;
      // $toarraymail="cmuth001@odu.edu";
      $mail->SMTPDebug = false;                               // Enable verbose debug output
      $mail->Port = '587';
      $mail->isSMTP();                                      // Set mailer to use SMTP // Specify main and backup SMTP servers                                    // Set mailer to use SMTP
      $mail->Host = gethostbyname('smtp.gmail.com');  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true; // Authentication must be disabled
      // $mail->Username = 'tasteofindiahr@gmail.com';
      // $mail->Password = 'Toiwebweb22';
      $mail->Username = 'studentrecruitment.csodu@gmail.com';
      $mail->Password = 'Srts@123';
      $mail->SMTPSecure= 'tls';


      $mail->setFrom('tasteofindiahr@gmail.com',"Taste Of India");
      $mail->AddAddress($toarraymail);     // Add a recipient
      $mail->AddCC("mkuku002@odu.edu");
      $mail->AddCC("vklakdawala@gmail.com");
      $mail->AddCC("tasteofindiahr@gmail.com");
      // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = 'Congratulations on winning the HOURLY DRAW!';
      $mail->Body    =" Hello $firstName,
                        <br />
                        <br />

                       
                        Congratulations on winning the HOURLY DRAW.<br /><br />

                        If you are still here, please come to the GUEST SERVICES desk in the main arena and collect your gift certificate.  We will need to verify your identity.<br /> 
                        <br />If you have already left the event, kindly let us know where you would like us to mail your gift certificate.
                        <br /><br />Once again thank you for joining us at  the TASTE OF INDIA 2018 and hope to see you again next year in APRIL 2019.
                        <br />
                        <br />
                        Regards,<br />
                        Taste Of India Team.";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->Send()){
        return "failed";
      }else{
        $sqlupdate = "UPDATE `Taste_of_India`.`winner` SET `notified` = '1' WHERE `winner`.`user_id` = '$userId'";
        $result = mysql_query($sqlupdate);
        return "sent";
      }
      // // echo "Sending email";
      // echo $sqlupdate;

  }



if(isset($_POST['winnerEmail'])){

    $winnerEmail = $_POST['winnerEmail'];



	  $sql = "SELECT * FROM `Users` WHERE `email`='$winnerEmail'";
    $row = mysql_fetch_assoc(mysql_query($sql));

    $winnerFullName = $row['firstname'] ." " . $row['lastname'];
    //$wLastName = $row['lastname'];
    $winnerEmail = $row['email'];
    $status = sendMailForDecision($winnerFullName, $winnerEmail,$row['id']);
    echo $status;
    

}


if(isset($_POST['currentW'])){

  $recieved = $_POST['currentW'];

  $currentWSql = "SELECT * FROM `winner` ORDER BY `winner`.`time_stamp` DESC LIMIT 1";

  $currentWRow = mysql_fetch_assoc(mysql_query($currentWSql));

  $currentWID = $currentWRow['user_id'];

  $currentWFromU = "SELECT * FROM `Users` WHERE id = '$currentWID' ";

  $currentWData = mysql_fetch_assoc(mysql_query($currentWFromU));


  if($currentWData>0){
   $currentWName = $currentWData['firstname'] . " ". $currentWData['lastname'];
   $currentWEmail = $currentWData['email'];

   echo $currentWName . "/" . $currentWEmail;


  } else{


    echo "noUser";
  }


}

?>