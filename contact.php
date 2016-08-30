<?php 
 include_once("header.php");
?>
  

			<!-- Page Breadcrumb*************************** -->
	        <div class="page-breadcrumb">
	        	<div class="container clear_fix">
	        		<h6 class="pull-left">Contact</h6>
	        		<ul class="pull-right">
	        			<li><a href="index.php">Home</a></li>
	        			<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
	        			<li>Contact</li>
	        		</ul>
	        	</div>
	        </div> <!-- End of .page-breadcrumb -->



	        <!-- Contact US Page**************************** -->
	        <div class="contact_us_page">
	        	<div class="container">
	        		<div class="row">
	        			


	        			<div class="col-lg-8 col-md-7">
	        				<!-- Send Message -->
							<div class="send_message contact_us_form ">
								<div class="theme_title">
									<h3>Send Message</h3>
								</div>

								<form action="inc/sendemail.php" class="form-validation" autocomplete="off">
									<span>I would like to discuss:</span>
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<input type="text" placeholder="Your Name *" name="name">
										</div>
										<div class="col-lg-6 col-md-6">
											<input type="email" placeholder="Your Mail *" name="email">
										</div>
										<div class="col-lg-12 col-md-12">
											<input type="text" placeholder="Phone Number *" name="phone">
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<textarea placeholder="Your Message" name="message"></textarea>
										</div>
									</div>
									<button class="send_message color1_bg tran3s">Submit Now</button>
								</form>

								<div class="alert_wrapper" id="alert_success">
									<div id="success">
										<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
										<div class="wrapper">
								            <p>Your message was sent successfully!</p>
								        </div>
								    </div>
								</div> <!-- End of .alert_wrapper -->
								<div class="alert_wrapper" id="alert_error">
								    <div id="error">
								       <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
								        <div class="wrapper">
								         <p>Something went wrong, try refreshing and submitting the form again.</p>
								        </div>
								    </div>
								</div> <!-- End of .alert_wrapper -->
							</div> <!-- End of .send_message -->
	        			</div>
	        		</div> <!-- End of .row -->
	        	</div>
	        </div> <!-- End of .contact_us_page -->
  
<?php 
   include_once("footer.php");
?>