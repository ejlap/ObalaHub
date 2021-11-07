 <!DOCTYPE html>
<html>
<head>
         <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" type="text/css" href="account.css">
<title>Podaci o korisniku</title>
</head>
<body>
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
       <a href="index.php">
         <i class='bx bx-home' ></i>
         <span class="links_name">Početna stranica</span>
       </a>
       <span class="tooltip">Početna stranica</span>
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
    <br>
      <div class="text">Podaci o korisniku</div>
      <br>

      <div class="box-section box">

       <?php
session_start();
     echo "Username: ". $_SESSION ['username'];

$result = "";
$username= $_SESSION ['username'];
$db = mysqli_connect('localhost', 'root', '', 'registration');
      $query = "SELECT email, name, surname, razred, odjeljenje FROM users WHERE username='$username'";
      $result = mysqli_query($db, $query);
          while($row = $result->fetch_assoc()) 
     {
         echo  "<br>" . "Ime: " . $row["name"]. "<br>". "Prezime: " . $row["surname"]. "<br>".  "Odjeljenje: " . $row["odjeljenje"]. "<br>". "Razred: " . $row["razred"]. "<br>". "Email: " . $row["email"]. "<br>";
     }
 ?>
</div>

  </section>
  <script src="script.js"></script>
</body>