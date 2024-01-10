<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css"> 
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/logreg.css"> 
  
    <title><?= $data['judul'] ?></title> 
</head> 
<body> 
<div class="container">
        <form action="<?= BASEURL ?>/welcome/Tambahregister" method="post" class="login-email"> <!--Kesalahan pada pemanggilan form action , awalnya login/user. dan seharusnya register/tambahregister-->
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <input type="hidden" name="id" id="id">
            <p id="error-message" class="my-2" style="color: red;"></p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <input type="hidden" name="akses" value="User">
            <div class="input-group">
                <button type="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="<?= BASEURL; ?>/welcome/login">Login </a></p>
        </form>
    </div>
</body> 
</html>