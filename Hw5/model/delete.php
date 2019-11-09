
<?php
include("../controller/config.php");
$id=$_GET['id'];
$sql="DELETE FROM cuinfo WHERE cuid='$id'";
$result=mysqli_query($myconn,$sql);
header("location:../view/view.php");
?>