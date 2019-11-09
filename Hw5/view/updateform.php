<?php
include("../controller/config.php");
include("../controller/session.php");
$id=$_GET['id'];
$sql="SELECT * FROM cuinfo where cuid='$id'";
$resultview=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($resultview))
{
	$cuid=$row['cuid'];
	$name=$row['name'];
	$phone=$row['phone'];
	$uname=$row['uname'];
	$pass=$row['password'];
	
}
echo'<form class="form-group" id="sform" onsubmit=" return formvali();" action="../model/update.php" method="POST">
Name: <input type="text" id="name" name="name" value="'.$name.'"><br>
Phone: <input type="number" id="phone" name="phone" value="'.$phone.'"><br>

user name : <input type="text" id="uname" name="uname" value="'.$uname.'" readonly><br>

Password: <input type="password" id="pass" name="pass" value="'.$pass.'"><br>
<input type="submit" value="Update"><br>
</form>';

?>