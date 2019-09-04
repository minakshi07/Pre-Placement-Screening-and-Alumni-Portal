
<!DOCTYPE html>
<html>

<head>
<title> Student login Form </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Master  Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1>Student Login Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="login.php" method="post">
					<input type="text" name="uid" placeholder="Enter your UID" required=""/>
					<input type="password"  name="password" class="padding" placeholder="Enter your Password" required=""/>
					<input type="submit" value="login" name="submit">

					<?php
					if ((isset($_POST['uid']))&&(isset($_POST['password'])))
					{
						$user=$_POST['uid'];
						$pass=$_POST['password'];


					$con=mysqli_connect('localhost','root','') or die(mysqli_error());
					mysqli_select_db($con,'dbms_pro') or die("cannot select DB");

					$query=mysqli_query($con,"SELECT * FROM students WHERE uid='".$user."' AND password='".$pass."'");
					$numrows=mysqli_num_rows($query);
					if($numrows!=0)
					{
						while($row=mysqli_fetch_assoc($query))
						{
						$dbusername=$row['uid'];
						$dbpassword=$row['password'];
						}

						if($user == $dbusername && $pass == $dbpassword)
						{
						session_start();
						$_SESSION['sess_user']=$user;

						/* Redirect browser */
						header("Location: user/examples/dashboard.php");
						}
					}
					else
					{
						echo "<script>
									 window.location.href='./';
									 alert('Invalid username or password!');
									 </script>";
					}
				}
					 ?>
				</form>
			</div>
		</div>

		<div class="footer">
		</div>
	</div>

</body>
</html>
