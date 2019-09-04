<!DOCTYPE html>
<html>

<head>
<title> Alumni Sign Up Form </title>
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
			<h1>Alumni Sign Up Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="Signup.php" method="post">
					<input type="text" name="uid"class="padding" placeholder="Enter your UID" required=""/>
          <input type="text" name="name" class="padding"placeholder="Enter your full name" required=""/>
        	<input type="password"  name="password" class="padding" placeholder="Enter your Password" required=""/>
          <input type="password"  name="cpassword" class="padding" placeholder="Re-Enter your Password to confirm" required=""/>
          <input type="text"  name="contact" class="padding" placeholder="Enter your Contact Number" required=""/>
          <input type="text"  name="email" class="padding" placeholder="Enter your EMAIL-ID" required=""/>

          <input type="submit" value="Next =>" name="submit">

          <?php
            if ((isset($_POST['uid']))&&(isset($_POST['name']))&&(isset($_POST['password']))&&(isset($_POST['contact']))&&(isset($_POST['email'])))
            {
              $uid=$_POST['uid'];
              $pass=$_POST['password'];
              $name=$_POST['name'];
              $contact=$_POST['contact'];
              $email=$_POST['email'];

              $uidyos=substr($uid,0,4);
              $yos = (int)$uidyos;
              $uidbid=substr($uid,4,4);
              $bid = (int)$uidbid;
              $yop=$yos+4;

              $con=mysqli_connect('localhost','root','') or die(mysqli_error());
              mysqli_select_db($con,'dbms_pro') or die("cannot select DB");

              if ($yop>2019)
              {
                         $query=mysqli_query($con,"SELECT * FROM students WHERE uid='".$uid."'");
                          $numrows=mysqli_num_rows($query);
                          if($numrows==0)
                          {
                          $sql="INSERT INTO Students(uid,password,name,contact,email,year_of_passing) VALUES('$uid','$pass','$name','$contact','$email','$yop')";
                          $result=mysqli_query($con,$sql);

                          if($result)
                          {
                            echo "<script>
                                   window.location.href='./../Home.php';
                                   alert('Successfully Created the account');
                                   </script>";
                          }
                          else
                          {
                          echo "Failure!";
                          }

                          }
                          else {
                            echo "<script>
                                   window.location.href='./../Home.php';
                                   alert('This uid already exists');
                                   </script>";

                          }
                }
                else
                {
                    $query=mysqli_query($con,"SELECT * FROM alumni WHERE aid='".$uid."'");
                    $numrows=mysqli_num_rows($query);
                    if($numrows==0)
                    {
                        $sql="INSERT INTO alumni(aid,password,name,contact,email,year_of_passing) VALUES('$uid','$pass','$name','$contact','$email','$yop')";
                        $result=mysqli_query($con,$sql);

                            echo "<script>
                                  window.location.href='./../Home.php';
                                  alert('Hey! You're being registered as an Alumni');
                                  </script>";
                  }

                    else
                    {
                      echo "<script>
                             window.location.href='./../Home.php';
                             alert('This uid already exists');
                             </script>";
                    }
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
