
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Rounded Flat User Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/ap/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- main -->
		<div class="main">
			<h1>Registration Form</h1>
			<div class="input_form">
				<form action="register" method="post">
					<input name="mob" type="text" placeholder="mobile number" onfocus="this.value = '';"  required="">
					<br>
					<input name="name" type="text" placeholder="Name" onfocus="this.value = '';"  required="">
					<br>
					<input name="email" type="text" placeholder="email adress" onfocus="this.value = '';"  required="">
					<input name="pass" type="password" id="p1" placeholder="password" onfocus="this.value = '';"  required="">
					<div class="row"><div><input type="password"  placeholder="password" onkeyup="if(this.value != document.getElementById('p1').value) {document.getElementById('x1').innerHTML = 'passwords do not match'; document.getElementById('x2').innerHTML = ''; document.getElementById('s1').disabled = true;} else {document.getElementById('x1').innerHTML = ''; document.getElementById('x2').innerHTML = 'passwords match'; document.getElementById('s1').disabled = false;}"  required=""></div> <div><p id="x1" style="color:RED"></p><p id="x2" style="color:GREEN"></p></div></div>
					<div class="row"><input type="radio" name="type" value=TRUE checked>Customer &nbsp; <input type="radio" name="type" value=false checked>Vendor </div>
			<div class="ckeck-bg">
				<div class="checkbox-form">
					<div class="check-left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Remember my Password</label>
						</div>
					</div>
					<div class="check-right">
						
							<input type="submit" id="s1" disabled value="Register">
						
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
				</form>
			</div>
			
		</div>
</body>
<!-- if(this.value == p1.value) document.getElementById('x1').innerHTML = 'Doesnt match'; else document.getElementById('x1').innerHTML = 'matched';</html> -->