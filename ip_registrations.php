<?php include_once('headerq.php'); ?>
<a href="#">International Press Application Form</a>
</h2>
</div>
<!--
<p style="margin-left:20px;">

International Press Applications will open soon.

</p>
-->
<p style="margin-left: 10px;">
<i>
In case of any error discovered after submitting the form, you can re-fill the entire form with the same email id that you used.
<br>
(*) marked fields are mandatory
</i>
</p>
<br>
<form accept-charset="UTF-8" action="email_check_ip.php" class="new_international_press" id="new_international_press" method="post">
<table id="new_eb">
<tbody><tr>
<td>
<b>Name *</b>
</td>
<td>
<input id="international_press_full_name" name="full_name" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Gender *</b>
</td>
<td>
<input id="international_press_gender_male" name="gender" value="Male" type="radio">
<label for="international_press_Male">Male</label>
<input id="international_press_gender_female" name="gender" value="Female" type="radio">
<label for="international_press_Female">Female</label>
</td>
</tr>
<tr>
<td>
<b>Course *</b>
</td>
<td>
<input id="international_press_course" name="course" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Institute *</b>
</td>
<td>
<input id="international_press_institute" name="institute" size="25" value="none" type="text">
</td>
</tr>
<tr>
<td>
<b>Year *</b>
</td>
<td>
<input id="international_press_year" name="year" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Place of Residence *</b>
</td>
<td>
<input id="international_press_place_of_residence" name="place" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Mobile Number *</b>
</td>
<td>
<input id="ip_mobile" name="mobile" size="25" type="text">
</td>
</tr>
<tr>
<td>
<b>Email *</b>
</td>
<td>
<input id="ip_email" name="email" size="25" type="text">
</td>
</tr>
</tbody></table>
<br>
<br>
<b style="margin-left: 10px;">
Previous International Press Experience
</b>
<br>
<br>
<table id="new_ip">
<tbody><tr>
<td>
<b>
Number of MUNs as International Press *
</b>
</td>
<td>
<input id="muns_as_ip" name="muns_as_ip" size="25" type="text">
</td>
</tr>
</tbody></table>
<br>
<br>
<div id="experience">
<table style="margin-left:10px;">
<tbody><tr>
<th>Name of MUN</th>
<th>Year of the MUN</th>
<th>News Agency</th>
<th>Position</th>
<th>Awards ( if any )</th>
</tr>
<tr>
<td>
<input id="ip_mun_1" name="ip_mun_1" size="15" type="text">
</td>
<td>
<input id="ip_year_1" name="ip_year_1" size="15" type="text">
</td>
<td>
<input id="ip_news_agency_1" name="ip_news_agency_1" size="15" type="text">
</td>
<td>
<input id="ip_position_1" name="ip_position_1" size="15" type="text">
</td>
<td>
<input id="ip_awards_1" name="ip_awards_1" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="ip_mun_2" name="ip_mun_2" size="15" type="text">
</td>
<td>
<input id="ip_year_2" name="ip_year_2" size="15" type="text">
</td>
<td>
<input id="ip_news_agency_2" name="ip_news_agency_2" size="15" type="text">
</td>
<td>
<input id="ip_position_2" name="ip_position_2" size="15" type="text">
</td>
<td>
<input id="ip_awards_2" name="ip_awards_2" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="ip_mun_3" name="ip_mun_3" size="15" type="text">
</td>
<td>
<input id="ip_year_3" name="ip_year_3" size="15" type="text">
</td>
<td>
<input id="ip_news_agency_3" name="ip_news_agency_3" size="15" type="text">
</td>
<td>
<input id="ip_position_3" name="ip_position_3" size="15" type="text">
</td>
<td>
<input id="ip_awards_3" name="ip_awards_3" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="ip_mun_4" name="ip_mun_4" size="15" type="text">
</td>
<td>
<input id="ip_year_4" name="ip_year_4" size="15" type="text">
</td>
<td>
<input id="ip_news_agency_4" name="ip_news_agency_4" size="15" type="text">
</td>
<td>
<input id="ip_position_4" name="ip_position_4" size="15" type="text">
</td>
<td>
<input id="ip_awards_4" name="ip_awards_4" size="15" type="text">
</td>
</tr>
<tr>
<td>
<input id="ip_mun_5" name="ip_mun_5" size="15" type="text">
</td>
<td>
<input id="ip_year_5" name="ip_year_5" size="15" type="text">
</td>
<td>
<input id="ip_news_agency_5" name="ip_news_agency_5" size="15" type="text">
</td>
<td>
<input id="ip_position_5" name="ip_position_5" size="15" type="text">
</td>
<td>
<input id="ip_awards_5" name="ip_awards_5" size="15" type="text">
</td>
</tr>
</tbody></table>
</div>
<br>
<br>
<br>
<br>
<b style="margin-left : 10px;">
Please Continue Writing Your experience as International Press, Delegate or Executive Board:
</b>
<br>
<br>
<textarea cols="40" id="ip_mun_experience" name="muns_as_ip_exp" rows="20" style="height:100px;width:810px;margin-left:10px"></textarea>
<br>
<br>
<br>
<p style="margin-left : 10px;">
Please refer to the brief overview and structure of our
<a href="international_press.php" style="text-decoration: none;" target="_blank">International Press</a>
</p>
<br>
<table id="new_eb">
<tbody><tr>
<td>
<b>
Position Preference *
</b>
</td>
<td>
<select id="ip_position_preference" name="position_preference" style="width: 200px;height:30px;font-size:14px;"><option selected="selected" value="editor-in-chief">Editor-in-chief</option>
<option value="editor">Editor</option>
<option value="photographer">Photographer</option></select>
</td>
</tr>
</tbody></table>
<p style="margin-left: 10px;">
<i>
Kindly write an article on The Impact of Palestine&#146;s Non-Member Observer State on the Israel-Palestine Peace Process (Word Limit: 500 words) and mail it to <a href="mailto:ip.iitkgpmun@gmail.com" target='_blank'>ip.iitkgpmun@gmail.com</a>

</i>
</p>

<br>
<br>
<input id="international_press_submit" name="commit" style="width =&gt; 100px;height: 30px;font-size: 14px;" value="Submit" type="submit">
<br>
<br>
</form>

</div>
<?php include 'sidebar.php'; ?>