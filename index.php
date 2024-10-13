<!--?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?-->
<!--?php if ( is_front_page() ) { get_includes('middle'); }?-->
<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!-->
<html class="no-js" lang="en-US"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title><?php //echo get_bloginfo('name');
			?></title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/hamburgers.min.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/rslides.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/skitter.styles.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/animate.min.css">

	<!--?php wp_head(); ?-->
</head>

<body>
	<div class="protect-me">
		<div class="clearfix">

			<!-- Header -->
			<header>
				<div class="wrapper">
					<div class="header_con">
						<div class="main_logo">
							<!-- <a href="<?php //echo get_home_url(); 
											?>">
								<figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');
																				?>"></figure>
							</a> -->
							<h1>Dover Global<span>Health Solutions </span></h1>
						</div>

						<div class="head_info">

							<div class="header_info">
								<ul>
									<li>Don't hesitate to contact us today! <a href="tel:4699747015"><mark>469-974-7015</mark></a> </li>
									<li><span><a class="header_cred2" href="mailto:">admin@doverglobalhealth.com</a></span></li>
								</ul>
							</div>

							<div class="social_media jello-horizontal">
								<ul>
									<li><a href="https://www.facebook.com" target="_blank">
											<figure><img src="images/icons/fb-icon.png" alt="facebook"></figure>
										</a></li>
									<li><a href="https://www.twitter.com" target="_blank">
											<figure><img src="images/icons/twitter-icon.png" alt="twitter"></figure>
										</a></li>
								</ul>
							</div>

						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</header>
			<!-- End Header -->

			<!-- Navigation -->
			<div id="nav_area">
				<div class="nav_toggle_button">
					<div class="logo_wrap"></div>
					<div class="toggle_holder">
						<div class="hamburger hamburger--spin-r">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
						<small>Menu</small>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="toggle_right_nav">
					<nav class="page_nav">
						<div class="menu_slide_right">
							<a href="<?php //echo get_home_url(); 
										?>" class="logo_slide_right">
								<figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');
																				?>"></figure>
							</a>
							<div class="toggle_holder">
								<div class="hamburger hamburger--spin-r">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
								<small>Close</small>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="wrapper">
							<!--?php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?-->
							<ul>
								<li class="current_page_item"><a href="">Home</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="">Services</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Resources</a></li>
								<li><a href="">Contact Us</a></li>
							</ul>
						</div>
					</nav>
					<div class="toggle_nav_close"></div>
				</div>
			</div>
			<!-- End Navigation -->

			<!-- Banner -->
			<div id="banner">
				<div class="wrapper">
					<div class="bnr_con">

						<div class="slider">
							<ul class="rslides">
								<li>
									<figure><img src="images/slider/1.jpg" alt="____________________"></figure>
								</li>
								<li>
									<figure><img src="images/slider/2.jpg" alt="____________________"></figure>
								</li>
								<li>
									<figure><img src="images/slider/3.jpg" alt="____________________"></figure>
								</li>
							</ul>
							<div class="box_skitter box_skitter_large">
								<ul>
									<li>
										<figure><img src="images/slider/1.jpg" alt="____________________" class="random"></figure>
									</li>
									<li>
										<figure><img src="images/slider/2.jpg" alt="____________________" class="random"></figure>
									</li>
									<li>
										<figure><img src="images/slider/3.jpg" alt="____________________" class="random"></figure>
									</li>
								</ul>
							</div>
						</div>
						<div class="bnr_info_line wow rotateIn" data-wow-duration="1000ms"> </div>
						<div class="bnr_info wow zoomIn" data-wow-duration="1000ms">
							<h2 class="heading2"><small class="subHead2">This is a Dummy Text </small>For Your Own <span>Catchy Slogan </span></h2>
							<p>You are reading dummy text as placeholders for this layout. </p>
							<a href="#" class="btn-5">Find Out More </a>
						</div>


					</div>
				</div>
			</div>
			<!-- End Banner -->


			<!-- Main -->
			<div id="main_area">
				<div class="main_img">
					<figure><img src="images/main-background.png" alt=""></figure>
					<figure class="wow slideInLeft" data-wow-duration="1500ms"><img src="images/main-pic1.png" alt=""></figure>
				</div>
				<div class="wrapper">
					<div class="main_con">
						<main>
							<small class="subHead22 ">Welcome to </small>
							<h1 class="h1_title heading2 wow slideInRight" data-wow-duration="1636ms">Dover Global <span>HealthSolutions </span></h1>
							<p>We are excited to post contents on the website. This space is reserved for more information about the company. These dummy text is intended to show you the volume of content that will be used on this particular page. Thank you for visiting our website. These contents are temporary and are for display purposes only. We can post company information here. Such space is reserved for the reader to learn more about the business, its products and services.
							</p>
						</main>



					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<!-- End Main -->

			<!--?php
