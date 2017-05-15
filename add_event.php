<?php 
  session_start();
  $file_base= "";
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client Portal | Event Workforce Group Talen</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css">
	<link rel="stylesheet" href="css/styles.css">
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
		<div class="title">
			<h3>Please follow the instructions to add your event</h3>
		</div>
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="event-details">
						<div class="col-md-8">
							<br>
							<h2>Instructions</h2>
							<div class="instructions-box">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores excepturi dolorem illum architecto nemo omnis reprehenderit ipsa et eveniet? Reiciendis ipsum odit expedita asperiores, eos animi molestiae rerum harum inventore!</p>
								<div class="cntr">
									<input  class="hidden-xs-up" id="cbx" type="checkbox" />
									<label class="cbx" for="cbx"></label><label class="lbl" for="cbx">Accept Terms &amp; Conditions</label>
								</div>
								<div class="divider"></div>
							</div>
							<br>
							<!--EVENT DETAILS-->
							
								<div class="form-event disable" id="e_d">
									<div class="evt-overlay"></div>
								<div class="headers">
									<h2>Event Details</h2>
								</div>
								<br>
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
									<div class="group"  id="finish-day-holder" style='display:none' >
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
									<div class="group">
										<a href="#" id="next-1" data-unlock="e_c" class="btn btn-block animated-button form-next-btn thar-three">Submit</a> 
									</div>
								</form>
								<div class="divider"></div>
							</div><!-- END FORM EVENT -->
						</div>
					</div>
				</div>
			</div><!-- END CONTAINER -->

			<div class="container">
				<div class="row">
					<div class="event-details">
						<div class="col-md-8">
							<div class="form-event disable" id="e_c">
							<div class="evt-overlay"></div>
								<div class="headers">
									<h2>Event Contact</h2>
								</div>
								<br>
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
								<div class="divider"></div>
							</div>
						</div>
					</div>
				</div>
			</div><!--END CONTAINER TO EVENT CONTACT-->
			

			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="event-details">
							<div class="form-event disable" id="m_d">
							<div class="evt-overlay"></div>
								<div class="headers">
									<h2>More Details</h2>
								</div>
								<br>
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
								<div class="divider"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTAINER -->

			<div class="container">
				<div class="row">
					<div class="event-details">
						<div class="col-md-8">
							<br>
							<div class="form-event disable" id="a_s">
							<div class="evt-overlay"></div>
								<div class="headers">
									<h2>Add Shift</h2>
								</div>
								<br>
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
								<div class="divider"></div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- END OF CONTAINER -->
			



		</div>
		<!--END MAIN-->
	</div>
	<!--END CONTENT-->

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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