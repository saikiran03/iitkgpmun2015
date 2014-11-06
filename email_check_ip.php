<meta content="images/mun_logo_small.png" property="og:image">
<link href="images/mun_logo_small.png" rel="shortcut icon" type="image/x-icon">
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ip.iitkgpmun@gmail.com";
    $email_subject = "IP Application";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br/><br/>";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['full_name']) || !isset($_POST['gender']) || !isset($_POST['course']) ||  !isset($_POST['institute']) ||
        !isset($_POST['year']) ||
        !isset($_POST['place']) ||
        !isset($_POST['mobile']) ||
        !isset($_POST['email']) ||
        !isset($_POST['muns_as_ip'])

        ) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
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
   if(strlen($year) == 0) {
    $error_message .= 'The Year you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$institute)) {
    $error_message .= 'The Institute Name you entered does not appear to be valid.<br />';
  }
  if(strlen($mobile) != 10 ) {
    $error_message .= 'The mobile number you entered is not 10 digits in length.<br />';
  }
  $string_muns_ip = '/^[0-9]{1,}$/';
  if(strlen($muns_as_ip) < 0 || !preg_match($string_muns_ip,$muns_as_ip)) {
    $error_message .= 'The number of MUNs as Iinternational Press you entered does not appear to be valid.<br />';
  }
   $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$position_preference)) {
    $error_message .= 'The position preference Name you entered does not appear to be valid.<br />';
  }/*
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$committee_1)) {
    $error_message .= 'The Committee Name you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$country_1_4)) {
    $error_message .= 'The country 4 Name you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$country_1_3)) {
    $error_message .= 'The country 3 Name you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$country_1_2)) {
    $error_message .= 'The country 2 Name you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$country_1_1)) {
    $error_message .= 'The country 1 Name you entered does not appear to be valid.<br />';
  }*/
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
    $mun_ip_1= clean_string($ip_mun_1).' , ';  
    $mun_ip_1.= clean_string($ip_year_1).' , ';   
    $mun_ip_1.= clean_string($ip_news_agency_1).' , '; 
    $mun_ip_1.= clean_string($ip_position_1).' , '; 
    $mun_ip_1.= clean_string($ip_awards_1)."\n";

    $mun_ip_2= clean_string($ip_mun_2).' , ';  
    $mun_ip_2.= clean_string($ip_year_2).' , ';   
    $mun_ip_2.= clean_string($ip_news_agency_2).' , '; 
    $mun_ip_2.= clean_string($ip_position_2).' , '; 
    $mun_ip_2.= clean_string($ip_awards_2)."\n";
    
    $mun_ip_3= clean_string($ip_mun_3).' , ';  
    $mun_ip_3.= clean_string($ip_year_3).' , ';   
    $mun_ip_3.= clean_string($ip_news_agency_3).' , '; 
    $mun_ip_3.= clean_string($ip_position_3).' , '; 
    $mun_ip_3.= clean_string($ip_awards_3)."\n";

    $mun_ip_4= clean_string($ip_mun_4).' , ';  
    $mun_ip_4.= clean_string($ip_year_4).' , ';   
    $mun_ip_4.= clean_string($ip_news_agency_4).' , '; 
    $mun_ip_4.= clean_string($ip_position_4).' , '; 
    $mun_ip_4.= clean_string($ip_awards_4)."\n";

    $mun_ip_5= clean_string($ip_mun_5).' , ';  
    $mun_ip_5.= clean_string($ip_year_5).' , ';   
    $mun_ip_5.= clean_string($ip_news_agency_5).' , '; 
    $mun_ip_5.= clean_string($ip_position_5).' , '; 
    $mun_ip_5.= clean_string($ip_awards_5)."\n";
	
	$con = mysql_connect('localhost',"spring12",'simplyfantastic~12');
	
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("spring12_springfest2012",$con) or die(mysql_error());
$table='iitkgpmun13_ip';
$ins="insert into `$table`(name,gender,course,institute,year,p_of_res,ph_no,email,no_mun_ip,mun_ip_1,mun_ip_2,mun_ip_3,mun_ip_4,mun_ip_5,ip_exp,pos_pref) 
values('$full_name','$gender','$course','$institute','$year','$place','$mobile','$email','$muns_as_ip','$mun_ip_1','$mun_ip_2','$mun_ip_3','$mun_ip_4','$mun_ip_5','$muns_as_ip_exp','$position_preference')";
$r=mysql_query($ins) or die(mysql_error);

$ip_mun_details=$mun_ip_1.' | '.$mun_ip_2.' | '.$mun_ip_3.' | '.$mun_ip_4.' | '.$mun_ip_5;

if($muns_as_ip==""){
	$mun_as_ip="0";
}
if($muns_as_ip_exp==""){
	$mun_as_ip_exp="none";
}
$url='https://docs.google.com/spreadsheet/formResponse?formkey=dHdtRWtOUVYwNEEtTG9LSC12a3Nrd3c6MQ&ifq';
$url=$url.'&entry.0.single='.$full_name;
$url=$url.'&entry.2.single='.$gender;
$url=$url.'&entry.4.single='.$course;
$url=$url.'&entry.6.single='.$institute;
$url=$url.'&entry.8.single='.$year;
$url=$url.'&entry.10.single='.$place;
$url=$url.'&entry.12.single='.$mobile;
$url=$url.'&entry.14.single='.$email;
$url=$url.'&entry.16.single='.$muns_as_ip;
$url=$url.'&entry.18.single='.$ip_mun_details;
$url=$url.'&entry.20.single='.$muns_as_ip_exp;
$url=$url.'&entry.22.single='.$position_preference;
$url=$url.'&submit=Submit';
$url = str_replace("\n", "", $url);
$url = str_replace("\r", "", $url);
rawurlencode($url);
?>
<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" src="<?php echo $url; ?>" onload=""></iframe>
<?php
//header('Location:./');
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
<a href='./'>Go Back to Home</a>
<?php
}
?>