
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
  <title>List Project</title>
</head>
<body>
      <a class="pure-button button-small" href="/dashboard2"  >Kembali</a><br><br>
      <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
      <thead>
          <tr>
              <th> # </th>
              <th> Name </th>
              <th> Nama Projek </th>
              <th> deskripsi Projek </th>
              <th> Harga </th>
              <th> Jangka waktu </th>
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
          <?php endforeach; ?>
          </tbody>
          </table>
                        </div>
                </div>
      </div>
      <a href="/TarikDana/add_new" class="btn btn-primary">Konfirmasi Project Selesai</a>
</body>
</html>