<?php

$connect = mysqli_connect("localhost", "root", "", "testt");
if(isset($_POST['submit']))
{
  $post=$_POST['position'];

$query = "INSERT INTO skills(skillset) VALUES ('".$post."')";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form control: select</h2>
  <p>The form below contains two dropdown menus (select lists):</p>
  <form method="post">
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" name="position" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <br>
      <label for="sel2">Mutiple select list (hold shift to select more than one):</label>
      <select multiple class="form-control" id="sel2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <button type="submit" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
