<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap');
body {
    background: url(https://i.imgur.com/Up7502Z.png) no-repeat;
    background-size: cover;
    background-color: #F0FFFF;
}

.konkit {
    font-size: 24px;
    font-weight: large;
    letter-spacing: -2px;
    color: #48D1CC;
    margin: 0;
    padding: 0;
    font-family: Verdana, sans-serif;
}

.title {
    font-size: 25px;
    font-weight: large;
    color: #737c7c;
    margin: 0;
    padding: 0;
    font-family: Verdana, sans-serif;
}

.form-signin {
    width: 100%;
}

.form-signin {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 0rem;
    transition: all 0.2s;
}

.form-label-group {
    position: relative;
    margin-bottom: 1rem;
}

.form-label-group input {
    height: auto;
    border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    line-height: 1.5;
    color: #48D1CC;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
}

.form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #48D1CC;
}

.tombol {
    margin: 40px 20px 40px 0px;
}

.tombol-masuk {
    border-radius: 4px;
    background-color: #48D1CC;
    border: none;
    color: white;
    padding: 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    width: 100px;
}

.tombol-daftar {
    border-radius: 4px;
    background-color: white;
    padding: 10px;
    color: #48D1CC;
    border: 2px solid #48D1CC;
    margin-right: 15px;
    width: 150px;
}
   </style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up Freelancer</title>
   <link rel="stylesheet" href="css/Signup-client.css">
</head>

<body>

   <div class="wrapper">
      <div class="title">
         Daftar Freelancer
      </div>
      <form method="post" action="signup-freelancer.php" class="form">

      <?php include('errors.php'); ?>
         <div class="inputfield">
            <label>Username</label>
            <input type="text" name="username" class="input" value="<?php echo $username; ?>" >
         </div>
         <div class="inputfield">
            <label>Email</label>
            <input type="email" name="email" class="input" value="<?php echo $email; ?>">
         </div>
         <div class="inputfield">
            <label>Password</label>
            <input type="password" name="password_1" class="input">
         </div>
         <div class="inputfield">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_2" class="input">
         </div>


         <div class="inputfield terms">
            <label class="check">
               <input type="checkbox">
               <span class="checkmark"></span>
            </label>
            <p>Saya menyetujui semua persyaratan oleh KonKit</p>

         </div>
         <p><a href="signup-client.html">Daftar sebagai Client<br></a></p><br>
         <div class="inputfield">
            <button type="submit" name="reg_freelancer" class="btn">Register</button>
         </div>
         <p>
			Sudah mendaftar? <a href="login-page-freelancer.php">masuk</a>
		</p>
</form>
   </div>
</body>
</html>