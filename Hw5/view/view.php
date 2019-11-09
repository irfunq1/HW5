<P> <a href="../controller/logout.php"> Logout</a></P>
<?php
include("../controller/config.php");
include("../controller/session.php");
$sql="SELECT * FROM cuinfo";
$resultview=mysqli_query($myconn,$sql);
echo'<table border="2px"><tr> 
<th>Cu id</th> <th>name</th><th>Phone</th> <th>username</th><th>password</th><th> Edit</th> </tr>';
while($row=mysqli_fetch_array($resultview))
{
	$cuid=$row['cuid'];
	$name=$row['name'];
	$phone=$row['phone'];
	$uname=$row['uname'];
	$pass=$row['password'];
	echo '<tr><td>'.$cuid.'</td><td>'.$name.'</td><td>'.$phone.'</td><td>'.$uname.'</td><td>'.$pass.'</td>
	<td><a href="updateform.php?id='.$cuid.'">Edit</a></td><td><a href="../model/delete.php?id='.$cuid.'">Delete </a></td>
	</tr>';
}

?>