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
  <title> Add projek</title>
</head>
<body>
<div class="container">	
<div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
    <center><h1>TAMBAH PROJEK</h1></center>
   <form action="/projek/save" method="post">
        <div class="form-group">
        <p>Name : <input type="text" class="form-control" name ="nama_client"></p>
        </div>
        <div class="form-group">
        <p>Nama Project: <input type="text" class="form-control" name ="nama_project"></p>
        </div>
        <div class="form-group">
        <p>Deskripsi Project : <input type="text" class="form-control" name ="deskripsi_project"></p>
        </div>
        <div class="form-group">
        <p>Harga : <input type="text" class="form-control" name ="harga"></p>
        </div>
        <div class="form-group">
        <p>Jangka Waktu : <input type="text" class="form-control" name ="jangka_waktu"></p>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
        <div class="col-md-3"></div>
 </div>
</div>
</body>
</html>