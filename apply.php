<?php 
 include_once("header.php");
?>
<script language="javascript">
		$(document).ready(function(){
			$("#step1btn").click(function(){
				$("#step1").hide();
				$("#step2").show();
				$("#step3").hide();
				});
		    $("#step2btn").click(function(){
				$("#step1").hide();
				$("#step2").hide();
				$("#step3").show();
				});
				
			$("#step2backbtn").click(function(){
				$("#step1").show();
				$("#step2").hide();
				$("#step3").hide();
				});
		    $("#step3backbtn").click(function(){
				$("#step1").hide();
				$("#step2").show();
				$("#step3").hide();
				});
		});
	
        </script>
      <style>
.stepsbystep {
	color: #A2A2A2
}
.stepscurrent {
	color: #353535;
	border-bottom: solid 1px #353535;
	margin-bottom: 15px;
}
.request_quote_footer color1_bg wow fadeInUp {
	display: none
}
</style>

      <!-- Page Breadcrumb*************************** -->
<div class="page-breadcrumb">
  <div class="container clear_fix">
    <h6 class="pull-left">Apply</h6>
    <ul class="pull-right">
      <li><a href="index.html">Home</a></li>
      <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
      <li>Contact</li>
    </ul>
  </div>
</div>
<!-- End of .page-breadcrumb --> 

