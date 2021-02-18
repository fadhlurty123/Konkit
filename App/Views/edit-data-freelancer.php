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
  <title> Edit freelancer profile</title>
</head>
<body>
<div class="container">	
<div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
	  <center><h1>EDIT BIODATA FREELANCER</h1></center>
   
   <form action="/profilfreelancer/update" method="post">
   <div class="form-group">
        <p>Name : <input type="text" class="form-control" name ="name" value="<?= $freelancer->name; ?>"></p>
        </div>
        <div class="form-group">
        <p>Email: <input type="text" class="form-control" name ="email" value="<?= $freelancer->email; ?>"></p>
        </div>
        <div class="form-group">
        <p>Gender : <input type="text" class="form-control" name ="gender" value="<?= $freelancer->gender; ?>"></p>
        </div>
        <div class="form-group">
        <p>Skill : <input type="text" class="form-control" name ="skill" value="<?= $freelancer->skill; ?>"></p>
        </div>
        <div class="form-group">
        <p>Phone Number : <input type="number" class="form-control" name ="phone_number" value="<?= $freelancer->phone_number; ?>"></p>
        </div>
        <input type="hidden" name="id" value="<?= $freelancer->id; ?>">
        <button type="submit " class="btn btn-primary">Update</button>
    </form>
    </div>
        <div class="col-md-3"></div>
 </div>
</div>	
</body>
</html>

