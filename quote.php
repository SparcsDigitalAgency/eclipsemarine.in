<?php
	$meta_tags=array(
		'title'			=> 'Eclipse Marine Ship Chandler Services, Get a Quote',
		'description'	=> 'Offshore, Cruise, Merchant & Fishing Vessels Supplies. Yes, we are committed to Deliver 24X7 services to our clients ',
		'no-index'		=> true
	);
	include_once("header.php");
		
?>

  <!-- content here--> 
   
 
<aside id="wrapper-left">

<div id="form-wrapper" class="quote">

<h2>Get a Quote</h2>
<article>Online Quote - Enter Your details</article>


<fieldset id="quote_form">
<div id="result"></div>
<p>
<span>
<label>Name<i class="req">*</i> </label></br>
<input class="text" type="text" name="name" id="name" size="30" value=""/>
</span>
<span>
<label>Email<i class="req">*</i> </label></br>
<input class="text" type="text" name="email" id="email" size="30" value="" />
</span>
<div class="clear"></div>
</p>

<p>
<span>
<label>Designation<i class="req">*</i> </label></br>
<input class="text text1" type="text" name="designation" id="designation" size="30" />
</span>
<span>
<label>Contact Number<i class="req">*</i> </label></br>
<input class="text text1" type="tel" name="phone" id="phone" size="30" />
</span>

<div class="clear"></div>
</p>

<p>
<span>
<label>Company Name<i class="req">*</i> </label></br>
<input class="text text1" type="text" id="companyname" name="companyname" >
</span>

<span>
<label>Vessel Name<i class="req">*</i> </label></br>
<input class="text" type="text" name="vesselname" id="vesselname" size="30" value="" />
</span>
<div class="clear"></div>
</p>
<p>

<label>Enquiry Details<iclass="req">*</i> </label></br>
<textarea class="text" name="enquiry" id="enquiry" rows="10"></textarea>

<div class="clear"></div>
</p>

<p><span>
<button class="submit_btn" id="quote_submit_btn">Submit</button></span>
<span><div style="display:none" id="dvloader"><img src="<?php echo $path; ?>images/ajax-loader.gif" /></div></span>

</p>
</fieldset>

</div><!--form-wrapper-->

</aside><!--wrapper-left-->

   
   
   
  <!-- content end here --> 
   
<?php include_once('side-bar.php'); ?>

<?php include_once("footer.php"); ?>