
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36956900-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type='text/css'>
table{
	width:100%;
	margin:auto;
}
table tr:first-child{
	font-weight:bold;
}
table tr td{
	padding:2px 10px 2px 10px;
}
</style>
<?php

	$con = mysql_connect('localhost',"spring12",'simplyfantastic~12');
	
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("spring12_springfest2012",$con) or die(mysql_error());

extract($_POST);

if($username=="admin" && $password=="iitkgpMUN13"){
	$_SESSION['username']=$username;
}


if(isset($_SESSION['username'])){
	$table=$_POST['table'];
	
	if($table=="iitkgpmun13_eb"){
	$result = mysql_query("SELECT * FROM `$table` ORDER BY no_mun_eb DESC") or die(mysql_error());
	echo "<table border='1' style='border-spacing:0px;'><tr><td>Name</td><td>Gender</td><td>Course</td><td>Institute</td><td>Year</td><td>Place</td>
	<td>Phone</td><td>Email ID</td><td>No. of EB MUNs</td><td>EB MUN Details</td><td>EB Experience</td><td>No. of DEL MUNs</td><td>DEL MUN Details</td><td>DEL
	 Experience</td><td>Council preference</td><td>Position Preference</td></tr>";
	while($row = mysql_fetch_array($result))
	  {
		  echo "<tr><td>$row[name]</td><td>$row[gender]</td><td>$row[course]</td><td>$row[institute]</td><td>$row[year]</td><td>$row[p_of_res]</td>
		  <td>$row[ph_no]</td><td>$row[email]</td><td>$row[no_mun_eb]</td><td>$row[mun_eb_1] | $row[mun_eb_2] | $row[mun_eb_3] | $row[mun_eb_4] | 
		   $row[mun_eb_5]</td><td>$row[eb_exp]</td><td>$row[no_mun_del]</td><td>$row[mun_del_1] | $row[mun_del_2] | $row[mun_del_3] | $row[mun_del_4] | 
		   $row[mun_del_5]</td><td>$row[del_exp]</td><td>$row[coun_pref]</td><td>$row[pos_pref]</td></tr>";
	  }
	echo "</table>";
	}
	elseif($table=="iitkgpmun13_del"){
		$result = mysql_query("SELECT * FROM `$table` ORDER BY no_mun_del DESC") or die(mysql_error());
	echo "<table border='1' style='border-spacing:0px;'><tr><td>Name</td><td>Gender</td><td>Course</td><td>Institute</td><td>Year</td><td>Place</td>
	<td>Phone</td><td>Email ID</td><td>No. of DEL MUNs</td><td>DEL MUN Details</td><td>DEL
	 Experience</td><td>Committee-1</td><td>Committee-2</td></tr>";
	while($row = mysql_fetch_array($result))
	  {
		  echo "<tr><td>$row[name]</td><td>$row[gender]</td><td>$row[course]</td><td>$row[institute]</td><td>$row[year]</td><td>$row[p_of_res]</td>
		  <td>$row[ph_no]</td><td>$row[email]</td><td>$row[no_mun_del]</td><td>$row[mun_del_1] | $row[mun_del_2] | $row[mun_del_3] | $row[mun_del_4] | 
		   $row[mun_del_5]</td><td>$row[del_exp]</td><td>$row[comm_1]</td><td>$row[comm_2]</td></tr>";
	  }
	echo "</table>";
	}
	elseif($table=="iitkgpmun13_ip"){
		$result = mysql_query("SELECT * FROM `$table` ORDER BY no_mun_ip DESC") or die(mysql_error());
	echo "<table border='1' style='border-spacing:0px;'><tr><td>Name</td><td>Gender</td><td>Course</td><td>Institute</td><td>Year</td><td>Place</td>
	<td>Phone</td><td>Email ID</td><td>No. of IP MUNs</td><td>IP MUN Details</td><td>IP
	 Experience</td><td>Position Preference</td></tr>";
	while($row = mysql_fetch_array($result))
	  {
		  echo "<tr><td>$row[name]</td><td>$row[gender]</td><td>$row[course]</td><td>$row[institute]</td><td>$row[year]</td><td>$row[p_of_res]</td>
		  <td>$row[ph_no]</td><td>$row[email]</td><td>$row[no_mun_ip]</td><td>$row[mun_ip_1] | $row[mun_ip_2] | $row[mun_ip_3] | $row[mun_ip_4] | 
		   $row[mun_ip_5]</td><td>$row[ip_exp]</td><td>$row[pos_pref]</td></tr>";
	  }
	echo "</table>";
	}
}
else{
	echo "<div style='position:relative;top:200px;margin:auto;width:300px;height:300px;border:1px solid #000;'>
		<form action='' method='POST'>
			<label for='username'>Username</label> : <input name='username' type='text'/></br>
			<label for='password'>Password</label> : <input name='password' type='password'/>
			<select name='table'>
			  <option value='iitkgpmun13_eb'>Executive Board List</option>
			  <option value='iitkgpmun13_del'>Delegate List</option>
			  <option value='iitkgpmun13_ip'>International Press List</option>
			</select>
			<input type='submit' value='submit'/>
		</form>
	      </div>";
}
?>