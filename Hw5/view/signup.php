<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../script/function.js" type="text/javascript"> </script>
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color: red ; height:150px;"></div>     
</div>
<div class="row">
    <div class="col-sm-12" style="background-color: green ; height:50px;">
    <nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view/signup.php">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>
    </div>     
</div>
<div class="row">
    <div class="col-sm-4" style="background-color: red ;"></div>
    <div  class="col-sm-8" style="background-color: #A79797 ; ">
    <form class="form-group" id="sform" onsubmit=" return formvali();" action="../model/insert.php" method="POST">
Name: <input type="text" id="name" name="name" placeholder="Write yournmae.."><br>
Phone: <input type="number" id="phone" name="phone" placeholder="Write your phone.."><br>

user name : <input type="text" id="uname" name="uname" placeholder="Write your user name .."><br>

Password: <input type="password" id="pass" name="pass" placeholder="Write your Password .."><br>
matchpass();"/><br/>  
<input type="submit" value="Signup"><br>
</form>

    </div>     
</div>
</div>

</body>
</html>
