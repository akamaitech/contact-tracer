<html>
  <head>
    <title>Instascan &ndash; Demo</title>
    <link rel="icon" type="image/png" href="<?=base_url("assets/js/instascan-master/docs/favicon.png");?>">
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  </head>
  <body>
    
    <div id="app">
 <div class="sidebar">
<section class="cameras">
         
<section class="scans">
<h2>Scans</h2>
<ul v-if="scans.length === 0">
<li class="empty">No scans yet</li>
</ul>
</li>
</ul>
</ul>
<transition-group name="scans" tag="ul">
 <li v-for="scan in scans" :key="scan.date" :title="scan.content">{{ scan.content }}</li>
</transition-group>
</section>
</div>
<div class="preview-container">
 <video id="preview"></video>
</div>
</div>

<div>
<h1> Qr File Scanner</h1>
<input type="file" id="file" name="file">
<!--Display the QR Code Content-->
<p>Qr Content: <br><span id="content"></span></p>

<!--To Read QR Code-->
<script type="text/javascript" src="<?=base_url("assets/js/qrReader.js");?>"></script>
</div>
<!--to go back base.php-->
<a href="<?=base_url()?>/Base"><button>Back</button></a>


<script type="text/javascript" src="<?=base_url("assets/js/app.js");?>"></script>
</body>
</html>