define('ACCESSIBLE', true);
unset($_SESSION);

@session_start();
$foldername = get_template();

$formname = 'Send Us a Message Form';
$prompt_message = '<span style="color:#ff0000;"></span>';
require_once 'wp-content/themes/'.$foldername.'/forms/config.php';
if(isset($_POST['submit_info'])){

	$robot = $_POST['Robot'];

	$ch = curl_init();
	 curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
	 curl_setopt($ch, CURLOPT_POST, 1);
	 curl_setopt($ch, CURLOPT_POSTFIELDS, "secret={$recaptcha_privite}&response={$_POST['g-recaptcha-response']}");
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 $server_output = curl_exec($ch);
	 $result_recaptcha = json_decode($server_output);
	 curl_close ($ch);

	$_SESSION['Full_Name'] = (isset($_POST['Full_Name'])) ? $_POST['Full_Name'] : '';
  	$_SESSION['Email_Address'] = (isset($_POST['Email_Address'])) ? $_POST['Email_Address'] : '';
  	$_SESSION['Question_or_Comment'] = (isset($_POST['Question_or_Comment'])) ? $_POST['Question_or_Comment'] : '';
	$_SESSION['Robot'] = (isset($_POST['Robot'])) ? $_POST['Robot'] : '';
	
	if(empty($_POST['Full_Name']) ||
	empty($_POST['Email_Address'])
	) {

	$asterisk = '<span style="color:#FF0000; font-weight:bold;">*&nbsp;</span>';
	$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>* Required Fields are empty.</span></p><br/><p class="error-close">x</p></div></div>';
	}
	else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email_Address']))))
		{ $prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>Please enter a valid email address.</span></p><br/><p class="error-close">x</p></div></div>'; }
	else if(!$result_recaptcha->success)
		{ $prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>Invalid reCAPTCHA</span></p><br/><p class="error-close">x</p></div></div>'; }
	else if (!empty($robot)) {
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",stripslashes(trim($_POST['Full_Name'])))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",stripslashes(trim($_POST['Question_or_Comment'])))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/[+&@#\/%?=~_|!:,.;]/",stripslashes(trim($_POST['Full_Name'])))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(Bali|BALI|bali)/",stripslashes(trim($_POST['Full_Name'])))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(http|ftp|href)/",stripslashes(trim($_POST['Question_or_Comment'])))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(Bali|BALI|bali|Villa|VILLA|villa)/",stripslashes(trim($_POST['Question_or_Comment'])))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(bagat|store|ru|yourmail|bagat-1.ru|bagat-4.ru)/",stripslashes(trim($_POST['Email_Address'])))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	} 

	else{

		$body = '<div class="form_table" style="width:700px; height:auto; font-size:12px; color:#333333; letter-spacing:1px; line-height:20px; margin: 0 auto;">
			<div style="border:8px double #c3c3d0; padding:12px;">
			<div align="center" style="font-size:22px; font-family:Times New Roman, Times, serif; color:#051d38;">'.COMP_NAME.'</div>
			<div align="center" style="color:#990000; font-style:italic; font-size:20px; font-family:Arial; margin:bottom: 15px;">('.$formname.')</div>

			<table width="90%" cellspacing="2" cellpadding="5" align="center" style="font-family:Verdana; font-size:13px">
				';

			foreach($_POST as $key => $value){
				if($key == 'secode') continue;
				elseif($key == 'submit_info') continue;
                elseif($key == 'g-recaptcha-response') continue;
				
				if(!empty($value)){
					$key2 = str_replace('_', ' ', $key);
					if($value == ':') {
						$body .= '<tr><td colspan="2" style="background:#F0F0F0; line-height:30px"><b>'.$key2.'</b></td></tr>';
					}else if($key == "Privacy_Policy"){
					$body .= '<tr><td colspan="3" line-height:30px">

					<input type="checkbox" checked disabled /> By submitting this form you agree to the terms of the Privacy Policy.

					</td></tr>';
				} else {
						$body .= '<tr><td><b>'.$key2.'</b>:</td> <td>'.htmlspecialchars(trim($value), ENT_QUOTES).'</td></tr>';
					}
				}
			}
			$body .= '
			</table>

			</div>
			</div>';

		// for email notification
		include 'wp-content/themes/'.$foldername.'/forms/send_email_curl.php';

		// save data form on database
		include 'wp-content/themes/'.$foldername.'/forms/savedb2.php';

		// save data form on database
		$subject = $formname ;
		$attachments = array();

	 	//name of sender
		$name = $_POST['Full_Name'];
		$result = insertDB($name,$subject,$body,$attachments);

		$parameter = array(
			'body' => $body,
			'from' => $from_email,
			'from_name' => $from_name,
			'to' => $to_email,
			'subject' => 'New Message Notification',
			'attachment' => $attachments
		); 

		$success_message = '<div id="success"><div class="message"><p class="success-check"><span>THANK YOU</span><br/> <span>for sending us a message!</span><br/><span>We will be in touch with you soon.</span></p><p class="close">x</p></div></div>';
		$failed_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>Failed to send email. Please try again.</span></p><br/><p class="error-close">x</p></div></div>';
			
		$prompt_message = send_email($parameter, $success_message, $failed_message);
		unset($_SESSION);
	}

}
/*************declaration starts here************/
?-->

			<!--?php echo $prompt_message; ?-->

			<!-- Bottom -->
			<div id="bottom1">
				<div class="wrapper">
					<div class="btm1_con">

						<div class="btm1_info">
							<h2 class="heading2"><small class="subHead2">What We Do </small>We Offer the Following Services <span></span></h2>
							<p>Dummy text for the reader to review. Words shown on this layout are placeholders. This space is reserved for more details about the company. </p>
							<a href="#" class="btnStyle1"></a>
						</div>

						<div class="btm1_boxes">

							<section class="btm1_box1">
								<div class="circle" ></div>
								<figure><img src="images/btm1-pic1.png" alt=""></figure>
								<h2>Skilled <span>Nursing </span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>

							<section class="btm1_box2">
							<div class="circle" ></div>
							<figure><img src="images/btm1-pic2.png" alt=""></figure>
								<h2>Private Duty <span>Nursing Care </span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>

							<section class="btm1_box3">
							<div class="circle" ></div>
							<figure><img src="images/btm1-pic3.png" alt=""></figure>
								<h2>Home Health <span>Care</span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>
							<section class="btm1_box4">
							<div class="circle" ></div>
							<figure><img src="images/btm1-pic4.png" alt=""></figure>
								<h2>View More <span>Services </span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>

						</div>
					</div>
				</div>
			</div>

			<div id="bottom2">
				<div class="wrapper">
					<div class="btm2_con">

					

						<div class="btm2_boxes">	
							<div class="btm2_column1">
							<section class="btm2_box1">
								<figure><img src="images/btm2-pic1.png" alt=""></figure>
								<h2>Meet Our <span>Staff</span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>

							<section class="btm2_box2">
							<figure><img src="images/btm2-pic2.png" alt=""></figure>
								<h2>Send Your<span>Referrals </span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>
							</div>
							<div class="btm2_column2">
							<section class="btm2_box3">
							<figure><img src="images/btm2-pic3.png" alt=""></figure>
								<h2>Schedule an	<span>Assessment</span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>
							<section class="btm2_box4">
							<figure><img src="images/btm2-pic4.png" alt=""></figure>
								<h2>Insurance<span>Accepted </span></h2>
								<p>This space is reserved for more details about the company.</p>
								<a href="javascript:;">Click Here</a>
							</section>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div id="bottom3">
				<div class="wrapper">
					<div class="btm3_con">

						<div class="btm3_info">
							<h2 class="heading2"><small class="subHead2">Our Commitment</small>Mission Statement<span></span></h2>
							<p>We are excited to post contents on the website. This space is reserved for more information about the company. These dummy text is intended to show you the volume of content that will be used on this particular page.  Thank you for visiting our website. 
							</p>
							<a href="#" class="btnStyle1">About us</a>
						</div>

		
					</div>
				</div>
			</div>


			
			<div id="bottom4">
				<div class="wrapper">
					<div class="btm4_con">

						<div class="btm4_info">
							<h2 class="heading2"><small class="subHead2">Reach Out to Us</small>Send Us a Message<span></span></h2>
							<p>Dummy text for the reader to review. Words shown on this layout are placeholders. </p>
							<a href="#"></a>
						</div>

						<div class="btm_form">
							<form class="form" id="submit_formmessage" action="#bottom3" method="post">
								<div id="invalid-msg"></div>
								<input type="text" name="Robot" placeholder="Spam" value="<?php echo $_SESSION['Robot']; ?>" style="display:none;">
								<input class="form_fullname btm_input1" type="text" name="Full_Name" value="<?php echo $_SESSION['Full_Name']; ?>" placeholder="*Full Name " required="">
								<input class="form_email btm_input2" type="email" name="Email_Address" value="<?php echo $_SESSION['Email_Address']; ?>" placeholder="*Email Address " required="">
								<textarea class="btm_input3" name="Question_or_Comment" placeholder="Message(s)"></textarea>
								<div class="btn_submit">
								
									<!-- <div class="captcha-box"><div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_sitekey; ?>"></div></div> -->
									<button type="submit" name="submit_info" class="form_btn">Submit </button>

								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- End Bottom -->

			<!--Footer -->
			<footer>
				<div class="footer_top">
					<div class="wrapper">
						<div class="footer_top_con">

							<div class="contact_info">
								<div class="contact_info_heading">
									<h2 class="heading2"><small class="subHead2">Get in Touch</small>Contact Information<span></span></h2>
									<p>Service Areas: Dallas, Denton, Colin, and Tarrant Counties</p>
							
									<div class="copyright">
										&copy; Copyright 2024
										<?php
										$start_year = '2024';
										$current_year = date('Y');
										$copyright = ($current_year == $start_year) ? $start_year : $start_year . ' - ' . $current_year;
										echo $copyright;
										?>
										<span class="footer_comp"><?php //echo get_bloginfo('name');
															?></span>
										<a class="copyrigh_text">Designed by</a> Proweaver
									</div>
							
								</div>
								<ul class="contact_info_list">
									<li><span>Visit Us</span></li>
									<li><address>1142 W Main Street 
											Lewisville, TX 75067</address>
										
									</li>
									
								</ul>

								<ul class="contact_info_list2">
									<li><span>Call or Message Us</span></li>
									<li>Phone Number: <a href="tel:4699747015"><mark>469-974-7015</mark></a></li>
									<li>Email: <a href="mailto:admin@doverglobalhealth.com ">admin@doverglobalhealth.com									</a></li>
								</ul>
							</div>

							<!-- <div class="footer_logo">
				<a href="<?php //echo get_home_url(); 
							?>"><figure><img src="images/footer-logo.png" alt="<?php //echo get_bloginfo('name');
																				?>"></figure></a>
			</div> -->
						</div>
					</div>
				</div>

				<div class="footer_btm">
					<div class="wrapper">
						<div class="footer_btm_con">
							<div class="footer_nav">
								<ul>
									<li class="current_page_item"><a href="index.php">Home</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Resources</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>

							
						</div>
					</div>
				</div>
			</footer>

			<span class="back_top"></span>

		</div> <!-- End Clearfix -->
	</div> <!-- End Protect Me -->

	<!--?php get_includes('ie');?-->

	<!--
  Solved HTML5 & CSS IE Issues
  -->
	<script src="js/modernizr-custom-v2.7.1.min.js"></script>
	<script src="js/jquery-3.5.0.min.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>

	<!--
  Solved Psuedo Elements IE Issues
  -->
	<script src="js/calcheight.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.skitter.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/wow.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!--?php wp_footer(); ?-->
</body>

</html>
<!-- End Footer -->