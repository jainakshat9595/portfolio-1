<div class="container-fluid">
	<div class="row hire-head">
		<center>Great! Now We are talkin' :)</center>
	</div>
	<div class="row hire-form">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-5">
					<div class="container-fluid hire-form-select">
						<div id="hire1" class="row">
							<div class="col-xs-2">
								<span class="fa-stack fa-lg">
        							<i class="fa fa-circle fa-stack-2x"></i>
        							<i id="hire1-ico" class="fa fa-check fa-stack-1x fa-inverse"></i>
      							</span>
							</div>
							<div class="col-xs-10">
								Person
							</div>
						</div>
						<div id="hire2" class="row">
							<div class="col-xs-2">
								<span class="fa-stack fa-lg">
        							<i class="fa fa-circle fa-stack-2x"></i>
        							<i id="hire2-ico" class="fa fa-check fa-stack-1x fa-inverse"></i>
      							</span>
							</div>
							<div class="col-xs-10">
								Company
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-7 hire-form-space">
					<div id="load-form" class="container-fluid"><!-- Loading Div at time of reading/writing -->
						<div class="row load-form-ico">
							<center>
								<i class="fa fa-spinner fa-5x fa-spin"></i>
							</center>	
						</div>
						<div class="row wait-msg">
							<center>
								Please wait..
							</center>
						</div>
					</div>
					<div id="load-done-form" class="container-fluid"><!-- Complete loading after message -->
						<div class="row">
							<center>
								Thank you. I'll contact you :)
							</center>	
						</div>
					</div>
					<div id="hire-def-form" class="container-fluid"><!-- Default Form -->
						<div class="row">
							<center>
								<div class="col-xs-2">
									<i class="fa fa-chevron-left fa-3x"></i>
								</div>
								<div class="col-xs-10">
									Please select your type.
								</div>
								</center>	
						</div>
					</div>
					<div id="hire1-form" class="container-fluid"><!-- Person Form -->
						<form id="per-form">
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group">
    								  <div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
    								  <input type="text" id="per-fname" required class="form-control" onfocusout="check('per-fname')" onfocusin="rem('per-fname')" placeholder="First Name">
    								</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
    								  <div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
    								  <input type="text" id="per-lname" required class="form-control" onfocusout="check('per-lname')" onfocusin="rem('per-lname')" placeholder="Last Name">
    								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
	    							  <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
	    							  <input type="email" id="per-email" required class="form-control" onfocusout="check('per-email')" onfocusin="rem('per-email')" placeholder="Email">
	    							</div>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
	    							  <div class="input-group-addon"><i class="fa fa-phone"></i></div>
	    							  <input type="text" id="per-phone" required class="form-control" onfocusout="check('per-phone')" onfocusin="rem('per-phone')" placeholder="Phone Number">
	    							</div>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
	    							  <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
	    							  <input type="text" id="per-place" required class="form-control" onfocusout="check('per-place')" onfocusin="rem('per-place')" placeholder="Place">
	    							</div>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<textarea style="resize:none;" required id="per-text" required rows="3" class="form-control text-ar" onfocusout="check('per-text')" onfocusin="rem('per-text')" placeholder="Share your thoughts or provide some necessary details.."></textarea>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<button type="button" onclick="fSubmit('per-fname', 'per-lname', 'per-email', 'per-phone', 'per-place', 'per-text', 1)" class="btn btn-default"><i class="fa fa-check-square-o"></i> Submit </button>
	    						</div>
	    						<div id="pErr" class="sub-err-msg" class="col-sm-9"></div>
							</div>
						</form>
					</div>
					<div id="hire2-form" class="container-fluid"><!-- Company Form -->
						<form id="con-form">
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group">
    								  <div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
    								  <input type="text" class="form-control" id="com-fname" onfocusout="check('com-fname')" onfocusin="rem('com-fname')" placeholder="First Name">
    								</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
    								  <div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
    								  <input type="text" class="form-control" id="com-lname" onfocusout="check('com-lname')" onfocusin="rem('com-lname')" placeholder="Last Name">
    								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
	    							  <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
	    							  <input type="email" class="form-control" id="com-email" onfocusout="check('com-email')" onfocusin="rem('com-email')" placeholder="Email">
	    							</div>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
	    							  <div class="input-group-addon"><i class="fa fa-phone"></i></div>
	    							  <input type="text" class="form-control" id="com-phone" onfocusout="check('com-phone')" onfocusin="rem('com-phone')" placeholder="Phone Number">
	    							</div>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
	    							  <div class="input-group-addon"><i class="fa fa-user"></i></div>
	    							  <input type="text" class="form-control" id="com-cname" onfocusout="check('com-cname')" onfocusin="rem('com-cname')" placeholder="Company Name">
	    							</div>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<textarea style="resize:none;" rows="3" class="form-control text-ar" id="com-text" onfocusout="check('com-text')" onfocusin="rem('com-text')" placeholder="Share your thoughts or provide some necessary details.."></textarea>
	    						</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<button type="button" onclick="fSubmit('com-fname', 'com-lname', 'com-email', 'com-phone', 'com-cname', 'com-text', 2)"  class="btn btn-default"><i class="fa fa-check-square-o"></i> Submit </button>
	    						</div>
	    						<div id="cErr" class="sub-err-msg" class="col-sm-9"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>