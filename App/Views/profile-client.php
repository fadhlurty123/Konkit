
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
<body>
      <a class="pure-button button-small" href="/dashboard2">Kembali</a><br><br>
      <a class="btn btn-primary" href="/profilclient/add_new">Isi Data</a><br><br>
      <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
      <thead>
          <tr>
              <th> # </th>
              <th> Nama </th>
              <th> Email </th>
              <th> Jenis Kelamin </th>
              <th> Credit Card </th>
              <th> Nomor Kartu Credit </th>
              <th> Update </th>
              <th> Delete </th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($profilclient as $row) : ?>
          <tr>  
              <td><?= $row['id']; ?></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['gender']; ?></td>
              <td><?= $row['credit_card']; ?></td>
              <td><?= $row['credit_number']; ?></td>
              <td><a href="/profilclient/edit/<?= $row['id']; ?>">Edit</a></td>
              <td><a href="/profilclient/delete/<?= $row['id']; ?>">Delete</a></td>
          <?php endforeach; ?>
          </tbody>
          </table>
                        </div>
                </div>
      </div>
</body>
</html>