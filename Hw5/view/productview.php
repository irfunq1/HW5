
<?php
include("../controller/config.php");
$sql="SELECT * FROM prodinfo";
$result=mysqli_query($myconn,$sql);
while($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$path=$row['img_path'];
	echo '<p>. '.$name.'</p><br>
	<img src="'.$path.' "style=height:100px; width:100px;>';
	
}

?>