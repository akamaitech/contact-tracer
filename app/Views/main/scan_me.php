<?= $this->extend('main/qr_main') ?>
<?= $this->section('data') ?>
   
   
    <script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/instascan.min.js"></script>
</head>
<body>
<div class="container">
<div class="row justify-content-center mt-5">
<div class="col-md-5">
<div class="card-header bg-transparent mb-0"><h5 class="text-center"><span class="font-weight-bold text-primary">Scan</span></h5></div>
<div class="card-body">

<video id="preview" width="400" height="300"></video>
<div class="form-group">
<input type="text" id="grcode" class="form-control"/>
</div>
</div>
  <div class="form-group">
  <div class="col">
        <div  class="form-group">
        <button class="btn btn-outline-success btn-sm btn-block " onclick="get()"> Generate</button>
        </div>
        </div>

        <div class="col">
        <div  class="form-group">
        <a href="/System" class="btn btn-outline-danger btn-sm btn-block ">Back</a>
        </div>
        </div>
 
</div>    

</div>
</div>
</div>
</body>

<script type="text/javascript">

let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
scanner.addListener('scan', function(content){

    //alert(content);
    $("#grcode").val(content);
});

Instascan.Camera.getCameras().then(function (cameras){

    if(cameras.length > 0){
        scanner.start(cameras[0]);
    }else{
        console.error('No cameras found');
    }
}).catch(function (e){
    console.error(e);

});



</script>
<?=$this->endsection()?>