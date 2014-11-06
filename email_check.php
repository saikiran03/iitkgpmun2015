<meta content="images/mun_logo_small.png" property="og:image">
<link href="images/mun_logo_small.png" rel="shortcut icon" type="image/x-icon">
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "delegate.iitkgpmun@gmail.com";
    $email_subject = "Delegate Application";
     
     
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
        !isset($_POST['muns_as_delegate'])

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
  if(!preg_match($string_exp,$institute)) {
    $error_message .= 'The Institute Name you entered does not appear to be valid.<br />';
  }
  if(strlen($mobile) != 10 ) {
    $error_message .= 'The mobile number you entered is not 10 digits in length.<br />';
  }
  $muns_as_delegate_exp = '/^[0-9]{1,}$/';
  if(strlen($muns_as_delegate) < 0 || !preg_match($muns_as_delegate_exp,$muns_as_delegate)) {
    $error_message .= 'The number of MUNs as delegates you entered does not appear to be valid.<br />';
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
	
	$comm_1 = clean_string($committee_1).' , ';
	$comm_1 .= clean_string($country_1_1).' , ';
	$comm_1 .= clean_string($country_1_2).' , ';
	$comm_1 .= clean_string($country_1_3).' , ';
	$comm_1 .= clean_string($country_1_4)."\n";
	
	$comm_2 = clean_string($committee_2).' , ';
	$comm_2 .= clean_string($country_2_1).' , ';
	$comm_2 .= clean_string($country_2_2).' , ';
	$comm_2 .= clean_string($country_2_3).' , ';
	$comm_2 .= clean_string($country_2_4)."\n";
	
	$con = mysql_connect('localhost',"spring12",'simplyfantastic~12');
	
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("spring12_springfest2012",$con) or die(mysql_error());
$table='iitkgpmun13_del';
$ins="insert into `$table`(name,gender,course,institute,year,p_of_res,ph_no,email,no_mun_del,mun_del_1,mun_del_2,mun_del_3,mun_del_4,mun_del_5,del_exp,comm_1,comm_2) 
values('$full_name','$gender','$course','$institute','$year','$place','$mobile','$email','$muns_as_delegate','$mun_del_1','$mun_del_2','$mun_del_3','$mun_del_4','$mun_del_5','$mun_experience','$comm_1','$comm_2')";
$r=mysql_query($ins) or die(mysql_error);

$del_mun_details=$mun_del_1.' | '.$mun_del_2.' | '.$mun_del_3.' | '.$mun_del_4.' | '.$mun_del_5;

if($mun_experience==""){
	$mun_experience="none";
}
if($comm_1==""){
	$comm_1="none";
}
if($comm_2==""){
	$comm_2="none";
}
$url='https://docs.google.com/spreadsheet/formResponse?formkey=dHRXVFNKXzNzTHBtalFQVVdCTnR1V1E6MQ&ifq';
$url=$url.'&entry.0.single='.$full_name;
$url=$url.'&entry.1.single='.$gender;
$url=$url.'&entry.4.single='.$course;
$url=$url.'&entry.6.single='.$institute;
$url=$url.'&entry.8.single='.$year;
$url=$url.'&entry.10.single='.$place_study;
$url=$url.'&entry.12.single='.$place;
$url=$url.'&entry.16.single='.$mobile;
$url=$url.'&entry.18.single='.$email;
$url=$url.'&entry.20.single='.$muns_as_delegate;
$url=$url.'&entry.22.single='.$del_mun_details;
$url=$url.'&entry.24.single='.$mun_experience;
$url=$url.'&entry.26.single='.$comm_1;
$url=$url.'&entry.28.single='.$comm_2;
$url=$url.'&submit=Submit';
$url = str_replace("\n", "", $url);
$url = str_replace("\r", "", $url);
rawurlencode($url);
?>
<iframe name="hidden_iframe" id="hidden_iframe"
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