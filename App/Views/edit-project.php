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
	  <center><h1>EDIT BIODATA</h1></center>
   
   <a href="/dashboard"  class="pure-button button-small">Kembali</a><br>
   <form action="/project/update" method="post">
   <div class="form-group">
        <p>Nama : <input type="text" class="form-control" name ="client" value="<?= $project->client; ?>"></p>
   </div>
        <div class="form-group">
        <p>Email : <input type="text" class="form-control" name ="email" value="<?= $project->email; ?>"></p>
        </div>
        <div class="form-group">
        <p>prioritas : <input type="text" class="form-control" name ="prioritas" value="<?= $project->prioritas; ?>"></p>
        </div>
        <div class="form-group">
        <p>status : <input type="text" class="form-control" name ="status" value="<?= $project->status; ?>"></p>
        </div>
        <div class="form-group">
        <p>Harga : <input type="text" class="form-control" name ="Harga" value="<?= $project->Harga; ?>"></p>
        </div>
        <div class="form-group">
        <p>Proyek : <input type="text" class="form-control" name ="proyek" value="<?= $project->proyek; ?>"></p>
        </div>
        <input type="hidden" name="id" value="<?= $project->id; ?>">
        <button type="submit"  class="btn btn-primary">Update</button>
    </form>
    </div>
        <div class="col-md-3"></div>
 </div>
</div>	
</body>
</html>

