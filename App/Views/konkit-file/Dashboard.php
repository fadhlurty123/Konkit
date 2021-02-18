<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <link rel="stylesheet" href="css/pure-min.css">
    <link rel="stylesheet" href="css/pure-responsive-min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>KonKit</title>

</head>

<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-3-24">
            <div id="menu">
                <div class="pure-menu">
                    <p class="pure-menu-heading">
                        KonKit
                        <a href="Index.html" class="pure-button button-xxsmall">out &raquo;</a>
                    </p>
                    <ul class="pure-menu-list">
                        <li class="pure-menu-selected">
                            <a href="Dashboard.php" class="pure-menu-link">Menu</a>
                        </li>

                        <li class="menu-item-divided">
                            <a href="#" class="pure-menu-link">Profil</a>
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
                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Proyek</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Konversi PSD ke HTML</td>
                                        <td>Aktif</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Membuat Landing Page</td>
                                        <td>Antri</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Client</th>
                                        <th>Email</th>
                                        <th>Prioritas</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Leonardo Septian</td>
                                        <td>leo@konkit.com</td>
                                        <td>1</td>
                                        <td>Aktif</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Johanes Gavin</td>
                                        <td>gavin@konkit.com</td>
                                        <td>2</td>
                                        <td>Menunggu</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>