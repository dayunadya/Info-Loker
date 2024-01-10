<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/style.css"> 
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/logreg.css"> 
  
    <title><?= $data['judul'] ?></title> 
</head> 
<body> 
    <div class="container">
        <form action="<?= BASEURL ?>/login/user" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">LOGIN</p>
            <p class="login-text" style="font-size: 1rem; font-weight: 500;"> jangan lupa registrasi dulu</p>
                <p id="error-message" class="my-2" style="color: red;"></p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="<?= BASEURL; ?>/welcome/register" >Register</a></p>
        </form>
    </div> 
     
</body> 
</html>