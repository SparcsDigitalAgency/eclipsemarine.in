<?php include_once('config.php'); ?>
<!doctype html>
<!--[if lt IE 7]><html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js"><!--<![endif]-->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    
	<title><?php echo $meta_tags['title']; ?></title>
    
	<meta name="description" content="<?php echo $meta_tags['description']; ?>">

	<?php if($meta_tags['no-index'] || $associate):?>
		<meta name="robots" content="noindex">
		<meta name="robots" content="nofollow">
		<meta name="robots" content="noarchive">

		<meta name="googlebot" content="noindex">
		<meta name="googlebot" content="nofollow">
		<meta name="googlebot" content="noindex, nofollow">
		<meta name="googlebot" content="noarchive">
		<meta name="googlebot" content="nosnippet">
		<meta name="googlebot" content="noodp">
	<?php endif; ?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,800' rel='stylesheet' type='text/css'>
<meta name=viewport content="width=device-width, initial-scale=1">

<link href="<?php echo $path; ?>script/format.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $path; ?>script/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>script/slides.min.jquery.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>script/jcarousellite_1.0.1c4.js"></script>

<link rel="icon" href="<?php echo $path; ?>images/fav.png" type="image/x-icon" />
<link rel="icon" href="<?php echo $path; ?>images/fav.ico" type="image/x-icon" />

<?php if($appointment): ?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<?php endif; ?>


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php if($index): ?>

<script type="text/javascript">
        $(function(){
		$('#slides').slides({
			preload: true,
			preloadImage: '<?php echo $path; ?>images/loading-slider.gif',
			play: 5000,
			pause: 2500,
			hoverPause: true
		});
	    });
		
		$(function() {
	   $(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:5000,
		speed:1000
	});
});
 
</script>

<?php endif; ?>



<?php if($contact): ?>

<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
		
		
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
			//Ajax loading gif
			$("#dvloader").show();
			
            //Ajax post data to server
            $.post('contact_me', post_data, function(response){ 
			
			$("#dvloader").hide(); 

                //load json data from server and output message     
				if(response.type == 'error')
				{
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					
					//reset values in all input fields
					$('#contact_form input').val(''); 
					$('#contact_form textarea').val(''); 
				}
				
				$("#result").hide().html(output).slideDown();
            }, 'json');
			
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    return false;
});
</script>    
      
<?php endif; ?>



<?php if($quote): ?>

<script type="text/javascript">
$(document).ready(function() {
    $("#quote_submit_btn").click(function() { 
        //get input field values
        var user_name		    = $('input[name=name]').val(); 
		var user_email		    = $('input[name=email]').val(); 
        var user_designation    = $('input[name=designation]').val();
        var user_phone		    = $('input[name=phone]').val();
        var user_companyname 	= $('input[name=companyname]').val();
		var user_vesselname	 	= $('input[name=vesselname]').val();
		var user_enquiry	 	= $('textarea[name=enquiry]').val();
		
		
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
		
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_designation=="") {  
            $('input[name=designation]').css('border-color','red'); 
            proceed = false;
        }
		 if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
		 if(user_companyname=="") {    
            $('input[name=companyname]').css('border-color','red'); 
            proceed = false;
        }
		 if(user_vesselname=="") {    
            $('input[name=vesselname]').css('border-color','red'); 
            proceed = false;
        }
		 if(user_enquiry=="") {    
            $('textarea[name=enquiry]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
			
		
		
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userDesignation':user_designation, 'userPhone':user_phone, 'userCompanyname':user_companyname, 'userVesselname':user_vesselname, 'userEnquiry':user_enquiry};
            
			//Ajax loading gif
			$("#dvloader").show();
			
            //Ajax post data to server
            $.post('quote_mail', post_data, function(response){  
			
			$("#dvloader").hide();
		
			
                //load json data from server and output message     
				if(response.type == 'error')
				{
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					
					//reset values in all input fields
					$('#quote_form input').val(''); 
					$('#quote_form textarea').val('');
				}
				
				$("#result").hide().html(output).slideDown();
            }, 'json');
			
        }
		
		
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#quote_form input, #quote_form textarea").keyup(function() { 
        $("#quote_form input, #quote_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    
	return false;
});
</script>  


<?php endif; ?>


<!-- chat module
<script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: '1754ed09-1af1-46b3-b098-10f5bcc9d4ba', f: true }); done = true; } }; })();</script>
-->



</head>


<body>
<header id="header" class="row">
<div id="logo"><a href="http://eclipsemarine.in" title="Samaritan Heart Institute">Eclipse Marine | Ship Chandler Services Kochi</a></div>
<nav id="nav">
<ul>
<li><a <?php echo (preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : ''); ?> href="<?php echo $path; ?>" title="About us">About us</a></li>
<li><a <?php echo (preg_match("/services.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : ''); ?> href="<?php echo $path; ?>services" title="Services">Services</a></li>
<li><a <?php echo (preg_match("/quote.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : ''); ?> href="<?php echo $path; ?>quote" title="Services">Get a Quote</a></li>
<li><a <?php echo (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"' : ''); ?> href="<?php echo $path; ?>contact" title="Contact">Contact</a></li>
</ul>
<span class="call"><img src="<?php echo $path; ?>images/call.png" alt="Call" /> +91 94 47 25 14 18, +91 90 74 47 71 36, Office: +91 88 48 85 34 27</span>
</nav>

<div class="clear"></div>
</header><!--header-->


<?php if($index): ?>
<div id="slider" class="row">
<div id="slides">
<ul class="slides_container">
<li><img src="<?php echo $path; ?>images/slider5.jpg" /></li>
<li><img src="<?php echo $path; ?>images/slider3.jpg" /></li>
<li><img src="<?php echo $path; ?>images/slider4.jpg" /></li>
<li><img src="<?php echo $path; ?>images/slider7.jpg" /></li>
<li><img src="<?php echo $path; ?>images/slider1.jpg" /></li>
<li><img src="<?php echo $path; ?>images/slider2.jpg" /></li>
<li><img src="<?php echo $path; ?>images/slider6.jpg" /></li>
</ul>                    
<a href="#" class="prev"></a>
<a href="#" class="next"></a>
</div><!--slides-end-->
</div><!--slider--> 

<section id="page-down"><a href="#text" title="">page down</a></section><!--page-down-->

<?php endif; ?>
  
<?php if(!$index): ?>
<section id="inner-header" class="row">
<?php if($services): ?><img src="<?php echo $path; ?>images/inner-header-1.jpg" /><?php endif; ?>
<?php if($contact): ?><img src="<?php echo $path; ?>images/inner-header-1.jpg" /><?php endif; ?>
<?php if($quote): ?><img src="<?php echo $path; ?>images/inner-header-1.jpg" /><?php endif; ?>
</section><!--inner-header-->
<section id="wrapper" class="row">
<?php endif; ?>
