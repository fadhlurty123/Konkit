<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-responsive-min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
  <title>Profile Client</title>
</head>
<body >
      <a class="pure-button button-small" href="/dashboard" >Kembali</a><br><br>
      <a href="/profilfreelancer/add_new" class="btn btn-primary">Isi Profil</a><br><br>
      <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
      <thead>
          <tr>
              <th>No</th>
              <th> Nama </th>
              <th> Email </th>
              <th> Kemampuan </th>
              <th> Jenis Kelamin </th>
              <th> Nomor telepon </th>
              <th> Update </th>
              <th> Delete </th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($freelancer as $row) : ?>
          <tr>  
              <td><?= $row['id']; ?></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['skill']; ?></td>
              <td><?= $row['gender']; ?></td>
              <td><?= $row['phone_number']; ?></td>
              <td><a href="/profilfreelancer/edit/<?= $row['id']; ?>">Edit</a></td>
              <td><a href="/profilfreelancer/delete/<?= $row['id']; ?>">Delete</a></td>
          <?php endforeach; ?>
          </tbody>
          </table>
                        </div>
                </div>
      </div>
</body>
</html>
