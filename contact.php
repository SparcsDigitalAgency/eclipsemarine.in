<?php
	$meta_tags=array(
		'title'           => 'Eclipse Marine Ship Chandler Services, Contact Us',
        'description'   => 'Offshore, Cruise, Merchant & Fishing Vessels Supplies. Yes, we are committed to Deliver 24X7 services to our clients ',
		'no-index'		=> true
	);
	include_once("header.php");
		
?>

  <!-- content here--> 
   
   
   

<aside id="wrapper-left">

<h2>Contact</h2>

<article>
Please fill the form below
</article>

<div id="form-wrapper">

<!--
<form method="post">
<input class="text" type="text" name="name" id="name" placeholder="Your Name*" required="required"/>
<input class="text" type="email" name="email" id="email" placeholder="Your Email*" required="required"/>
<textarea class="text" name="message" id="message" rows="5" placeholder="Your Message*" required="required"></textarea>
<input type="submit" value="Send"  name="submit" id="button" title="Click here to send your message!" onClick="sendmail()" />                        
</form>
-->


<fieldset id="contact_form">

    <div id="result"></div>
    
    <label for="name"><span>Name</span>
    <input type="text" name="name" id="name"  class="text"/>
    </label>
    
    <label for="email"><span>Email Address</span>
    <input type="email" name="email" id="email"  class="text"/>
    </label>
    
    <label for="phone"><span>Phone</span>
    <input type="text" name="phone" id="phone"  class="text"/>
    </label>
    
    <label for="message"><span>Message</span>
    <textarea name="message" id="message"  class="text" rows="10"></textarea>
    </label>
   
   <label><span>&nbsp;</span>
    <button class="submit_btn" id="submit_btn">Submit</button>
    <div style="display:none" id="dvloader"><img src="<?php echo $path; ?>images/ajax-loader.gif" /></div>
    </label>
</fieldset>



</div><!--form-wrapper-->

<article>
<h3>Contact Person : K. J Thomas</h3>
<strong>Eclips Marine Services</strong><br>
67/6284 3rd Floor, Lalan Tower<br />
High-Court Jn., Ernakulam, Kerala, India<br />

Mobile: <strong>+91 94 47 25 14 18,+91 90 74 47 71 36</strong><br />
Office: <strong>+91 88 48 85 34 27</strong><br>
Skype : thomaskalapurakkal<br>
Email: <a href="mailto:info@eclipsemarine.in" title="info@eclipsemarine.in">info@eclipsemarine.in</a><br>
Website: <a href="http://www.eclipsemarine.in" title="Eclips Marine Services">www.eclipsemarine.in</a>
</article>

</aside><!--wrapper-left-->
   
   
   
   
   
  <!-- content end here --> 
   
<?php include_once('side-bar.php'); ?>

<?php include_once("footer.php"); ?>