<?= $this->extend('main/qr_main') ?>
<?= $this->section('data') ?>



<h1>Qr Code Registration</h1>
<div class="row">

<div class="col-12 col-md-8 ">
    <form  method="post" id="qrReg">
        <div class="col">
        <div class="form-group">
            <label for=""></label>
            <input  class="form-control" type="text" name="p_name"  placeholder="Name" id="name">
        </div> 
        </div>
        
        <div class="col">
        <div class="form-group">
           <label for=""></label>
           <textarea  class="form-control" name="p_address"  rows="2" placeholder="Address" id="add"></textarea> 
        </div>
        </div>

        <div class="col">
        <div class="form-group">
            <label for=""></label>
            <input class="form-control" type="number" name="p_number"  placeholder="Phone Number" id="num">
        </div>    
        </div>

        <div class="col">
        <div class="form-group">
            <label for=""></label>
            <input class="form-control" type="email" name="p_mail"  placeholder="Email Address" id="mail">
        </div>    
        </div>

        </form>
        <div class="col">
        <div  class="form-group">
        <button class="btn btn-outline-success btn-sm btn-block " onclick="generate()"> Generate</button>
        </div>
        </div>
        
</div>
<?=$this->include('generator/qr_generator')?> 
</div>
</div>
<?=$this->endsection()?>