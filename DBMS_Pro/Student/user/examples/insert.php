<?php
//insert.php
/*echo $_POST["framework"];
echo '<br />';
echo $_POST["hidden_framework"];*/

session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {


$connect = mysqli_connect("localhost", "root", "", "dbms_pro");
$jid=01;
$cid=101;
$jname="Business Analyst";
$query = "INSERT INTO resume(uid,cid,jid,position,skillset) VALUES ('".$_SESSION["sess_user"]."','".$cid."','".$jid."','".$jname."','".$_POST["hidden_framework"]."')";
if(mysqli_query($connect, $query))
{
 echo 'Data Inserted';
 $query2="SELECT skillset from resume;";
 if ($is_query_run = mysqli_query($connect,$query2))
 {
     // echo "Query Executed";
     // loop will iterate until all data is fetched
     while ($query_executed = mysqli_fetch_assoc ($is_query_run))
     {
         // these four line is for four column
         echo $query_executed['skillset'].'<br>';
     }
 }
 else
 {
     echo "Error in execution";
 } }
}


?>
