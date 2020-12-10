<?= $this->extend('main/qr_main') ?>
<?= $this->section('data') ?>
   
   
   
    <div class="row">
    <div class="container">
    <div class="row">
  <div class="col-sm " style="width: 18rem;">
    <div class="card">
   
      <div class="card-body">
        <h5 class="card-title">Create Account?</h5>
        <p class="card-text">To Enter our shop, you need to register first and get the QR Code.</p>
        <a href="/system/Qdata" class="btn btn-primary">Sign up</a>
      </div>
    </div>
  </div>
  <div class="col-sm " style="width: 18rem;" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Scan Me!</h5>
        <p class="card-text">Authorized Personnel Only</p>
        <a href="#" class="btn btn-primary">Scan now</a>
      </div>
    </div>
  </div>
  </div>
  </div>
    </div>
<?=$this->endsection()?>