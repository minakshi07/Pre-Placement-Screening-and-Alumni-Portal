<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Job Application form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  </style>
 </head>
 <body>

   <div class="wrapper ">
     <div class="sidebar" data-color="red">
       <!--
         Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
     -->
       <div class="logo">
         <a href="http://www.creative-tim.com" class="simple-text logo-mini">
           ON
         </a>
         <a href="http://www.creative-tim.com" class="simple-text logo-normal">
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
             <a href="./icons.html">
               <i class="now-ui-icons education_atom"></i>
               <p>Icons</p>
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
           <li>
             <a href="./typography.html">
               <i class="now-ui-icons text_caps-small"></i>
               <p>Typography</p>
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
             <a class="navbar-brand" href="#pablo">Recruiting companies</a>
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
       <div class="panel-header">
         <div class="header text-center">
           <h2 class="title">We're Hiring at Microsoft!</h2>
           <p class="category">Handcrafted by our friend
             <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
             <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
           </p>
         </div>
       </div>
   <br />

<br>
  <div class="container">
    <h1> Job Application for Microsoft</h1>
    <p>Please fill in this form to apply to Microsoft.</p>
    <hr>
    <div class="col-md-6" style="margin-left:100px;">
      <h3> You are applying for the position of Business Analyst</h3><br>
   </div>
   <div class="col-md-6" style="margin-left:100px;">
    <form method="post" id="multiple_select_form">
      <h4>Enter your skillset</h4><br>
     <select name="framework" id="framework" class="form-control selectpicker" data-live-search="true" multiple>
      <option value="Angular 6">Angular 6</option>
      <option value="Node JS">Node JS</option>
      <option value="Power BI">Power BI</option>
      <option value="Java Stack developer">Java stack developer</option>
      <option value="Web development">web development</option>
      <option value="Android development">Android development</option>
      <option value="Communication Skills">Communication skills</option>
      <option value="Data analysis">Data Analytics skills</option>
      <option value="Excel">Excel</option>
      <option value="Leadership">Leadership</option>
      <option value="Tableau">Tableau</option>
      <option value="Content Writing">Content Writing</option>

     </select>
     <br /><br />
     <input type="hidden" name="hidden_framework" id="hidden_framework" />
     <input type="submit" name="submit" class="btn btn-info" value="Submit" />



</form>

<button class="btn btn-primary" onclick="myFunction()">Start screening</button>
    <br />

   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('.selectpicker').selectpicker();

 $('#framework').change(function(){
  $('#hidden_framework').val($('#framework').val());
 });

 $('#multiple_select_form').on('submit', function(event){
  event.preventDefault();
  if($('#framework').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     console.log(data);
     $('#hidden_framework').val('');
     $('.selectpicker').selectpicker('val', '');
     alert("Your application is under review");

    }
   })
  }
  else
  {
   alert("Please select framework");
   return false;
  }
 });
});

function myFunction() {
  location.replace("calculate.php");
}
</script>
<?php

} ?>
