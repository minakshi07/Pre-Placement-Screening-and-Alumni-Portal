<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Add a job role
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
  .mail-form-agile input[type="submit"]{
  font-size: 18px;
  padding: 10px 20px;
  letter-spacing:1.2px;
  border: none;
  text-transform: capitalize;
  outline: none;
  background: #03A9F4;
  color: #fff;
  cursor: pointer;
  margin: 0 auto;
  font-family: 'Open Sans', sans-serif;
  -webkit-transition-duration: 0.9s;
  transition-duration: 0.9s;
  }
  .mail-form-agile input[type="submit"]:hover {
   -webkit-transition-duration: 0.9s;
   transition-duration: 0.9s;
   background:rgba(91, 157, 214, 0.76);
  }
  </style>
</head>

<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="red">

      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          ON
        </a>
        <a href="#" class="simple-text logo-normal">
          <?=$_SESSION['sess_user'];?>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
            <li class="active ">
            <a href="./apply.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Apply</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>

          <li class="active-pro">
            <a href="./upgrade.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Your Results</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./logout.php">
                  <i class="now-ui-icons users_single-02"><br> LOG OUT</i>

              <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-3">
          </div>

          <div class="col-md-6">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <?php
              $con=mysqli_connect('localhost','root','') or die(mysqli_error());
    					mysqli_select_db($con,'dbms_pro') or die("cannot select DB");
              $uid=(int)$_SESSION['sess_user'];

    					$query=mysqli_query($con,"SELECT * FROM company WHERE cid='".$uid."' ");

              $numrows=mysqli_num_rows($query);
              $row=mysqli_fetch_assoc($query);
               ?>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title"><?php echo "".$_SESSION['sess_user']."";?></h5>
                  </a>
                  <p class="description">
                  <?php  echo $row['name'];?>

                  </p>
                </div>
                <p class="description text-center">
                  <input type="text" name="name" class="padding"placeholder="Enter name of the position of Job" required=""/>
                  <br><br>Enter vaccancy<br>
                  <input type="number" name="vacc" class="padding"placeholder="Enter current vaccancy" required=""/>

                  <br><br>
                  Enter Job Description<br>
                  <textarea name="desc" style="width:250px;height:150px;"></textarea>
                  <br><br>Enter skill sets your organisation expects<br>
                  <input type="text" name="skillset" class="padding"placeholder="Enter name of the position of Job" required=""/>
                </p>
                <br><br<input type="submit" value="Request for approval" name="submit">

                <?php
                $con=mysqli_connect('localhost','root','') or die(mysqli_error());
      					mysqli_select_db($con,'dbms_pro') or die("cannot select DB");
                $uid=(int)$_SESSION['sess_user'];
                $query1=mysqli_query($con,"SELECT job_name from jobnormal where jid = (SELECT jid from job where cid='".$uid."');");
                $jid=mysqli_fetch_assoc($query1);

                $query2=mysqli_query($con,"SELECT name from company where cid='".$uid."';");
                $cname=mysqli_fetch_assoc($query2);

                $query=mysqli_query($con,"INSERT INTO requests VALUES('".$jid["job_name"]."','".$uid."','".$cname["name"]."','".$_POST["vacc"]."','".$_POST["desc"]."','".$_POST["skillset"]."');");


                 ?>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="#">
                  DBMS-Project
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="#" target="_blank">Invision</a>. Coded by
            <a href="#" target="_blank">Minakshi Kudalkar and Shashank Gupta</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  apply Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
<?php
}
?>
