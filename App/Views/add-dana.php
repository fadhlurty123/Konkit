<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-responsive-min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
  <title> Konfirmasi Dana</title>
</head>
<body>
<div class="container">	
<div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
    <center><h1>KONFIRMASI PROJECT</h1></center>
<a href="/projectclient" class="pure-button button-small">kembali </a><br><br>
   <form action="/TarikDana/save" method="post">
        <div class="form-group">
        <p>deskripsi : <input type="text" class="form-control" name ="deskripsi"></p>
        </div>
        <div class="form-group">
        <p>harga: <input type="text" class="form-control" name ="harga"></p>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
        <div class="col-md-3"></div>
 </div>
</div>
</body>
</html>