<?php 
  session_start();
  $file_base= "";
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client Portal | Event Workforce Group Talent</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css">
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<html>
	<body>
	
	<div class="header">
		<div class="logo">
			<i class="fa fa-rebel"></i>
			<span>Client Portal</span>
		</div>
		<a href="#" class="nav-trigger"><span></span></a>
	</div>
	<!-- MOBILE LOGO-->
	<div class="side-nav">
		<div class="logo">
			<i class="fa fa-rebel"></i>
			<span>Client Portal</span>
		</div>
		<!--NAVIGATION-->
		<nav>
			<ul>
				<li class="active">
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>My Details</span>
					</a>
				</li>
				<li>
					<a href="#">

						<span><i class="fa fa-calendar-minus-o"></i></span>
						<span>Past Events</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-clipboard"></i></span>
						<span>Invoices</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-rocket"></i></span>
						<span>Log Out</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
			
<div class="main-content">
 <div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Tell us a bit about your event and the staff you need</h2>
			<br>
				<div id="accordion" class=""role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne">
							<h4 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          #1 Event Details 
        </a>
							</h4>
						</div>

						<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<div class="card-block">
								<div class="form-event disable" id="e_d">

									<form>
										<div class="group">
											<input class="disabled" type="text" required>
											<span class="highlight"></span>
											<span class="bar"></span>
											<label class="text-placeholder">Event Name</label>
										</div>
										<div class="group">
											<input type="text" required>
											<span class="highlight"></span>
											<span class="bar"></span>
											<label class="text-placeholder">Event Location</label>
										</div>
										<div class="group">
											<input type="text" value="" id="event_start_date" class="datepicker" required>
											<span class="highlight"></span>
											<span class="bar"></span>
											<label class="text-placeholder">Date</label>
										</div>
										<div class="group" id="more-than-one-day-holder" style='display:none'>
											<p>Does this event go for more than one day</p>
											<a class='btn btn-danger btn-one-day'>No</a>
											<a class='btn btn-success btn-more-one-day'>Yes</a>
										</div>
										<div class="group" id="finish-day-holder" style='display:none'>
											<input type="text" value="" class="datepicker" required>
											<span class="highlight"></span>
											<span class="bar"></span>
											<label class="text-placeholder">Date</label>
										</div>
										<div class="group">
											<input type="text" required>
											<span class="highlight"></span>
											<span class="bar"></span>
											<label class="text-placeholder">Event Website</label>
										</div>
										
											<a href="#" id="next-1" data-unlock="e_c" class="btn btn-block animated-button form-next-btn thar-three">Submit</a>
										
									</form>
								</div>
								<!-- END FORM EVENT -->
							</div>
						</div>
					</div>
					<br />

					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h4 class="mb-0">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Event Contact
        </a>
							</h4>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<form>
									<div class="group">
										<input type="text" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="text-placeholder">Company Name</label>
									</div>
									<div class="group">
										<input type="text" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="text-placeholder">Contact Name</label>
									</div>
									<div class="group">
										<input type="text" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="text-placeholder">Mobile Number</label>
									</div>
									<div class="group">
										<input type="text" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="text-placeholder">Email</label>
									</div>

									<div class="cntr">
										<p class="small">Is there more than one contact?</p>
										<input class="hidden-xs-up" id="cbc" type="checkbox" />
										<label class="cbx" for="cbc"></label><label class="lbl" for="cbc">Yes</label>
									</div>
									<input class="hidden-xs-up" id="cba" type="checkbox" />
									<label class="cbx" for="cba"></label><label class="lbl" for="cba">No</label>
									<br>
									<br>
									<div class="group">
										<a href="#" id="next-1" data-unlock="m_d" class="btn btn-block animated-button form-next-btn thar-three">Submit</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<br>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h4 class="mb-0">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          More Details
        </a>
							</h4>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
								<form>
									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Event Description</label><i class="bar"></i>
									</div>
									<div class="form-upload">
										<input class="upload" type="file" id="file" custom="custom-file-input">
										<label>Upload your event banner. But keep it 1000px x 400px please</label>
									</div>
									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Description of Role</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Preferred skills and abilities</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<select>
							<option>No</option>
							<option>Yes</option>
							<option>Other</option>
						  </select>
										<label class="control-label" for="select">Uniform supplied</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<select>
							<option>No</option>
							<option>Yes</option>
							<option>Other</option>
						  </select>
										<label class="control-label" for="select">Any licenses required?</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<select>
							<option>Any Gender</option>
							<option>Male</option>
							<option>Female</option>
						  </select>
										<label class="control-label" for="select">Workforcers</label><i class="bar"></i>
									</div>
									<div class="group">
										<a href="#" id="next-1" data-unlock="a_s" class="btn btn-block animated-button form-next-btn thar-three">Submit</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<br />
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<h4 class="mb-0">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Add Shift
        </a>
							</h4>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block">
								<form>
									<div class="form-group">
										<select>
							<option>All Shifts</option>
							<option>Multiple Shifts</option>
						  </select>
										<label class="control-label" for="select">Shift Category</label><i class="bar"></i>
									</div>
									<div class="group">
										<input type="text" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="text-placeholder">Date</label>
									</div>
									<div class="group">
										<input type="text" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="text-placeholder">Event Location</label>
									</div>
									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Shift Requirements</label><i class="bar"></i>
									</div>
									<div class="group">
										<input type="text" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="text-placeholder">How many staff do you need?</label>
									</div>
									<div class="group">
										<a href="#" id="next-1" class="btn btn-block animated-button thar-three">Submit</a>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- END ACCORDION -->
				</div>
			</div>
		</div>
	</div>

		
		<!-- Bootstrap core JavaScript
    ================================================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scripts-date.js"></script>
	
	

	<!--
<script src="main.js"></script>
-->
	<!-- Placed at the end of the document so the pages load faster 
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->



	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
	
	
	
	
</html>