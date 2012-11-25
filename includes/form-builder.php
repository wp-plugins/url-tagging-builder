<?php
	/*
	plugin form URL Builder 
    */

	// Prevent loading this file directly - Busted!
	if ( ! class_exists( 'WP' ) )
	{
		header( 'Status: 403 Forbidden' );
		header( 'HTTP/1.1 403 Forbidden' );
		exit;
	}


	// *
	// start create form URL Builder 
	// *

?>

<form name="ctm" onsubmit="createURL(); return false;">
<table border="0" cellpadding="0" cellspacing="0" >
   <p>Tagging your online ads or your campaign is an important prerequisite to allowing Google Analytics to show you which marketing activities are really paying off. Fill in the form information and click the <strong>Generate URL</strong> button below.</p>

   <p><strong>Step 1</strong>: Enter the URL of your website.</p>


<table class="outline" border="0" cellpadding="0" cellspacing="5">
<tbody><tr>
   <td width="25%" valign="top" nowrap="nowrap"><strong>Website URL</strong>: <span class="required">*</span></td>
   <td width="70%" valign="top" nowrap="nowrap"><input name="website" size="50" type="text"><br /><code> (e.g. <em>http://www.pengunjungblog.com/belajar-seo/</em>)</code></td>
   <td width="5%" valign="top" nowrap="nowrap"><input name="utm_id" type="hidden" size="1" maxlength="1"></td>
</tr>
</tbody>
</table></p>

<p><span class="stitle"><strong>Step 2</strong>: Fill in the fields below. <strong>Campaign Source</strong>, <strong>Campaign Medium</strong> and <strong>Campaign Name</strong> should always be used. </span>

<table class="outline" border="0" cellpadding="0" cellspacing="5" >
  <tbody><tr><td nowrap="nowrap" width="25%"><strong>Campaign Source</strong>: <span class="required">*</span></td>
  <td nowrap="nowrap" width="75%"><input name="utm_source" size="25" type="text"> (referrer: google, citysearch, newsletter4)</td>
  </tr><tr><td><strong>Campaign Medium</strong>: <span class="required">*</span></td>
  <td><input name="utm_medium" size="25" type="text"> (marketing medium: cpc, banner, email)</td>
  </tr><tr><td><strong>Campaign Term</strong>: </td><td><input name="utm_term" size="25" type="text"> (identify the paid keywords)</td>
  </tr><tr><td><strong>Campaign Content</strong>: </td><td><input name="utm_content" size="25" type="text"> (use to differentiate ads)</td>
  </tr><tr><td><strong>Campaign Name</strong>: <span class="required">*</span></td>
  <td><input name="utm_campaign" size="25" type="text"> (product, promo code, or slogan</td><td></td></tr></tbody></table></p>

<p><strong>Step 3</strong>: Click <strong>Generate</strong> to get your "ROCK" URL, and then click <strong>Clear</strong> to generate new URL.</p><br>

<input name="result" size="70" class="result" type="text" >

<br><br>

<input value="Generate URL" onclick="createURL();" type="submit" class="button-primary">
<input class="button-secondary" value="Clear" onClick="clearURL();" type="button">

</form>

<script language="javascript" type="text/javascript">
function createURL() {
var form = document.ctm;
var myurl = ""
if (!form){
return;
}
if (!form.website.value || form.website.value == "") {
alert("Required Website Missing!");
form.website.focus();
return -1;
}
if((!form.utm_id.value || form.utm_id.value == "") &&
(!form.utm_source.value || form.utm_source.value == "") &&
(!form.utm_medium.value || form.utm_medium.value == "")) {
alert("Required ID Missing!");
form.utm_id.focus();
return -1;
}
if (!form.utm_id.value || form.utm_id.value == "") {
if (!form.utm_source.value || form.utm_source.value == "") {
alert("Required Source Missing!");
form.utm_source.focus();
return -1;
}
if (!form.utm_medium.value || form.utm_medium.value == "") {
alert("Required Medium Missing!");
form.utm_medium.focus();
return -1;
}
if (!form.utm_campaign.value || form.utm_campaign.value == "") {
alert("Required Campaign Missing!");
form.utm_campaign.focus();
return -1;
}
}
if (form.website.value && form.website.value != "") {
if (form.website.value.indexOf("http") != 0) {
form.website.value = "http://"+form.website.value;
}
if (form.website.value.indexOf("/",9) < 0 && form.website.value.indexOf("?") == -1 ) {
form.website.value += "/";
}
if (form.website.value.indexOf("/",9) > -1 && form.website.value.indexOf("?") == -1 ) {
myurl += form.website.value+"?";
} else {
myurl += form.website.value+"&";
}
}
if (form.utm_id.value && form.utm_id.value != "") {
myurl += "utm_id="+removeSpaces(form.utm_id.value);
}
if (form.utm_source.value && form.utm_source.value != "") {
if (form.utm_id.value && form.utm_id.value != "")
myurl += "&";
myurl += "utm_source="+removeSpaces(form.utm_source.value);
}
if (form.utm_medium.value && form.utm_medium.value != "") {
myurl += "&utm_medium="+removeSpaces(form.utm_medium.value);
}
if (form.utm_term.value && form.utm_term.value != "") {
myurl +="&utm_term="+removeSpaces(form.utm_term.value);
}
if (form.utm_content.value && form.utm_content.value !="") {
myurl +="&utm_content="+removeSpaces(form.utm_content.value);
}
if (form.utm_campaign.value && form.utm_campaign.value != "") {
myurl += "&utm_campaign="+removeSpaces(form.utm_campaign.value);
}
form.result.value = myurl;
return 0;
}
function clearURL() {
var form = document.ctm;
if (!form){
return;
}
form.website.value = "";
form.utm_id.value = "";
form.utm_source.value = "";
form.utm_medium.value = "";
form.utm_campaign.value = "";
form.utm_content.value = "";
form.utm_term.value = "";
form.result.value = "";
return 0;
}
function removeSpaces(value) {
if(value.indexOf(' ')>0){
value = value.split(' ').join('+');
}
return encodeURIComponent(value);
}
</script>