
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
  <title>Transaksi</title>
</head>
<body>
      <a class="nav-link" href="/dashboard2">Kembali</a>
      <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
      <thead>
          <tr>
              <th> id </th>
              <th> deskripsi </th>
              <th> harga </th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($tarik_dana as $row) : ?>
          <tr>  
              <td><?= $row['id']; ?></td>
              <td><?= $row['deskripsi']; ?></td>
              <td><?= $row['harga']; ?></td>
          <?php endforeach; ?>
          </tbody>
          </table>
                        </div>
                </div>
      </div>
      
</body>
</html>