<!-- Apply**************************** -->
<div class="contact_us_page">
  <div class="container">
    <div class="row">
      <div class="col-md-12" align="center">
        <div class="theme_title">
          <h3>Small Business Financing from Libertas Funding<span>!</span></h3>
        </div>
      </div>
      <div class=" col-md-3"> 
      <!-- Contact Slider -->
								<div id="contact-slider" class="carousel slide" data-ride="carousel" data-interval="5000">
								 <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#contact-slider" data-slide-to="0" class="active"></li>
								    <li data-target="#contact-slider" data-slide-to="1"></li>
								    <li data-target="#contact-slider" data-slide-to="2"></li>
								  </ol>
        
        <!-- Sliding images statring here -->
        <div class="carousel-inner" style="text-align: center;">
          <div class="item active">
            <h6>Industries</h6>
            <ul>
              <li><span class="fa fa-female  fa-5x theme-color" aria-hidden="true"></span>
                <p>Salon</p>
              </li>
              <li><span class="fa fa-cutlery fa-5x theme-color"></span>
                <p>Restaurant</p>
              </li>
              <li><span class="fa fa-exclamation-triangle fa-5x theme-color"></span>
                <p>Construction</p>
              </li>
              <li><span class="fa fa-shopping-bag fa-5x theme-color"  aria-hidden="true"></span>
                <p>Retail</p>
              </li>
            </ul>
          </div>
            <div class="item">
              <h6>Industries</h6>
              <ul>
                <li> <span class="fa fa-bus fa-5x theme-color" aria-hidden="true"></span>
                  <p>Trucking</p>
                </li>
                <li><span class="fa fa-user-md fa-5x theme-color" aria-hidden="true"></span>
                  <p>Medical</p>
                </li>
                <li>
                  <span class="fa fa-cogs fa-5x theme-color"></span>
                  <p>Manufacturing</p>
                </li>
                <li> <span class="fa fa-taxi fa-5x theme-color" aria-hidden="true"></span>
                  <p>Auto</p>
                </li>
              </ul>
          </div>
        </div>
        </div>
        </div>
        <div class=" col-md-6" style="border: solid 1px #E0E0E0; background-color: #FBFBFB">
          <form id="form" method="post" action="">
            <input type="hidden" name="urgency" value="<?php echo $urgency ?>" />
            <input type="hidden" name="busRevenue" value="<?php echo $busRevenue ?>" />
            <input type="hidden" name="lead" value="<?php echo $leadSource ?>" />
            <div class="col-sm-12 message-confirm">
              <div id="message" class="mesagelayout"></div>
            </div>
            
            <!--- Personal Business info --->
            <div class="row" id="step1">
              <div class="col-md-12" align="center">
                <div class="col-md-4 stepscurrent"><i class="fa fa-user" aria-hidden="true"></i> Personal</div>
                <div class="col-md-4 stepsbystep"><i class="fa fa-money" aria-hidden="true"></i> Financial</div>
                <div class="col-md-4 stepsbystep"><i class="fa fa-briefcase" aria-hidden="true"></i> Business</div>
              </div>
              <div class="col-sm-12" align="center">
                <h4 style="color:#373737">Personal Business Information</h4>
              </div>
              <div class="col-md-12">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="250ms">
                  <div class="form-group col-sm-12">
                    <label for="edtfirstname">First Name:</label>
                    <input type="text" class="form-control input-name" required="" placeholder="First Name" value="" data-toggle="tooltip" title="first name" name="edtfirstname" id="edtfirstname">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="250ms">
                  <div class="form-group col-sm-12">
                    <label for="edtlastname">Last Name:</label>
                    <input type="text" class="form-control input-name" required="" placeholder="Last Name" value="" data-toggle="tooltip" title="Last Name" name="edtlastname" id="edtlastname">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="350ms">
                  <div class="form-group col-sm-12">
                    <label for="edtemail">Email:</label>
                    <input type="text" class="form-control input-name" required="" placeholder="E-mail" value="" data-toggle="tooltip" title="E-mail" name="edtemail" id="edtemail">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="450ms">
                  <div class="form-group col-sm-12">
                    <label for="edtphone">Phone Number:</label>
                    <input type="tel" class="form-control input-name" required="" placeholder="Phone Number" maxlength="12" value="" data-toggle="tooltip" title="Phone Number" name="edtphone" id="edtphone">
                  </div>
                </div>
              </div>
              <div class="send_message" style="width:auto;">
                <center>
                  <button class="color1_bg tran3s" style="width:300px" id="step1btn">Next Step</button>
                </center>
              </div>
            </div>
            <!--- End Personal Business info ---> 
            
            <!--- Financial Business info --->
            <div class="row" id="step2" style="display:none">
              <div class="col-md-12" align="center">
                <div class="col-md-4 stepsbystep"><i class="fa fa-user" aria-hidden="true"></i> Personal</div>
                <div class="col-md-4 stepscurrent"><i class="fa fa-money" aria-hidden="true"></i> Financial</div>
                <div class="col-md-4 stepsbystep"><i class="fa fa-briefcase" aria-hidden="true"></i> Business</div>
              </div>
              <div class="col-md-12" align="center">
                <h4 style="color:#373737">Financial Information</h4>
                *** You must have a business checking account *** </div>
              <div class="col-md-12">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="250ms">
                  <div class="form-group col-sm-12">
                    <label for="edtLoanAmount">Amount of funds needed:</label>
                    <br/>
                    <select name="edtLoanAmount" id="edtLoanAmount" class="form-control">
                      <option>10,000 - 20,000</option>
                      <option>25,000 - 50,000</option>
                      <option>50,000 - 100,000</option>
                      <option>100,000 - 250,000</option>
                      <option>250,000+</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-12">
                    <label>Purpose for requesting funds?</label>
                    <select name="edtLoanPurpose" id="edtLoanPurpose" class="form-control">
                      <option value="Select one">Purpose for requesting funds?</option>
                      <option value="Operational Capital">Operational Capital</option>
                      <option value="Equiptment Purchase">Equiptment Purchase</option>
                      <option value="Inventory Purchase">Inventory Purchase</option>
                      <option value="Remodeling">Remodeling</option>
                      <option value="Expansion">Expansion</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Refinancing Debt'">Refinancing Debt'</option>
                      <option value="Hiring">Hiring</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="250ms" >
                  <div class="form-group col-sm-12">
                    <label for="edtLoanPurpose">Purpose for requesting funds:</label>
                    <br/>
                    <select name="edtLoanPurpose" id="edtLoanPurpose" class="form-control">
                      <option value="Select one">Please Choose</option>
                      <option value="Operational Capital">Operational Capital</option>
                      <option value="Equiptment Purchase">Equiptment Purchase</option>
                      <option value="Inventory Purchase">Inventory Purchase</option>
                      <option value="Remodeling">Remodeling</option>
                      <option value="Expansion">Expansion</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Refinancing Debt'">Refinancing Debt'</option>
                      <option value="Hiring">Hiring</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="send_message col-md-12">
                <button class="color1_bg  col-md-5" id="step2backbtn">Back</button>
                <div class="col-md-1"></div>
                <button class="color1_bg  col-md-6"  id="step2btn">Next Step</button>
              </div>
            </div>
            <!--- END Financial Business info ---> 
            
            <!--- Business Business info --->
            
            <div class="row" id="step3" style="display:none">
              <div class="col-md-12" align="center">
                <div class="col-md-4 stepsbystep"><i class="fa fa-user" aria-hidden="true"></i> Personal</div>
                <div class="col-md-4 stepsbystep"><i class="fa fa-money" aria-hidden="true"></i> Financial</div>
                <div class="col-md-4 stepscurrent"><i class="fa fa-briefcase" aria-hidden="true"></i> Business</div>
              </div>
              <div class="col-sm-12" align="center">
                <h4 style="color:#373737">Business Information</h4>
              </div>
              <div class="col-md-6">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="250ms">
                  <div class="form-group col-sm-12">
                    <label for="edtfirstname">Business Legal Name:</label>
                    <input type="text" class="form-control input-name" required="" placeholder="Business Legal Name" value="" data-toggle="tooltip" title="Business Legal Name" name="edtbusname" id="edtbusname"  >
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="250ms">
                  <div class="form-group col-sm-12">
                    <label for="edtlastname">Business Phone:</label>
                    <input type="tel" class="form-control input-name" required="" placeholder="Business Phone" value="" data-toggle="tooltip" title="Business Phone" name="edtbusphone" id="edtbusphone">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="350ms">
                  <div class="form-group col-sm-12">
                    <label for="edtemail">Years in Business:</label>
                    <select class="form-control input-name" required placeholder="Years in Business" value="" data-toggle="tooltip" title="Years in Business" name="edtbusage" id="edtbusage">
                      <option value="1-5 years">1-5 years</option>
                      <option value="5-10 years">5-10 years</option>
                      <option value="More than 10 years">More than 10 years</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="450ms">
                  <div class="form-group col-sm-12">
                    <label for="edtfirstname">Business Address:</label>
                    <input type="text" class="form-control input-name" required="" placeholder="Business Address" value="" data-toggle="tooltip" title="Business Address" name="edtbusaddress" id="edtbusaddress">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="450ms">
                  <div class="form-group col-sm-12">
                    <label for="edtlastname">Business City:</label>
                    <input type="text" class="form-control input-name" required="" placeholder="Business City" value="" data-toggle="tooltip" title="Business City" name="edtbuscity" id="edtbuscity">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="450ms">
                  <div class="form-group col-sm-12">
                    <label for="edtemail">Business State:</label>
                    <br/>
                    <select  title="Business State" required name="edtbusstate" id="edtbusstate" class="form-control">
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class=" space-bottom-30 wow fadeInUp"  data-wow-delay="450ms">
                  <div class="form-group col-sm-12">
                    <label for="edtemail">Business Zip Code:</label>
                    <input type="text" class="form-control input-name" required=""  maxlength="5" placeholder="Business Zip Code" value="" data-toggle="tooltip" title="Business Zip Code" name="edtbuszip" id="edtbuszip">
                  </div>
                </div>
              </div>
              <div class="form-group col-sm-12 space-20">
                <div class="g-recaptcha" data-sitekey="6LcoDBYTAAAAANtbQEmUtvmtIHHuTA-Ju0_fGTqM"></div>
              </div>
              <div class="col-sm-12   space-20 send_message" align="center">
                <label>
                  <input type="checkbox" value="callmeback" style="float: left; margin-right: 10px"/>
                  I wish to have a person to consult me</label>
                <br/>
                <label>
                  <input type="checkbox" value="callmeback" style="float: left; margin-right: 10px"/>
                  I wish to complete application online</label>
                <div class="send_message col-md-12">
                  <button class="color1_bg  col-md-5" id="step3backbtn">Back</button>
                  <div class="col-md-1"></div>
                  <button class="color1_bg  col-md-6" type="submit">Submit</button>
                </div>
              </div>
            </div>
            <!--- Business Business info --->
            
          </form>
          <!---- FORM END -----> 
        </div>
      
      <div class=" col-md-3">
      <!-- Contact Slider -->
								<div id="contact-slider" class="carousel slide" data-ride="carousel" data-interval="5000">
								 <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#contact-slider" data-slide-to="0" class="active"></li>
								    <li data-target="#contact-slider" data-slide-to="1"></li>
								    <li data-target="#contact-slider" data-slide-to="2"></li>
								  </ol>
        <div class="carousel-inner" style="text-align: center;">
          <div class="item active">
            <div class="item active" >
              <h6>Industries</h6>
              <ul>
                <li> <span class="fa fa-bus fa-5x theme-color" aria-hidden="true"></span>
                  <p>Trucking</p>
                </li>
                <li><span class="fa fa-user-md fa-5x theme-color" aria-hidden="true"></span>
                  <p>Medical</p>
                </li>
                <li>
                  <div class="item">
                  <span class="fa fa-cogs fa-5x theme-color"></span>
                  <p>Manufacturing</p>
                </li>
                <li> <span class="fa fa-taxi fa-5x theme-color" aria-hidden="true"></span>
                  <p>Auto</p>
                </li>
              </ul>
            </div>
          </div>
        
         <div class="item ">
            <h6>Industries</h6>
            <ul>
              <li><span class="fa fa-female  fa-5x theme-color" aria-hidden="true"></span>
                <p>Salon</p>
              </li>
              <li><span class="fa fa-cutlery fa-5x theme-color"></span>
                <p>Restaurant</p>
              </li>
              <li><span class="fa fa-exclamation-triangle fa-5x theme-color"></span>
                <p>Construction</p>
              </li>
              <li><span class="fa fa-shopping-bag fa-5x theme-color"  aria-hidden="true"></span>
                <p>Retail</p>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </div>   </div>
  <!-- End of .row --> 
</div>
</div>
<!-- End of .contact_us_page -->

<?php 
   include_once("footer.php");
?>
