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
  <title>edit project</title>
</head>
<body>
<div class="container">	
<div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
    <center><h1>DATA PROJECT</h1></center>
    
<a href="/dashboard" class="pure-button button-small">Kembali</a>
   <form action="/projek/update" method="post">
        <div class="form-group">
        <p>Nama : <input type="text" class="form-control" name ="nama_client" value="<?= $project_1->nama_client; ?>"></p>
        </div>
        <div class="form-group">
        <p>Nama Projek : <input type="text" class="form-control" name ="nama_project" value="<?= $project_1->nama_project; ?>"></p>
        </div>
        <div class="form-group">
        <p>deskripsi Projek : <input type="text" class="form-control" name ="deskripsi_project" value="<?= $project_1->deskripsi_project; ?>"></p>
        </div>
        <div class="form-group">
        <p>Harga : <input type="text" class="form-control" name ="harga" value="<?= $project_1->harga; ?>"></p>
        </div>
        <div class="form-group">
        <p>Jangka waktu : <input type="text" class="form-control" name ="jangka_waktu" value="<?= $project_1->jangka_waktu; ?>"></p>
        </div>
        <input type="hidden" name="project_id" value="<?= $project_1->project_id; ?>">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
        <div class="col-md-3"></div>
 </div>
</div>	
</body>
</html>

