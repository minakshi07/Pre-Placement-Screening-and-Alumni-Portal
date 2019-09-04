<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
?>
<!doctype HTML>
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
</head>
<body>
  <div class="container">
    <h2>Example: Multi Select Dropdown with Checkbox using Bootstrap, jQuery and PHP</h2>
    <form class="form-signin" method="post" id="register-form" action="applyform2.php">
    <div class="form-group">
    <select id="languages" name="languages[]" multiple >
    <option value="php">PHP</option>
    <option value="python">Python</option>
    <option value="javascript">JavaScript</option>
    <option value="java">Java</option>
    <option value="c">C</option>
    <option value="sql">SQL</option>
    <option value="ruby">Ruby</option>
    <option value=".net">.Net</option>
    </select>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">Submit</button>
    </div>
    </form>
    </div>

    <script>
    $(document).ready(function() {
    $('#languages').multiselect({
    nonSelectedText: 'Select Language'
    });
    });
    </script>
  </body>
<?php

print_r ($_POST['languages']); ?>

</html>
