<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Morate biti prijavljeni";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="sidebar.css">
</head>
<body>
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-school'></i>
        <div class="logo_name">ObalaHub</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">

      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>

      <li>
       <a href="account.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Korisnik</span>
       </a>
       <span class="tooltip">Korisnik</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-food-menu' ></i>
         <span class="links_name">Workshop</span>
       </a>
       <span class="tooltip">Workshop</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Poruke</span>
       </a>
       <span class="tooltip">Poruke</span>
     </li>
     <li>
       <a href="info.php">
         <i class='bx bx-info-circle'></i>
         <span class="links_name">Info</span>
       </a>
       <span class="tooltip">Info</span>
     </li>
     <li style="top:855px">
       <a href="index.php?logout='1'">
         <i class='bx bx-log-out' id="log_out"></i>
         <span class="links_name">Odjava</span>
       </a>
       <span class="tooltip">Odjava</span>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text" style="margin-left: 1100px;">ObalaHub</div>
  </section>
  <script src="script.js"></script>

<!--
    <?php  if (isset($_SESSION['username'])) : ?>
      <p align="center">Dobrodošao <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p align="center"> <a href="account.php" style="color: red;"><u>Prikazi račun<u/></a> </p>
      <br>
      <br>
      <p align="center">
-->

 <!-- test test test teste teste-->
</div>
<?php endif ?>  
</body>
</html>
