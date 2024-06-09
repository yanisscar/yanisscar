<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Trans YanissCar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/papa.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/user.css" rel="stylesheet">
    <link href="assets/w3css/w3.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="home.php"><span>Bienvenue <?php echo $_SESSION['name']; ?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
                            
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <!--<li class="nav-item active"><a href="index.php" class="nav-link">Bienvenue <?php echo $_SESSION['name']; ?> </a></li>-->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="car.php" class="nav-link" style="color: blue;">Ajouter un Véhicule</a></li>
                <li class="nav-item"><a href="travel.php" class="nav-link" style="color: blue;">Ajouter un voyage</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link" style="color: blue;">Se déconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="entercar1.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Ajouter nouveau vehicule </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Nom de Vehicule " required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="car_nameplate" name="car_nameplate" placeholder="nbre des chaises" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="non_ac_price_per_day" name="non_ac_price_per_day" placeholder="Non-AC Fare per day (Rs)" required>
          </div>

          <div class="form-group">
            <input name="uploadedimage" type="file">
          </div>
           <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Submit for Rental</button>    
        </form>
      </div>
    </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Cars </h3>
<?php
// Storing Session
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM cars WHERE car_id IN (SELECT car_id FROM clientcars WHERE client_username='$user_check');";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="24%"> Name</th>
        <th width="15%"> Nameplate </th>
        <th width="13%"> AC Fare (/km) </th>
        <th width="17%"> Non-AC Fare (/km)</th>
        <th width="13%"> AC Fare (/day)</th>
        <th width="17%"> Non-AC Fare (/day)</th>
        <th width="1%"> Availability </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["car_name"]; ?></td>
      <td><?php echo $row["car_nameplate"]; ?></td>
      <td><?php echo $row["ac_price"]; ?></td>
      <td><?php echo $row["non_ac_price"]; ?></td>
      <td><?php echo $row["ac_price_per_day"]; ?></td>
      <td><?php echo $row["non_ac_price_per_day"]; ?></td>
      <td><?php echo $row["car_availability"]; ?></td>
      
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>0 Vehicule Disponibe</center> </h4>
  <?php } ?>
        </form>
</div>        
        </div>
    </div>
</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?> Trans YanissCar</h5>
                </div>
            </div>
        </div>
    </footer>
</html>
<?php 
} else {
    header("Location: admin.php");
    exit();
}
?>