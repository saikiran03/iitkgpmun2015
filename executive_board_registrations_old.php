<?php include_once('headerq.php'); ?>



<a href="#">Executive Board applications are now closed</a>
</h2>
</div>

<p style="margin-left: 10px;">
<i>
To see the Executive Board allotments <a href="http://iitkgpmun.springfest.in/executive_board.php">click here</a>

</i>
</p>

<p style="margin-left: 10px;">
<i>
In case of any error discovered after submitting the form, you can re-fill the entire form with the same email id that you used.
<br>
(*) marked fields are mandatory
</i>
</p>
<br>
<!--<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" onload="if(submitted)
{window.location='http://iitkgpmun.springfest.in';}"></iframe>
<form action="https://docs.google.com/spreadsheet/formResponse?formkey=dEV0YUxpT2FCV1ZUYXNJZkJMbmRUb0E6MQ&ifq" method="post"
target="hidden_iframe" onsubmit="submitted=true;">-->
<form accept-charset="UTF-8" action="email_check_exec.php" class="new_executive_board" id="new_executive_board" method="post">
<!--<div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"><input name="authenticity_token" value="c5k9wI58khA1X3X6ag7y6LRj/ipFBXVts30UVCQ3IJo=" type="hidden"></div>-->
<table id="new_eb">
<tbody><tr>
<td>
<b>Name *</b>
</td>
<td>
<input id="executive_board_user_attributes_full_name" name="full_name" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Gender *</b>
</td>
<td>
<input id="executive_board_user_attributes_gender_male" name="gender" value="Male" type="radio">
<label for="executive_board_user_attributes_Male">Male</label>
<input id="executive_board_user_attributes_gender_female" name="gender" value="Female" type="radio">
<label for="executive_board_user_attributes_Female">Female</label>
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
<input id="executive_board_user_attributes_institute" name="institute" size="25" value="" type="text">
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
<input id="executive_board_user_attributes_place_of_study" name="place_study" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Place of Residence *</b>
</td>
<td>
<input id="executive_board_user_attributes_place_of_residence" name="place" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Mobile Number *</b>
</td>
<td>
<input id="executive_board_user_attributes_mobile" name="mobile" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Email *</b>
</td>
<td>
<input id="executive_board_user_attributes_email" name="email" size="25" type="text">
</td>
</tr>
</tbody></table>
<br>
<br>
<b style="margin-left: 10px;">
Previous Executive Board Experience
</b>
<br>
<br>
<table id="new_eb">
<tbody><tr>
<td>
<b>Number of MUNs as Executive Board *</b>
</td>
<td>
<input id="executive_board_muns_as_eb" name="muns_as_eb" size="25" value="0" type="text">
</td>
</tr>
</tbody></table>
<br>
<br>
<div id="experience">
<table style="margin-left:10px;">
<tbody><tr>
<th>Name of MUN</th>
<th>Year</th>
<th>Council</th>
<th>Position</th>
</tr>
<tr>
<td>
<input id="executive_board_eb_mun_1" name="eb_mun_1" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_year_1" name="eb_year_1" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_council_1" name="eb_council_1" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_position_1" name="eb_position_1" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="executive_board_eb_mun_2" name="eb_mun_2" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_year_2" name="eb_year_2" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_council_2" name="eb_council_2" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_position_2" name="eb_position_2" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="executive_board_eb_mun_3" name="eb_mun_3" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_year_3" name="eb_year_3" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_council_3" name="eb_council_3" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_position_3" name="eb_position_3" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="executive_board_eb_mun_4" name="eb_mun_4" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_year_4" name="eb_year_4" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_council_4" name="eb_council_4" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_position_4" name="eb_position_4" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="executive_board_eb_mun_5" name="eb_mun_5" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_year_5" name="eb_year_5" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_council_5" name="eb_council_5" size="15" type="text">
</td>
<td>
<input id="executive_board_eb_position_5" name="eb_position_5" size="15" type="text">
</td>
</tr>
</tbody></table>
</div>
<br>
<br>
<b style="margin-left : 10px;">
Please Continue Writing Your Executive Board Experience Here in the same Format as above:
</b>
<br>
<br>
<textarea cols="40" id="executive_board_eb_experience" name="eb_experience" rows="20" style="height:100px;width:810px;margin-left:10px"></textarea>
<br>
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
<input id="executive_board_muns_as_delegate" name="muns_as_delegate" size="25" value="0" type="text">
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
<input id="executive_board_d_mun_1" name="d_mun_1" size="15" type="text">
</td>
<td>
<input id="executive_board_d_council_1" name="d_council_1" size="15" type="text">
</td>
<td>
<input id="executive_board_d_country_1" name="d_country_1" size="15" type="text">
</td>
<td>
<select name="d_awards_1" id="executive_board_d_awards_1"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="executive_board_d_mun_2" name="d_mun_2" size="15" type="text">
</td>
<td>
<input id="executive_board_d_council_2" name="d_council_2" size="15" type="text">
</td>
<td>
<input id="executive_board_d_country_2" name="d_country_2" size="15" type="text">
</td>
<td>
<select name="d_awards_2" id="executive_board_d_awards_2"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="executive_board_d_mun_3" name="d_mun_3" size="15" type="text">
</td>
<td>
<input id="executive_board_d_council_3" name="d_council_3" size="15" type="text">
</td>
<td>
<input id="executive_board_d_country_3" name="d_country_3" size="15" type="text">
</td>
<td>
<select name="d_awards_3" id="executive_board_d_awards_3"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="executive_board_d_mun_4" name="d_mun_4" size="15" type="text">
</td>
<td>
<input id="executive_board_d_council_4" name="d_council_4" size="15" type="text">
</td>
<td>
<input id="executive_board_d_country_4" name="d_country_4" size="15" type="text">
</td>
<td>
<select name="d_awards_4" id="executive_board_d_awards_4"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
<tr>
<td>
<input id="executive_board_d_mun_5" name="d_mun_5]" size="15" type="text">
</td>
<td>
<input id="executive_board_d_council_5" name="d_council_5" size="15" type="text">
</td>
<td>
<input id="executive_board_d_country_5" name="d_country_5" size="15" type="text">
</td>
<td>
<select name="d_awards_5" id="executive_board_d_awards_5"><option value=""></option> <option value="Best Delegate">Best Delegate</option> <option value="High Commendation">High Commendation</option> <option value="Special Mention">Special Mention</option> <option value="Best Position Paper">Best Position Paper</option> <option value="Best Journalist">Best Journalist</option> <option value="Best Editor">Best Editor</option></select>
</td>
</tr>
</tbody></table>
</div>
<br>
<br>
<b style="margin-left : 10px;">
Please Continue Writing Your MUN Experience Here in the same Format as above:
</b>
<br>
<br>
<textarea cols="40" id="executive_board_mun_experience" name="mun_experience" rows="20" style="height:100px;width:810px;margin-left:10px"></textarea>
<br>
<br>
<p style="margin-left:10px;">
The applicants are advised to go through a brief synopsis and the
renumeration of <a href="executive_board.php" style="text-decoration:none;" target="_blank">Executive Board</a> details before applying.
</p>
<br>
<br>
<p style="margin-left:10px;">
<b>
Preferences:
</b>
</p>
<table id="new_eb">
<tbody><tr>
<td>
<b>
Council Preference *
</b>
</td>
<td>
<select id="executive_board_council_preference" name="council_preference">
<option selected="selected" value="historic nato">Historic NATO</option>
<option value="disec">DISEC</option></select>
</td>
</tr>
<tr>
<td>
<b>
Position Preference *
</b>
</td>
<td>
<select id="executive_board_position_preference" name="position_preference">
<option selected="selected" value="director">Director</option>
<option value="vice chair">Vice Chair</option>
<option value="chair">Chair</option></select>
</td>
</tr>
</tbody></table>
<br>
<br>

<br>
<br>
<input id="executive_board_submit" name="commit" value="Submit" type="submit">
<br>
<br>
</form>
-->
</div>

<?php include 'sidebar.php'; ?>