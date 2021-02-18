<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Login-page-freelancer.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>
        Login Page
    </title>
</head>

<body>
    <div class="header">
        <br>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <h1 class="konkit"><a href="Index.html">KonKit || Freelancer</a></h1>
            </div>

        </div>
    </div>

    <br><br><br><br>

    <div class="title">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <h1 class=title>Ga usah panik nyari client<br>
                di KonKit client yang nyari kamu!</h1>
            </div>
        </div>
        
    </div>
    <br><br><br>
    <form method="post" action="Login-Page-freelancer.php" class="form-signin">
    <?php include('errors.php'); ?>
        <div class="form-label-group">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Email Address">
                </div>
            </div>
        </div>

        <div class="form-label-group">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Ingat Saya</label>
            </div>
            <div class="col-md-3">
            <p>
			Belum mendaftar? <a href="signup-freelancer.php">register</a>
		</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <button type="submit" class="tombol tombol-masuk" name="login_freelancer" type="button">Masuk</button>
            </div>
            <div class="col-md-1">
                <button class="tombol tombol-daftar" type="button">
                    <a href="Login-Page-Client.html">Masuk Sebagai Client</a>
                </button>
            </div>
        </div>
    </form>
</body>

</html>