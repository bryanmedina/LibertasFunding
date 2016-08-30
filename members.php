<?php 
 include_once("header.php");
?>
<script language="javascript">
		$(document).ready(function(){
			$("#forgotlink").click(function(){
				$("#loginform").hide();
				$("#forgotform").show();
				});
				
		
		});
	
        </script>

  
   <!-- Account Page Content*********************** -->
	        <div class="account_page">
	        	<div class="container">
	        		<div class="row">
                    <div class="col-md-3"></div>
	        			<div class="col-md-6 login_form " id="loginform">
	        				
	        				<form action="#">
	        					<div class="form_group">
                                <div class="theme_title">
								<h3>Welcome back!</h3>
							</div>
                                
	        						<label>Username or Email</label>
	        						<div class="input_group">
	        							<input type="text" placeholder="email@sample.com">
	        							<i class="fa fa-user" aria-hidden="true"></i>
	        						</div> <!-- End of .input_group -->
	        					</div> <!-- End of .form_group -->

	        					<div class="form_group">
	        						<label>Password</label>
	        						<div class="input_group">
	        							<input type="password" placeholder="********">
	        							<i class="fa fa-lock" aria-hidden="true"></i>
	        						</div> <!-- End of .input_group -->
	        					</div> <!-- End of .form_group -->

	        					<div class="clear_fix">
									<a id="forgotlink" class="float_right">Forgot Password?</a>
	        					</div>
	        					<button class="color1_bg tran3s">Login now</button>
	        				</form>
	        			</div> <!-- End of .login_form -->
                        
                        
                        
                        
                        
                        
                        <div class="col-md-6 login_form " id="forgotform" style="display:none">
	        				
	        				<form action="#">
	        					<div class="form_group">
                                <div class="theme_title">
								<h3>Forgot Password</h3>
							</div>
                                
	        						<label>Username or Email</label>
	        						<div class="input_group">
	        							<input type="text" placeholder="iamsteelthemes@gmail.com">
	        							<i class="fa fa-user" aria-hidden="true"></i>
	        						</div> <!-- End of .input_group -->
	        					</div> <!-- End of .form_group -->

	        					<button class="color1_bg tran3s">Search</button>
	        				</form>
	        			</div> <!-- End of .login_form -->
                                            <div class="col-md-3"></div>


	        		
	        		</div> <!-- End of .row -->
	        	</div> <!-- End of .container -->
	        </div> <!-- End of .account_page -->
  
  
<?php 
   include_once("footer.php");
?>