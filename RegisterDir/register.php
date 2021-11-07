<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registracija/Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="slideright2">
  <div class="div2">
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group2">
      <input type="text" name="username" placeholder="Korisničko ime" style="text-align: center;position: relative; " value="<?php echo $username; ?>">
    </div>
    <div class="input-group2">
      <input type="text" name="name" placeholder="Ime" style="text-align: center;position: relative; " value="<?php echo $name; ?>">
    </div>
    <div class="input-group2">
      <input type="text" name="surname" placeholder="Prezime" style="text-align: center;position: relative; " value="<?php echo $surname; ?>">
    </div>
    <div class="input-group2">
      <input type="number" name="razred" placeholder="Razred" style="text-align: center;position: relative; " value="<?php echo $razred; ?>">
    </div>
    <div class="input-group2">
      <input type="number" name="odjeljenje" placeholder="Odjeljenje" style="text-align: center;position: relative; " value="<?php echo $odjeljenje; ?>">
    </div>
    <div class="input-group2">
      <input type="email" name="email" placeholder="Email" style="text-align: center;position: relative; " value="<?php echo $email; ?>">
    </div>
    <div class="input-group2">
      <input type="password" name="password_1" style="text-align: center;position: relative; " placeholder="Lozinka">
    </div>
    <div class="input-group2">
      <input type="password" name="password_2" style="text-align: center;position: relative; " placeholder="Potvrdi lozinku">
    </div>
    <div class="input-group2">
      <button type="submit" class="btn2" style="text-align: center;position: relative; " name="reg_user">Registruj se</button>
    </div>
    <p align="center" style="font-size:22.5px; color: #11101d;">
      Već registrovani?</p>
      <p align="center" style="font-size:22.5px;">
        <a href="login.php" style="color: #11101d" ><u>Prijavite se</u></a>
      </p>
    </p>
  </form>
</div>
</div>
</body>
</html>