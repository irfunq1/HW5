
<?php
//save product on the folder
if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "../img/".$filename;

    move_uploaded_file($filetmp,$filepath);


//------------insert porduct info
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$prodesc=$_POST['pdesc'];
include("../controller/config.php");
$sql="INSERT INTO prodinfo(prod_id,name,img_name,img_path,img_type,price,prodesc)
VALUES('$pid','$pname','$filename','$filepath','$filetype','$pprice','$prodesc')";
$result = mysqli_query($myconn,$sql );
header("location:../view/productview.php");


}



?>