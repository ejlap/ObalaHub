<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="slideright">  
    <img src="8.png" class="img">
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <input type="text" placeholder=" Korisničko ime" name="username" style="position: relative; top: px">
    </div>
    <div class="input-group" style="position: relative; top: px">
      <input type="password" placeholder=" Lozinka" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user" style="position: relative; top: px">Prijava</button>
    </div>
    <div style="position: relative; top: px">
       <p align="center" style="font-size:22.5px; color: #11101d">
        Niste jos član, registrujte se! <a href="register.php" style="color: #11101d"><u>Registracija</u></a>
      </div>
    </p>
  </form>
  </div>
</body>
</html>