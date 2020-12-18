<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title><?=$meta_title?></title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="<?=base_url('assets/js/jquery.js')?>"></script>
  <script type="text/javascript" src="<?=base_url("assets/js/qrcode.js");?>"></script>
  <script type="text/javascript" src="<?=base_url("assets/js/generate.js");?>"></script>
  <script type="text/javascript">
      var base_url = '<?=base_url()?>';
  </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand" href="<?=base_url()?>">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="<?=base_url()?>/system/Qdata">Sign in <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item  ">
                  <a class="nav-link" href="<?=base_url()?>/system/scan">Scan</a>
              </li>
              <li class="nav-item  ">
                  <a class="nav-link" href="<?=base_url()?>">Admin</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
        
<?=$this->renderSection('data')?>
</body>
</html>