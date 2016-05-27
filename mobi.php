<!DOCTYPE html>
<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="themes/yzia-custom.min.css">
  <!-- Include the jQuery library -->
  <script src="js/jquery-2.1.1.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="jquery.mobile/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" data-theme="d" id="pageone" >
  <div data-role="header">
  <h1>Yzia Payment</h1>
  </div>

  <div data-role="main" class="ui-content" >
	<form method="post" action="demoform.asp">
	  <div class="ui-field-contain">
	  
		<label for="email">e-mail:</label>
		<input type="email" name="email" id="email" placeholder="Your email..">
		<br>
		<label for="username">username:</label>
		<input type="text" name="username" id="username">
		<br>
		<label for="phone">phone:</label>
		<input type="tel" name="phone" id="phone">
		<br>
		<input type="submit" data-inline="true" value="Proceed to buy">
		
	  </div>
	</form>
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
</style>
</body>
</html>
