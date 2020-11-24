<!DOCTYPE html>
<html>
<head>
	<title>Contact Tracing</title>
	<script type="text/javascript" src="<?=base_url("assets/js/jquery.js");?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/qrcode.js");?>"></script>
	<script type="text/javascript"  src="<?=base_url("assets/js/bootstrap.js");?>"></script>
	
</head>
<body>

<!--form for sign in --> 
<form class="form-signin">
	<div><input type="text" name="name" placeholder="Name" id="qr" required autofocus></div>
	<div><input type="email" name="email" placeholder="Email" id="mail" required ></div>
	<div><input type="number" placeholder="Phone Number" id="num" required ></div>
	<div><input type="text" placeholder="Address" id="add" required ></div>

<!---Button-->
<div id="qrResult">
</div>
</form>
<div><button onclick="generate()"> Generate</button></div>
<h1>test1</h1>
<script type="text/javascript" src="<?=base_url("assets/js/generate.js");?>"></script>
<br>

<input type="file" id="file" name="file">

<!--Display the QR Code Content-->
<p>Qr Content: <br><span id="content"></span></p>



<!--To Read QR Code-->
<script type="text/javascript" src="<?=base_url("assets/js/qrReader.js");?>"></script>
</body>
</html>
