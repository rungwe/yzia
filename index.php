<html>

	<head>
		<title>Yzia</title>
		<link rel="icon" href="img/logo.png" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/yzia.css" />
		<script src="js/jquery-2.1.1.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		
	</head>
	
	<body style="background-image:url(img/bg2.jpg);background-repeat:no-repeat;background-attachment:fixed;height:100%;background-size:cover;">
	
		
		<div class="row">
			<div class="pull-right col-sm-1">
				<button align="right" type="button" class="btn" data-toggle="modal" data-target="#login" style="margin-right:20px;border-radius:0px;background-color:#ff4081;color:white;margin-top:10px;">Login</button>
			</div>
			<div class="col-sm-offset-1">
				<img src="img/logo.png"/ height="80px">
			</div>
			</div>
		
		</div>
		<div class="row" >
		
			<div class="col-md-offset-1 col-md-5 " style="margin-top:8%;">
				<h1 style="color:white;font-weight:700;line-weight:1.2;">Yzia music streaming</h1>
				<br>
				<h4 style="font-weight:600;color:gray;"><b>Buy Credits for your music streaming here and let the fun begin.<br>Register as music artist and get started with us</b></h4>
				<br>
				<div class="cd-triggers">
					<button class="btn btn-lg" style="border-radius:0px;background-color:#ff4081;color:white;" data-toggle="modal" data-target="#purchase">Buy credit$</button>
					<button class="btn btn-lg" style="border-radius:0px;background-color:#ff4081;color:white;" data-toggle="modal" data-target="#register">Register</button>
				</div>
			</div> <!-- cd-product-intro -->
		
			<div class="col-md-7 pull-right" style="margin-top:-20%;margin-right:10%;">
				<div class="cd-image-container pull-right" >
					<div>
						<div class="cd-phone-frame"></div>
						<div class="cd-image-wrapper">
							<img src="img/slide1.gif" data-video="video/video-1" alt="Screen Preview 1">
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="row app-store" style="">
				<div class="col-sm-offset-3 col-sm-4">
					<img src="img/googleplay.png" height="80" width="210"/>
				</div>
				<div class="col-sm-3">
					<img src="img/apple.png" height="70" width="210" style="margin-left:-50%;"/>
				</div>
		</div>
		

		<!-- Modal Buy-->
		<div class="modal fade" id="purchase" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Buy Credits</h4>
			  </div>
			  <div class="modal-body">
				<form role="form">
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				  </div>
				   <div class="form-group">
					<label for="phone">Phone:</label>
					<input type="text" class="form-control" id="phone">
				  </div>
				  
				  <div class="form-group">
					<label for="package">Package:</label>
					<select class="form-control">
					  <option value="5">Economic ($5)</option>
					  <option value="10">Standard ($10)</option>
					  <option value="15">Premium ($15)</option>
					</select>
				  </div>
				  <div class="row">
					<div class="col-sm-2">
						<img src="img/eco.png" height="50"/>
					</div>
					<div class="col-sm-2">
						<img src="img/tele.jpg" height="50"/>
					</div>
					<div class="col-sm-2">
						<img src="img/master.png" height="50"/>
					</div>
					<div class="col-sm-2">
						<img src="img/visa.png" height="50"/>
					</div>
					<div class="col-sm-2">
						<img src="img/one.jpg" height="50"/>
					</div>
					
				  </div>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn">Purchase</button>
			  </div>
			</div>
		  </div>
		</div>
		
		
		<!-- Modal login-->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Login as an artist</h4>
			  </div>
			  <div class="modal-body">
				<form role="form">
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" style="outline-color: #ff4081 !mportant;" id="pwd">
				  </div>
				  <div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				  </div>
				  
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn">Login</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal login-->
		<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="regModal">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Artist Registration</h4>
			  </div>
			  <div class="modal-body">
				<form role="form">
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="reg-email">
				  </div>
				  <div class="form-group">
					<label for="phone">First Name:</label>
					<input type="text" class="form-control" id="phone">
				  </div>
				  <div class="form-group">
					<label for="phone">Last Name:</label>
					<input type="text" class="form-control" id="phone">
				  </div>
				   <div class="form-group">
					<label for="phone">Phone:</label>
					<input type="text" class="form-control" id="phone">
				  </div>
				  <div class="form-group">
					<label for="phone">Stage Name:</label>
					<input type="text" class="form-control" id="phone">
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" style="outline-color: #ff4081 !mportant;" id="reg-pwd">
				  </div>
				  <div class="form-group">
					<label for="pwd">Confirm Password:</label>
					<input type="password" class="form-control" style="outline-color: #ff4081 !mportant;" id="reg-pwd-con">
				  </div>
				  
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn">Register</button>
			  </div>
			</div>
		  </div>
		</div>
		
	</body>



</html>