 <!DOCTYPE html>
<html>
<head>
	<title>Contact Tracing</title>
	<script type="text/javascript" src="<?=base_url("assets/js/jquery.js");?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/qrcode.js");?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/bootstrap.js");?>"></script>
	<link rel="stylesheet" href="<?=base_url("assets/css/qr.css");?>">
	
</head>
<body>
<!--form for sign in --> 
<form class="form-signin">
	<div><input type="text" name="name" placeholder="Name" id="qr" ></div>
	<div><input type="email" name="email" placeholder="Email" id="mail" ></div>
	<div><input type="number" placeholder="Phone Number" id="num"></div>
	<div><input type="text" placeholder="Address" id="add"  ></div>
	
	</form>
	<div id="qrResult">
	</div>
<!---Button-->


<div><button onclick="generate()"> Generate</button></div>
<script type="text/javascript" src="<?=base_url("assets/js/generate.js");?>"></script>
<br>
<!--to go back base.php-->
<a href="<?=base_url()?>/base"><button>Back</button></a>

</div>
</body>
</html>
