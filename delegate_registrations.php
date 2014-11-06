<?php include_once('headerq.php'); ?>
<a href="#">Delegate Application Form</a>
</h2>
</div>
<p style="margin-left: 10px;">
<i>
In case of any error discovered after submitting the form, you can re-fill the entire form with the same email id that you used.
<br>
(*) marked fields are mandatory
</i>
</p>
<br>
<form accept-charset="UTF-8" action="email_check.php" class="new_delegate" id="new_delegate" method="post">
<!--<div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"><input name="authenticity_token" value="c5k9wI58khA1X3X6ag7y6LRj/ipFBXVts30UVCQ3IJo=" type="hidden"></div>-->
<table id="new_eb">
<tbody><tr>
<td>
<b>Name *</b>
</td>
<td>
<input id="delegate_user_attributes_full_name" name="full_name" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Gender *</b>
</td>
<td>
<input id="delegate_user_attributes_gender_male" name="gender" value="Male" type="radio">
<label for="delegate_user_attributes_Male">Male</label>
<input id="delegate_user_attributes_gender_female" name="gender" value="Female" type="radio">
<label for="delegate_user_attributes_Female">Female</label>
</td>
</tr>
<tr>
<td>
<b>Course *</b>
</td>
<td>
<select name="course" id="entry_11" onchange="dispOther(this.value);"><option value="Engineering and Technology">Engineering &amp; Technology</option> <option value="Law (LLB)">Law (LLB)</option> <option value="Political Science">Political Science</option> <option value="History">History</option> <option value="English">English</option> <option value="Commerce">Commerce</option> <option value="Journalism">Journalism</option> <option value="Economics">Economics</option> <option value="International Relations">International Relations</option> <option value="Science">Science</option> <option value="Design and Multimedia">Design &amp; Multimedia</option> <option value="Business and Management">Business &amp; Management</option> <option value="Medicine">Medicine</option> <option value="Sociology">Sociology</option> <option value="School Student">School Student</option> <option value="Other (Please mention if not included)">Other (Please mention if not included)</option></select>
</td>
</tr>
<tr id='row_other' style="display:none;">
<td>
<b>other</b>
</td>
<td>
<input id="other" size="25" value="" type="text">
</td>
</tr>
<tr>
<td>
<b>Institute *</b>
</td>
<td>
<input id="delegate_user_attributes_institute" name="institute" size="25" value="" type="text">
</td>
</tr>
<tr>
<td>
<b>Year *</b>
</td>
<td>
<select name="year" id="entry_13"><option value="First Year">First Year</option> <option value="Second Year">Second Year</option> <option value="Third Year">Third Year</option> <option value="Fourth Year">Fourth Year</option> <option value="Fifth Year">Fifth Year</option> <option value="9th grade">9th grade</option> <option value="10th grade">10th grade</option> <option value="11th grade">11th grade</option> <option value="12th grade">12th grade</option></select>
</td>
</tr>
<tr>
<td>
<b>Place of Study *</b>
</td>
<td>
<input id="delegate_user_attributes_place_of_study" name="place_study" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Place of Residence *</b>
</td>
<td>
<input id="delegate_user_attributes_place_of_residence" name="place" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Mobile Number *</b>
</td>
<td>
<input id="delegate_user_attributes_mobile" name="mobile" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Email *</b>
</td>
<td>
<input id="delegate_user_attributes_email" name="email" size="25" type="text">
</td>
</tr>
</tbody></table>
<br>
<br>
<br>
<b style="margin-left:10px;">
Previous Delegate Experience
</b>
<br>
<br>
<table id="new_eb">
<tbody><tr>
<td>
<b>Number of MUNs as Delegate *</b>
</td>
<td>
<input id="delegate_muns_as_delegate" name="muns_as_delegate" size="25" type="text" value='0'>
</td>
</tr>
</tbody></table>
<br>
<br>
<div id="experience">
<table style="margin-left:10px;">
<tbody><tr>
<th>Name of MUN</th>
<th>Council</th>
<th>Country</th>
<th>Awards (if any)</th>
</tr>
<tr>
<td>
<input id="delegate_d_mun_1" name="d_mun_1" size="15" type="text">
</td>
<td>
<input id="delegate_d_council_1" name="d_council_1" size="15" type="text">
</td>
<td>
<input id="delegate_d_country_1" name="d_country_1" size="15" type="text">
</td>
<td>
<select name="d_awards_1" id="delegate_d_awards_1"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="delegate_d_mun_2" name="d_mun_2" size="15" type="text">
</td>
<td>
<input id="delegate_d_council_2" name="d_council_2" size="15" type="text">
</td>
<td>
<input id="delegate_d_country_2" name="d_country_2" size="15" type="text">
</td>
<td>
<select name="d_awards_2" id="delegate_d_awards_2"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="delegate_d_mun_3" name="d_mun_3" size="15" type="text">
</td>
<td>
<input id="delegate_d_council_3" name="d_council_3" size="15" type="text">
</td>
<td>
<input id="delegate_d_country_3" name="d_country_3" size="15" type="text">
</td>
<td>
<select name="d_awards_3" id="delegate_d_awards_3"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="delegate_d_mun_4" name="d_mun_4" size="15" type="text">
</td>
<td>
<input id="delegate_d_council_4" name="d_council_4" size="15" type="text">
</td>
<td>
<input id="delegate_d_country_4" name="d_country_4" size="15" type="text">
</td>
<td>
<select name="d_awards_4" id="delegate_d_awards_4"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="delegate_d_mun_5" name="d_mun_5" size="15" type="text">
</td>
<td>
<input id="delegate_d_council_5" name="d_council_5" size="15" type="text">
</td>
<td>
<input id="delegate_d_country_5" name="d_country_5" size="15" type="text">
</td>
<td>
<select name="d_awards_5" id="delegate_d_awards_5"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
</tbody></table>
</div>
<br>
<br>
<b style="margin-left : 10px;">
Please Continue Writing Your MUN Experience as Delegate, Executive Board or International Press:
</b>
<br>
<br>
<textarea cols="40" id="delegate_mun_experience" name="mun_experience" rows="20" style="height:100px;width:810px;margin-left:10px"></textarea>
<br>
<br>
<br>
<br>
<br>
<br>
<p style="margin-left:10px;">
The applicants are advised to refer to the brief synopsis and country matrix of
<a href="disec.php" style="text-decoration:none;" target="_blank">DISEC</a>
and
<a href="historic_nato.php" style="text-decoration:none;" target="_blank">Historic NATO</a>
before applying.
</p>
<br>
<i style='font-size:12px;line-height:5px;'><b>Note:-</b>
<ol>
<li>If you want to be allotted a country in a <b>particular council</b>, please fill in <b>only one</b> choice. For e.g. , <b>if</b> you want to be allotted a country in DISEC only, please fill in the first DISEC only. <b>Please do not</b> fill in Historic NATO as a preference.</li>
<li>If you don’t mind being allotted a country in any council, please fill in both the choices. However, fill in the more preferred choice as the first preference.</li>
<li>If you want <b>specific countries</b>, please do not fill in all the 4 country preferences. For e.g, if you want either US, UK or France please fill in these options only( in order of preference) and leave the 4th choice empty.</li>
</ol>
</i>
<br>
<b style="margin-left:10px;">
Committee-Country Preference *
</b>
<br>
<br>
<div id="experience">
<table style="margin-left:10px;">
<tbody><tr>
<th>Committee </th>
<th>Country 1 </th>
<th>Country 2 </th>
<th>Country 3 </th>
<th>Country 4 </th>
</tr>
<tr>
<td>
<select name="committee_1" id="delegate_committee_1"><option value="DISEC">DISEC</option> <option value="Historic NATO">Historic NATO</option></select>
</td>
<td>
<input id="delegate_country_1_1" name="country_1_1" size="13" type="text">
</td>
<td>
<input id="delegate_country_1_2" name="country_1_2" size="13" type="text">
</td>
<td>
<input id="delegate_country_1_3" name="country_1_3" size="13" type="text">
</td>
<td>
<input id="delegate_country_1_4" name="country_1_4" size="13" type="text">
</td>
</tr>
<tr>
<td>
<select name="committee_2" id="delegate_committee_2"><option value=""></option> <option value="DISEC">DISEC</option> <option value="Historic NATO">Historic NATO</option></select>
</td>
<td>
<input id="delegate_country_2_1" name="country_2_1" size="13" type="text">
</td>
<td>
<input id="delegate_country_2_2" name="country_2_2" size="13" type="text">
</td>
<td>
<input id="delegate_country_2_3" name="country_2_3" size="13" type="text">
</td>
<td>
<input id="delegate_country_2_4" name="country_2_4" size="13" type="text">
</td>
</tr>
</tbody></table>
</div>
<br>
<br>

<br>
<br>
<br>
<input id="delegate_submit" name="commit" value="Submit" type="submit">
<br>
<br>
</form>

</div>
<?php include 'sidebar.php'; ?>