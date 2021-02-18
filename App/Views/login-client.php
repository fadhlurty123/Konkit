<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/Login-Page-Client.css'); ?>">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>
        Login Page
    </title>
</head>

<body>
    <div class="header">
        <br>
        <div class="row">

            <div class="col-md-4">
                <a class="konkit" href="/">KonKit || Client</a>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class="title">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <h1 class=title>Ga usah panik projekan,<br>
                    di konkit banyak freelancer yang bisa bantu kamu</h1>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
        </div>
    <?php endif; ?>
    <form class="" action="<?php echo site_url('LoginClient');?>" method="post">
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                </div>
            </div>
        </div><div class="row">
        <div class="col-md-1"></div>
        <div class="form-group">
            <input type="checkbox" name="remember" />
            <label> Ingat Saya</label>
        </div>
        </div>
        <?php if (isset($validation)) : ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
            <div class="col-md-4">
                <a href="/registerclient">Belum Punya akun?</a>
            </div>
        </div><br>
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-4">
                <a href="/freelancer">Masuk Sebagai Freelancer</a>
            </div>
        </div>
    </form>
</body>

</html>