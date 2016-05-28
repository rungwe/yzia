<!DOCTYPE html>
<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="themes/yzia-custom2.min.css">
  <!-- Include the jQuery library -->
  <script src="js/jquery-2.1.1.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="jquery.mobile/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" data-theme="d" id="pageone" >
  
  <div data-role="main" class="ui-content" >
	<center><h1 style="color:#ff4081;">Thank you :)</h1></center>
	<h3 style="color:#ff4081;">transaction completed successfully</h3>
  </div>

  <div data-role="footer">
	<div class="ui-grid-d">
		<div class="ui-block-a">
			<img src="img/eco.png" height="50" width="50"/>
		</div>
		<div class="ui-block-b">
			<img src="img/tele.jpg" height="50" width="50"/>
		</div>
		<div class="ui-block-c">
			<img src="img/master.png" height="50" width="50"/>
		</div>
		<div class="ui-block-d">
			<img src="img/visa.png" height="50" width="50"/>
		</div>
		<div class="ui-block-d">
			<img src="img/one.jpg" height="50" width="50"/>
		</div>
	</div>
  </div>
</div> 
<style>
	[data-role=page]{height: 100% !important; position:relative !important;}
	[data-role=footer]{bottom:0; position:absolute !important; top: auto !important; width:100%;}
	input{
	outline-color: #ff4081 !important;
}
</style>
</body>
</html>
