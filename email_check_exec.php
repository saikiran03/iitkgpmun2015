<meta content="images/mun_logo_small.png" property="og:image">
<link href="images/mun_logo_small.png" rel="shortcut icon" type="image/x-icon">
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "eb.iitkgpmun@gmail.com";
    $email_subject = "Executive Board Application";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['gender']) ||
        !isset($_POST['course']) ||
        !isset($_POST['institute']) ||
        !isset($_POST['year']) ||
        !isset($_POST['place']) ||
        !isset($_POST['mobile']) ||
        !isset($_POST['email']) ||
        !isset($_POST['muns_as_delegate']) ||
        !isset($_POST['muns_as_eb']) ||
        !isset($_POST['council_preference']) ||
        !isset($_POST['position_preference'])
        
        ) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     /*
    $full_name = $_POST['full_name']; // required
    $gender = $_POST['gender']; // required
    $course = $_POST['course']; // required
    $institute = $_POST['institute']; // required
    $year = $_POST['year']; // required
    $mobile = $_POST['mobile']; // required
    $email = $_POST['email']; // required
    $muns_as_delegate = $_POST['muns_as_delegate']; // not required
    $muns_as_eb = $_POST['muns_as_eb']; // not required
    $council_preference = $_POST['council_preference']// required
    $position_preference = $_POST['position_preference']; // required
	*/
	extract($_POST);
	
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$full_name)) {
    $error_message .= 'The Full Name you entered does not appear to be valid.<br />';
  }
  if(strlen($course) == 0) {
    $error_message .= 'The Course Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$institute)) {
    $error_message .= 'The Institute Name you entered does not appear to be valid.<br />';
  }
  if(strlen($mobile) != 10) {
    $error_message .= 'The mobile you entered is not 10 digits in length.<br />';
  }
  $muns_as_delegate_exp = '/^[0-9]{1,}$/';
  if(strlen($muns_as_delegate) < 0 || !preg_match($muns_as_delegate_exp,$muns_as_delegate)) {
    $error_message .= 'The number of MUNs Delegates you entered does not appear to be valid.<br />';
  }
  $muns_as_eb_exp = '/^[0-9]{1,}$/';
  if(strlen($muns_as_eb) < 0 || !preg_match($muns_as_eb_exp,$muns_as_eb)) {
    $error_message .= 'The number of MUNs Executive Boards you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$council_preference)) {
    $error_message .= 'The council preference Name you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$position_preference)) {
    $error_message .= 'The position preference Name you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    /*$email_message .= "Full Name: ".clean_string($full_name)."\n";
    $email_message .= "Gender: ".clean_string($gender)."\n";
    $email_message .= "Course: ".clean_string($course)."\n";
    $email_message .= "Institue: ".clean_string($institue)."\n";
    $email_message .= "Year: ".clean_string($year)."\n";
    $email_message .= "Place: ".clean_string($place)."\n";
    $email_message .= "Mobile: ".clean_string($mobile)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Number of muns as executive boards: ".clean_string($muns_as_eb)."\n";
*/
    $mun_eb_1= clean_string($eb_mun_1).' , ';  
    $mun_eb_1.= clean_string($eb_council_1).' , ';   
    $mun_eb_1.= clean_string($eb_year_1).' , '; 
    $mun_eb_1.= clean_string($eb_position_1)."\n";

    $mun_eb_2 = clean_string($eb_mun_2).' , ';  
    $mun_eb_2 .= clean_string($eb_council_2).' , ';   
    $mun_eb_2 .= clean_string($eb_year_2).' , '; 
    $mun_eb_2 .= clean_string($eb_position_2)."\n"; 

    $mun_eb_3 =clean_string($eb_mun_3).' , ';  
    $mun_eb_3 .= clean_string($eb_council_3).' , ';   
    $mun_eb_3 .= clean_string($eb_year_3).' , '; 
    $mun_eb_3 .= clean_string($eb_position_3)."\n"; 

    $mun_eb_4 = clean_string($eb_mun_4).' , ';  
    $mun_eb_4 .= clean_string($eb_council_4).' , ';   
    $mun_eb_4 .= clean_string($eb_year_4).' , '; 
    $mun_eb_4 .= clean_string($eb_position_4)."\n";  

    $mun_eb_5 = clean_string($eb_mun_5).' , ';  
    $mun_eb_5 .= clean_string($eb_council_5).' , ';   
    $mun_eb_5 .= clean_string($eb_year_5).' , '; 
    $mun_eb_5 .= clean_string($eb_position_5)."\n"; 
	
	 $mun_del_1= clean_string($d_mun_1).' , ';  
    $mun_del_1.= clean_string($d_council_1).' , ';   
    $mun_del_1.= clean_string($d_country_1).' , '; 
    $mun_del_1.= clean_string($d_awards_1)."\n";

    $mun_del_2 = clean_string($d_mun_2).' , ';  
    $mun_del_2 .= clean_string($d_council_2).' , ';   
    $mun_del_2 .= clean_string($d_country_2).' , '; 
    $mun_del_2 .= clean_string($d_awards_2)."\n"; 

    $mun_del_3 =clean_string($d_mun_3).' , ';  
    $mun_del_3 .= clean_string($d_council_3).' , ';   
    $mun_del_3 .= clean_string($d_country_3).' , '; 
    $mun_del_3 .= clean_string($d_awards_3)."\n"; 

    $mun_del_4 = clean_string($d_mun_4).' , ';  
    $mun_del_4 .= clean_string($d_council_4).' , ';   
    $mun_del_4 .= clean_string($d_country_4).' , '; 
    $mun_del_4 .= clean_string($d_awards_4)."\n";  

    $mun_del_5 = clean_string($d_mun_5).' , ';  
    $mun_del_5 .= clean_string($d_council_5).' , ';   
    $mun_del_5 .= clean_string($d_country_5).' , '; 
    $mun_del_5 .= clean_string($d_awards_5)."\n"; 
/*
    $email_message .= "Number of muns os delegates: ".clean_string($muns_as_delegate)."\n";

    $email_message .= "Name of mun 1: ".clean_string($d_mun_1)."\n";  
    $email_message .= "Name of council 1: ".clean_string($d_council_1)."\n";   
    $email_message .= "Name of country 1: ".clean_string($d_country_1)."\n"; 
    $email_message .= "Name of award 1: ".clean_string($d_award_1)."\n";

    $email_message .= "Name of mun 2: ".clean_string($d_mun_2)."\n";  
    $email_message .= "Name of council 2: ".clean_string($d_council_2)."\n";   
    $email_message .= "Name of country 2: ".clean_string($d_country_2)."\n"; 
    $email_message .= "Name of award 2: ".clean_string($d_award_2)."\n"; 

    $email_message .= "Name of mun 3: ".clean_string($d_mun_3)."\n";  
    $email_message .= "Name of council 3: ".clean_string($d_council_3)."\n";   
    $email_message .= "Name of country 3: ".clean_string($d_country_3)."\n"; 
    $email_message .= "Name of award 3: ".clean_string($d_award_3)."\n"; 

    $email_message .= "Name of mun 4: ".clean_string($d_mun_4)."\n";  
    $email_message .= "Name of council 4: ".clean_string($d_council_4)."\n";   
    $email_message .= "Name of country 4: ".clean_string($d_country_4)."\n"; 
    $email_message .= "Name of award 4: ".clean_string($d_award_4)."\n";  

    $email_message .= "Name of mun 5: ".clean_string($d_mun_5)."\n";  
    $email_message .= "Name of council 5: ".clean_string($d_council_5)."\n";   
    $email_message .= "Name of country 5: ".clean_string($d_country_5)."\n"; 
    $email_message .= "Name of award 5: ".clean_string($d_award_5)."\n"; 

    $email_message .= "Council Preference: ".clean_string($council_preference)."\n";
    $email_message .= "position_preference: ".clean_string($position_preference)."\n";*/
       
// create email headers
/*
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  */
/*
$subject = "CAMPUS AMBASSADOR PROGRAMME | SPRINGFEST";
$message = "Hello! You have been successfully registered.You will be informed through email in case of any further proceedings.";
$from = "noreply@springfest.in";
$headers = "From:" . $from;
mail($email_to,$subject,$message,$headers);*/

$con = mysql_connect('localhost',"spring12",'simplyfantastic~12');
	
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("spring12_springfest2012",$con) or die(mysql_error());
$table='iitkgpmun13_eb';
$ins="insert into `$table`(name,gender,course,institute,year,p_of_res,ph_no,email,no_mun_eb,mun_eb_1,mun_eb_2,mun_eb_3,mun_eb_4,mun_eb_5,eb_exp,no_mun_del,mun_del_1,mun_del_2,mun_del_3,mun_del_4,mun_del_5,del_exp,coun_pref,pos_pref) 
values('$full_name','$gender','$course','$institute','$year','$place','$mobile','$email','$muns_as_eb','$mun_eb_1','$mun_eb_2','$mun_eb_3','$mun_eb_4','$mun_eb_5','$eb_experience','$muns_as_delegate','$mun_del_1','$mun_del_2','$mun_del_3','$mun_del_4','$mun_del_5','$mun_experience','$council_preference','$position_preference')";
$r=mysql_query($ins) or die(mysql_error);

if($eb_experience==""){
	$eb_experience="none";
}
if($mun_experience==""){
	$mun_experience="none";
}
$eb_mun_details=$mun_eb_1.' | '.$mun_eb_2.' | '.$mun_eb_3.' | '.$mun_eb_4.' | '.$mun_eb_5;
$del_mun_details=$mun_del_1.' | '.$mun_del_2.' | '.$mun_del_3.' | '.$mun_del_4.' | '.$mun_del_5;
/*
$url_values=array($full_name,$gender,$course,$institute,$year,$place_study,$place,$mobile,$email,$muns_as_eb,$eb_mun_details,$eb_experience,$muns_as_delegate,$del_mun_details,$mun_experience,$council_preference,$position_preference);*/

$url='https://docs.google.com/spreadsheet/formResponse?formkey=dEV0YUxpT2FCV1ZUYXNJZkJMbmRUb0E6MQ&ifq';
/*for($i=0;$i<17;$i++){
$url.='&entry.';
$url.=$i;
$url.='.single=';
$url.=$url_values[$i];
}*/
$url=$url.'&entry.0.single='.$full_name;
$url=$url.'&entry.1.single='.$gender;
$url=$url.'&entry.8.single='.$course;
$url=$url.'&entry.6.single='.$institute;
$url=$url.'&entry.4.single='.$year;
$url=$url.'&entry.10.single='.$place_study;
$url=$url.'&entry.12.single='.$place;
$url=$url.'&entry.14.single='.$mobile;
$url=$url.'&entry.16.single='.$email;
$url=$url.'&entry.18.single='.$muns_as_eb;
$url=$url.'&entry.20.single='.$eb_mun_details;
$url=$url.'&entry.22.single='.$eb_experience;
$url=$url.'&entry.24.single='.$muns_as_delegate;
$url=$url.'&entry.26.single='.$del_mun_details;
$url=$url.'&entry.28.single='.$mun_experience;
$url=$url.'&entry.30.single='.$council_preference;
$url=$url.'&entry.2.single='.$position_preference;
$url=$url.'&submit=Submit';
$url = str_replace("\n", "", $url);
$url = str_replace("\r", "", $url);
rawurlencode($url);
?>
<iframe name="hidden_iframe" id="hidden_iframe1"
style="display:none;" src="<?php echo $url; ?>" onload="if(submitted)
{window.location='http://iitkgpmun.springfest.in';}"></iframe>
<?php
//header('Location:./');
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
<a href='./'>Go Back to Home</a>
<?php
}
?>