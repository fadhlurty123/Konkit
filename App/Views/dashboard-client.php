<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pure-responsive-min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>KonKit</title>

</head>

<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-3-24">
            <div id="menu">
                <div class="pure-menu">
                    <p class="pure-menu-heading">
                        KonKit
                        <a href="/logoutclient" class="pure-button button-xxsmall">out &raquo;</a>
                    </p>
                    <p class="pure-menu-heading">Client</p>
                    <ul class="pure-menu-list">
                        <li class="pure-menu-selected">
                            <a href="/dashboard2" class="pure-menu-link">Menu</a>
                        </li>
                        <li class="menu-item-divided">
                            <a href="/projectclient" class="pure-menu-link">Project</a>
                        </li>
                        <li class="menu-item-divided">
                            <a href="/transaksiclient" class="pure-menu-link">Konfirmasi pencairan</a>
                        </li>
                        <li class="menu-item-divided">
                            <a href="profileclient" class="pure-menu-link">Profil</a>
                        </li>
                        <li class="menu-item-divided">
                            <a href="/invoice" class="pure-menu-link">Invoice</a>
                        </li>
                        <li class="menu-item-divided">
                            <a href="/contact" class="pure-menu-link">Hubungi kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">Menu Utama</h1>
                </div>

                <div class="pure-g">

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header column-success">
                                <h2>Proyek aktif</h2>
                                <span class="column-block-info">1</span>
                            </div>
                            <ul class="column-block-list">
                                <li>Hari ini <span class="buble-success button-small pull-right">2</span></li>
                                <li>Sebulan terkahir <span class="buble-secondary button-small pull-right">5</span></li>
                                <li>Total <span class="buble-warning button-small pull-right">12</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Proyek Pending</h2>
                                <span class="column-block-info">3</span>
                            </div>
                            <ul class="column-block-list">
                                <li>Hari ini <span class="buble-success button-small pull-right">3</span></li>
                                <li>Sebulan terkahir<span class="buble-secondary button-small pull-right">10</span></li>
                                <li>Total <span class="buble-warning button-small pull-right">11</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header">
                                <h2>Proyek ditolak</h2>
                                <span class="column-block-info">10</span>
                            </div>
                            <ul class="column-block-list">
                                <li>Hari ini<span class="buble-success button-small pull-right">6</span></li>
                                <li>Sebulan terakhir<span class="buble-secondary button-small pull-right">21</span></li>
                                <li>Total <span class="buble-warning button-small pull-right">46</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
                                <thead>
                                <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Proyek</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($project as $row) : ?>
                                    <tr>  
              <td><?= $row['id']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['proyek']; ?></td>
              <td><?= $row['status']; ?></td>
          <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="/project/add_new">Tambah Project</a>
            </div>
        </div>
    </div>
</body>

</html>