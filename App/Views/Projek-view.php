
<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
<meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-responsive-min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>List Project</title>
</head>
<body>
      <a class="pure-button button-small" href="/dashboard">Kembali</a><br><br>
      <a class="btn btn-primary" href="/Projek/add_new">Add New Projek</a><br><br>
      <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
      <thead>
          <tr>
              <th> ID </th>
              <th> Name </th>
              <th> Nama Projek </th>
              <th> deskripsi Projek </th>
              <th> Harga </th>
              <th> Jangka waktu </th>
              <th> Action </th>
              <th> Action </th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($project_1 as $row) : ?>
          <tr>  
              <td><?= $row['project_id']; ?></td>
              <td><?= $row['nama_client']; ?></td>
              <td><?= $row['nama_project']; ?></td>
              <td><?= $row['deskripsi_project']; ?></td>
              <td><?= $row['harga']; ?></td>
              <td><?= $row['jangka_waktu']; ?></td>
              <td><a href="/Projek/edit/<?= $row['project_id']; ?>">Edit</a></td>
              <td><a href="/Projek/delete/<?= $row['project_id']; ?>">Delete</a></td>
          <?php endforeach; ?>
          </tbody>
          </table>
                        </div>
                </div>
      </div>
</body>
</html>