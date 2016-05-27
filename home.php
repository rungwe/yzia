<html>

	<head>
		<title>Yzia</title>
		<link rel="icon" href="img/logo.png" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/yzia.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
		<script src="js/jquery-2.1.1.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		
	</head>
	
	<body style="background-color:#f2f2f2">
		<div id="nav" class="navbar-fixed-top"style="background-color:white;color:#ff4081;height:45px;border-bottom:1px #ff4081 solid;" >
			<div class="container-fluid">
				<div class="row">
					
						<div class="col-sm-2 ui-243">
						<!--  Hover menu drop down -->
								<div class="hover-menu">
									<a class="menu-btn" href=""><i class="fa fa-bars" style="color:#ff4081;"></i></a>
									<ul class="dd-menu list-unstyled menu-two" style="display: none;">
										<li>
											<a href="" class="color-one">
												<i class="glyphicon glyphicon-cloud-upload"></i>
												<!-- Menu title -->
												<span class="menu-title">Upload</span>
											</a>
										</li>	
										<li>
											<a href="" class="color-two">
												<i class="glyphicon glyphicon-music"></i>
												<!-- Menu title -->
												<span class="menu-title">Music</span>
											</a>
										</li>
										<li>
											<a href="" class="color-three">
												<i class="fa fa-bar-chart-o"></i>
												<!-- Menu title -->
												<span class="menu-title">Stats</span>
											</a>
										</li>
										<li>
											<a href="" class="color-four">
												<i class="glyphicon glyphicon-credit-card"></i>
												<!-- Menu title -->
												<span class="menu-title">Payments</span>
											</a>
										</li>
										<li>
											<a href="" class="color-five">
												<i class="glyphicon glyphicon-user"></i>
												<!-- Menu title -->
												<span class="menu-title">Profile</span>
											</a>
										</li>
										<li>
											<a href="" class="color-six">
												<i class="glyphicon glyphicon-calendar"></i>
												<!-- Menu title -->
												<span class="menu-title">Events</span>
											</a>
										</li>
										<li>
											<a href="" class="color-seven">
												<i class="fa fa-phone-square"></i>
												<!-- Menu title -->
												<span class="menu-title">Contact</span>
											</a>
										</li>
									</ul>
								</div>
					</div>
					
						
						<div class="col-sm-offset-3 col-sm-4">
							
								<div class="input-group" style="margin-top:6px;">
								  <input type="text" class="form-control" placeholder="Search for songs" >
								  <span class="input-group-btn">
									
									<button class="btn btn-default dropdown-toggle" id="dropdownMenu1"  type="button">search</button>
									
								  </span>
								  
								  
								</div><!-- /input-group -->
							
						</div>
						
						<div class="col-sm-1" style="background-color:white;height:45px; width:60;background-image:url('img/chaddy.jpg');background-size:cover;">
							
						</div>
						<div class="col-sm-2" style="">
							<h4>Chaddy Rungwe</h4>
						</div>
						<div class="col-sm-2" style="color:white;">
							<ul class="nav navbar-nav navbar-right style_font" >
								
							<li style="cursor:pointer;"><span class="input-group" style="font-weight:700;margin-top:6px;">
																												<i class="glyphicon glyphicon-lock dropdown-toggle" id="account" data-toggle="dropdown" aria-expanded="true" style="font-size:30px;color:#ff4081;"></i>
																													<ul class="dropdown-menu" role="menu" aria-labelledby="account">
																														<li role="presentation" class="dropdown-header"><center id="popup_name"></center></li>
																														<li role="presentation" data-toggle="modal" data-target="#edit_ac"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;settings</a></li>
																														<li role="presentation"><a href="index.php" role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;logout</a></li>
																														<li role="presentation"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;about us</a></li>
																														<li role="presentation"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;help</a></li>
																													 </ul>
																												</span>
																												
																												</li> 
						  </ul>
						</div>
						
						
					
							
					
				</div>
			  
			</div>
			
		</div> <!-- navabar end -->
		
		
	</body>
	<script>
			
			/* Drop Down */
			$(document).ready(function() {
				var hidden = true;
				$('.hover-menu .menu-btn').click(function(e) {
					e.preventDefault();
					if (hidden){
					   $(this).parent().children('.dd-menu').slideToggle(500, function(){hidden = false;});
					}
				});

				$('html').click(function() {
					if (!hidden) {
						$('.dd-menu').slideUp(500);
						hidden=true;
					}
				});

				$('.dd-menu').click(function(event) {
					event.stopPropagation();
				});
			});
			
		</script>


</html>